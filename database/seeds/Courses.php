<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(['id' => Uuid::generate(), 'title' => "English", "type" => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::table('courses')->insert(['id' => Uuid::generate(), 'title' => "Filipino", "type" => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::table('courses')->insert(['id' => Uuid::generate(), 'title' => "Math", "type" => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::table('courses')->insert(['id' => Uuid::generate(), 'title' => "Science", "type" => 20, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
    }
}
