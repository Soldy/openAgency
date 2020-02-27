<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class agencyEdit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oA:agency:edit {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'agency edit';

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
    public function handle(){
            $id = $this->argument('id');
            $details = \App\Agency::where('id',$id)
                 ->first();
        while(true){
            $this->call(
                'agency:get',
                ['id'=>$id]
            );
            $command = $this->choice(
                 'What is your command?', 
                 [
                     'name', 
                     'address', 
                     'city', 
                     'postcode', 
                     'phone', 
                     'website',
                     'description',
                     'done'
                 ], 
                 'done'
            );
            switch ($command) {
               case "name":
                   $details->name=$this->anticipate(
                       'name?',
                       [$details->name]
                   );
                   break;
               case "address":
                   $details->address=$this->anticipate(
                       'address?',
                       [$details->address]
                   );
                   break;
               case "city":
                   $details->city=$this->anticipate(
                       'city?',
                       [$details->city]
                   );
                   break;
               case "postcode":
                   $details->postcode=$this->anticipate(
                       'postcode?',
                       [$details->postcode]
                   );
                   break;
               case "phone":
                   $details->phone=$this->anticipate(
                       'phone?',
                       [$details->phone]
                   );
                   break;
               case "website":
                   $details->website=$this->anticipate(
                       'website?',
                       [$details->website]
                   );
                   break;
               case "description":
                   $details->description=$this->anticipate(
                       'description?',
                       [$details->description]
                   );
                   break;
               case "done":
                   return true;
                   break;

            }
            $details->save();
        }
    }
}
