<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Vymazanie obsahu tabuliek
        DB::table('liky_komentare')->delete();
        DB::table('komentare')->delete();
        DB::table('cesty')->delete();
        DB::table('uzivatelia')->delete();
        DB::table('role')->delete();

        DB::table('role')->insert([
            [
                'id' => 1,
                'nazov_role' => 'ADMIN',
                'created_at' => '2024-01-18 20:54:04',
                'updated_at' => '2024-01-18 20:54:04',
            ],
            [
                'id' => 2,
                'nazov_role' => 'STANDARD',
                'created_at' => '2024-01-18 20:54:04',
                'updated_at' => '2024-01-18 20:54:04',
            ],
        ]);

        DB::table('uzivatelia')->insert([
            [
                'id' => 1,
                'meno' => 'Marek',
                'priezvisko' => 'Rucki',
                'email' => 'ruckim70@gmail.com',
                'heslo' => '$2y$12$p3bpOi7e3s9Kk.nUhtljpOJJb5PEJFjA0jXDBWdZJ9ffvKqhttT/e',
                'ikonka_url' => 'images/profilovky/default.png',
                'remember_token' => Str::random(10),
                'rola' => 1,
                'created_at' => '2024-01-18 20:54:04',
                'updated_at' => '2024-01-18 20:54:04',
            ],
            [
                'id' => 2,
                'meno' => 'Ján',
                'priezvisko' => 'Kováčik',
                'email' => 'jano@gmail.com',
                'heslo' => '$2y$12$SojwNVR6VC6c51auMJAWouvqNUJ.dZ/rp48f6O1t58ELLRj45ltme',
                'ikonka_url' => 'images/profilovky/default.png',
                'remember_token' => Str::random(10),
                'rola' => 2,
                'created_at' => '2024-01-18 20:59:07',
                'updated_at' => '2024-01-18 20:59:07',
            ],
            [
                'id' => 3,
                'meno' => 'Peter',
                'priezvisko' => 'Novák',
                'email' => 'petonovak@gmail.com',
                'heslo' => '$2y$12$qBckdZE7HsIzlYPORs2Wbe9tOgBr7BjSOKEx83YirmaK/47l8kgIW',
                'ikonka_url' => 'images/profilovky/default.png',
                'remember_token' => Str::random(10),
                'rola' => 2,
                'created_at' => '2024-01-18 20:59:29',
                'updated_at' => '2024-01-18 20:59:29',
            ],
            [
                'id' => 4,
                'meno' => 'Lukáš',
                'priezvisko' => 'Horváth',
                'email' => 'lukas@gmail.com',
                'heslo' => '$2y$12$.xjLau21aZTfwPQMdYHjmewesVbSHQAMP9iHLkoac05mfE2HfDo1S',
                'ikonka_url' => 'images/profilovky/default.png',
                'remember_token' => Str::random(10),
                'rola' => 2,
                'created_at' => '2024-01-18 21:11:06',
                'updated_at' => '2024-01-18 21:11:06',
            ],
            [
                'id' => 5,
                'meno' => 'Martina',
                'priezvisko' => 'Šimková',
                'email' => 'martina@gmail.com',
                'ikonka_url' => 'images/profilovky/default.png',
                'heslo' => '$2y$12$zFs..umYDkm4xsVA2YVsoe2.btQZDJ8n.u4CX6YkW/1.6N7UOrmCq',
                'remember_token' => Str::random(10),
                'rola' => 2,
                'created_at' => '2024-01-18 21:11:27',
                'updated_at' => '2024-01-18 21:11:27',
            ],
            [
                'id' => 6,
                'meno' => 'Oleksii',
                'priezvisko' => 'Bozhko',
                'email' => 'bozhko@stud.uniza.sk',
                'ikonka_url' => 'images/profilovky/default.png',
                'heslo' => '$2y$12$zFs..umYDkm4xsVA2YVsoe2.btQZDJ8n.u4CX6YkW/1.6N7UOrmCq',
                'remember_token' => Str::random(10),
                'rola' => 2,
                'created_at' => '2024-01-18 21:11:27',
                'updated_at' => '2024-01-18 21:11:27',
            ],
        ]);

        DB::table('cesty')->insert([
            [
                'id' => 1,
                'nazov_cesty' => 'Pezínska Baba',
                'obrazok_url' => 'images/cesty/1705615215.jpg',
                'popis' => 'Pezínska Baba je skutočným klenotom pre motoristov. Z vrcholu je úchvatný výhľad na okolitú krajinu. Cesta je však plná zákrut a vyžaduje si zvýšenú opatrnosť. Ale tá námaha stojí za ten nádherný výhľad.',
                'dlzka_trasy' => 24,
                'stav_cesty' => 'Dobrá',
                'vytazenost' => 40,
                'vhodne_pre_motorky' => 1,
                'vhodne_cez_zimu' => 1,
                'popularna_cesta' => 1,
                'mapa' => 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d10606.115941325319!2d17.178837756035794!3d48.35035815171387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spez%C3%ADnska%20baba!5e0!3m2!1ssk!2ssk!4v1705615678890!5m2!1ssk!2ssk',
                'author' => 3,
                'created_at' => '2024-01-18 21:00:15',
                'updated_at' => '2024-01-18 21:00:15',
            ],
            [
                'id' => 2,
                'nazov_cesty' => 'Šturec',
                'obrazok_url' => 'images/cesty/1705615257.jpg',
                'popis' => 'Prechádzanie cez Šturec je ako jazda do iného sveta. Zelené kopce a údolie sú ako z rozprávky. Cesta je však niekedy dosť úzka a môže byť náročná pre nezvyknutých vodičov. Ale aj napriek tomu, táto cesta stojí za to.',
                'dlzka_trasy' => 33,
                'stav_cesty' => 'Stredná',
                'vytazenost' => 35,
                'vhodne_pre_motorky' => 1,
                'vhodne_cez_zimu' => 0,
                'popularna_cesta' => 1,
                'mapa' => 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d26581.286740194676!2d18.920536354576145!3d48.91550105983162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%C5%A0turec!5e0!3m2!1ssk!2ssk!4v1705615933202!5m2!1ssk!2ssk',
                'author' => 2,
                'created_at' => '2024-01-18 21:00:40',
                'updated_at' => '2024-01-18 21:00:40',
            ],
            [
                'id' => 3,
                'nazov_cesty' => 'Viadukt Telgárt',
                'obrazok_url' => 'images/cesty/1705615292.jpeg',
                'popis' => 'Viadukt Telgárt je skutočne impozantný. Jazda po ňom je ako let v oblakoch. Je však dôležité dbať na rýchlostný limit, pretože policajti tu často kontrolujú. Ale aj napriek tomu, je to zážitok, ktorý si nenechajte ujsť.',
                'dlzka_trasy' => 74,
                'stav_cesty' => 'Lepšej cesty niet',
                'vytazenost' => 14,
                'vhodne_pre_motorky' => 1,
                'vhodne_cez_zimu' => 0,
                'popularna_cesta' => 1,
                'mapa' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21003.92751989229!2d20.187931037692454!3d48.848848023498945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1705615358605!5m2!1ssk!2ssk',
                'author' => 1,
                'created_at' => '2024-01-18 21:01:02',
                'updated_at' => '2024-01-18 21:01:02',
            ],
            [
                'id' => 4,
                'nazov_cesty' => 'Cesta Dnipro',
                'obrazok_url' => 'images/cesty/1705660798.png',
                'popis' => 'Krásna cesta na východnej časti Ukrajiny. Odporúčam! 10/10',
                'dlzka_trasy' => 250,
                'stav_cesty' => 'Úžasná',
                'vytazenost' => 100,
                'vhodne_pre_motorky' => 1,
                'vhodne_cez_zimu' => 1,
                'popularna_cesta' => 0,
                'mapa' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2659.2135472461064!2d34.95861407571069!3d48.20250254663995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDjCsDEyJzA5LjAiTiAzNMKwNTcnNDAuMyJF!5e0!3m2!1ssk!2ssk!4v1705661093277!5m2!1ssk!2ssk',
                'author' => 6,
                'created_at' => '2024-01-18 21:01:02',
                'updated_at' => '2024-01-18 21:01:02',
            ],
        ]);

        DB::table('komentare')->insert([
            [
                'id' => 1,
                'id_cesty' => 2,
                'id_autora' => 5,
                'text' => 'Ján, bola som tam minulý rok a musím povedať, že tá cesta je naozaj úzka. Myslíš, že by bolo lepšie ísť tam skôr na jar alebo na jeseň?',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:11:48',
                'updated_at' => '2024-01-18 21:11:48',
            ],
            [
                'id' => 2,
                'id_cesty' => 2,
                'id_autora' => 2,
                'text' => 'Martina, obe ročné obdobia majú svoje čaro. Na jar je všetko zelené a plné života, zatiaľ čo na jeseň je krajina plná farieb. Takže to záleží na tom, čo preferuješ.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:13:01',
                'updated_at' => '2024-01-18 21:13:01',
            ],
            [
                'id' => 3,
                'id_cesty' => 2,
                'id_autora' => 4,
                'text' => 'Ján, súhlasím s tebou, cesta cez Šturec je naozaj ako z rozprávky. Ale vieš mi povedať, či tam majú nejaké odpočívadlá alebo reštaurácie?',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:13:32',
                'updated_at' => '2024-01-18 21:13:32',
            ],
            [
                'id' => 4,
                'id_cesty' => 2,
                'id_autora' => 2,
                'text' => 'Áno, Lukáš, na ceste cez Šturec sú niektoré odpočívadlá a malé reštaurácie. Sú ideálne na krátku prestávku a užitie si krásneho výhľadu.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:13:56',
                'updated_at' => '2024-01-18 21:13:56',
            ],
            [
                'id' => 5,
                'id_cesty' => 3,
                'id_autora' => 2,
                'text' => 'Je tam pekný výhľad?',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:18:33',
                'updated_at' => '2024-01-18 21:18:33',
            ],
            [
                'id' => 6,
                'id_cesty' => 3,
                'id_autora' => 1,
                'text' => 'Áno, výhľad je úchvatný.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:18:47',
                'updated_at' => '2024-01-18 21:18:47',
            ],
            [
                'id' => 7,
                'id_cesty' => 3,
                'id_autora' => 4,
                'text' => 'Marek, súhlasím s tebou, viadukt Telgárt je skutočne impozantný. Ale vieš mi povedať, či tam majú nejaké odpočívadlá alebo reštaurácie? Ako je tam s parkovaním? Ako často tam kontrolujú rýchlosť?',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:19:27',
                'updated_at' => '2024-01-18 21:19:27',
            ],
            [
                'id' => 8,
                'id_cesty' => 3,
                'id_autora' => 1,
                'text' => 'Áno, Lukáš, v okolí viaduktu Telgárt sú niektoré odpočívadlá a malé reštaurácie. Sú ideálne na krátku prestávku a užitie si krásneho výhľadu. Čo sa týka parkovania, je tam niekoľko parkovísk, ale v sezóne môžu byť dosť plné. Policajti tam kontrolujú rýchlosť pomerne často, takže je dôležité dbať na rýchlostný limit.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:19:36',
                'updated_at' => '2024-01-18 21:19:36',
            ],
            [
                'id' => 9,
                'id_cesty' => 3,
                'id_autora' => 5,
                'text' => 'Marek, bola som tam minulý rok a musím povedať, že tá cesta je naozaj náročná. Myslíš, že by bolo lepšie ísť tam skôr na jar alebo na jeseň?',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:20:09',
                'updated_at' => '2024-01-18 21:20:09',
            ],
            [
                'id' => 10,
                'id_cesty' => 3,
                'id_autora' => 1,
                'text' => 'Martina, oba ročné obdobia majú svoje čaro. Na jar je všetko zelené a plné života, zatiaľ čo na jeseň je krajina plná farieb. Takže to záleží na tom, čo preferuješ.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:20:18',
                'updated_at' => '2024-01-18 21:20:18',
            ],
            [
                'id' => 11,
                'id_cesty' => 1,
                'id_autora' => 1,
                'text' => 'Musím povedať, že tá táto cesta ma sklamala. Myslel som si, že bude viac zaujímavá, ale bola dosť monotónna a chýbali mi tam nejaké zaujímavé body.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:23:37',
                'updated_at' => '2024-01-18 21:23:37',
            ],
            [
                'id' => 12,
                'id_cesty' => 1,
                'id_autora' => 3,
                'text' => 'Ďakujem za tvoju spätnú väzbu, Marek. Cesta bola navrhnutá tak, aby bola jednoduchá a pohodlná pre vodičov. Ale chápem, že nie každý má rovnaké preferencie.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:23:47',
                'updated_at' => '2024-01-18 21:23:47',
            ],
            [
                'id' => 13,
                'id_cesty' => 1,
                'id_autora' => 1,
                'text' => 'Áno, chápem, že nie každý má rovnaké preferencie. Ale myslím si, že by ste mohli pridať viac zaujímavých bodov alebo aspoň niekoľko odpočívadiel s pekným výhľadom.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:23:59',
                'updated_at' => '2024-01-18 21:23:59',
            ],
            [
                'id' => 14,
                'id_cesty' => 1,
                'id_autora' => 3,
                'text' => 'To je dobrý nápad, Marek. Určite to zvážim pri plánovaní budúcich ciest. Ďakujem za tvoje návrhy.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:24:08',
                'updated_at' => '2024-01-18 21:24:08',
            ],
            [
                'id' => 15,
                'id_cesty' => 1,
                'id_autora' => 1,
                'text' => 'Nie je za čo. Len som chcel, aby bola cesta zaujímavejšia pre vodičov. Ale chápem, že nie je ľahké uspokojiť všetkých.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:24:15',
                'updated_at' => '2024-01-18 21:24:15',
            ],
            [
                'id' => 16,
                'id_cesty' => 1,
                'id_autora' => 3,
                'text' => 'Áno, je to výzva. Ale tvoje návrhy sú veľmi cenné a pomôžu mi vylepšiť budúce cesty. Ďakujem ti za to.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:24:28',
                'updated_at' => '2024-01-18 21:24:28',
            ],
            [
                'id' => 17,
                'id_cesty' => 1,
                'id_autora' => 1,
                'text' => 'Teší ma, že moje návrhy boli užitočné. Teším sa na vaše budúce cesty.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:24:46',
                'updated_at' => '2024-01-18 21:24:46',
            ],
            [
                'id' => 18,
                'id_cesty' => 4,
                'id_autora' => 1,
                'text' => 'Chodíte touto cestou často? Je to vhodná cesta aj pre autá s nízkym podvozkom?',
                'pocet_likov' => 0,
                'created_at' => '2024-01-18 21:24:46',
                'updated_at' => '2024-01-18 21:24:46',
            ],
            [
                'id' => 19,
                'id_cesty' => 4,
                'id_autora' => 6,
                'text' => 'Áno touto cestou chodím často. Je vhodná pre všetky typy áut. Nízky podvozok nie je problém, cesta je krásna a hladká. Odporúčam.',
                'pocet_likov' => 0,
                'created_at' => '2024-01-20 02:42:46',
                'updated_at' => '2024-01-20 02:42:46',
            ],
        ]);


        DB::table('rekordy')->insert([
            [
                'id' => 1,
                'id_autora_rekordu' => 1,
                'id_cesty' => 1,
                'cas' => Carbon::createFromTime(0, 15,34),
            ],
            [
                'id' => 2,
                'id_autora_rekordu' => 1,
                'id_cesty' => 1,
                'cas' => Carbon::createFromTime(0, 14,48),
            ],
            [
                'id' => 3,
                'id_autora_rekordu' => 3,
                'id_cesty' => 1,
                'cas' => Carbon::createFromTime(0, 19,20),
            ],
            [
                'id' => 4,
                'id_autora_rekordu' => 6,
                'id_cesty' => 3,
                'cas' => Carbon::createFromTime(1, 10,10),
            ],
        ]);
    }
}
