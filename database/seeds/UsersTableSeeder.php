<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Engenharia',
            'username' => 'admin',
            'phone' => '00000000000',
            'email' => 'engenharia@aguadecoco.com.br',
            'password' => '1a78997aeea2858382444a42d97b3eb9',
            'is_admin' => true,
        ]);

        \App\User::create([
            'name' => 'Ingrid Maciel',
            'username' => 'IngridsfMaciel',
            'phone' => '85986827750',
            'email' => 'ingridsfmaciel@yahoo.com',
            'password' => '2eea6046fced33dc23790891bdaca060',
        ]);

        \App\User::create([
            'name' => 'Alexandre Aguiar Alves',
            'username' => 'Alexandredev',
            'phone' => '85999377801',
            'email' => 'alexandreaguiaralves@gmail.com',
            'password' => 'f44ff2cc598d904b6c39d74230c27264',
        ]);

        \App\User::create([
            'name' => 'diegolima',
            'username' => 'diegolima',
            'phone' => '89587451258',
            'email' => 'diegolima@gmail.com',
            'password' => '067d8d6c038601ce8b0b506547258bec',
        ]);

        \App\User::create([
            'name' => 'Diogo Fontenele',
            'username' => 'diogo',
            'phone' => '85997933923',
            'email' => 'projetos@aguadecoco.com.br',
            'password' => 'd3d2ec1e18b00bf99da3c003e35d46f6'
        ]);

        \App\User::create([
            'name' => 'diegomaustem',
            'username' => 'diegomaustem',
            'phone' => '85988633253',
            'email' => 'diego.maustem@yahoo.com',
            'password' => '067d8d6c038601ce8b0b506547258bec',
        ]);

        \App\User::create([
            'name' => 'Jefferson Bezerra',
            'username' => 'jeffersonmsb',
            'phone' => '88996177654',
            'email' => 'jeffersonmsb@gmail.com',
            'password' => '1a78997aeea2858382444a42d97b3eb9',
        ]);

        \App\User::create([
            'name' => 'Omara',
            'username' => 'omara',
            'phone' => '85987982077',
            'email' => 'omaraguima@gmail.com',
            'password' => '1d9d05a9abf9f823b26baf3380b5f4aa',
        ]);

        \App\User::create([
            'name' => 'Lenilson Carvalho',
            'username' => 'Lenilsoncarvalho',
            'phone' => '47999636997',
            'email' => 'ledocarvalho@yahoo.com.br',
            'password' => '087cbedc3cbccbb0e987f2783bca1ae0',
        ]);

        \App\User::create([
            'name' => 'Celio Thomaz',
            'username' => 'celio',
            'phone' => '85991043374',
            'email' => 'jceliothomaz@gmail.com',
            'password' => 'f4b8f2a8fc5c33ce4cd47c40fe2b8d9a',
        ]);

        \App\User::create([
            'name' => 'Luciana',
            'username' => 'lucianagaliza',
            'phone' => '85981196955',
            'email' => 'pcp@aguadecoco.com.br',
            'password' => '9cf26bc816a06dc69e68c6ec2574dae2',
        ]);

        \App\User::create([
            'name' => 'Sergio Captuleio',
            'username' => 'dasilva',
            'phone' => '44999476451',
            'email' => 'sergio.ds@thedax.com.br',
            'password' => 'af653dfee53b530f0360baec380914f3',
        ]);

        \App\User::create([
            'name' => 'Suely Peixoto',
            'username' => 'suelypeixoto',
            'phone' => '85981799470',
            'email' => 'custos@aguadecoco.com.br',
            'password' => 'fe49ee8dbdf5fb0bc2773e6160176f58',
        ]);

        \App\User::create([
            'name' => 'Roniel VenÃ¢ncio',
            'username' => 'Roniel',
            'phone' => '85988328559',
            'email' => 'roniel_venancio@hotmail.com',
            'password' => '22c14f311a60486b36f79f3bc962be66',
        ]);

        \App\User::create([
            'name' => 'Diego',
            'username' => 'staps',
            'phone' => '47992480213',
            'email' => 'diegoajassociados@gmail.com',
            'password' => 'e10adc3949ba59abbe56e057f20f883e',
        ]);

        \App\User::create([
            'name' => 'Brandao',
            'username' => 'brandao.neto',
            'phone' => '85998007066',
            'email' => 'brandao.neto@aguadecoco.com.br',
            'password' => '4607e782c4d86fd5364d7e4508bb10d9',
        ]);

        \App\User::create([
            'name' => 'Lucas Cavalcante',
            'username' => 'LucasAC',
            'phone' => '85986715372',
            'email' => 'custos2@aguadecoco.com.br',
            'password' => 'eb553f75ee5c7d43be1db1625e1c5b8f',
        ]);

        \App\User::create([
            'name' => 'EDLANE',
            'username' => 'SUPERVISAOCP',
            'phone' => '85986843493',
            'email' => 'SUPERVISAOCP@AGUADECOCO.COM.BR',
            'password' => 'b929264eaa6edb32672f6bce15e132bd',
        ]);

        \App\User::create([
            'name' => 'Cinara',
            'username' => 'cinara.aragao',
            'phone' => '85999762176',
            'email' => 'controladoria@aguadecoco.com.br',
            'password' => '28a095423d922ac0b383e61ed43b7336',
        ]);

        \App\User::create([
            'name' => 'Rosangela',
            'username' => 'Rosangela',
            'phone' => '85987912045',
            'email' => 'dpa@aguadecoco.com.br',
            'password' => 'ba09c6f76fae957e2b7a3b253dd828e1',
        ]);

        \App\User::create([
            'name' => 'Jaqueline RebouÃ§as',
            'username' => 'jaqueline',
            'phone' => '85999359710',
            'email' => 'comercial2@aguadecoco.com.br',
            'password' => '027632e54ec3cdbc81ca8bdb4d12eb1c',
        ]);

        \App\User::create([
            'name' => 'Graciele',
            'username' => 'Gomes',
            'phone' => '85999765050',
            'email' => 'supervisao@aguadecoco.com.br',
            'password' => 'f0038d1781125ddaab6f743e5f08d05f',
        ]);

        \App\User::create([
            'name' => 'Haroldo Duarte',
            'username' => 'haroldo',
            'phone' => '85992563302',
            'email' => 'gestaoecommerce@aguadecoco.com.br',
            'password' => '8d48988ee5975833f2a5d91c989eee4a',
        ]);

        \App\User::create([
            'name' => 'Neurivany',
            'username' => 'neuri',
            'phone' => '85999255008',
            'email' => 'comercial1@aguadecoco.com.br',
            'password' => 'a44e9c1530caed9ff5617be9b1d40752',
        ]);

        \App\User::create([
            'name' => 'Gerson Pacheco',
            'username' => 'gersonpacheco',
            'phone' => '85992884088',
            'email' => 'contabilidade@aguadecoco.com.br',
            'password' => 'e4d45c15647c3b8fc1fc196e72706ff3',
        ]);

        \App\User::create([
            'name' => 'Alysson',
            'username' => 'Alysson',
            'phone' => '85987444988',
            'email' => 'andradealysson25@gmail.com',
            'password' => 'd8a01dac20eeb70e1d6c0477e51504dc',
        ]);

        \App\User::create([
            'name' => 'Lucas Lopes Nepomuceno',
            'username' => 'qualidade',
            'phone' => '85991614442',
            'email' => 'qualidade@aguadecoco.com.br',
            'password' => '85b971a1f55fce80503b8783be79a183',
        ]);

        \App\User::create([
            'name' => 'Fabiana Nemr',
            'username' => 'Fabiananemr',
            'phone' => '11981140064',
            'email' => 'negocios1@aguadecoco.com.br',
            'password' => 'c98f269c03d7cc6c716f118d281a2b1a',
        ]);

        \App\User::create([
            'name' => 'Fernanda CÃ´rte Real',
            'username' => 'fernandareal',
            'phone' => '11983659345',
            'email' => 'negocios2@aguadecoco.com.br',
            'password' => '7be069357ffd3e0991380be82231b68c',
        ]);

        \App\User::create([
            'name' => 'WELLINGTON RODRIGUES LIMA',
            'username' => 'Wellrl',
            'phone' => '11987701000',
            'email' => 'coordenacaoatacado@aguadecoco.com.br',
            'password' => '77e5136f6ad5f0e56f6e31681de83a0f',
        ]);

        \App\User::create([
            'name' => 'Luiz Roberto de Almeida Filho',
            'username' => 'LRoberto',
            'phone' => '85987974034',
            'email' => 'betocore89@gmail.com',
            'password' => '515e43f931a4b527cb784d5115f772db',
        ]);

        \App\User::create([
            'name' => 'Ana Caroline',
            'username' => 'Caroline',
            'phone' => '85986124725',
            'email' => 'anacarooline.fl@gmail.com',
            'password' => 'd48ca6548b4fe82e734b193d6c1af363',
        ]);

        \App\User::create([
            'name' => 'EMERSON GOBBI',
            'username' => 'EMERSON',
            'phone' => '11996936588',
            'email' => 'informatica@aguadecoco.com.br',
            'password' => 'b3ef345928216208bf8e125c5744fcc8',
        ]);

        \App\User::create([
            'name' => 'Rodrigo Thomaz',
            'username' => 'RodrigoThomaz',
            'phone' => '85991851204',
            'email' => 'rodrigo@aguadecoco.com.br',
            'password' => '69843ef215857aa8dcb3b96e7bb39e8d',
        ]);

        \App\User::create([
            'name' => 'Andrea',
            'username' => 'Andrea',
            'phone' => '48991043561',
            'email' => 'andreanunis@ajassociados.com.br',
            'password' => '399a26c076ef3640f995d9d60c9df05e',
        ]);

        \App\User::create([
            'name' => 'Ismar Feitosa',
            'username' => 'ismar',
            'phone' => '85991707306',
            'email' => 'almoxarifado@aguadecoco.com.br',
            'password' => '24e97733ec8f0eadc31a2c67af7d01d1',
        ]);

        \App\User::create([
            'name' => 'PatrÃ­cia Mendes Salvador',
            'username' => 'Paty',
            'phone' => '81998660479',
            'email' => 'supervisaoregional2@aguadecoco.com.br',
            'password' => 'a0ea9de43f82eb60929040ef67dd734e',
        ]);

        \App\User::create([
            'name' => 'Thais Cruz',
            'username' => 'Supervisao Regional ',
            'phone' => '02180499557',
            'email' => 'supervisaoregional3@aguadecoco.com.br',
            'password' => '298f7ace74fbdcaf4129fbc4fae759b1',
        ]);

        \App\User::create([
            'name' => 'Cinira Nunes Gomes',
            'username' => 'Cinira',
            'phone' => '85988332049',
            'email' => 'controladoria2@aguadecoco.com.br',
            'password' => '78750bccccd5871367d47edaeb7acc09',
        ]);
    }
}
