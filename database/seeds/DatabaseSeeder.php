<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{

    public function run(){

        Model::unguard();
        $this->call(UsersSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(ProductsSeeder::class);
        Model::reguard();
    }
}
