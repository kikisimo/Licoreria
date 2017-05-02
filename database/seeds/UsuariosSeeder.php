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
                'password' => '****'.$i,
                'ci_person' => '1512'.$i,
                'name' => 'nombre '.$i,
                'last_name' => 'apellido '.$i,
                'phone' => '5849'.$i,
                'email' => 'correo@hotmail.com'.$i,
                'role' => 'administrador '.$i,



            ]);
        }
    }
}
