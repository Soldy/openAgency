<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class agencyGet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oA:agency:get {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get agency details';

    /**
     * Create a new command stance.
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
        $id = $this->argument('id');

        $details = \App\Agency::where('id',$id)
              ->limit(1)
              ->get([
                   'id',
                   'name', 
                   'address', 
                   'city', 
                   'postcode', 
                   'phone',
                   'website', 
                   'description'
              ])
              ->toArray();
        if (1>count($details))
            return $this->line('Agency not exist');
        $headers = ['Field', 'Value'];
        $this->table(
            $headers, 
            [
                [
                     'Field' => 'id',
                     'Value' => $details[0]['id']
                ],
                [
                     'Field' => 'Name',
                     'Value' => $details[0]['name']
                ],
                [
                     'Field' => 'Address',
                     'Value' => $details[0]['address']
                ],
                [
                     'Field' => 'City',
                     'Value' => $details[0]['city']
                ],
                [
                     'Field' => 'PostCode',
                     'Value' => $details[0]['postcode']
                ],
                [
                     'Field' => 'Phone',
                     'Value' => $details[0]['phone']
                ],
                [
                     'Field' => 'Website',
                     'Value' => $details[0]['website']
                ],
                [
                     'Field' => 'Description',
                     'Value' => $details[0]['description']
                ]
            ]
        );
        $this->call(
            'agency:listweb',
            ['id'=>$id]
        );
    }
}
