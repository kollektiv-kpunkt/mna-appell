<?php

namespace App\Console\Commands\Supporters;

use Illuminate\Console\Command;

class DateSignatures extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'supporters:date-signatures';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export a CSV of dates since first supporter signed with numbers of signatures per day';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $firstSignature = \App\Models\Supporter::orderBy('created_at', "ASC")->first()->created_at;
        $carbonDate = \Carbon\Carbon::parse($firstSignature);
        $dates = [];
        while ($carbonDate->isBefore(now())) {
            $signaturesCountForDay = \App\Models\Supporter::whereDate('created_at', $carbonDate->toDateString())->count();
            $dates[] = [
                'date' => $carbonDate->toDateString(),
                'signatures' => $signaturesCountForDay,
            ];
            $carbonDate->addDay();
        }
        $date = \Carbon\Carbon::now()->format('Y-m-d');
        $filepath = "supporters/date-signatures-{$date}.csv";
        $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(['date', 'signatures']);
        $csv->insertAll($dates);
        \Illuminate\Support\Facades\Storage::drive('local')->put($filepath, $csv->toString());
        return Command::SUCCESS;
    }
}