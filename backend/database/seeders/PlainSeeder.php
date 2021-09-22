<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plains')->insert(
            [
                [
                    'plano' => 'Free',
                    'mensalidade' => 0
                ],
                [
                    'plano' => 'Basic',
                    'mensalidade' => 100
                ],
                [
                    'plano' => 'Plus',
                    'mensalidade' => 187
                ],
            ]
        );
    }
}
