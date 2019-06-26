<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_create_project()
    {
        $attributes = factory(Project::class)->raw();

        $this->post('/projects', $attributes)
            ->assertRedirect('/projects');

        $this->assertDatabaseHas('projects', $attributes);
    }
}
