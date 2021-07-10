<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator ;
use App\Models\student;
class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail,
        'phone'=>$this->faker->phoneNumber(),
        'age' => $this->faker->numberBetween(20,45),
        'gender'=>$this->faker->randomElement(['male','female']),

        ];
    }
}
