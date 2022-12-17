<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto();
        $producto->codigo_producto = "56-478-A-34C";
        $producto->descripcion_producto = "Papel 8.6x11 75gr";
        $producto->unidad_de_medida = "paq";
        $producto->almacen = "Informática";
        $producto->existencia_en_almacen = 80;
        $producto->save();

        $producto2 = new Producto();
        $producto2->codigo_producto = "67-34-45-GF";
        $producto2->descripcion_producto = "Pintura impermeabilizante roja";
        $producto2->unidad_de_medida = "litro";
        $producto2->almacen = "Inversiones";
        $producto2->existencia_en_almacen = 950;
        $producto2->save();

        $producto3 = new Producto();
        $producto3->codigo_producto = "56-3-667-3HH";
        $producto3->descripcion_producto = "Neumáticos de 20";
        $producto3->unidad_de_medida = "u";
        $producto3->almacen = "Transporte";
        $producto3->existencia_en_almacen = 800;
        $producto3->save();

        $producto4 = new Producto();
        $producto4->codigo_producto = "56-78-2D-5C";
        $producto4->descripcion_producto = "Cemento a granel";
        $producto4->unidad_de_medida = "Kg";
        $producto4->almacen = "Inversiones";
        $producto4->existencia_en_almacen = 1850;
        $producto4->save();

        $producto5 = new Producto();
        $producto5->codigo_producto = "77-G89-A34-DH";
        $producto5->descripcion_producto = "Extintor de Polvo Químico Seco";
        $producto5->unidad_de_medida = "u";
        $producto5->almacen = "Seguridad y Protección";
        $producto5->existencia_en_almacen = 200;
        $producto5->save();
    }
}
