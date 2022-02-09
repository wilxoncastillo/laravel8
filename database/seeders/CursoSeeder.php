<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'name' => 'Laravel',
            'description' => 'Framework de PHP',
            'category' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur veritatis nihil error. Nemo commodi ad quos autem eligendi, neque fugit modi. Eaque dolore hic ad magni eos at velit vel. ',
        ]);
    }
}
