<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleApiTest extends TestCase
{
    use WithFaker;
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_can_create_an_article()
    {
        $data = [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph
        ];
        
        $this->post(route('articles.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }
}