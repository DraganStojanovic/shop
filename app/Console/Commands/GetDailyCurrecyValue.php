<?php

namespace App\Console\Commands;

use App\Models\ExchangeRates;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Command;
use Carbon\Carbon;

class GetDailyCurrecyValue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-value';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currencies = ['usd','eur'];

        foreach($currencies as $currency)
        {
            $todayCurrency = ExchangeRates::getCurrencyForToday($currency);

            if($todayCurrency !== null)
            {
                continue;
            }

            $response = Http::get("https://kurs.resenje.org/api/v1/currencies/$currency/rates/today/");
            ExchangeRates::create([
                'currency' => $currency,
                'value' => $response->json()['exchange_middle']
            ]);
        }
    }
}
