<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pokemon;
use App\Models\Pokedex;
use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        $p = new Pokemon;
        $p->genre = 0;
        $p->height = 1.2;
        $p->weight = 5;
        $p->life = 100;
        $p->level = 12;
        $p->is_shiny = 0;
        $p->captured_at = '2026-11-19';
        $p->image = 'img';
        $p->pokedex_id = 149;
        $p->save();

        $p=new Pokedex; $p->id = 1; $p->name = 'Bulbizarre'; $p->save();
        $p=new Pokedex; $p->id = 2; $p->name = 'Herbizarre'; $p->save();
        $p=new Pokedex; $p->id = 3; $p->name = 'Florizarre'; $p->save();
        $p=new Pokedex; $p->id = 4; $p->name = 'Salamèche'; $p->save();
        $p=new Pokedex; $p->id = 5; $p->name = 'Reptincel'; $p->save();
        $p=new Pokedex; $p->id = 6; $p->name = 'Dracaufeu'; $p->save();
        $p=new Pokedex; $p->id = 7; $p->name = 'Carapuce'; $p->save();
        $p=new Pokedex; $p->id = 8; $p->name = 'Carabaffe'; $p->save();
        $p=new Pokedex; $p->id = 9; $p->name = 'Tortank'; $p->save();
        $p=new Pokedex; $p->id = 10; $p->name = 'Chenipan'; $p->save();
        $p=new Pokedex; $p->id = 11; $p->name = 'Chrysacier'; $p->save();
        $p=new Pokedex; $p->id = 12; $p->name = 'Papilusion'; $p->save();
        $p=new Pokedex; $p->id = 13; $p->name = 'Aspicot'; $p->save();
        $p=new Pokedex; $p->id = 14; $p->name = 'Coconfort'; $p->save();
        $p=new Pokedex; $p->id = 15; $p->name = 'Dardargnan'; $p->save();
        $p=new Pokedex; $p->id = 16; $p->name = 'Roucool'; $p->save();
        $p=new Pokedex; $p->id = 17; $p->name = 'Roucoups'; $p->save();
        $p=new Pokedex; $p->id = 18; $p->name = 'Roucarnage'; $p->save();
        $p=new Pokedex; $p->id = 19; $p->name = 'Rattata'; $p->save();
        $p=new Pokedex; $p->id = 20; $p->name = 'Rattatac'; $p->save();
        $p=new Pokedex; $p->id = 21; $p->name = 'Piafabec'; $p->save();
        $p=new Pokedex; $p->id = 22; $p->name = 'Rapasdepic'; $p->save();
        $p=new Pokedex; $p->id = 23; $p->name = 'Abo'; $p->save();
        $p=new Pokedex; $p->id = 24; $p->name = 'Arbok'; $p->save();
        $p=new Pokedex; $p->id = 25; $p->name = 'Pikachu'; $p->save();
        $p=new Pokedex; $p->id = 26; $p->name = 'Raichu'; $p->save();
        $p=new Pokedex; $p->id = 27; $p->name = 'Sabelette'; $p->save();
        $p=new Pokedex; $p->id = 28; $p->name = 'Sablaireau'; $p->save();
        $p=new Pokedex; $p->id = 29; $p->name = 'Nidoran♀'; $p->save();
        $p=new Pokedex; $p->id = 30; $p->name = 'Nidorina'; $p->save();
        $p=new Pokedex; $p->id = 31; $p->name = 'Nidoqueen'; $p->save();
        $p=new Pokedex; $p->id = 32; $p->name = 'Nidoran♂'; $p->save();
        $p=new Pokedex; $p->id = 33; $p->name = 'Nidorino'; $p->save();
        $p=new Pokedex; $p->id = 34; $p->name = 'Nidoking'; $p->save();
        $p=new Pokedex; $p->id = 35; $p->name = 'Mélofée'; $p->save();
        $p=new Pokedex; $p->id = 36; $p->name = 'Mélodelfe'; $p->save();
        $p=new Pokedex; $p->id = 37; $p->name = 'Goupix'; $p->save();
        $p=new Pokedex; $p->id = 38; $p->name = 'Feunard'; $p->save();
        $p=new Pokedex; $p->id = 39; $p->name = 'Rondoudou'; $p->save();
        $p=new Pokedex; $p->id = 40; $p->name = 'Grodoudou'; $p->save();
        $p=new Pokedex; $p->id = 41; $p->name = 'Nosferapti'; $p->save();
        $p=new Pokedex; $p->id = 42; $p->name = 'Nosféralto'; $p->save();
        $p=new Pokedex; $p->id = 43; $p->name = 'Mystherbe'; $p->save();
        $p=new Pokedex; $p->id = 44; $p->name = 'Ortide'; $p->save();
        $p=new Pokedex; $p->id = 45; $p->name = 'Rafflesia'; $p->save();
        $p=new Pokedex; $p->id = 46; $p->name = 'Paras'; $p->save();
        $p=new Pokedex; $p->id = 47; $p->name = 'Parasect'; $p->save();
        $p=new Pokedex; $p->id = 48; $p->name = 'Mimitoss'; $p->save();
        $p=new Pokedex; $p->id = 49; $p->name = 'Aéromite'; $p->save();
        $p=new Pokedex; $p->id = 50; $p->name = 'Taupiqueur'; $p->save();
        $p=new Pokedex; $p->id = 51; $p->name = 'Triopikeur'; $p->save();
        $p=new Pokedex; $p->id = 52; $p->name = 'Miaouss'; $p->save();
        $p=new Pokedex; $p->id = 53; $p->name = 'Persian'; $p->save();
        $p=new Pokedex; $p->id = 54; $p->name = 'Psykokwak'; $p->save();
        $p=new Pokedex; $p->id = 55; $p->name = 'Akwakwak'; $p->save();
        $p=new Pokedex; $p->id = 56; $p->name = 'Férosinge'; $p->save();
        $p=new Pokedex; $p->id = 57; $p->name = 'Colossinge'; $p->save();
        $p=new Pokedex; $p->id = 58; $p->name = 'Caninos'; $p->save();
        $p=new Pokedex; $p->id = 59; $p->name = 'Arcanin'; $p->save();
        $p=new Pokedex; $p->id = 60; $p->name = 'Ptitard'; $p->save();
        $p=new Pokedex; $p->id = 61; $p->name = 'Têtarte'; $p->save();
        $p=new Pokedex; $p->id = 62; $p->name = 'Tartard'; $p->save();
        $p=new Pokedex; $p->id = 63; $p->name = 'Abra'; $p->save();
        $p=new Pokedex; $p->id = 64; $p->name = 'Kadabra'; $p->save();
        $p=new Pokedex; $p->id = 65; $p->name = 'Alakazam'; $p->save();
        $p=new Pokedex; $p->id = 66; $p->name = 'Machoc'; $p->save();
        $p=new Pokedex; $p->id = 67; $p->name = 'Machopeur'; $p->save();
        $p=new Pokedex; $p->id = 68; $p->name = 'Mackogneur'; $p->save();
        $p=new Pokedex; $p->id = 69; $p->name = 'Chétiflor'; $p->save();
        $p=new Pokedex; $p->id = 70; $p->name = 'Boustiflor'; $p->save();
        $p=new Pokedex; $p->id = 71; $p->name = 'Empiflor'; $p->save();
        $p=new Pokedex; $p->id = 72; $p->name = 'Tentacool'; $p->save();
        $p=new Pokedex; $p->id = 73; $p->name = 'Tentacruel'; $p->save();
        $p=new Pokedex; $p->id = 74; $p->name = 'Racaillou'; $p->save();
        $p=new Pokedex; $p->id = 75; $p->name = 'Gravalanch'; $p->save();
        $p=new Pokedex; $p->id = 76; $p->name = 'Grolem'; $p->save();
        $p=new Pokedex; $p->id = 77; $p->name = 'Ponyta'; $p->save();
        $p=new Pokedex; $p->id = 78; $p->name = 'Galopa'; $p->save();
        $p=new Pokedex; $p->id = 79; $p->name = 'Ramoloss'; $p->save();
        $p=new Pokedex; $p->id = 80; $p->name = 'Flagadoss'; $p->save();
        $p=new Pokedex; $p->id = 81; $p->name = 'Magnéti'; $p->save();
        $p=new Pokedex; $p->id = 82; $p->name = 'Magnéton'; $p->save();
        $p=new Pokedex; $p->id = 83; $p->name = 'Canarticho'; $p->save();
        $p=new Pokedex; $p->id = 84; $p->name = 'Doduo'; $p->save();
        $p=new Pokedex; $p->id = 85; $p->name = 'Dodrio'; $p->save();
        $p=new Pokedex; $p->id = 86; $p->name = 'Otaria'; $p->save();
        $p=new Pokedex; $p->id = 87; $p->name = 'Lamantine'; $p->save();
        $p=new Pokedex; $p->id = 88; $p->name = 'Tadmorv'; $p->save();
        $p=new Pokedex; $p->id = 89; $p->name = 'Grotadmorv'; $p->save();
        $p=new Pokedex; $p->id = 90; $p->name = 'Kokiyas'; $p->save();
        $p=new Pokedex; $p->id = 91; $p->name = 'Crustabri'; $p->save();
        $p=new Pokedex; $p->id = 92; $p->name = 'Fantominus'; $p->save();
        $p=new Pokedex; $p->id = 93; $p->name = 'Spectrum'; $p->save();
        $p=new Pokedex; $p->id = 94; $p->name = 'Ectoplasma'; $p->save();
        $p=new Pokedex; $p->id = 95; $p->name = 'Onix'; $p->save();
        $p=new Pokedex; $p->id = 96; $p->name = 'Soporifik'; $p->save();
        $p=new Pokedex; $p->id = 97; $p->name = 'Hypnomade'; $p->save();
        $p=new Pokedex; $p->id = 98; $p->name = 'Krabby'; $p->save();
        $p=new Pokedex; $p->id = 99; $p->name = 'Krabboss'; $p->save();
        $p=new Pokedex; $p->id = 100; $p->name = 'Voltorbe'; $p->save();
        $p=new Pokedex; $p->id = 101; $p->name = 'Électrode'; $p->save();
        $p=new Pokedex; $p->id = 102; $p->name = 'Nœunœuf'; $p->save();
        $p=new Pokedex; $p->id = 103; $p->name = 'Noadkoko'; $p->save();
        $p=new Pokedex; $p->id = 104; $p->name = 'Osselait'; $p->save();
        $p=new Pokedex; $p->id = 105; $p->name = 'Ossatueur'; $p->save();
        $p=new Pokedex; $p->id = 106; $p->name = 'Kicklee'; $p->save();
        $p=new Pokedex; $p->id = 107; $p->name = 'Tygnon'; $p->save();
        $p=new Pokedex; $p->id = 108; $p->name = 'Excelangue'; $p->save();
        $p=new Pokedex; $p->id = 109; $p->name = 'Smogo'; $p->save();
        $p=new Pokedex; $p->id = 110; $p->name = 'Smogogo'; $p->save();
        $p=new Pokedex; $p->id = 111; $p->name = 'Rhinocorne'; $p->save();
        $p=new Pokedex; $p->id = 112; $p->name = 'Rhinoféros'; $p->save();
        $p=new Pokedex; $p->id = 113; $p->name = 'Leveinard'; $p->save();
        $p=new Pokedex; $p->id = 114; $p->name = 'Saquedeneu'; $p->save();
        $p=new Pokedex; $p->id = 115; $p->name = 'Kangourex'; $p->save();
        $p=new Pokedex; $p->id = 116; $p->name = 'Hypotrempe'; $p->save();
        $p=new Pokedex; $p->id = 117; $p->name = 'Hypocéan'; $p->save();
        $p=new Pokedex; $p->id = 118; $p->name = 'Possirène'; $p->save();
        $p=new Pokedex; $p->id = 119; $p->name = 'Poissoroy'; $p->save();
        $p=new Pokedex; $p->id = 120; $p->name = 'Stari'; $p->save();
        $p=new Pokedex; $p->id = 121; $p->name = 'Staross'; $p->save();
        $p=new Pokedex; $p->id = 122; $p->name = 'M.Mime'; $p->save();    
        $p=new Pokedex; $p->id = 123; $p->name = 'Insécateur'; $p->save();
        $p=new Pokedex; $p->id = 124; $p->name = 'Lippoutou'; $p->save();
        $p=new Pokedex; $p->id = 125; $p->name = 'Élektek'; $p->save();
        $p=new Pokedex; $p->id = 126; $p->name = 'Magmar'; $p->save();
        $p=new Pokedex; $p->id = 127; $p->name = 'Scarabrute'; $p->save();
        $p=new Pokedex; $p->id = 128; $p->name = 'Tauros'; $p->save();
        $p=new Pokedex; $p->id = 129; $p->name = 'Magicarpe'; $p->save();
        $p=new Pokedex; $p->id = 130; $p->name = 'Léviator'; $p->save();
        $p=new Pokedex; $p->id = 131; $p->name = 'Lokhlass'; $p->save();
        $p=new Pokedex; $p->id = 132; $p->name = 'Métamorph'; $p->save();
        $p=new Pokedex; $p->id = 133; $p->name = 'Évoli'; $p->save();
        $p=new Pokedex; $p->id = 134; $p->name = 'Aquali'; $p->save();
        $p=new Pokedex; $p->id = 135; $p->name = 'Voltali'; $p->save();
        $p=new Pokedex; $p->id = 136; $p->name = 'Pyroli'; $p->save();
        $p=new Pokedex; $p->id = 137; $p->name = 'Porygon'; $p->save();
        $p=new Pokedex; $p->id = 138; $p->name = 'Amonita'; $p->save();
        $p=new Pokedex; $p->id = 139; $p->name = 'Amonistar'; $p->save();
        $p=new Pokedex; $p->id = 140; $p->name = 'Kabuto'; $p->save();
        $p=new Pokedex; $p->id = 141; $p->name = 'Kabutops'; $p->save();
        $p=new Pokedex; $p->id = 142; $p->name = 'Ptéra'; $p->save();
        $p=new Pokedex; $p->id = 143; $p->name = 'Ronflex'; $p->save();
        $p=new Pokedex; $p->id = 144; $p->name = 'Artikodin'; $p->save();
        $p=new Pokedex; $p->id = 145; $p->name = 'Électhor'; $p->save();
        $p=new Pokedex; $p->id = 146; $p->name = 'Sulfura'; $p->save();
        $p=new Pokedex; $p->id = 147; $p->name = 'Minidraco'; $p->save();
        $p=new Pokedex; $p->id = 148; $p->name = 'Draco'; $p->save();
        $p=new Pokedex; $p->id = 149; $p->name = 'Dracolosse'; $p->save();
        $p=new Pokedex; $p->id = 150; $p->name = 'Mewtwo'; $p->save();
        $p=new Pokedex; $p->id = 151; $p->name = 'Mew'; $p->save();

        $t = new Trainer;
        $t->name = "Pierre";
        $t->genre = 0;
        $t->level = 11;
        $t->save();

        $t = new Trainer;
        $t->name = "Ondine";
        $t->genre = 1;
        $t->level = 20;
        $t->save();

        $t = new Trainer;
        $t->name = "Major Bob";
        $t->genre = 0;
        $t->level = 40;
        $t->save();

        $t = new Trainer;
        $t->name = "Erika";
        $t->genre = 1;
        $t->level = 50;
        $t->save();

        $t = new Trainer;
        $t->name = "Koga";
        $t->genre = 0;
        $t->level = 60;
        $t->save();

        $t = new Trainer;
        $t->name = "Auguste";
        $t->genre = 0;
        $t->level = 60;
        $t->save();


        $t = new Trainer;
        $t->name = "Agatha";
        $t->genre = 1;
        $t->level = 987;
        $t->save();


        $t = new Trainer;
        $t->name = "Olga";
        $t->genre = 1;
        $t->level = 60;
        $t->save();


        $t = new Trainer;
        $t->name = "Aldo";
        $t->genre = 0;
        $t->level = 60;
        $t->save();

        $t = new Trainer;
        $t->name = "Giovanni";
        $t->genre = 0;
        $t->level = 70;
        $t->save();

        $t = new Trainer;
        $t->name = "Peter";
        $t->genre = 0;
        $t->level = 987;
        $t->save();


        $t = new Trainer;
        $t->name = "Mehdi";
        $t->genre = 0;
        $t->level = 9879;
        $t->save();


        $t = new Trainer;
        $t->name = "Morgane";
        $t->genre = 1;
        $t->level = 45;
        $t->save();


    }
}
