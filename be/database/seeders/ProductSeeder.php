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

        // ========== BUDI'S PRODUCTS (Beras Specialist) ==========
        // 1. Beras Standar
        Product::updateOrCreate(
            ['seller_id' => $budi->id, 'name' => 'Beras Standar Putih'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras standar kualitas baik, cocok untuk konsumsi sehari-hari. Dipanen langsung dari sawah organik di Bandung.',
                'price' => 12500,
                'stock' => 500,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 2. Beras Premium
        Product::updateOrCreate(
            ['seller_id' => $budi->id, 'name' => 'Beras Premium Pulen'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras premium pulen pilihan dengan tekstur lembut. Hasil panen terbaik dari ladang organik tersertifikasi.',
                'price' => 15000,
                'stock' => 300,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 3. Beras Basmati
        Product::updateOrCreate(
            ['seller_id' => $budi->id, 'name' => 'Beras Basmati Wangi'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras basmati impor berkualitas tinggi dengan aroma khas yang harum dan butiran panjang.',
                'price' => 28000,
                'stock' => 100,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 4. Jagung Standar
        Product::updateOrCreate(
            ['seller_id' => $budi->id, 'name' => 'Jagung Standar Pakan'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung pakan ternak kualitas standar, layak untuk pakan unggas dan sapi potong.',
                'price' => 7000,
                'stock' => 1000,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 5. Jagung Premium Manis
        Product::updateOrCreate(
            ['seller_id' => $budi->id, 'name' => 'Jagung Premium Manis'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung manis pilihan yang empuk dan lezat, cocok untuk dikonsumsi langsung atau diolah menjadi makanan lain.',
                'price' => 9000,
                'stock' => 250,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // ========== SITI'S PRODUCTS (Jagung Specialist) ==========
        // 6. Jagung Pipil Kuning
        Product::updateOrCreate(
            ['seller_id' => $siti->id, 'name' => 'Jagung Pipil Kuning Pilihan'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung pipil kuning berkualitas premium. Langsung dari hasil panen terbaru dengan kadar air optimal.',
                'price' => 8500,
                'stock' => 600,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 7. Jagung Muda Segar
        Product::updateOrCreate(
            ['seller_id' => $siti->id, 'name' => 'Jagung Muda Segar'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung muda yang baru dipetik, segar dan berair. Sempurna untuk lalapan atau dimasak langsung.',
                'price' => 12000,
                'stock' => 350,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 8. Jagung Hibrida
        Product::updateOrCreate(
            ['seller_id' => $siti->id, 'name' => 'Benih Jagung Hibrida Unggul'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Benih jagung hibrida berkualitas tinggi dari produsen terpercaya. Daya tumbuh 95% dengan hasil produksi tinggi.',
                'price' => 45000,
                'stock' => 50,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // ========== RINTO'S PRODUCTS (Beras Specialist) ==========
        // 9. Beras Merah
        Product::updateOrCreate(
            ['seller_id' => $rinto->id, 'name' => 'Beras Merah Organik'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras merah organik tanpa pestisida. Kaya nutrisi dan sangat baik untuk kesehatan.',
                'price' => 18000,
                'stock' => 200,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 10. Beras Hitam
        Product::updateOrCreate(
            ['seller_id' => $rinto->id, 'name' => 'Beras Hitam Langka'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras hitam yang langka dan bernutrisi tinggi. Hasil budidaya organik di lahan pertanian tradisional.',
                'price' => 35000,
                'stock' => 80,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 11. Beras Pecah Kulit (Brown Rice)
        Product::updateOrCreate(
            ['seller_id' => $rinto->id, 'name' => 'Beras Pecah Kulit Brown Rice'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras pecah kulit dengan serat tinggi. Lebih bergizi dibanding beras putih biasa.',
                'price' => 16000,
                'stock' => 250,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 12. Beras Ketan Putih
        Product::updateOrCreate(
            ['seller_id' => $rinto->id, 'name' => 'Beras Ketan Putih Premium'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras ketan putih berkualitas premium, sempurna untuk membuat makanan tradisional dan resep khusus.',
                'price' => 14500,
                'stock' => 200,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // ========== LINA'S PRODUCTS (Mixed Products) ==========
        // 13. Beras Pera Suplemen Gizi
        Product::updateOrCreate(
            ['seller_id' => $lina->id, 'name' => 'Beras Pera Suplemen Gizi'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras pera yang diperkaya dengan suplemen gizi. Cocok untuk makanan bayi dan lansia.',
                'price' => 22000,
                'stock' => 150,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 14. Jagung Manis Segar Putih
        Product::updateOrCreate(
            ['seller_id' => $lina->id, 'name' => 'Jagung Manis Segar Putih'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung manis putih yang segar dan lezat dengan kadar gula tinggi. Dipanen pagi hari untuk kesegaran maksimal.',
                'price' => 13500,
                'stock' => 400,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 15. Jagung Manis Segar Kuning
        Product::updateOrCreate(
            ['seller_id' => $lina->id, 'name' => 'Jagung Manis Segar Kuning'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung manis kuning dengan rasa yang sangat lezat. Hasil panen terbaru dengan jaminan kesegaran.',
                'price' => 13000,
                'stock' => 420,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 16. Beras Jasmine Wangi
        Product::updateOrCreate(
            ['seller_id' => $lina->id, 'name' => 'Beras Jasmine Wangi Thailand'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras jasmine dari Thailand dengan aroma wangi yang khas. Butiran panjang dan pulen.',
                'price' => 24000,
                'stock' => 120,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // ========== HENDRA'S PRODUCTS (Variety) ==========
        // 17. Beras Sela Angin
        Product::updateOrCreate(
            ['seller_id' => $hendra->id, 'name' => 'Beras Sela Angin Premium'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras sela angin pilihan dengan kualitas terjaga. Hasil panen musim kemarau dengan kadar air rendah.',
                'price' => 13000,
                'stock' => 350,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 18. Jagung Pipil Putih
        Product::updateOrCreate(
            ['seller_id' => $hendra->id, 'name' => 'Jagung Pipil Putih'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung pipil putih berkualitas baik untuk pakan ternak berkualitas premium.',
                'price' => 8000,
                'stock' => 700,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 19. Jagung Popcorn
        Product::updateOrCreate(
            ['seller_id' => $hendra->id, 'name' => 'Jagung Popcorn Premium'],
            [
                'category_id' => $jagungCategory->id,
                'description' => 'Jagung popcorn premium berkualitas tinggi dengan daya ledak sempurna. Cocok untuk dikomersilkan.',
                'price' => 11000,
                'stock' => 200,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 20. Beras Karatan
        Product::updateOrCreate(
            ['seller_id' => $hendra->id, 'name' => 'Beras Karatan Pilihan'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras karatan (second grade) dengan harga terjangkau namun berkualitas cukup baik.',
                'price' => 10000,
                'stock' => 800,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );

        // 21. Beras Sosoh Halus
        Product::updateOrCreate(
            ['seller_id' => $hendra->id, 'name' => 'Beras Sosoh Halus Premium'],
            [
                'category_id' => $berasCategory->id,
                'description' => 'Beras sosoh halus dengan proses penggilingan sempurna menghasilkan butiran yang seragam dan indah.',
                'price' => 14000,
                'stock' => 300,
                'unit' => 'kg',
                'is_active' => true,
                'status' => 'public',
            ]
        );
    }
}

