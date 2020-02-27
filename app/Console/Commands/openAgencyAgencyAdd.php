<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class agencyAdd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oA:agency:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adding New Agency';

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
        $name = $this->ask('Agency Name?');
        $address = $this->ask('Agency address ?');
        $city = $this->ask('Agency City?');
        $postcode = $this->ask('Agency PostCode?');
        $phone = $this->ask('Agency Phone?');
        $website = $this->ask('Agency Website?');
        $this->line('Agency Details');
        $headers = ['Field', 'Value'];
        $this->table(
            $headers, 
            [
                [
                     'Field' => 'Name',
                     'Value' => $name
                ],
                [
                     'Field' => 'Address',
                     'Value' => $address
                ],
                [
                     'Field' => 'City',
                     'Value' => $city
                ],
                [
                     'Field' => 'PostCode',
                     'Value' => $postcode
                ],
                [
                     'Field' => 'Phone',
                     'Value' => $phone
                ],
                [
                     'Field' => 'Website',
                     'Value' => $website
                ]
            ]
        );
        if(!$this->confirm('This is correct?'))
            return $this->line('Agency not saved!');
        $agency = new \App\Agency;
        $agency->name = $name;
        $agency->address = $address;
        $agency->city = $city;
        $agency->postcode = $postcode;
        $agency->phone = $phone;
        $agency->website = $website;
        $agency->save();
        return $this->line('Agency saved!');

    }
}
