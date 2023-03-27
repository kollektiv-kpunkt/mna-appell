<?php

namespace App\Console\Commands\Supporters;

use Illuminate\Console\Command;

class Export extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'supporters:export {--format=csv} {--path=storage/app/supporters}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export supporters to a file.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $format = $this->option('format');
        $path = $this->option('path');
        switch ($format) {
            case 'csv':
                $this->exportToCsv($path);
                break;
            default:
                $this->error('Format not supported.');
                return Command::FAILURE;
        }
        return Command::SUCCESS;
    }

    /**
     * Export supporters to a CSV file.
     *
     * @param string $path
     * @return void
     */
    protected function exportToCsv(string $path)
    {
        $supporters = \App\Models\Supporter::select('id', 'created_at', 'updated_at', 'name', 'email', 'city', 'zip', 'details', 'optin', 'source')->get();
        $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(['id', "created_at", "updated_at", "name", "email", "city", "zip", "details", "optin", "source"]);
        foreach ($supporters as $supporter) {
            $csv->insertOne($supporter->toArray());
        }
        $date = \Carbon\Carbon::now()->format('Y-m-d');
        file_put_contents("{$path}-{$date}.csv", $csv->toString());
    }
}
