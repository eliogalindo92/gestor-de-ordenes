<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entidad;

class EntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entidad = new Entidad();
        $entidad->nombre_entidad = "BCA Zaza";
        $entidad->save();

        $entidad2 = new Entidad();
        $entidad2->nombre_entidad = "Cencadi";
        $entidad2->save();

        $entidad3 = new Entidad();
        $entidad3->nombre_entidad = "Siboney I";
        $entidad3->save();

        $entidad4 = new Entidad();
        $entidad4->nombre_entidad = "Siboney II";
        $entidad4->save();

        $entidad5 = new Entidad();
        $entidad5->nombre_entidad = "DT Mayabeque";
        $entidad5->save();

        $entidad6 = new Entidad();
        $entidad6->nombre_entidad = "DT Artemisa";
        $entidad6->save();

        $entidad7 = new Entidad();
        $entidad7->nombre_entidad = "DT Matanzas";
        $entidad7->save();

        $entidad8 = new Entidad();
        $entidad8->nombre_entidad = "DT Cienfuegos";
        $entidad8->save();

        $entidad9 = new Entidad();
        $entidad9->nombre_entidad = "DT Las Villas";
        $entidad9->save();

        $entidad10 = new Entidad();
        $entidad10->nombre_entidad = "DT Camagüey";
        $entidad10->save();
    }
}
