<?php

namespace App\Console\Commands\Emails;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReminderEmail;
use App\Models\Supporter;
use Illuminate\Support\Facades\Log;

class Reminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Send reminder E-Mails to all supporters that are over 24 hours old, haven't verified their addresses and didn't receive more than 2 reminders yet.";

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $supporters = Supporter::where("public", true)->where("enabled", false)->where("created_at", "<", Carbon::now()->subDays(1))->where("reminder_emails", "<", 2)->get();
        $successfull = 0;
        $errors = 0;
        foreach ($supporters as $supporter) {
            try {
                Mail::to($supporter->email)->send(new ReminderEmail($supporter));
                $supporter->reminder_emails++;
                $supporter->save();
                $successfull++;
            } catch (\Exception $e) {
                Log::error("Couldn't send reminder E-Mail to Supporter {$supporter->id}. Error: " . $e->getMessage());
                continue;
            }
        }
        Log::info("Sent out reminder E-Mails. #{$successfull} successfull, #{$errors} errors.");
        return Command::SUCCESS;
    }
}
