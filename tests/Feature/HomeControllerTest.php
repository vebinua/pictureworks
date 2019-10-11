<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class HomeControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function testBasicTest()
    {
       $this->assertTrue(true,'sorry failure');
    }

    /** @test */
    public function index_displays_404_by_default()
    {
        $response = $this->get('/index');

        $response->assertStatus(404);
    }

    /** @test */
    public function user_has_default_password() {
        $this->assertDatabaseHas('users', [
            'password' => '720DF6C2482218518FA20FDC52D4DED7ECC043AB'
        ]);
    }
}