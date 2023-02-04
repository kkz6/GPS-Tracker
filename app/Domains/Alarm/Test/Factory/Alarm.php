<?php declare(strict_types=1);

namespace App\Domains\Alarm\Test\Factory;

use Illuminate\Database\Eloquent\Factories\Factory as FactoryEloquent;
use App\Domains\Alarm\Model\Alarm as Model;
use App\Domains\User\Model\User as UserModel;

class Alarm extends FactoryEloquent
{
    /**
     * @var class-string<Illuminate\Database\Eloquent\Model>
     */
    protected $model = Model::class;

    /**
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'type' => 'movement',
            'enabled' => true,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

            'user_id' => static fn () => UserModel::first() ?: UserModel::factory(),
        ];
    }
}