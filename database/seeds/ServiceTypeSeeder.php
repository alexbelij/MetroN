<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('service_types')->truncate();
      DB::table('service_types')->insert([
          'name' => 'sedan',
          'provider_name' => 'sedan',
          'status' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);
    }
}
