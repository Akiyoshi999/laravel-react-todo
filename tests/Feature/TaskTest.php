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

    /**
     * @test
     */
    public function createTest()
    {
        $data = [
            'title' => 'テスト投稿',
        ];
        $response = $this->postJson('api/tasks', $data);

        // dd($response->json());

        $response
            ->assertStatus(201)
            ->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function updateTest()
    {
        $task = Task::factory()->create();
        $task->title = 'Overwrite';

        $response = $this->patchJson("api/tasks/{$task->id}", $task->toArray());

        // dd($response->json());
        // dd($task->toArray());

        $response
            ->assertOK()
            ->assertJsonFragment($task->toArray());
    }

    /**
     * @test
     */
    public function deleteTest()
    {
        $task = Task::factory()->count(10)->create();

        $response = $this->deleteJson("api/tasks/1");

        // dd($response->json());
        // dd($task->toArray());

        $response
            ->assertOK();

        $response = $this->getJson("api/tasks");
        $response->assertJsonCount($task->count() - 1);
    }

    /**
     * @test
     */
    public function emptyTest()
    {
        $data = [
            'title' => '',
        ];
        $response = $this->postJson('api/tasks', $data);

        // dd($response->json());

        $response
            ->assertStatus(422)
            ->assertJsonValidationErrors([
                'title' => 'The title field is required.'
            ]);
    }

    /**
     * @test
     */
    public function title255overTest()
    {
        $data = [
            'title' => str_repeat('T', 256),
        ];
        $response = $this->postJson('api/tasks', $data);

        // dd($response->json());

        $response
            ->assertStatus(422)
            ->assertJsonValidationErrors([
                'title' => 'The title must not be greater than 255 characters.'
            ]);
    }
}
