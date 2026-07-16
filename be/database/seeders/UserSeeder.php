<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Admin
        User::updateOrCreate(
            ['email' => 'admin@agriconnect.com'],
            [
                'name' => 'Admin AgriConnect',
                'password' => Hash::make('password123'),
                'phone' => '081234567890',
                'address' => 'Jakarta Pusat',
                'role' => 'Admin',
                'is_verified' => true,
                'is_active' => true,
            ]
        );

        // Sellers
        $sellers = [
            [
                'name' => 'Budi Hartono',
                'email' => 'budi@agriconnect.com',
                'phone' => '081234567891',
                'address' => 'Desa Parongpong, Bandung, Jawa Barat',
                'role' => 'Seller',
            ],
            [
                'name' => 'Siti Nurhaliza',
                'email' => 'siti@agriconnect.com',
                'phone' => '081234567892',
                'address' => 'Desa Banjar, Brebes, Jawa Tengah',
                'role' => 'Seller',
            ],
            [
                'name' => 'Rinto Harahap',
                'email' => 'rinto@agriconnect.com',
                'phone' => '081234567893',
                'address' => 'Desa Cirebon, Cirebon, Jawa Barat',
                'role' => 'Seller',
            ],
            [
                'name' => 'Lina Wijaya',
                'email' => 'lina@agriconnect.com',
                'phone' => '081234567894',
                'address' => 'Desa Tanjungsari, Sumedang, Jawa Barat',
                'role' => 'Seller',
            ],
            [
                'name' => 'Hendra Gunawan',
                'email' => 'hendra@agriconnect.com',
                'phone' => '081234567895',
                'address' => 'Desa Karanganyar, Sragen, Jawa Tengah',
                'role' => 'Seller',
            ],
        ];

        foreach ($sellers as $seller) {
            User::updateOrCreate(
                ['email' => $seller['email']],
                [
                    'name' => $seller['name'],
                    'password' => Hash::make('password123'),
                    'phone' => $seller['phone'],
                    'address' => $seller['address'],
                    'role' => $seller['role'],
                    'is_verified' => true,
                    'is_active' => true,
                ]
            );
        }

        // Buyers
        $buyers = [
            [
                'name' => 'Ahmad Suryanto',
                'email' => 'ahmad@email.com',
                'phone' => '087654321001',
                'address' => 'Jl. Merdeka No. 10, Jakarta Selatan',
                'role' => 'Buyer',
            ],
            [
                'name' => 'Dewi Lestari',
                'email' => 'dewi@email.com',
                'phone' => '087654321002',
                'address' => 'Jl. Gatot Subroto No. 25, Surabaya',
                'role' => 'Buyer',
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@email.com',
                'phone' => '087654321003',
                'address' => 'Jl. Ahmad Yani No. 50, Bandung',
                'role' => 'Buyer',
            ],
            [
                'name' => 'Ratna Wijaya',
                'email' => 'ratna@email.com',
                'phone' => '087654321004',
                'address' => 'Jl. Diponegoro No. 15, Yogyakarta',
                'role' => 'Buyer',
            ],
            [
                'name' => 'Eka Prasetya',
                'email' => 'eka@email.com',
                'phone' => '087654321005',
                'address' => 'Jl. Jenderal Sudirman No. 100, Medan',
                'role' => 'Buyer',
            ],
            [
                'name' => 'Rina Handoko',
                'email' => 'rina@email.com',
                'phone' => '087654321006',
                'address' => 'Jl. Imam Bonjol No. 20, Semarang',
                'role' => 'Buyer',
            ],
            [
                'name' => 'Doni Hermawan',
                'email' => 'doni@email.com',
                'phone' => '087654321007',
                'address' => 'Jl. Panglima Polim No. 8, Jakarta Barat',
                'role' => 'Buyer',
            ],
            [
                'name' => 'Silvia Kusuma',
                'email' => 'silvia@email.com',
                'phone' => '087654321008',
                'address' => 'Jl. Cikupa No. 42, Tangerang',
                'role' => 'Buyer',
            ],
        ];

        foreach ($buyers as $buyer) {
            User::updateOrCreate(
                ['email' => $buyer['email']],
                [
                    'name' => $buyer['name'],
                    'password' => Hash::make('password123'),
                    'phone' => $buyer['phone'],
                    'address' => $buyer['address'],
                    'role' => $buyer['role'],
                    'is_verified' => true,
                    'is_active' => true,
                ]
            );
        }
    }
}

