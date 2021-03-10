<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                'id'             => 1,
                'room_name'      => 'VIP Room',
                'total_bed'      => '1',
                'bed_used'       => '0',
                'status'         => 'Available',
                'cost'           => 10000000,
                'created_at'     => '2021-01-24 14:00:11',
                'updated_at'     => '2021-01-24 14:00:11',
            ],
            [
                'id'             => 2,
                'room_name'      => 'Platinum Room',
                'total_bed'      => '5',
                'bed_used'       => '0',
                'status'         => 'Available',
                'cost'           => 8000000,
                'created_at'     => '2021-01-24 14:00:11',
                'updated_at'     => '2021-01-24 14:00:11',
            ],
            [
                'id'             => 3,
                'room_name'      => 'Gold Room',
                'total_bed'      => '10',
                'bed_used'       => '10',
                'status'         => 'Not Available',
                'cost'           => 5000000,
                'created_at'     => '2021-01-24 14:00:11',
                'updated_at'     => '2021-01-24 14:00:11',
            ],
            [
                'id'             => 4,
                'room_name'      => 'Silver Room',
                'total_bed'      => '15',
                'bed_used'       => '13',
                'status'         => 'Available',
                'cost'           => 3000000,
                'created_at'     => '2021-01-24 14:00:11',
                'updated_at'     => '2021-01-24 14:00:11',
            ],
            [
                'id'             => 5,
                'room_name'      => 'Regular Room',
                'total_bed'      => '20',
                'bed_used'       => '8',
                'status'         => 'Available',
                'cost'           => 1000000,
                'created_at'     => '2021-01-24 14:00:11',
                'updated_at'     => '2021-01-24 14:00:11',
            ],
        ];

        Room::insert($rooms);
    }
}
