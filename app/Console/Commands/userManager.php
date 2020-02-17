<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class userManager extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:Manager';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Manager';

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
        while(true){
            $this->line('****************');
            $this->line('* user Manager *');
            $this->line('****************');
            $command = $this->choice(
                 'What is your command?', 
                 [
                     'list', 
                     'add', 
                     'search', 
                     'done'
                 ], 
                 'done'
            );
            switch ($command){
                case 'add':
                     $this->call('user:add');
                case 'list':
                     $this->call('users:list');
                     break;
                case 'done':
                     return true;
            }
        }
    }
}
