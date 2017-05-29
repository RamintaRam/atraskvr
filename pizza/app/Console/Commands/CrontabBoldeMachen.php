<?php

namespace App\Console\Commands;

use App\models\DTIngredients;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CrontabBoldeMachen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:bold';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Makes one element from list style bold';

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
        $id = DTIngredients::all()->random(1)->first()->id;

        $expiresAt = Carbon::now()->addMinutes(60);

        cache()->put('super-ingredient', $id, $expiresAt);

    }
}
