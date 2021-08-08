<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;
    protected $client = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6),
            'description' => $this->faker->paragraph(3),
            'requirement' => $this->faker->paragraphs(4, true),
            'projectFile' => \Illuminate\Http\UploadedFile::fake()->create('test.pdf')->store('public/project files'),
            'ownBy' => \App\Models\Client::inRandomOrder()->first()->id,
            'percentageComplete' => $this->faker->biasedNumberBetween(0, 100),
            'startDate' => $this->faker->date(),
            'completeDate' => $this->faker->date(),
            'deliveryDate' => $this->faker->date(),
            'isDelivered' => $this->faker->boolean(),
            'feedback' => $this->faker->paragraph(2),
        ];
    }
}