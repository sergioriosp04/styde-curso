<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * @test
     */
    function it_loads_the_users_list_page()
    {
        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('Users');
    }

    function it_loads_the_users_detail_page()
    {
        $this->get('/users/5')
            ->assertStatus(200)
            ->assertSee("mostrando talle del usuario: 5");
    }
}
