<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\plant>
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pName' =>$this-> faker()->sentence(3),
            'body'=>$this-> faker()->text(300),
            'cat_id'=>$this-> faker()->numberBetween(1,DB::table('categories')->count()),
            'large_image'=>$this-> faker()->imageUrl,
            'small_image'=>$this-> faker()->imageUrl,
        ]; 
    }
}
