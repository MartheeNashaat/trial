<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Suppot\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Facker;
use App\Models\product;
use App\Models\productImg;
use App\Models\brand;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Sequence;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('products')->insert([
            'name'=>''
        ]); */
        $user = product::factory()
            ->count(7)
            ->state(
                ['size' => 'null'],
            )
            ->for(brand::factory()
                ->state(new Sequence(
                    ['name' => 'Calvin Klein'],
                    ))
            )
            ->for(category::factory()
               -> state(new Sequence(

                    ['type' => 'bags'],
                    ))
            )
           /*  ->has(productImg::factory()->count(3)
            ->state(new Sequence(
           ['slug' => 'ckshirt1,jpg'],
           ['slug' => 'ckshirt2,jpg'],
           ['slug' => 'ckshirt3,jpg'],
           ))
           )*/
            ->create(); 

    }
}
