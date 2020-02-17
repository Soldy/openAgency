<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class userAdd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Add';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    private function getPassword(){
         while(true){
              $passwordA = $this->secret('password');
              $passwordB = $this->secret('password');
              if(($passwordA != "")&&($passwordA == $passwordB))
                  return $passwordB;
              $this->error('Password not match!');
         }

    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('add user');
        $user = new \App\User();
        $user->name = $this->ask('name');
        $user->email = $this->ask('email');
        $user->password = bcrypt($this->getPassword());
        if ($this->confirm('Do you wish to saveo?')){
            $user->save();
            $this->info('Done!');
        }
    }
}
