<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = \App\Models\User::findOrFail($id);

        // Optional: prevent admin from deleting themselves
        if ($user->id === auth()->id()) {
            return redirect()->back()->with('error', 'You cannot delete yourself.');
        }

        $user->delete();

        return redirect()->route('dashboard')->with('success', 'User deleted successfully.');
    }
}
