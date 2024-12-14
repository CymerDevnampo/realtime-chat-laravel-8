<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;

class ContactListController extends Controller
{
    public function contacts()
    {

        $contacts = User::all();
        return view('pages.contacts', compact('contacts'));
        // dd($contacts);
    }

    public function chat()
    {
        $loggedInUserId = Auth::id();
        $users = User::where('id', '!=', $loggedInUserId)->get();
        return view('pages.chat', compact('users'));
    }
}
