<?php

namespace Joy\VoyagerBreadEmail\Database\Seeders;

use Joy\VoyagerBreadEmail\Models\Email;
use Illuminate\Database\Seeder;

class EmailsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Email::query()->count() > 0) {
            return false;
        }

        $count = 20;
        Email::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Email ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Email Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
