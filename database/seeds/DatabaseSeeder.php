<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use database\seeds\LanguagesSeeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
        $this->call('LanguagesSeeder');
        $this->command->info('languages table seeded!');

        /*$this->call('PagesSeeder');
        $this->command->info('Pages Are now seeded!');*/

        /*$this->call('mongoSeeder');
        $this->command->info('Mongo data is now seeded!');*/

        /*$this->call('routesSeeder');
        $this->command->info('Routes Are now seeded!');*/

	}

}


class LanguagesSeeder extends Seeder {

    public function run()
    {
        DB::table('languages')->delete();
        DB::statement(
            "INSERT INTO `languages` (`title`, `title_native`, `code`, `code03`, `active`, `visible`) VALUES
                ('Arabic', 'العربية', 'AR', 'ARA', 1, 1),
            ('Chinese', '漢語', 'CN', 'CHI', 1, 1),
            ('German', 'Deutsch', 'DE', 'GER', 1, 1),
            ('English', 'English', 'EN', 'ENG', 1, 1),
            ('Spanish', 'Español', 'ES', 'SPA', 1, 1),
            ('French', 'Français', 'FR', 'FRA', 1, 1),
            ('Italian', 'Italiano', 'IT', 'ITA', 1, 1),
            ('Japanese', '日本語', 'JA', 'JPN', 1, 1),
            ('Russian', 'Русский', 'RU', 'RUS', 1, 1);"
        );
    }

}


class PagesSeeder extends Seeder {

    public function run()
    {
        DB::table('page_closure')->delete();
        DB::table('pages')->delete();

        $home = new App\Page();
        $home->save();
        $home->title = 'home';
        $home->head = '';
        $home->body = 'home';
        $home->update();
        $home->head->tags = ['asd'=>'first','seconde','third'];
        $home->head->update();

        $about = new App\Page();
        $about->save();
        $about->title = 'about';
        $about->head = '';
        $about->body = 'about';
        $about->update();
        $about->head->tags = ['first','seconde','third'];
        $about->head->update();


        $contact = new App\Page();
        $contact->save();
        $contact->head = 'Contact us';
        $contact->body = 'contact';
        $contact->update();

        $it = new App\Page();
        $it->save();
        $it->head = 'IT Department';
        $it->body = 'it-department';
        $it->update();


        $about->addChild($contact);
        $contact->addChild($it);

    }

}


class mongoSeeder extends Seeder {

    public function run()
    {
        DB::table('mongo_closure')->delete();
        DB::table('mongos')->delete();

        $about_head = new App\mongo();
        //$about_head->page_id = 1;
        $about_head->type = 'object';
        $about_head->key = 'head';
        $about_head->save();

        $about_head->title = 'about page title';
        $about_head->description = 'about page text description';
        $about_head->tags = ['test1','test2','test3'];
        $about_head->update();


    }

}


class routesSeeder extends Seeder {

    public function run()
    {
        DB::table('routes')->delete();
        DB::statement(
            "INSERT INTO `routes` (`id`, `page_id`, `lang_id`, `slug`, `controller`, `created_at`, `updated_at`)
              VALUES
              (NULL, '1', '4', '', 'ArticleController', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
              (NULL, '2', '4', 'about', 'ArticleController', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
              (NULL, '2', '3', 'about', 'ArticleController', '0000-00-00 00:00:00', '0000-00-00 00:00:00');"
        );
    }

}