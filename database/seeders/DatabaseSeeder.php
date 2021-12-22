<?php

namespace Database\Seeders;
use App\Models\Film;
use App\Models\User;
use App\Models\TipFilma;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        TipFilma::truncate();
        User::truncate();
        Film::truncate();

        //Film::factory(5)->create();
       $user=User::factory()->create(); 
        $tip1=TipFilma::create(['zanr'=>"fantastika"]);
        $tip2=TipFilma::create(['zanr'=>"drama"]);
        $tip3=TipFilma::create(['zanr'=>"akcija"]);

        $film1=Film::create([
            'naziv'=>'Gospodar prstenova',
            'budzet'=>'93000000',
            'opis'=>'Gospodar prstenova je roman epske fantastike koji je napisao engleski akademik i filolog Džon Ronald Rejel Tolkin',
            'godina'=>'2002',
            'user_id'=>$user->id,
            'tipfilma_id'=>$tip1->id
        ]);

        $film2=Film::create([
            'naziv'=>'Paklene Ulice',
            'budzet'=>'1000000000',
            'opis'=>'Paklene ulice američka je franšiza koja uključuje niz akcionih filmova o ilegalnim uličnim auto-trkama i pljačkama kojima se bave glavni likovi.',
            'godina'=>'2001',
            'user_id'=>$user->id,
            'tipfilma_id'=>$tip3->id
        ]);
        $film3=Film::create([
            'naziv'=>'Kum',
            'budzet'=>'1730000000',
            'opis'=>'Kum je američki dramski film režisera Fransisa Forda Kopole iz 1972. godine s Marlonom Brandom, Alom Pačinom, Džejmsom Kanom, Robertom Duvalom i Dajanom Kiton.',
            'godina'=>'1972',
            'user_id'=>$user->id,
            'tipfilma_id'=>$tip2->id
        ]);
    }
}
