<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    /* public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/
    public function test_listUserAppearInHomeView(){
        $this->withExceptionHandling();

        $users = User::factory(2)->create();
        $user = $users[0];

        $response = $this->get('/');

        $response->assertSee($user->name);

        $response->assertStatus(200)
            ->assertViewIs('home');
    }

    public function test_anUserCanBeDeleted(){
        $this->withExceptionHandling();

        $user = User::factory()->create();
        $this->assertCount(1, User::all());

        $response = $this->delete(route('deleteUser', $user->id));

        $this->assertCount(0, User::all());
    }

    public function test_anUserCanBeCreate(){
        $this->withExceptionHandling();

        $response = $this->post((route('storeUser')),
        [
            'name' => 'nameAndSurname',
            'class' => 'class',
            'img' => 'img',
            'date' => 'dateOfBirth',
            'email' => 'email',
            'adress' => 'adress',
            'telephone' => 'telephone',
            'academicRecord' => 'academicRecord',
            'remarks' => 'remarks'
        ]);

        $this->assertCount(1, User::all());
    }
}

