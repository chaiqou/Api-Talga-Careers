<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    public function test_index()
    {
        // load data in db
        $posts = Post::factory(10)->make();

        // make http request
        $response = $this->json('GET', '/api/posts');

        // assert response
        $response->assertStatus(200);
    }
};
