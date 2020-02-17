<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class usersList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actual users list';

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
            $this->line('Actual User List');
            $headers = ['id', 'Name', 'Email'];
            $users = \App\User::all(['id', 'name', 'email'])->toArray();
            $this->table($headers, $users);
    }
}
