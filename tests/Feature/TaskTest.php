<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task;


class TaskTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function listGet()
    {
        $tasks = Task::factory()->count(10)->create();
        // dd($tasks->toArray());

        $response = $this->getJson('api/tasks');

        // dd($response->json());

        $response
            ->assertOK()
            ->assertJsonCount(10);
    }
}
