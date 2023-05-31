<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller
{
   // public function index()
  //  {
   //     return view('dashboard.index');
   // }

public function index()
{
    $user = auth()->user();
    $clientCount = $user->clients()->count();
    $casesCount = $user->clients()->withCount('Affaire AS case_count')->get();

    $clients = $user->clients;


    foreach ($clients as $client) {
        $client->completed_cases = $client->Affaire()->where('status', 'completed')->count();
        $client->in_progress_cases = $client->Affaire()->where('status', 'in progress')->count();
    }

    return view('dashboard', compact('clientCount','casesCount','clients' ));
}


}
