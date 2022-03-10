<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\catalogo_model;

class Catalago_seeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catalogos = catalogo_model::all();
        
        foreach($catalogos as $catalogo){
            DB::table('catalogo')->insert([
            'id' => $catalogo ->id,
            'codigo'=>$catalogo ->codigo,
            'asentamiento' => $catalogo ->asentamiento,
            'tipo_asenta'=>$catalogo ->tipo_asenta,
            'municipio'=>$catalogo ->municipio,
            'estado'=>$catalogo->estado,
            'ciudad'=>$catalogo ->ciudad,
        ]);
        }
    
        
    }
}
