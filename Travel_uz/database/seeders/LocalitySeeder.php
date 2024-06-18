<?php

namespace Database\Seeders;

use App\Models\Locality;
use Illuminate\Database\Seeder;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Locality::create([
            'name' => 'Xazrat Ali Buva ziyoratgohi',
            'description' => 'Parkent tumani Kumushkon qishlog‘i «Chashma» mahallasining eng yuqori qismida joylashgan.',
            'information' => 'Dastlab 1982-yilda Kumushkon qishlog‘i aholisi tomonidan hashar yo‘li bilan 1 ta xonaqoh va 1 ta ayvon barpo etilgan. 2010-yilda mahalliy ustalar tomonidan qaytadan ta’mirlangan. Ziyoratgohda 3 ta xonaqoh, 1 ta ayvon mavjud. Qishloq odamlarining rivoyat qilishicha, Payg‘ambarimizning kuyovlari Hazrati Ali shu joyda namoz o‘qigan emish. Ayrim rivoyatlarga ko‘ra, uning qamchisidan, yana ba’zi birlarida qayd etilishicha, hassasidan chinor daraxti ko‘karib chiqqan. Bu chinor hozir ham yashnab turibdi. Ushbu muqaddas joyda 5 ta buloq bor. Buloqlardan chiqayotgan suv kumushga to‘yingan bo‘lib, tarkibidagi 60 dan ortiq mikroelementlar oshqozon-ichak kasalliklari uchun shifo sanaladi.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.675051049028!2d69.85317637479208!3d41.3159322004263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38afa9df5a037da9%3A0x7ab24a98205a619c!2zWGF6cmF0aSBBbGkgQnV2YSB6aXlvcmF0Z29oaSAtINCl0LDQt9GA0LDRgtC4INCQ0LvQuCDQkdGD0LLQsA!5e0!3m2!1suz!2s!4v1716315448251!5m2!1suz!2s',
            'slug'=>'ziyoratgoh',
            'photo' => 'locality-photo/Xazrat Ali Buva ziyoratgohi.jpg',
            'category_id' => 1
        ]);
        Locality::create([
            'name' => 'Zangiota yodgorlik majmui',
            'description' => 'O‘rta Osiyodagi noyob obidalardan biri Zangi ota nomi bilan mashhur bo‘lgan so‘fiylik targ‘ibotchisi shayx Oyxo‘ja ibn Tojxo‘ja sharafiga shunday ataladi.',
            'information' => 'O‘rta Osiyodagi noyob obidalardan biri Zangi ota nomi bilan mashhur bo‘lgan so‘fiylik targ‘ibotchisi shayx Oyxo‘ja ibn Tojxo‘ja sharafiga shunday ataladi. Gumbazli darvozaxona orqasida ikkita pastak minora, ularning janubi-g‘arbida XX asr boshlarida kurilgan shiypon va minora bor. Uning janubi-g‘arbida gumbazli, g‘isht ustunli, devorlar yozuvlar bilan bezatilgan peshayvonli masjid, hovlining qolgan uch tamonida bir qavatli hujralar joylashgan.  Zangi otaning asli tug‘ilgan va yashagan maskani Shosh viloyati bo‘lib, Toshkent bilan Qovunchi oralig‘idagi Zangi ota nomli qishloq.

Zangi otaning butun hayoti Movarounnahr xalqlarining eng og‘ir davriga to‘g‘ri keladi. Shunday og‘ir bir paytda Zangi ota va uning shogirdlari xalq ommasini qahramonlik, vatanparvarlik, mehr-shafqat kabi eng oliy umuminsoniy g‘oyalar bilan oziqlantirdi. Zangi otaning bu xizmatlari vaqti kelib Amir Temur tomonidan munosib taqdirlandi. Zangi otaning qabri ustida maqbara qad rostladi. 1420 yilda esa Mirzo Ulug‘bek uning ustiga hozirgi peshtoqni bunyod ettirdi.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3002.148615665796!2d69.15590652478441!3d41.19673340780146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae63af2e531215%3A0x484c69e7dbf3545f!2sZangiota%20maqbarasi!5e0!3m2!1suz!2s!4v1716438248583!5m2!1suz!2s',
            'slug'=>'ziyoratgoh',
            'photo' => 'locality-photo/Zangiota yodgorlik majmui.jpg',
            'category_id' => 1
        ]);
        Locality::create([
            'name' => 'KINDIKTEPA YODGORLIGI',
            'description' => 'Parkent tumani Kumushkon qishlog‘i «Chashma» mahallasining eng yuqori qismida joylashgan.',
            'information' => 'Kindiktepa qadimgi yodgorligi - Tuyabo‘g‘oz suv omborining suv bosgan hududida (Toshkent dengizida) orolchalar ko‘rinishida qad rostlagan. Miloddan avvalgi 2 ming yil oldinga borib taqaladi. Toshkent tumanidagi yagona Burg‘uluq madaniyati qadimgi yodgorlik obidasi arxeologlar tomonidan topilgan. 1970-72-yillarda qazilma ishlari olib borilgan. Sayyohlarni chorlash maqsadida Ohangaron sohilida dam olish maskanlari ham barpo etilgan.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13658.439284814829!2d69.29211321627349!3d40.97975121833885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae3f8f15f714eb%3A0x6b165f34930807fe!2sTuyabuguz%20suv%20ombori!5e0!3m2!1suz!2s!4v1716438708767!5m2!1suz!2s',
            'slug'=>'ziyoratgoh',
            'photo' => 'locality-photo/KINDIKTEPA YODGORLIGI.png',
            'category_id' => 1
        ]);
        Locality::create([
            'name' => 'Wyndham mehmonxonasi',
            'description' => 'Tinchlantiruvchi muhit. Qulay joylashuv.',
            'information' => 'Tinchlantiruvchi muhit. Qulay joylashuv. Toshkent shahri markazida joylashgan ushbu 5 yulduzli mehmonxonada sport zali, katta yopiq va ochiq basseynlar, sauna va turk hammomi mavjud. Wyndham Tashkent mehmonxonasida bepul Wi-Fi mavjud. «Wyndham Tashkent» mehmonxonasi keng xonalar klassik va zamonaviy dizaynga ega. Barcha xonalar alohida boshqariladigan konditsionerga ega bo’lib, minibar va qahva va choy tayyorlash uchun jihozlarni o’z ichiga oladi. «Turkuaz» restoranida har kuni ertalab bufet nonushtasi taqdim etiladi. Unda mehmonlar xalqaro va o’zbek taomlarining xilma-xilligidan bahramand bo’lishlari, shuningdek, pianinoning jonli sadosini tinglashlari mumkin. Ish uchrashuvlari va korporativ tadbirlarni mehmonxonaning to’liq jihozlangan konferentsiya zallarida o’tkazish mumkin. Abdulla Qodiriy metro bekati piyoda 5 daqiqalik masofada joylashgan. Wyndham Tashkent Amir Temur muzeyidan 200 metr va mashhur Chorsu bozoridan 4 km uzoqlikda joylashgan. Mehmonlar bepul avtoturargoh va 24 soatlik qabulxonadan bahramand bo’lishadi. So‘rov bo‘yicha Toshkent xalqaro aeroportiga olib ketish va tushirish xizmati mavjud.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.60659924985!2d69.27746957479219!3d41.317421100334066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b520dbbc613%3A0x79f2d03d0917abe6!2sWyndham%20Tashkent!5e0!3m2!1suz!2s!4v1716453681724!5m2!1suz!2s',
            'slug'=>'mehmonxona',
            'photo' => 'locality-photo/Wyndham mehmonxonasi.jpeg',
            'category_id' => 2
        ]);
        Locality::create([
            'name' => 'Hilton Tashkent City',
            'description' => 'Juda noyob, va ajoyib ichki dizaynga ega.',
            'information' => 'Juda noyob, va ajoyib ichki dizaynga ega. 2019-yil oktyabr oyida ochilgan. Barcha xonalar konditsioner, minibar, bepul Wi-Fi va televizor bilan jihozlangan. Maxsus hammomda alohida dush va hammom, fen mavjud. Ovqatlanish uchun «Shosh» restoranida har kuni nonushta, tushlikda bo’lsa o’zbek va xalqaro taomlar taqdim etiladi. Terasda joylashgan “Tumbler Bar” an’anaviy bar taomlarini taklif qiladi. “Lobby Lounge” mehmonlarga bir piyola choy yoki kofe ustida ish yoki do’stona uchrashuv o’tkazish imkoniyatini taqdim etadi. Hilton Tashkent City mehmonxonasida 24 soat xona xizmati va fitnes markazi mavjud. Spa va sog’lomlashtirish markazi go’zallik muolajalari, massajlar, saunalarni taklif qiladi. Uchrashuv xonalari, turli tadbirlar uchun zal mavjud. Mehmonxona Xalqlar Do’stligi metro bekatigacha 10 daqiqalik piyoda yo’l. Aeroportdan 7 km va poezd stantsiyasidan 5 km masofada joylashgan.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.7644918675437!2d69.24632257479199!3d41.31398670054681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b685b689e13%3A0xaf4cdf526e02f5e7!2sHilton%20Tashkent%20City!5e0!3m2!1suz!2s!4v1716454033418!5m2!1suz!2s',
            'slug'=>'mehmonxona',
            'photo' => 'locality-photo/Hilton Tashkent City.jpeg',
            'category_id' => 2
        ]);
        Locality::create([
            'name' => 'Hotel Inspira-S Tashkent',
            'description' => '2021-yil aprel oyida ochilgan.',
            'information' => '2021-yil aprel oyida ochilgan. Hotel Inspira-S Tashkent mehmonxonasi restoran, fitnes markazi, bar va umumiy dam olish xonasiga ega. Bu mehmonxonada bankomat va bagaj saqlash uchun joy hamda bepul Wi-Fi mavjud. Mehmonxonada yopiq basseyn, hammom xizmati mavjud. Mehmonxona choynak, muzlatgich, minibar, seyf, televizor va xususiy hammom bilan jihozlangan konditsionerli xonalar bilan ta’minlaydi. Hotel Inspira-S Tashkent mehmonxonasining har bir xonasida choyshab va sochiqlar mavjud. Mehmonlar kontinental nonushta qilishlari mumkin. Inspira-S Tashkent mehmonxonasida sog’lomlashtirish zonasi, sauna mavjud. Bepul avtoturargoh va biznes markazi, shuningdek, 24 soatlik qabulxona mavjud.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.0342448311962!2d69.24185387479302!3d41.329868699562965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b96ac0ab009%3A0x4fadea057750be52!2sHotel%20Inspira-S%20Tashkent!5e0!3m2!1suz!2s!4v1716454279495!5m2!1suz!2s',
            'slug'=>'mehmonxona',
            'photo' => 'locality-photo/Hotel Inspira-S Tashkent.jpg',
            'category_id' => 2
        ]);
        Locality::create([
            'name' => 'Amir Temur xiyoboni',
            'description' => 'Bugungi kunda mashhur sarkarda nomi berilgan xiyobon 19-asr oxirida barpo etilgan.',
            'information' => 'Bugungi kunda mashhur sarkarda nomi berilgan xiyobon 19-asr oxirida barpo etilgan. O‘shanda u Toshkentning markazida, shaharning ikkita asosiy ko‘chasi kesishmasida joylashgan kichik bog‘dan iborat edi. 1994-yil 31-avgustda, O‘zbekiston mustaqilligining uch yilligi arafasida, bog‘da shohona harbiy kiyimidagi sarkardaning bronzadan yasalgan otliq haykali o‘rnatildi (haykaltaroshlar Kamol va Ilhom Jabborovlar), xiyobon tozalandi, ko‘kalamzorlashtirildi va favvoralari bo‘lgan maydonga aylantirildi. Amir Temurning "Kuch adolatdadur" shiori yodgorlikka to‘rt tilda yozib qo‘yilgan.

Mashhur davlat arbobi, sarkarda Amir Temur Shahrisabzdan uncha uzoq bo‘lmagan Xo‘ja Ilg‘or qishlog‘ida tug‘ilgan. U Barloslar oilasiga mansub Tarag‘ayning o‘g‘li edi. Temur yoshligidan turli urushlarda qatnashgan, boshqaruv tizimini chuqur o‘rgangan. U 30 yildan ortiq bepoyon imperiyani boshqarib, ulkan davlatni yaratadi. Temuriylar sulolasi hayoti va faoliyati haqida batafsil ma’lumotni bog‘ning yonida joylashgan "Temuriylar davlat muzeyi"da topish mumkin.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.8953988937014!2d69.27508658885499!3d41.31113910000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b2931f41f23%3A0x81095e06b654b845!2sAmir%20Temur%20xiyoboni!5e0!3m2!1suz!2s!4v1716454534138!5m2!1suz!2s',
            'slug'=>'hiyobon',
            'photo' => 'locality-photo/Amir Temur xiyoboni.webp',
            'category_id' => 3
        ]);
        Locality::create([
            'name' => 'Yapon bog‘i',
            'description' => 'Yana bir diqqatga sazovor joy',
            'information' => 'Yana bir diqqatga sazovor joy "Yapon bog‘i" hisoblanadi, bu katta shaharning o‘rtasida joylashgan o‘ziga xos yapon oroli! Shiyponlar, choy uyi, qulay yog‘och ko‘priklar, turli qushlar – bularning barchasi Yaponiya muhitini juda yaxshi taqdim etgan.

Bog‘ tarixi 1947-yilda, Toshkent markazidagi bo‘sh joy o‘rnida bog‘ tashkil etilishidan boshlangan. O‘shanda yapon harbiy asirlari ko‘l uchun chuqur qazigan. Bog‘ning rasmiy ochilishi 2001-yil 25-avgustda bo‘lib o‘tdi. Ushbu bog‘ ochilganidan buyon shahar mehmonlari uchun ham, uning aholisi uchun ham sevimli joylardan biriga aylandi.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.580352190796!2d69.27977737479365!3d41.33973779895145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b53dc15862d%3A0x8d24b8c872b8c98!2z5pel5pys5bqt5ZyS!5e0!3m2!1suz!2s!4v1716454721526!5m2!1suz!2s',
            'slug'=>'hiyobon',
            'photo' => 'locality-photo/Yapon bog‘i.webp',
            'category_id' => 3
        ]);
        Locality::create([
            'name' => 'Botanika bog‘i',
            'description' => 'Yana bir diqqatga sazovor joy',
            'information' => 'Akademik F.N. Rusanov nomidagi Toshkent botanika bog‘i – eng yoshi ulug‘ va eng katta tabiiy bog‘lardan biri. Hozir botanika bog‘i O‘zbekiston Respublikasi Fanlar akademiyasi O‘simliklar va hayvonot olami genofondi institutiga qaraydi. Botanika bog‘i yil davomida tashrif buyuruvchilar uchun ochiq.

O‘zbekistonda birinchi botanika bog‘i 1920-yilda tashkil etilgan. U ko‘p yillar davomida ekzotik o‘simliklarning noyob kollektsiyasini to‘plagan rus olimi F.N.Rusanovning tashabbusi bilan tashkil etilgan. Bugungi kunda bog‘ hududi 66 gektarni egallaydi va u poytaxt shimolida, Toshkent hayvonot bog‘i yonida joylashgan. Bog‘ kollektsiyasida 6000 dan ortiq o‘simlik turlari va navlari bor, bular 170 ta ignabargli daraxtlar, 800 ga yaqin tropik va subtropik o‘simliklar, 2000 dan ortiq ko‘p yillik o‘tlar hisoblanadi. Shuningdek, Botanika bog‘i hududida sun’iy suv havzalari ham mavjud. Ekzotik qushlarning 30 dan ortiq turi yashaydi.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.3457663166378!2d69.30617878885498!3d41.3448377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef499eca15af5%3A0xfc2ff111c466be7b!2sToshkent%20botanika%20bog%CA%BBi!5e0!3m2!1suz!2s!4v1716454925424!5m2!1suz!2s',
            'slug'=>'hiyobon',
            'photo' => 'locality-photo/Botanika bog‘i.webp',
            'category_id' => 3
        ]);


        Locality::create([
            'name' => 'Registon maydoni',
            'description' => 'Yana bir diqqatga sazovor joy',
            'information' => 'Ushbu maydon shaharning diqqatga sazovor muhim joylaridan biri bo‘lib, qadimiy, ammo hamisha navqiron shaharsozlik ansambli sifatida butun dunyoga dongi ketgan. Uni uchta qudratli maqbara binosi qurshab olgan bo‘lib, har biri alohida noyob bezak bilan pardozlangan. Sharq me’morchiligining ajoyib namunasi sifatida Samarqand YuNESKOning Butunjahon merosi ro‘yxatiga kiritilgan.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1572746.7745330376!2d64.66848729374998!3d39.65486700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18b7c2e59337%3A0x532c8e039ecc92af!2sRegiston%20Maydoni!5e0!3m2!1suz!2s!4v1716457846985!5m2!1suz!2s',
            'slug'=>'ziyoratgoh',
            'photo' => 'locality-photo/Registon maydoni.jpg',
            'category_id' => 4
        ]);
        Locality::create([
            'name' => 'Go‘ri-Amir maqbarasi',
            'description' => 'O‘rta Osiyodagi noyob obidalardan biri Zangi ota nomi bilan mashhur bo‘lgan so‘fiylik targ‘ibotchisi shayx Oyxo‘ja ibn Tojxo‘ja sharafiga shunday ataladi.',
            'information' => 'Go‘ri Amir tarixiy yodgorligi XV asr boshlarida qurilgan bo‘lib, o‘zbek me’morchilik san’atining buyuk ijodiy namunasi hisoblanadi. Muqaddam madrasa shahardagi mashhur ziyoli arboblarning farzandlariga ta’lim-tarbiya beruvchi ilm maskani sifatida qurilgan. Uning ro‘parasida maxsus xonaqoh qad rostlagan Bino qurilishi Muhammad Sulton tomonidan boshlangan bo‘lib, u Islom ta’lim markazi ochishni ko‘zlagan edi.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.0516999387573!2d66.96667427468678!3d39.64855100203707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18cc761ff98f%3A0x8a218422bc21edfa!2sGo&#39;r%20Amir%20Maqbarasi!5e0!3m2!1suz!2s!4v1716457959882!5m2!1suz!2s',
            'slug'=>'ziyoratgoh',
            'photo' => 'locality-photo/Go‘ri-Amir maqbarasi.jpg',
            'category_id' => 4
        ]);
        Locality::create([
            'name' => 'Bibixonim jome masjidi',
            'description' => 'Parkent tumani Kumushkon qishlog‘i «Chashma» mahallasining eng yuqori qismida joylashgan.',
            'information' => 'Amir Temur hajmi va chiroyi jihatidan sayyoramizdagi boshqa obidalardan ustun turgan go‘zal maqbarani qurib, ayoliga sovg‘a qilgan. Jilvakor devorlari, inshootning baland qurilgan elementlari, marmar toshdan kesib ishlangan bino kubbasi Amir Temur va uning ayoli nomlarini tarixda muhrlash uchun xizmat qilishi kerakligi nazarda tutilgan emish.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3071.509501690502!2d66.97750667468758!3d39.660752101305775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18b96f1a8c49%3A0x710d9f233b69199e!2z0JHQuNCx0Lgg0KXQvtC90YPQvCDQnNCw0YHQttC40LTQuA!5e0!3m2!1suz!2s!4v1716458094993!5m2!1suz!2s',
            'slug'=>'ziyoratgoh',
            'photo' => 'locality-photo/Bibixonim_masjidi_kirish_qismi.jpg',
            'category_id' => 4
        ]);
        Locality::create([
            'name' => 'Grand Plaza Hotel Samarkand',
            'description' => 'Tinchlantiruvchi muhit. Qulay joylashuv.',
            'information' => 'Grand Plaza Hotel Samarkad — Samarqand shahridagi yangi qulay mehmonxona, shahar markazida joylashgan. Old stol har kuni 24/7 ochiq. Mehmonxonada bepul Wi-Fi mavjud.

XIZMATLAR
Biz quyidagi toifadagi yorug\' xonalarni taklif etamiz: Standard Twin, Sureior Double, Superior Twin, Sute Twin va Presidential Sute. Xonalar sog\'lom uyqu va qulay yashash uchun barcha qulayliklar bilan jihozlangan. Xizmat ko\'rsatishning xalqaro standartlari va zamonaviy mehmonxona xizmatlari tufayli mehmonxona biznes sayohatchilarga ham, oddiy sayyohlarga ham yoqadi.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.60659924985!2d69.27746957479219!3d41.317421100334066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b520dbbc613%3A0x79f2d03d0917abe6!2sWyndham%20Tashkent!5e0!3m2!1suz!2s!4v1716453681724!5m2!1suz!2s',
            'slug'=>'mehmonxona',
            'photo' => 'locality-photo/Grand Plaza Hotel Samarkand',
            'category_id' => 5
        ]);
        Locality::create([
            'name' => 'Khan Mehmonxonasi',
            'description' => 'Juda noyob, va ajoyib ichki dizaynga ega.',
            'information' => 'Khan Mehmonxonasi uydagi qulaylik va zamonaviy muhitdagi qulaylikni o\'zida mujassam etgan. Barcha xonalar sokin yopiq hovliga qaraydi, ikki oynali oynalar va konditsioner bilan jihozlangan, dush va fen bilan jihozlangan alohida hojatxona mavjud. Xonalar televizor, sun\'iy yo\'ldosh televideniesi, shuningdek, muzlatgich va qimmatbaho narsalarni saqlash uchun seyf bilan jihozlangan.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49135.13691445657!2d66.9157502279389!3d39.67342798663151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18ce5c6ea141%3A0x7700852214eaa7c4!2sKhan%20Hotel%20Samarkand!5e0!3m2!1suz!2s!4v1716463251145!5m2!1suz!2s',
            'slug'=>'mehmonxona',
            'photo' => 'locality-photo/Khan Mehmonxonasi.jpg',
            'category_id' => 5
        ]);
        Locality::create([
            'name' => 'Usman Mehmonxonasi',
            'description' => '2021-yil aprel oyida ochilgan.',
            'information' => 'USMAN mehmonxonasi Samarqand shahrida joylashgan. Ushbu mehmonxonada mehmonlarni ro\'yxatga olish kuniga 24 soat ishlaydi.
    Mehmonxonadagi barcha xonalar tekis ekranli televizor, konditsioner va bepul Wi-Fi bilan jihozlangan.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3071.5591363681774!2d66.94992367468758!3d39.65963530137265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d19ea0b21ae01%3A0xce8c98e130b7d954!2sUsman%20hotel!5e0!3m2!1suz!2s!4v1716463457611!5m2!1suz!2s',
            'slug'=>'mehmonxona',
            'photo' => 'locality-photo/Usman Mehmonxonasi.jpg',
            'category_id' => 5
        ]);
        Locality::create([
            'name' => 'Bog‘ibaland manzarali bog‘i',
            'description' => 'Bugungi kunda mashhur sarkarda nomi berilgan xiyobon 19-asr oxirida barpo etilgan.',
            'information' => 'Bog‘ibaland manzarali bog‘i – bu Amir Temurning o‘n ikkita bog‘laridan biri bo‘lib, Zarafshonning chap qirg‘og‘idagi Cho‘ponota tog‘lari etagida joylashgan va shu sababli o‘z nomiga ega bo‘lgan. Qadimiy bog‘\' “Boburnoma”da ham eslatib o‘tilgan bo‘lib, uni Buyuk Amir Temur sevimli nevarasi Oqabegim –  Mironshohning qizi uchun qurdirgan edi.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.07933249376!2d66.93533837468681!3d39.647929102074315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d1925900e4f5f%3A0x74a82ddde34ab532!2sAmir%20Temur%20ko&#39;chasi%2C%20Samarqand%2C%20Samarqand%20viloyati%2C%20O%60zbekiston!5e0!3m2!1suz!2s!4v1716471476529!5m2!1suz!2s',
            'slug'=>'hiyobon',
            'photo' => 'locality-photo/Bog‘ibaland manzarali bog‘i.jpg',
            'category_id' => 6
        ]);
        Locality::create([
            'name' => 'Meriya Park of the Samarkand region',
            'description' => 'Yana bir diqqatga sazovor joy',
            'information' => 'Har qanday go‘zallikning qadriga yetgan Buyuk Amir Temur nafaqat qattiqqo‘l hukmdor va shaharsoz bo‘lgan. O‘lka tarixini asrab-avaylaydigan, mahalliy anjirlarni yetishtirishning o‘ziga xos sirini bilgan va uni avloddan-avlodga yetkazadigan mahalliy aholi ham buni tasdiqlaydi.Noyob bog‘ni sayyohlik ob’yektiga aylantirish g‘oyasi Turizmni rivojlantirish davlat qo‘mitasi va Samarqand Turizmni rivojlantirish boshqarmasiga tegishlidir.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12287.687079249179!2d66.94708872654738!3d39.651475108172654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d1982a784c8e9%3A0xb7c83d9b1b42b42c!2sMeriya%20Park%20of%20the%20Samarkand%20region!5e0!3m2!1suz!2s!4v1716472062456!5m2!1suz!2s" width="600',
            'slug'=>'hiyobon',
            'photo' => 'locality-photo/Meriya Park .JPG',
            'category_id' => 6
        ]);
        Locality::create([
            'name' => 'Afrosiyob favvoralari',
            'description' => 'Yana bir diqqatga sazovor joy',
            'information' => 'Eng yoshi ulug‘ va eng katta tabiiy bog‘lardan biri. Hozir botanika bog‘i O‘zbekiston Respublikasi Fanlar akademiyasi O‘simliklar va hayvonot olami genofondi institutiga qaraydi. Botanika bog‘i yil davomida tashrif buyuruvchilar uchun ochiq.

O‘zbekistonda birinchi botanika bog‘i 1920-yilda tashkil etilgan. U ko‘p yillar davomida ekzotik o‘simliklarning noyob kollektsiyasini to‘plagan rus olimi F.N.Rusanovning tashabbusi bilan tashkil etilgan. Bugungi kunda bog‘ hududi 66 gektarni egallaydi va u poytaxt shimolida, Toshkent hayvonot bog‘i yonida joylashgan. Bog‘ kollektsiyasida 6000 dan ortiq o‘simlik turlari va navlari bor, bular 170 ta ignabargli daraxtlar, 800 ga yaqin tropik va subtropik o‘simliklar, 2000 dan ortiq ko‘p yillik o‘tlar hisoblanadi. Shuningdek, Botanika bog‘i hududida sun’iy suv havzalari ham mavjud. Ekzotik qushlarning 30 dan ortiq turi yashaydi.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12287.687079249179!2d66.94708872654738!3d39.651475108172654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d194d1e1be93b%3A0x4b7757d59e262ae2!2sAfrosiyob%20favvoralari!5e0!3m2!1suz!2s!4v1716472227395!5m2!1suz!2s',
            'slug'=>'hiyobon',
            'photo' => 'locality-photo/Afrosiyob favvoralari.jpg',
            'category_id' => 6
        ]);



        Locality::create([
            'name' => 'Xoja Muhammad Orif ar-Revgariy maqbarasi',
            'description' => 'Parkent tumani Kumushkon qishlog‘i «Chashma» mahallasining eng yuqori qismida joylashgan.',
            'information' => 'Xoja Orif ar-Revgariy dafn etilgan joy. U Buxoroning yetti muqaddas pirlaridan ikkinchisi hisoblanadi. Uning ulug‘vor yuzi qaysidir ma’noda oyni eslatgan. Shu sababli zamondoshlari unga “Mohitobon” – “to‘lin oy” laqabini berishgan.  U XII asr o‘rtalarida Revgar qishlog‘ida tug‘ilgan. U buyuk shayx Xoja Abdulxoliq Gʻijduvoniyning shogirdi edi. Ustozining vafotidan so‘ng, u boshqalarga ma’naviy ustozlik qilishga ijozat olgan. Umrining oxiriga qadar Orif Revgariy faol diniy faoliyat bilan shug‘ullanib, baland ovozda zikr qilishni nihoyatda sevgan. U Buxoro hududidagi Shofirkon tumanida dafn qilingan.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3050.8765878588324!2d64.4996157315628!3d40.12275368857811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f507a94532b0f5f%3A0x9cab5a941ae3194d!2sXoja%20Muhammad%20Orif%20Ar-Revgariy!5e0!3m2!1suz!2s!4v1716472615842!5m2!1suz!2s',
            'slug'=>'ziyoratgoh',
            'photo' => 'locality-photo/Xoja Muhammad.jpg',
            'category_id' => 7
        ]);
        Locality::create([
            'name' => 'Xoja Mahmud Anjir Fag‘naviy maqbarasi',
            'description' => 'O‘rta Osiyodagi noyob obidalardan biri Zangi ota nomi bilan mashhur bo‘lgan so‘fiylik targ‘ibotchisi shayx Oyxo‘ja ibn Tojxo‘ja sharafiga shunday ataladi.',
            'information' => 'Xoja Mahmud Anjir Fag‘naviy maqbarasi -  buyuk so‘fiy, ma’naviy ustoz dafn etilgan joy. U Vobkent shahri yaqinida tug‘ilgan. Anjir Fag‘naviy usta-duradgorlik bilan shug‘ullangan. Ilm yo‘lini bosib o‘tib, murshid darajasiga chiqqan. Xoja Mahmud Anjir Fag‘naviy birinchi bo‘lib zikrni baland ovozda talaffuz qilib, “uxlayotganlar uyg‘onishlari kerak” deb hisoblagan. U ona qishlog‘i Anjirobodda dafn qilingan. ',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3053.4915257674566!2d64.48570807471282!3d40.064446877007164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f5071a057e1186d%3A0xff070704fefee3c2!2sXoja%20Mahmud%20Anjir%20Fag%E2%80%99naviy!5e0!3m2!1suz!2s!4v1716472772559!5m2!1suz!2s',
            'slug'=>'ziyoratgoh',
            'photo' => 'locality-photo/Xoja Mahmud Anjir.jpg',
            'category_id' => 7
        ]);
        Locality::create([
            'name' => 'Xoja Bahouddin Naqshband majmuasi',
            'description' => 'Parkent tumani Kumushkon qishlog‘i «Chashma» mahallasining eng yuqori qismida joylashgan.',
            'information' => 'Buxorodan 12 km uzoqlikda joylashgan noyob yodgorlik majmuasi. Majmua buyuk so‘fiy, diniy ulamo, eng yirik so‘fiylik tariqatining asoschisi Bahouddin Naqshband sharafiga qurilgan. Naqshband laqabi “naqsh soluvchi” degan ma’noni bildiradi. Tasavvufga bo‘lgan qiziqishiga bobosi sabab bo‘lgan. Uning birinchi ustozi shayx Muhammad Bobo Samosiy bo‘lgan. Keyinchalik ustozi Naqshbandiyni Xojagon jamoati bilan tanishtirgan Shayx Amir Kulol huzuriga jo‘natdi. Bahouddin Muhammad Naqshband oddiylik tarafdori bo‘lib, marosimlar va namoyishkorona taqvo qilishni rad etgan. U meditatsiya (mushohada)ning 11 qoidasini ishlab chiqqan. Naqshband o‘ziga xos nafas olish usuli orqali “ovozsiz zikr” tushunchasini keng yoydi. Naqshbandiya tasavvuf tarifati butun dunyoda keng tarqalgan. Bahouddin Muhammad Naqshband majmuasi madrasa, ikkita masjid, minora va ushbu buyuk shaxsning hayoti va faoliyatiga oid qiziqarli eksponatlar va ma’lumotlar to‘plangan muzeydan iborat. So‘fiylar ustozi bo‘lgan bu inson solihlarga xos hayot kechirgan va odamlar uchun ibrat namunasi bo‘lgan.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.5692614254904!2d64.53458095348991!3d39.800301235737535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f501aaf2df46587%3A0xf70c6c68b82f0a47!2s%C5%9Eah%C4%B1%20Nak%C5%9F%C4%B1bend%20Behaeddin-i%20Buhari%20Hazretleri!5e0!3m2!1suz!2s!4v1716472879412!5m2!1suz!2s',
            'slug'=>'ziyoratgoh',
            'photo' => 'locality-photo/Xoja Bahouddin Naqshban.jpg',
            'category_id' => 7
        ]);
        Locality::create([
            'name' => 'Asal boutique hotel',
            'description' => 'Tinchlantiruvchi muhit. Qulay joylashuv.',
            'information' => 'Tinchlantiruvchi muhit. Qulay joylashuv. Toshkent shahri markazida joylashgan ushbu 5 yulduzli mehmonxonada sport zali, katta yopiq va ochiq basseynlar, sauna va turk hammomi mavjud. Wyndham Tashkent mehmonxonasida bepul Wi-Fi mavjud. «Wyndham Tashkent» mehmonxonasi keng xonalar klassik va zamonaviy dizaynga ega. Barcha xonalar alohida boshqariladigan konditsionerga ega bo’lib, minibar va qahva va choy tayyorlash uchun jihozlarni o’z ichiga oladi. «Turkuaz» restoranida har kuni ertalab bufet nonushtasi taqdim etiladi. Unda mehmonlar xalqaro va o’zbek taomlarining xilma-xilligidan bahramand bo’lishlari, shuningdek, pianinoning jonli sadosini tinglashlari mumkin. Ish uchrashuvlari va korporativ tadbirlarni mehmonxonaning to’liq jihozlangan konferentsiya zallarida o’tkazish mumkin. Abdulla Qodiriy metro bekati piyoda 5 daqiqalik masofada joylashgan. Wyndham Tashkent Amir Temur muzeyidan 200 metr va mashhur Chorsu bozoridan 4 km uzoqlikda joylashgan. Mehmonlar bepul avtoturargoh va 24 soatlik qabulxonadan bahramand bo’lishadi. So‘rov bo‘yicha Toshkent xalqaro aeroportiga olib ketish va tushirish xizmati mavjud.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6132.335692071203!2d64.41648229008968!3d39.78078848131515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f50092bb8ae5fcb%3A0x4d25eeda82e8a1e0!2sASAL!5e0!3m2!1suz!2s!4v1716473111652!5m2!1suz!2s',
            'slug'=>'mehmonxona',
            'photo' => 'locality-photo/445970268.jpg',
            'category_id' => 8
        ]);
        Locality::create([
            'name' => 'Mercure Bukhara Old Town',
            'description' => 'Juda noyob, va ajoyib ichki dizaynga ega.',
            'information' => 'Juda noyob, va ajoyib ichki dizaynga ega. 2019-yil oktyabr oyida ochilgan. Barcha xonalar konditsioner, minibar, bepul Wi-Fi va televizor bilan jihozlangan. Maxsus hammomda alohida dush va hammom, fen mavjud. Ovqatlanish uchun «Shosh» restoranida har kuni nonushta, tushlikda bo’lsa o’zbek va xalqaro taomlar taqdim etiladi. Terasda joylashgan “Tumbler Bar” an’anaviy bar taomlarini taklif qiladi. “Lobby Lounge” mehmonlarga bir piyola choy yoki kofe ustida ish yoki do’stona uchrashuv o’tkazish imkoniyatini taqdim etadi. Hilton Tashkent City mehmonxonasida 24 soat xona xizmati va fitnes markazi mavjud. Spa va sog’lomlashtirish markazi go’zallik muolajalari, massajlar, saunalarni taklif qiladi. Uchrashuv xonalari, turli tadbirlar uchun zal mavjud. Mehmonxona Xalqlar Do’stligi metro bekatigacha 10 daqiqalik piyoda yo’l. Aeroportdan 7 km va poezd stantsiyasidan 5 km masofada joylashgan.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3066.12560558516!2d64.41862317469518!3d39.78173649404445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f5009b28c9a0121%3A0xad5a49b99ede8f45!2sMercure%20Bukhara%20Old%20Town!5e0!3m2!1suz!2s!4v1716473269745!5m2!1suz!2s',
            'slug'=>'mehmonxona',
            'photo' => 'locality-photo/Mercure Bukhara.jpg',
            'category_id' => 8
        ]);
        Locality::create([
            'name' => 'Hotel Asal Butik',
            'description' => '2021-yil aprel oyida ochilgan.',
            'information' => '2021-yil aprel oyida ochilgan. Hotel Inspira-S Tashkent mehmonxonasi restoran, fitnes markazi, bar va umumiy dam olish xonasiga ega. Bu mehmonxonada bankomat va bagaj saqlash uchun joy hamda bepul Wi-Fi mavjud. Mehmonxonada yopiq basseyn, hammom xizmati mavjud. Mehmonxona choynak, muzlatgich, minibar, seyf, televizor va xususiy hammom bilan jihozlangan konditsionerli xonalar bilan ta’minlaydi. Hotel Inspira-S Tashkent mehmonxonasining har bir xonasida choyshab va sochiqlar mavjud. Mehmonlar kontinental nonushta qilishlari mumkin. Inspira-S Tashkent mehmonxonasida sog’lomlashtirish zonasi, sauna mavjud. Bepul avtoturargoh va biznes markazi, shuningdek, 24 soatlik qabulxona mavjud.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12264.498834786042!2d64.41089834275051!3d39.781756622930864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f50092bb8ae5fcb%3A0x4d25eeda82e8a1e0!2sASAL!5e0!3m2!1suz!2s!4v1716473435624!5m2!1suz!2s',
            'slug'=>'mehmonxona',
            'photo' => 'locality-photo/Hotel Asal Butik.jpg',
            'category_id' => 8
        ]);
        Locality::create([
            'name' => 'Buxoro botanika bog‘i',
            'description' => 'Bugungi kunda mashhur sarkarda nomi berilgan xiyobon 19-asr oxirida barpo etilgan.',
            'information' => 'Bugungi kunda mashhur sarkarda nomi berilgan xiyobon 19-asr oxirida barpo etilgan. O‘shanda u Toshkentning markazida, shaharning ikkita asosiy ko‘chasi kesishmasida joylashgan kichik bog‘dan iborat edi. 1994-yil 31-avgustda, O‘zbekiston mustaqilligining uch yilligi arafasida, bog‘da shohona harbiy kiyimidagi sarkardaning bronzadan yasalgan otliq haykali o‘rnatildi (haykaltaroshlar Kamol va Ilhom Jabborovlar), xiyobon tozalandi, ko‘kalamzorlashtirildi va favvoralari bo‘lgan maydonga aylantirildi. Amir Temurning "Kuch adolatdadur" shiori yodgorlikka to‘rt tilda yozib qo‘yilgan.

Mashhur davlat arbobi, sarkarda Amir Temur Shahrisabzdan uncha uzoq bo‘lmagan Xo‘ja Ilg‘or qishlog‘ida tug‘ilgan. U Barloslar oilasiga mansub Tarag‘ayning o‘g‘li edi. Temur yoshligidan turli urushlarda qatnashgan, boshqaruv tizimini chuqur o‘rgangan. U 30 yildan ortiq bepoyon imperiyani boshqarib, ulkan davlatni yaratadi. Temuriylar sulolasi hayoti va faoliyati haqida batafsil ma’lumotni bog‘ning yonida joylashgan "Temuriylar davlat muzeyi"da topish mumkin.',
            'ishlash_vaqti' => '00:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12269.873808546334!2d64.42092769786119!3d39.751589434047006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f5007c486530e89%3A0x2f9b64adab310828!2sBuxoro%20botanika%20bog%E2%80%98i!5e0!3m2!1suz!2s!4v1716473624221!5m2!1suz!2s',
            'slug'=>'hiyobon',
            'photo' => 'locality-photo/Buxoro botanika.jpg',
            'category_id' => 9
        ]);
        Locality::create([
            'name' => 'Istirohat bog‘i',
            'description' => 'Yana bir diqqatga sazovor joy',
            'information' => 'Yana bir diqqatga sazovor joy "Yapon bog‘i" hisoblanadi, bu katta shaharning o‘rtasida joylashgan o‘ziga xos yapon oroli! Shiyponlar, choy uyi, qulay yog‘och ko‘priklar, turli qushlar – bularning barchasi Yaponiya muhitini juda yaxshi taqdim etgan.

Bog‘ tarixi 1947-yilda, Toshkent markazidagi bo‘sh joy o‘rnida bog‘ tashkil etilishidan boshlangan. O‘shanda yapon harbiy asirlari ko‘l uchun chuqur qazigan. Bog‘ning rasmiy ochilishi 2001-yil 25-avgustda bo‘lib o‘tdi. Ushbu bog‘ ochilganidan buyon shahar mehmonlari uchun ham, uning aholisi uchun ham sevimli joylardan biriga aylandi.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12397.372483793377!2d66.55425005541991!3d39.0302955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4c62dfcf5a1a8f%3A0x2c2298f25a2db1ce!2sIstirohat%20bog%E2%80%98i!5e0!3m2!1suz!2s!4v1716473767583!5m2!1suz!2s',
            'slug'=>'hiyobon',
            'photo' => 'locality-photo/parkichi1.jpg',
            'category_id' => 9
        ]);
        Locality::create([
            'name' => 'Yoshlik madaniyat va istirohat bogʻi',
            'description' => 'Yana bir diqqatga sazovor joy',
            'information' => 'Akademik F.N. Rusanov nomidagi Toshkent botanika bog‘i – eng yoshi ulug‘ va eng katta tabiiy bog‘lardan biri. Hozir botanika bog‘i O‘zbekiston Respublikasi Fanlar akademiyasi O‘simliklar va hayvonot olami genofondi institutiga qaraydi. Botanika bog‘i yil davomida tashrif buyuruvchilar uchun ochiq.

O‘zbekistonda birinchi botanika bog‘i 1920-yilda tashkil etilgan. U ko‘p yillar davomida ekzotik o‘simliklarning noyob kollektsiyasini to‘plagan rus olimi F.N.Rusanovning tashabbusi bilan tashkil etilgan. Bugungi kunda bog‘ hududi 66 gektarni egallaydi va u poytaxt shimolida, Toshkent hayvonot bog‘i yonida joylashgan. Bog‘ kollektsiyasida 6000 dan ortiq o‘simlik turlari va navlari bor, bular 170 ta ignabargli daraxtlar, 800 ga yaqin tropik va subtropik o‘simliklar, 2000 dan ortiq ko‘p yillik o‘tlar hisoblanadi. Shuningdek, Botanika bog‘i hududida sun’iy suv havzalari ham mavjud. Ekzotik qushlarning 30 dan ortiq turi yashaydi.',
            'ishlash_vaqti' => '09:00:00',
            'lokatsiya' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d397867.1378572557!2d66.14890833540997!3d38.82474193468604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4c87fd93c68c87%3A0x8b53e95049608540!2sYoshlik%20madaniyat%20va%20istirohat%20bog%CA%BBi!5e0!3m2!1suz!2s!4v1716474219814!5m2!1suz!2s',
            'slug'=>'hiyobon',
            'photo' => 'locality-photo/Yoshlik.jpg',
            'category_id' => 9
        ]);
    }
}
