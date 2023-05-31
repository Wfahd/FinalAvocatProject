<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notifications = $user->unreadNotifications;

        return view('notifications.index', compact('notifications'));
    }

    public function markAsRead($notification)
    {
        Auth::user()->notifications()->findOrFail($notification)->markAsRead();

        return response()->json(['success' => true]);
    }
}
