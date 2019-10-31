<?php

use Illuminate\Database\Seeder;

class MycatTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mycat::class,50)->create();
    }
}
