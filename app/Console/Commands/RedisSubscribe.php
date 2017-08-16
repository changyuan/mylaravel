<?php

namespace App\Console\Commands;

use Redis;
use Illuminate\Console\Command;

class RedisSubscribe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:subscribe
                            {user=yaolan123: default user} {--queue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Subscribe to a Redis channel';

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
        //
        // Redis::subscribe(['test-channel'], function($message) {
        //     echo $message;
        // });
        $arguments = $this->argument();
        $options = $this->option();
        $this->line('this is a line information');
        $this->info('output :'.var_export($arguments,true).var_export($options,true));
    }
}
