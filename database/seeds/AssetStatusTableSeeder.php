<?php

use App\Models\AssetStatus;
use Illuminate\Database\Seeder;

class AssetStatusTableSeeder extends Seeder
{
    public function run()
    {
        $assetStatuses = [
            [
                'id'         => 1,
                'name'       => 'Available',
                'created_at' => '2020-09-03 07:46:23',
                'updated_at' => '2020-09-03 07:46:23',
            ],
            [
                'id'         => 2,
                'name'       => 'Not Available',
                'created_at' => '2020-09-03 07:46:23',
                'updated_at' => '2020-09-03 07:46:23',
            ],
            [
                'id'         => 3,
                'name'       => 'Broken',
                'created_at' => '2020-09-03 07:46:23',
                'updated_at' => '2020-09-03 07:46:23',
            ],
            [
                'id'         => 4,
                'name'       => 'Out for Repair',
                'created_at' => '2020-09-03 07:46:23',
                'updated_at' => '2020-09-03 07:46:23',
            ],
        ];

        AssetStatus::insert($assetStatuses);
    }
}
