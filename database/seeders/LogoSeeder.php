<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Logo;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Logo::create(['image_path' => 'assets/images/logo-1.webp', 'alt_text' => 'Logo 1', 'order' => 1]);
        Logo::create(['image_path' => 'assets/images/logo-2.webp', 'alt_text' => 'Logo 2', 'order' => 2]);
        Logo::create(['image_path' => 'assets/images/logo-3.webp', 'alt_text' => 'Logo 3', 'order' => 3]);
        Logo::create(['image_path' => 'assets/images/logo-4.webp', 'alt_text' => 'Logo 4', 'order' => 4]);
        Logo::create(['image_path' => 'assets/images/logo-5.webp', 'alt_text' => 'Logo 5', 'order' => 5]);
        Logo::create(['image_path' => 'assets/images/logo-6.webp', 'alt_text' => 'Logo 6', 'order' => 6]);
    }
}
