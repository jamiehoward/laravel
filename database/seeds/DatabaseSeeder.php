<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    }

    /** 
     * Truncate all specified tables.
     * 
     * @param  array  $tables
     * @return void
     */
    protected function truncateTables(array $tables)
    {
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        } 
    }
}
