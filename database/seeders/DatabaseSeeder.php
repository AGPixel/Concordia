<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserToken;
use App\Models\IndexText;
use App\Models\Contact;
use App\Models\About;
use App\Models\Work;
use App\Models\Oportunidade;
use App\Models\Propriedade;
use App\Models\PortifolioGeral;
use App\Models\ServicoGeral;
use App\Models\Project;
use App\Models\ServiceTerms;
use App\Models\PrivacyPolitics;
use App\Models\MetaTags;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin 1',
            'email' => 'admin@example.com',
            'password' => Hash::make('a'),
        ]);

        User::factory()->create([
            'name' => 'Admin 2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('b'),
        ]);

        User::factory()->create([
            'name' => 'Admin 3',
            'email' => 'admin3@example.com',
            'password' => Hash::make('c'),
        ]);

        $userToken = new UserToken();
        $userToken->user_id = 1;
        $userToken->token = '';
        $userToken->expire_at = Carbon::now()->format("Y-m-d H:i:s");
        $userToken->save();

        $userToken = new UserToken();
        $userToken->user_id = 2;
        $userToken->token = '';
        $userToken->expire_at = Carbon::now()->format("Y-m-d H:i:s");
        $userToken->save();

        $userToken = new UserToken();
        $userToken->user_id = 3;
        $userToken->token = '';
        $userToken->expire_at = Carbon::now()->format("Y-m-d H:i:s");
        $userToken->save();

        $indexTitle = new IndexText();
        $indexTitle->about_title = 'about title';
        $indexTitle->about_num_1 = '1';
        $indexTitle->about_description = ' descrição 1';
        $indexTitle->about_num_2 = '2';
        $indexTitle->about_description = ' descrição 2';
        $indexTitle->about_num_3 = '3';
        $indexTitle->about_description = ' descrição 3';
        $indexTitle->frame_num_1 = '15';
        $indexTitle->frame_num_2 = '30';
        $indexTitle->about_title = 'about title';
        $indexTitle->social_url_facebook = 'facebook';
        $indexTitle->social_url_instagram = 'instagram';
        $indexTitle->social_url_twitter = 'twitter';
        $indexTitle->social_url_linkedin = 'linkedin';
        $indexTitle->save();

        $contact = new Contact();
        $contact->email1 = 'email1@email.com';
        $contact->business_hours1 = 'business_hours1';
        $contact->business_hours2 = 'business_hours2';
        $contact->business_hours3 = 'business_hours3';
        $contact->address1 = 'address1';
        $contact->address2 = 'address2';
        $contact->address3 = 'address3';
        $contact->map_lat = '11.5073509';
        $contact->map_len = '-0.1277583';
        $contact->save();

        $about = new About();
        $about->about_title_1 = 'About';
        $about->about_title_2 = 'title';
        $about->save();

        $portifolioGeral = new PortifolioGeral();
        $portifolioGeral->title = 'Trabalho recente';
        $portifolioGeral->description = 'Descrição sobre o trabalho recente Descrição sobre o trabalho recente Descrição sobre o trabalho recente Descrição sobre o trabalho recente';
        $portifolioGeral->save();

        $work = new Work();
        $work->title = 'Titulo Ativo';
        $work->description = 'Descrição Ativo';
        $work->active = true;
        $work->save();

        $work = new Work();
        $work->title = 'Titulo Inativo';
        $work->description = 'Descrição Inativo';
        $work->active = false;
        $work->save();

        $work = new Work();
        $work->title = 'Titulo Um';
        $work->description = 'Descrição Um';
        $work->active = true;
        $work->save();

        $work = new Work();
        $work->title = 'Titulo Dois';
        $work->description = 'Descrição Dois';
        $work->active = true;
        $work->save();

        $servicoGeral = new ServicoGeral();
        $servicoGeral->video = '';
        $servicoGeral->save();

        $project = new Project();
        $project->title_1 = 'Serviço 1';
        $project->description_1 = 'Descrição 1 serviço 1';
        $project->title_2 = 'Serviço 1 titulo 2';
        $project->description_2 = 'Descrição 2 serviço 1';
        $project->active = true;
        $project->save();

        $project = new Project();
        $project->title_1 = 'Serviço 2';
        $project->description_1 = 'Descrição 1 serviço 2';
        $project->title_2 = 'Serviço 2 titulo 2';
        $project->description_2 = 'Descrição 2 serviço 2';
        $project->active = true;
        $project->save();

        $project = new Project();
        $project->title_1 = 'Serviço 3';
        $project->description_1 = 'Descrição 1 serviço 3';
        $project->title_2 = 'Serviço 3 titulo 2';
        $project->description_2 = 'Descrição 2 serviço 3';
        $project->active = true;
        $project->save();

        $metaTags = new MetaTags();
        $metaTags->title = 'Concordia';
        $metaTags->description = 'Descrição concordia';
        $metaTags->keywords = 'keywords aqui';
        $metaTags->save();

        $oportunidade = new Oportunidade();
        $oportunidade->title = 'Oportunidade Um';
        $oportunidade->description = 'Oportunidade Descrição Um';
        $oportunidade->year = '2023';
        $oportunidade->job_1 = 'Job 1';
        $oportunidade->job_2 = 'Job 2';
        $oportunidade->active = true;
        $oportunidade->save();

        $propriedade = new Propriedade();
        $propriedade->title = 'Propriedade Um';
        $propriedade->description = 'Propriedade Descrição Um';
        $propriedade->year = '2023';
        $propriedade->job_1 = 'Job 1';
        $propriedade->job_2 = 'Job 2';
        $propriedade->active = true;
        $propriedade->save();

        $serviceTerms = new ServiceTerms();
        $serviceTerms->title = 'Titulo pt';
        $serviceTerms->title_eng = 'Titulo eng';
        $serviceTerms->content = 'Content pt';
        $serviceTerms->content_eng = 'Content eng';
        $serviceTerms->active = true;
        $serviceTerms->save();

        $privacyPolitics = new PrivacyPolitics();
        $privacyPolitics->title = 'Titulo pt';
        $privacyPolitics->title_eng = 'Titulo eng';
        $privacyPolitics->content = 'Content pt';
        $privacyPolitics->content_eng = 'Content eng';
        $privacyPolitics->active = true;
        $privacyPolitics->save();
    }
}
