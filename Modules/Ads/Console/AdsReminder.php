<?php

namespace Modules\Ads\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Modules\Ads\Repositories\AdsRepository;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class AdsReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'ads:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'it sends an email for advertisers who have ads the next day as a remainder.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            (new AdsRepository())->notifyAdvertisersForAdsReminders();

        } catch(\Exception $th) {
            Log::error($th->getMessage());

        } catch(\Throwable $e) {
            Log::error($e->getMessage());
        }

    }
}
