<?php

use Illuminate\Database\Seeder;
use App\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cargando los animales

        $animal = new Animal();
        $animal->name = 'Delfín';
        $animal->number = '0';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Ballena';
        $animal->number = '00';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Carnero';
        $animal->number = '1';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Toro';
        $animal->number = '2';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Ciempies';
        $animal->number = '3';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Alacrán';
        $animal->number = '4';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'León';
        $animal->number = '5';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Rana';
        $animal->number = '6';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Perico';
        $animal->number = '7';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Ratón';
        $animal->number = '8';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Águila';
        $animal->number = '9';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Tigre';
        $animal->number = '10';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Gato';
        $animal->number = '11';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Caballo';
        $animal->number = '12';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Mono';
        $animal->number = '13';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Paloma';
        $animal->number = '14';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Zorro';
        $animal->number = '15';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Oso';
        $animal->number = '16';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Pavo';
        $animal->number = '17';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Burro';
        $animal->number = '18';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Chivo';
        $animal->number = '19';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Cerdo';
        $animal->number = '20';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Gallo';
        $animal->number = '21';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Camello';
        $animal->number = '22';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Cebra';
        $animal->number = '23';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Iguana';
        $animal->number = '24';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Gallina';
        $animal->number = '25';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Vaca';
        $animal->number = '26';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Perro';
        $animal->number = '27';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Zamuro';
        $animal->number = '28';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Elefante';
        $animal->number = '29';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Caimán';
        $animal->number = '30';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Lapa';
        $animal->number = '31';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Ardilla';
        $animal->number = '32';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Pez';
        $animal->number = '33';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Venado';
        $animal->number = '34';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Jirafa';
        $animal->number = '35';
        $animal->save();

        $animal = new Animal();
        $animal->name = 'Culebra';
        $animal->number = '36';
        $animal->save();

    }
}
