<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solicitud;

class SolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $solicitud = new Solicitud();
        $solicitud->id_entidad = 1;
        $solicitud->numero_solicitud = 1;
        $solicitud->fecha_solicitud = "2022-12-21 09:31:41";
        $solicitud->descripcion_producto = "Toner para impresora Epson";
        $solicitud->unidad_medida_producto = "u";
        $solicitud->cantidad_solicitada = 10;
        $solicitud->finalizada = 0;
        $solicitud->save();

        $solicitud2 = new Solicitud();
        $solicitud2->id_entidad = 9;
        $solicitud2->numero_solicitud = 2;
        $solicitud2->fecha_solicitud = "2022-09-12 12:31:41";
        $solicitud2->descripcion_producto = "Teléfono celular Samsung";
        $solicitud2->unidad_medida_producto = "u";
        $solicitud2->cantidad_solicitada = 2;
        $solicitud2->finalizada = 1;
        $solicitud2->save();

        $solicitud3 = new Solicitud();
        $solicitud3->id_entidad = 3;
        $solicitud3->numero_solicitud = 3;
        $solicitud3->fecha_solicitud = "2022-11-16 10:45:00";
        $solicitud3->descripcion_producto = "Toner para impresora Kyosera EcoSys";
        $solicitud3->unidad_medida_producto = "u";
        $solicitud3->cantidad_solicitada = 5;
        $solicitud3->finalizada = 1;
        $solicitud3->save();

        $solicitud4 = new Solicitud();
        $solicitud4->id_entidad = 6;
        $solicitud4->numero_solicitud = 4;
        $solicitud4->fecha_solicitud = "2022-12-12 14:00:41";
        $solicitud4->descripcion_producto = "Cemento a granel";
        $solicitud4->unidad_medida_producto = "Kg";
        $solicitud4->cantidad_solicitada = 200;
        $solicitud4->finalizada = 0;
        $solicitud4->save();

        $solicitud5 = new Solicitud();
        $solicitud5->id_entidad = 1;
        $solicitud5->numero_solicitud = 5;
        $solicitud5->fecha_solicitud = "2022-12-14 16:50:20";
        $solicitud5->descripcion_producto = "Neumáticos de 20";
        $solicitud5->unidad_medida_producto = "u";
        $solicitud5->cantidad_solicitada = 60;
        $solicitud5->finalizada = 0;
        $solicitud5->save();

        $solicitud6 = new Solicitud();
        $solicitud6->id_entidad = 8;
        $solicitud6->numero_solicitud = 6;
        $solicitud6->fecha_solicitud = "2022-11-10 11:20:11";
        $solicitud6->descripcion_producto = "Extintor de polvo químico";
        $solicitud6->unidad_medida_producto = "u";
        $solicitud6->cantidad_solicitada = 100;
        $solicitud6->finalizada = 0;
        $solicitud6->save();
    }
}
