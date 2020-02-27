<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class agencyList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oA:agency:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Agency List';

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
         $this->line('Agencies List');
         $headers = ['id', 'name', 'website','phone'];
         $agencies = \App\Agency::all(
             ['id', 'name', 'website','phone']
         )->toArray();
         $this->table($headers, $agencies);
    }
}
