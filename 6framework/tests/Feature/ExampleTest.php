<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase; // Add this line
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase; // And this line

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}