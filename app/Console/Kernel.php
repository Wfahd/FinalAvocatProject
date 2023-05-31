<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Client;
use App\Models\Client_planning;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PlanningNotification;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
 
     protected function schedule(Schedule $schedule)
     {
         $schedule->call(function () {
             $currentDate = now()->toDateString();
     
             $plannings = Planning::where('date', $currentDate)
                 ->where('status', 'active')
                 ->get();
     
             foreach ($plannings as $planning) {
                 Notification::send($planning->user, new PlanningNotification($planning));
             }
         })->dailyAt('00:00');
         $schedule->command('schedule:run')->dailyAt('00:00');

     }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
