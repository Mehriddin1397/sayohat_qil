<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'Qadamjolar',
            'description' => 'O‘zbekiston hududida ko‘plab muqaddas joylar mavjud. Ular orasida ko‘pchilikka ma’lum bo‘lmagan taniqli madaniy yodgorliklar va ziyoratgohlar ham bor. Ushbu bukletda, o‘zining go‘zalligi va tarixi bilan ajralib turuvchi sizga hali ma’lum bo‘lmagan joylarni jamladik.',
            'slug'=>'qadamjo',
            'photo'=>'category-photo/qadamjo.jpg',
            'shahar_id'=>1,
        ]);
        Category::create([
            'name'=>'Mehmonxonalar',
            'description' => 'O’zbekiston davlati juda chiroyli va tarixiy obidalarga boy bo’lib,siz agar o’zingiz uchun sayohatni rejalashtirayotgan bo’lsangiz O’zbekistonni tanlab adashmaysiz. Har bir sayohat uchun mehmonaxonani tog’ri tanlash bu juda ham muhim hisoblanadi. ',
            'slug'=>'mehmonxona',
            'photo'=>'category-photo/mehmonxona.webp',
            'shahar_id'=>1,
        ]);
        Category::create([
            'name'=>'Istirohat bog\'lari',
            'description' => 'Shaxarning markazidagi kungilochar joylar, bog\'lar va sayilgohlar ',
            'slug'=>'sayilgoh',
            'photo'=>'category-photo/sayilgoh.jpg',
            'shahar_id'=>1,
        ]);


        Category::create([
            'name'=>'Qadamjolar',
            'description' => 'O‘zbekiston hududida ko‘plab muqaddas joylar mavjud. Ular orasida ko‘pchilikka ma’lum bo‘lmagan taniqli madaniy yodgorliklar va ziyoratgohlar ham bor. Ushbu bukletda, o‘zining go‘zalligi va tarixi bilan ajralib turuvchi sizga hali ma’lum bo‘lmagan joylarni jamladik.',
            'slug'=>'qadamjo',
            'photo'=>'category-photo/qadamjo.jpg',
            'shahar_id'=>2,
        ]);
        Category::create([
            'name'=>'Mehmonxonalar',
            'description' => 'O’zbekiston davlati juda chiroyli va tarixiy obidalarga boy bo’lib,siz agar o’zingiz uchun sayohatni rejalashtirayotgan bo’lsangiz O’zbekistonni tanlab adashmaysiz. Har bir sayohat uchun mehmonaxonani tog’ri tanlash bu juda ham muhim hisoblanadi. ',
            'slug'=>'mehmonxona',
            'photo'=>'category-photo/mehmonxona.webp',
            'shahar_id'=>2,
        ]);
        Category::create([
            'name'=>'Istirohat bog\'lari',
            'description' => 'Shaxarning markazidagi kungilochar joylar, bog\'lar va sayilgohlar ',
            'slug'=>'sayilgoh',
            'photo'=>'category-photo/sayilgoh.jpg',
            'shahar_id'=>2,
        ]);



        Category::create([
            'name'=>'Qadamjolar',
            'description' => 'O‘zbekiston hududida ko‘plab muqaddas joylar mavjud. Ular orasida ko‘pchilikka ma’lum bo‘lmagan taniqli madaniy yodgorliklar va ziyoratgohlar ham bor. Ushbu bukletda, o‘zining go‘zalligi va tarixi bilan ajralib turuvchi sizga hali ma’lum bo‘lmagan joylarni jamladik.',
            'slug'=>'qadamjo',
            'photo'=>'category-photo/qadamjo.jpg',
            'shahar_id'=>3,
        ]);
        Category::create([
            'name'=>'Mehmonxonalar',
            'description' => 'O’zbekiston davlati juda chiroyli va tarixiy obidalarga boy bo’lib,siz agar o’zingiz uchun sayohatni rejalashtirayotgan bo’lsangiz O’zbekistonni tanlab adashmaysiz. Har bir sayohat uchun mehmonaxonani tog’ri tanlash bu juda ham muhim hisoblanadi. ',
            'slug'=>'mehmonxona',
            'photo'=>'category-photo/mehmonxona.webp',
            'shahar_id'=>3,
        ]);
        Category::create([
            'name'=>'Istirohat bog\'lari',
            'description' => 'Shaxarning markazidagi kungilochar joylar, bog\'lar va sayilgohlar ',
            'slug'=>'sayilgoh',
            'photo'=>'category-photo/sayilgoh.jpg',
            'shahar_id'=>3,
        ]);


    }
}
