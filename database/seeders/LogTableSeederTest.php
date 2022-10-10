<?php

namespace Database\Seeders;

use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class LogTableSeederTest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Log::factory()->count(2)->error()->state(new Sequence(
            ['deleted_at' => Carbon::now()->toDateTimeString()],
            ['deleted_at' => Carbon::now()->toDateTimeString()]
        ))->create();
        Log::factory()->count(2)->warning()->state(new Sequence(
            ['deleted_at' => Carbon::now()->toDateTimeString()],
            ['deleted_at' => Carbon::now()->toDateTimeString()]
        ))->create();
        Log::factory()->count(2)->login()->state(new Sequence(
            ['deleted_at' => Carbon::now()->toDateTimeString()],
            ['deleted_at' => Carbon::now()->toDateTimeString()]
        ))->create();
    }
}
