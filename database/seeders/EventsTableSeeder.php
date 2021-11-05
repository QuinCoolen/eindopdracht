<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => 'World War II',
            'date' => Carbon::parse('1939-09-01'),
            'description' => 'A global war involving fighting in most of the world and most countries',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('events')->insert([
            'name' => 'Battle of Stalingrad',
            'date' => Carbon::parse('1942-08-23'),
            'description' => 'The Battle of Stalingrad was fought during the Second World War between Nazi Germany and the Soviet Union. They were fighting for control of the city of Stalingrad.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('events')->insert([
            'name' => 'First Battle of El Alamein',
            'date' => Carbon::parse('1942-07-01'),
            'description' => 'A battle of the Western Desert Campaign of the Second World War, fought in Egypt between Axis forces (Germany and Italy) and Allied forces (Britain, British India, Australia, South Africa and New Zealand).',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('events')->insert([
            'name' => 'USS Panay incident',
            'date' => Carbon::parse('1937-12-12'),
            'description' => 'A Japanese bombing attack on the U.S. Navy river gunboat Panay and three Standard Oil Company tankers on the Yangtze River.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('events')->insert([
            'name' => 'Battle of Britain',
            'date' => Carbon::parse('1940-07-10'),
            'description' => "a military campaign of the Second World War, in which the Royal Air Force defended the United Kingdom against large-scale attacks by Nazi Germany's air force, the Luftwaffe.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
