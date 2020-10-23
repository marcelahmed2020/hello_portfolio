<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Settings =  \App\Settings::create([
            'site_name'=>'Marcel',
               'facebook'=>'https://www.facebook.com',
            'twitter'=>'https://www.twitter.com',
            'instagram'=>'https://www.instagram.com',
            'linkedin'=>'https://www.linkedin.com',
            'email'=>'ramikhoury056@gmail.com',
            'description'=>'A passionate and educated web developer, always following best practices. I am attentive to details and purposeful person with extensive interests. I love developing websites, creating them and making them more protected. Ready to offer my expertise! Feel free to get in touch for an initial ',
            'keywords'=>'HTML,CSS,
JQuery,PHP,Laravel,
Javascript,Ajax,Vuejs',
            'status'=>1,'message_maintenance'=>'Site Not Working Now See You Soon !',
            'facebook_status'=> 1, 'adress'=> 'Cairo , Egypt',
            'instagram_status'=>1,'linkedin_status'=>1,
            'twitter_status'=>1,
            'latitude' => '556565656565',
            'longitude'=>'88888888',
            'logo'=>0,'date'=>0,
        ]);
        $about   =  \App\About::create([
                'title'=>'Web Developer',
                'sub_title'=>'my nickname is marcel , my realname is mohammed ahmmed born in Aswan ,Egypt ',
                'birthday'=>'1 January 1996',
                'age'=>'24',
                'phone'=>'+201123156693',
                'image'=>0,
                'freelance'=>'Available',
                'degree'=>'Bachelor',
                'website'=>'https://',
                'desc'=>'A passionate and educated web developer, always following best practices. I am attentive to details and purposeful person with extensive interests. I love developing websites, creating them and making them more protected. Ready to offer my expertise! Feel free to get in touch for an initial',
                'one'=>1,
        ]);
   $services_title = ['Build Website' , 'Web Support & Security','Domain & Host'];
   $services_desc  = ['Create a website from scratch with Html/Css,Php Laravel, Vue.js, Javescrip, Jquery' , 'i can help you with your website support & securit','I Can Bring you Domain & Host With Good Price'];
   $services_icon  = ['icofont-code','icofont-ssl-security','live-support'];
   foreach ($services_title as $key => $services_t){
      $services = \App\Services::create([
           'title' => $services_t,
           'desc' => $services_desc[$key],
           'icon' => $services_icon[$key]
       ]);
   }
        $skills_title = ['HTML\CSS','PHP','Laravel','Vue.js','Javescript','Ajax','JQuery'];
        $skills_progress = [80,90,94,85,70,75,70];

        foreach ($skills_title as $key => $skills_ti){
            $Skills = \App\Skills::create([
                'title' => $skills_ti,
                'progress' => $skills_progress[$key]
            ]);
        }

        $Education   =  \App\Education::create([
            'title'=>'Information Systems, Management and Business',
            'sub_title'=>'Bachelor Degree',
            'from'=>2016,
            'to'=>2020,
            'desc'=>'Bachelor Degree in Information Systems,Management and Business'
        ]);
        $Portfolios_title = ['E-commerce Website','Portrait Website'];
        $Portfolios_link = ['http://evening-mountain-18718.herokuapp.com/','https://www.portrait-dev.com'];
        foreach ($Portfolios_title as $key => $Portfolios_ti){
            $Portfolios   =  \App\Portfolios::create([
                'title' => $Portfolios_ti,
                'link' => $Portfolios_link[$key]
            ]);
        }
  $ex_title = ['Web Developer','Web Developer'];
  $ex_subtitle = ['Freelancer','GrafixEg Company'];
  $ex_from = [2017,2019];
  $ex_to = [2019,2020];
  $ex_desc = ['I was working as freelancer on upwork and freelancer website','I was working as web developer in Grafix Company In Cairo'];
        foreach ($ex_title as $key => $ex_ti){
            $ProfessionalExperience   =  \App\ProfessionalExperience::create([
                'title' => $ex_ti,
                'sub_title' => $ex_subtitle[$key],
                'from' => $ex_from[$key],
                'to' => $ex_to[$key],
                'desc' => $ex_desc[$key]
            ]);
        }


//        ProfessionalExperience



    }
}
