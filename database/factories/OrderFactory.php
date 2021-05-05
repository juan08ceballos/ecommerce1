<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),
            'state' =>$this->faker->randomElement(['created', 'active', 'pending', 'delivered', 'finished']),
            'payment' =>$this->faker->randomElement(['cc','crypto','cash','pse','paypal']),
            'final_price' =>$this->faker->numberBetween(850000,6000000),
            'user_id' => $this->faker->numberBetween(1, User::count())
        ];
    }
}
