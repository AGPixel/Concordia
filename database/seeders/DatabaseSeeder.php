<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserToken;
use App\Models\IndexText;
use App\Models\Contact;
use App\Models\About;
use App\Models\Work;
use App\Models\Oportunidade;
use App\Models\PortifolioGeral;
use App\Models\ServicoGeral;
use App\Models\Project;
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
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('a'),
        ]);

        $userToken = new UserToken();
        $userToken->user_id = 1;
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

        $work = new Oportunidade();
        $work->title = 'Titulo Dois';
        $work->description = 'Descrição Dois';
        $work->active = true;
        $work->save();
    }
}
