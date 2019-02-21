<?php

namespace Nddcoder\LaravelSSO\Commands;

use Illuminate\Console\Command;

class DeleteBroker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sso:broker:delete {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete broker with specified name.';

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
        $brokerIdField = config('laravel-sso.brokerIdField');
        $brokerClass = app(config('laravel-sso.brokersModel'));
        $broker = $brokerClass::where($brokerIdField, $this->argument($brokerIdField))->firstOrFail();
        $broker->delete();

        $this->info("Broker with {$brokerIdField}`" . $this->argument($brokerIdField) . '` successfully deleted.');
    }
}
