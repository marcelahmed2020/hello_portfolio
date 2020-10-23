<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'Marcel Ahmed',
            'email' => 'super_admin@app.com',
            'image' => '0',
//            'max_image' => '74629.jpg',
            'status' => '1',
            'max_image' => '74629.jpg',
            'min_image' => '8280.jpg',
            'password' => bcrypt('123456'),
        ]);
//        \DB::insert('insert into abouts
//         (id, image, birthday, age, phone, email, one, created_at, updated_at, enabled, edit, status, delete)
//          values
//           (?, ?,?,?,?,?, ?,?,? ,?,?,?,?)', [1, '41121.jpeg', '1996-01-01', '0', '201123156692', 'nubianmarcel@gmail.com',
//            1, '2020-10-14 10:00:33', '2020-10-17 17:14:47', 1, 1, 1, 1]);
//        \DB::insert('insert into about_translations
//         (`id`, `title`, `sub_title`, `freelance`, `degree`, `desc`, `about_id`, `locale`, `created_at`, `updated_at`, `address`)
//          values
//           (?, ?,?,?,?,?, ?,?,? ,?,?)',
//            [1, 'Web Developer', 'my nickname is marcel , my real name is mohammed ahmed born in Aswan ,Egypt', 'Available', 'Bachelor', 'A passionate and educated web developer, always following best practices.\r\nI am attentive to details and purposeful person with extensive interests.\r\nI love developing websites, creating them and making them more protected.\r\nReady to offer my expertise! Feel free to get in touch for an initial', 1, 'en', NULL, NULL, 'Cairo,Egypt']);
//        \DB::insert('insert into about_translations
//         (`id`, `title`, `sub_title`, `freelance`, `degree`, `desc`, `about_id`, `locale`, `created_at`, `updated_at`, `address`)
//          values
//           (?, ?,?,?,?,?, ?,?,? ,?,?)',
//            [2, 'Веб-разработчик', 'мое прозвище Марсель, мое настоящее имя Мохаммед Ахмед родился в Асуане, Египет',
//                'Доступный', 'Холостяк', 'Увлеченный и образованный веб-разработчик, всегда следует лучшим практикам.\r\nВнимательный к деталям и целеустремленный человек с обширными интересами.\r\nМне нравится разрабатывать веб-сайты, создавать их и делать их более защищенными.\r\nГотов предложить свой опыт! Не стесняйтесь связаться с нами для первоначального', 1, 'ru', NULL, NULL, 'Каир, Египт']);
// \DB::insert('insert into about_translations
//         (`id`, `title`, `sub_title`, `freelance`, `degree`, `desc`, `about_id`, `locale`, `created_at`, `updated_at`, `address`)
//          values
//           (?, ?,?,?,?,?, ?,?,? ,?,?)',
//            [3,'مطور ويب','كنيتي مارسيل ، اسمي الحقيقي محمد أحمد من مواليد أسوان ، مصر','متاح',
//                'بكالوريوس','مطور ويب شغوف ومتعلم ، يتبع دائمًا أفضل الممارسات.
//أنا منتبه إلى التفاصيل وهادف مع اهتمامات واسعة النطاق.
//أحب تطوير مواقع الويب وإنشائها وجعلها أكثر حماية.
//على استعداد لتقديم خبرتي! لا تتردد في الاتصال لأول مرة',1,'ar', NULL, NULL, 'القاهرة، مصر']);

        \DB::insert("insert into settings
         (id, phone1, facebook, facebook_status, twitter, twitter_status, instagram, instagram_status, linkedin, linkedin_status, vk, vk_status, telegram, telegram_status, whatsapp, whatsapp_status, logo, date, email, closed, edit)
          values
           (1,'+2012452221', '0', 1, '0', 1, '0', 1, '0', 1, '0', 1, 'marcdev', 1, '+201123156693', 1, '0', '0', 'dev@gmail.com', 1, 1)");

  \DB::insert("insert into settings_translations
         (id,site_name,adress,description,keywords,message_maintenance,head_office,settings_id,locale,created_at,updated_at)
          values
           (1, 'Marcel Ahmed', 'Cairo, Egypt', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more', 'It  , is,  along, established , fact , that, reader ,will, be ,distracted ,by the, readable, content', '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"', 'cairo, egypt', 1, 'en', NULL, NULL)");
//  \DB::insert('insert into settings
//         (`id`, `site_name`, `adress`, `description`, `keywords`, `message_maintenance`, `head_office`, `settings_id`, `locale`, `created_at`, `updated_at`)
//          values
//           (?, ?,?,?,?,?, ?,?,? ,?,?)',
//             [2, 'مرسل أحمد', 'القاهرة، مصر', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. الهدف من استخدام Lorem Ipsum هو أنه يحتوي على المزيد', 'إنها حقيقة ثابتة على طول القارئ أن يشتت انتباه القارئ بالمحتوى المقروء', '\"ولا هو أبعد من ذلك لأن هذا هو ألم الجزر ، مينيابوليس ، يريد الحصول على ...\"\r\n\"لا يوجد من يحب الألم نفسه ، ويسعى وراءه ويريد الحصول عليه ، لمجرد أنه ألم ...\"', 'القاهرة، مصر', 1, 'ar', NULL, NULL]);
//  \DB::insert('insert into settings
//         (`id`, `site_name`, `adress`, `description`, `keywords`, `message_maintenance`, `head_office`, `settings_id`, `locale`, `created_at`, `updated_at`)
//          values
//           (?, ?,?,?,?,?, ?,?,? ,?,?)',
//             [3, 'Мурсал Ахмад', 'Каир, Египт', 'Давно установлено, что читатель будет отвлекаться на удобочитаемое содержимое страницы при просмотре ее макета. Смысл использования Lorem Ipsum заключается в том, что в нем есть больше', 'Вместе с тем установлен факт, что читатель будет отвлекаться на читабельный контент.', '\"Более того, любой человек, принадлежащий к тем, кто спокойно хотел бы, чтобы он желал достичь не ipsum dolor sit amet, conctetur,...\"\r\n\" Нет никого, кто любит саму боль, кто ищет ее и хочет ее получить просто потому, что это боль....\"', 'Каир, Египт', 1, 'ru', NULL, NULL]);


    }
}
