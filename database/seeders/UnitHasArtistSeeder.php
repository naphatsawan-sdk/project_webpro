<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitHasArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units_has_artists')->insert([
            'unit_id'=>1,
            'artist_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('units_has_artists')->insert([
            'unit_id'=>3,
            'artist_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('units_has_artists')->insert([
            'unit_id'=>1,
            'artist_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('units_has_artists')->insert([
            'unit_id'=>3,
            'artist_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('units_has_artists')->insert([
            'unit_id'=>1,
            'artist_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('units_has_artists')->insert([
            'unit_id'=>3,
            'artist_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('units_has_artists')->insert([
            'unit_id'=>1,
            'artist_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('units_has_artists')->insert([
            'unit_id'=>3,
            'artist_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>3,
            'artist_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>4,
            'artist_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>1,
            'artist_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>3,
            'artist_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units_has_artists')->insert([
            'unit_id'=>3,
            'artist_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>4,
            'artist_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>1,
            'artist_id'=>8,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>3,
            'artist_id'=>8,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>1,
            'artist_id'=>9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>3,
            'artist_id'=>9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>4,
            'artist_id'=>9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>5,
            'artist_id'=>11,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>5,
            'artist_id'=>14,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>5,
            'artist_id'=>15,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>6,
            'artist_id'=>12,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units_has_artists')->insert([
            'unit_id'=>6,
            'artist_id'=>13,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
