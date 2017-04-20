<?php

use Illuminate\Database\Seeder;
use App\usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run(){
        DB::table('usuarios')->delete();
        for ($i=0; $i<10; $i++) {
            usuario::create([
                'username' => 'nombreusuario'.$i,
                'password' => '****'.$i



            ]);
        }
    }
}
