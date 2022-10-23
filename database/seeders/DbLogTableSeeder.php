<?php

namespace Database\Seeders;

use App\Models\DbLog;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DbLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DbLog::factory()->count(2)->state(new Sequence(
            ['deleted_at' => Carbon::now()->toDateTimeString()],
            ['deleted_at' => Carbon::now()->toDateTimeString()]
        ))->create();

    }
}
