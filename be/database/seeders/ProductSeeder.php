<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all sellers
        $budi = User::where('email', 'budi@agriconnect.com')->first();
        $siti = User::where('email', 'siti@agriconnect.com')->first();
        $rinto = User::where('email', 'rinto@agriconnect.com')->first();
        $lina = User::where('email', 'lina@agriconnect.com')->first();
        $hendra = User::where('email', 'hendra@agriconnect.com')->first();

        if (!$budi || !$siti || !$rinto || !$lina || !$hendra) return;

        // Get categories
        $berasCategory = Category::where('name', 'Beras')->first();
        $jagungCategory = Category::where('name', 'Jagung')->first();

        // ========== BUDI'S PRODUCTS ==========
        // 1. Beras Original
        Product::updateOrCreate(
            ['seller_id' => $budi->id, 'name' => 'Beras Original'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras original kualitas standar, cocok untuk konsumsi sehari-hari. Dipanen langsung dari sawah organik di Bandung.',
                'price' => 12500,
                'stock' => 500,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 2. Beras Premium
        Product::updateOrCreate(
            ['seller_id' => $budi->id, 'name' => 'Beras Premium'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras premium dengan butiran pulen pilihan. Hasil panen terbaik dari ladang organik tersertifikasi.',
                'price' => 15000,
                'stock' => 300,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 3. Jagung Original
        Product::updateOrCreate(
            ['seller_id' => $budi->id, 'name' => 'Jagung Original'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung original kualitas standar, layak untuk pakan ternak dan konsumsi sehari-hari.',
                'price' => 7000,
                'stock' => 1000,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 4. Jagung Premium
        Product::updateOrCreate(
            ['seller_id' => $budi->id, 'name' => 'Jagung Premium'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung premium yang manis dan empuk. Cocok untuk dikonsumsi langsung atau diolah menjadi makanan lain.',
                'price' => 9000,
                'stock' => 250,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // ========== SITI'S PRODUCTS ==========
        // 5. Beras Original
        Product::updateOrCreate(
            ['seller_id' => $siti->id, 'name' => 'Beras Original'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras original berkualitas standar dari Brebes, Jawa Tengah. Hasil panen segar dengan kadar air optimal.',
                'price' => 12000,
                'stock' => 600,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 6. Beras Premium
        Product::updateOrCreate(
            ['seller_id' => $siti->id, 'name' => 'Beras Premium'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras premium dari Brebes dengan kualitas terbaik. Butiran panjang dan pulen sempurna.',
                'price' => 15500,
                'stock' => 350,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 7. Jagung Original
        Product::updateOrCreate(
            ['seller_id' => $siti->id, 'name' => 'Jagung Original'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung original dari Brebes, kualitas standar untuk pakan ternak berkualitas.',
                'price' => 6800,
                'stock' => 800,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 8. Jagung Premium
        Product::updateOrCreate(
            ['seller_id' => $siti->id, 'name' => 'Jagung Premium'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung premium manis dan berair dari Brebes. Segar dan berkualitas tinggi.',
                'price' => 9500,
                'stock' => 400,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // ========== RINTO'S PRODUCTS ==========
        // 9. Beras Original
        Product::updateOrCreate(
            ['seller_id' => $rinto->id, 'name' => 'Beras Original'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras original dari Cirebon berkualitas standar. Cocok untuk konsumsi keluarga sehari-hari.',
                'price' => 12300,
                'stock' => 550,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 10. Beras Premium
        Product::updateOrCreate(
            ['seller_id' => $rinto->id, 'name' => 'Beras Premium'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras premium dari Cirebon dengan butiran pilihan dan rasa yang lezat.',
                'price' => 15200,
                'stock' => 280,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 11. Jagung Original
        Product::updateOrCreate(
            ['seller_id' => $rinto->id, 'name' => 'Jagung Original'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung original dari Cirebon berkualitas standar untuk berbagai kebutuhan.',
                'price' => 7200,
                'stock' => 900,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 12. Jagung Premium
        Product::updateOrCreate(
            ['seller_id' => $rinto->id, 'name' => 'Jagung Premium'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung premium dari Cirebon dengan kualitas terbaik dan rasa manis yang optimal.',
                'price' => 9200,
                'stock' => 320,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // ========== LINA'S PRODUCTS ==========
        // 13. Beras Original
        Product::updateOrCreate(
            ['seller_id' => $lina->id, 'name' => 'Beras Original'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras original dari Sumedang berkualitas standar. Hasil panen terbaik dari lahan organik.',
                'price' => 12400,
                'stock' => 450,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 14. Beras Premium
        Product::updateOrCreate(
            ['seller_id' => $lina->id, 'name' => 'Beras Premium'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras premium dari Sumedang dengan kualitas premium dan pulen sempurna.',
                'price' => 15300,
                'stock' => 270,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 15. Jagung Original
        Product::updateOrCreate(
            ['seller_id' => $lina->id, 'name' => 'Jagung Original'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung original dari Sumedang berkualitas standar untuk kebutuhan pakan dan konsumsi.',
                'price' => 7100,
                'stock' => 750,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 16. Jagung Premium
        Product::updateOrCreate(
            ['seller_id' => $lina->id, 'name' => 'Jagung Premium'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung premium dari Sumedang dengan rasa manis dan tekstur sempurna.',
                'price' => 9300,
                'stock' => 380,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // ========== HENDRA'S PRODUCTS ==========
        // 17. Beras Original
        Product::updateOrCreate(
            ['seller_id' => $hendra->id, 'name' => 'Beras Original'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras original dari Sragen berkualitas standar. Hasil panen musim dengan kadar air optimal.',
                'price' => 12200,
                'stock' => 520,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 18. Beras Premium
        Product::updateOrCreate(
            ['seller_id' => $hendra->id, 'name' => 'Beras Premium'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras premium dari Sragen dengan butiran pilihan berkualitas tinggi.',
                'price' => 15100,
                'stock' => 300,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 19. Jagung Original
        Product::updateOrCreate(
            ['seller_id' => $hendra->id, 'name' => 'Jagung Original'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung original dari Sragen berkualitas standar untuk berbagai kebutuhan.',
                'price' => 7300,
                'stock' => 850,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 20. Jagung Premium
        Product::updateOrCreate(
            ['seller_id' => $hendra->id, 'name' => 'Jagung Premium'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung premium dari Sragen dengan kualitas premium dan rasa yang optimal.',
                'price' => 9400,
                'stock' => 360,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );
    }
}

