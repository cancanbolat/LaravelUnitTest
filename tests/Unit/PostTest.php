<?php

namespace Tests\Unit;

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_show_post()
    {
        $post = factory(Post::class)->create();

        $this->get(route('posts.show', $post->id))
            ->assertStatus(200);
    }
}
