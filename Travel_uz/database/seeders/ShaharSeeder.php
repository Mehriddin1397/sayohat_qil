<?php

namespace Database\Seeders;

use App\Models\Shahar;
use Illuminate\Database\Seeder;

class ShaharSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shahar::create([
            'name' => 'Toshkent',
            'description' => 'Toshkent — Oʻzbekistonning poytaxti va eng yirik shahri boʻlib, aholisi boʻyicha Markaziy Osiyodagi eng yirik qadimiy shaharlardan biri hisoblanadi. Oʻzbekistonning shimoli-sharqiy qismida, Qozogʻiston bilan chegaraga yaqin qismda joylashgan boʻlib, maydoni 334,8 km2 ni tashkil etadi. 2023-yilning 1-iyulidagi maʼlumotlarga koʻra, Toshkent aholisi 2 995 000 nafar kishini (Oʻzbekiston aholisining qariyb 8 foizi) tashkil etadi[2]. 2018-yilgi maʼlumotlarga koʻra, Toshkent shahrining YIMi $2,74 milliardni tashkil etadi va bu koʻrsatkich Oʻzbekistondagi eng katta YIMga ega shahar boʻlib kelmoqda',
            'city_slug' => 'toshkent',
            'photo' => 'shahar-photo/toshkent.jpg'
        ]);
        Shahar::create([
            'name' => 'Samarqand',
            'description' => 'Samarqand – qadimiy shahar, viloyat va tuman shu nom bilan atalgan. Tarixchilar bu shaharni Vavilon, Fiva, Afina, Rim va boshqa shu kabi shaharlar bilan tengdosh hisoblashadi. Toponimning etimologiyasi haqida turli qarashlar bor. Tadqiqotchilarning qariyb barchasi toponimning ikkinchi qismini turkiycha – kent, – qand, ya’ni qishloq, shahar deb hisoblaydilar.',
            'city_slug' => 'samarqand',
            'photo' => 'shahar-photo/samarqand.jpeg'
        ]);
        Shahar::create([
            'name' => 'Buxoro',
            'description' => 'Buxoro — Oʻzbekiston Respublikasining qadimiy shaharlaridan biri, Buxoro viloyatining maʼmuriy, iqtisodiy va madaniy markazi. Oʻzbekistonning ilk poytaxti. Buyuk ipаk yoʻlida yirik tijorat markazlaridan boʻlgan. Oʻzbekistonning janubiy-gʻarbida, Zarafshon daryosi quyi oqimida joylashgan. Toshkentdan 616 km. Buxoro 2 ta shahar rayoni (Fayzulla Xoʻjayev va Toʻqimachilik)ga boʻlingan. Aholisi 290 000 (2019). Aholisining katta qismini oʻzbeklar tashkil etadi.',
            'city_slug' => 'buxoro',
            'photo' => 'shahar-photo/buxoro.jpg'
        ]);
    }
}
