<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class projetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projets')->delete();
        
        \DB::table('projets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'horloge web',
                'logo' => 'logo/f889d11d9eea4d5c4ba137338e6ccdfd.png',
                'detail' => 'simple horloge fait en js,  mode dark et light',
                'description' => '<p>ceci est une horloge assez basique, j&#39;ai essayer de mettre plus l&#39;accent sur le design et le fameux mode dark/light</p>',
                'liensite' => 'https://codeursx.github.io/horloge_dark_light/',
                'liengithub' => 'https://github.com/codeursx/horloge_dark_light',
            'langage' => 'JavaScript  (html-css)',
                'progression' => 100,
                'deleted_at' => NULL,
                'created_at' => '2020-07-19 12:07:52',
                'updated_at' => '2020-10-10 04:58:52',
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Clippy',
                'logo' => 'images/519a4fbb1a3eddb6aae58fa8e5720fe0.png',
                'detail' => 'Enregistrer plusieurs élements dans le presse papier',
                'description' => '<p>c&#39;est assez emb&eacute;tant de faire un `<strong>ctrl + c</strong>` &agrave; chaque fois que vous avez besoin d&#39;une copie anterieur, alors je me suis dit pouquoi ne pas creer un petit logiciel qui garde les traces de chacunes de mes copies de sorte a pouvoir juste clicquer sur l&#39;un d&#39;eux pour le remettre dans le presse papier pr&ecirc;t pur un `<strong>ctrl + v</strong>`,certe qu&#39;apres quelque recheche je me suis rendu compte que cet outils exisatit deja dans windows mais pouquoi ce limit&eacute; a ce que windows a fait alors que je peux moi aussi le faire et l&#39;ajuster a mon gout ,&nbsp;je l&#39;ai fait et depuis je ne peux m&#39;en passer puisqu&#39;il m&#39;est tres utile&nbsp;&agrave;&nbsp;chaque fois que je travail, que je code.</p>',
                'liensite' => NULL,
                'liengithub' => NULL,
                'langage' => 'Python & PyQt5',
                'progression' => 100,
                'deleted_at' => NULL,
                'created_at' => '2020-07-19 12:05:52',
                'updated_at' => '2020-10-10 04:57:48',
            ),
        ));
        
        
    }
}