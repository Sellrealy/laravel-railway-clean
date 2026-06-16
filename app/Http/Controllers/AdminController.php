<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Guestbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $admin = Admin::where(
            'username',
            $request->username
        )->first();

        if (
            $admin &&
            Hash::check(
                $request->password,
                $admin->password
            )
        ) {

            session([
                'admin_logged_in' => true
            ]);

            return redirect('/admin/dashboard');
        }

        return back()->with(
            'error',
            'Username atau password salah'
        );
    }

    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin/login');
        }

        $guestbooks = Guestbook::latest()->get();

        return view(
            'admin.dashboard',
            compact('guestbooks')
        );
    }

    public function logout()
    {
        session()->forget('admin_logged_in');

        return redirect('/admin/login');
    }

    public function destroy($id)
{
    $guestbook = Guestbook::findOrFail($id);

    $guestbook->delete();

    return redirect()
        ->back()
        ->with('success', 'Pesan berhasil dihapus 🗑️');
}

public function show($id)
{
    $song = Guestbook::findOrFail($id);

    return view(
        'admin.show',
        compact('song')
    );
}
}