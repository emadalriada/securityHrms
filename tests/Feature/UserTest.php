<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test users index page loads successfully.
     */
    public function test_users_index_page_loads(): void
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
        $response->assertViewIs('users.index');
    }

    /**
     * Test user creation page loads successfully.
     */
    public function test_users_create_page_loads(): void
    {
        $response = $this->get('/users/create');

        $response->assertStatus(200);
        $response->assertViewIs('users.create');
    }

    /**
     * Test user can be created.
     */
    public function test_user_can_be_created(): void
    {
        $userData = [
            'email' => 'test@example.com',
            'password' => 'password123',
            'nameEnglish' => 'Test User',
            'nameArabic' => 'مستخدم تجريبي',
            'nationalId' => '12345678901234',
            'company' => 'Test Company',
            'jobTitle' => 'Developer',
            'hr' => false,
            'dataChecked' => false,
            'photoDone' => false,
            'idDone' => false,
            'allThingsDone' => false,
            'out' => false,
        ];

        $response = $this->post('/users', $userData);

        $response->assertRedirect('/users');
        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
            'nameEnglish' => 'Test User',
        ]);
    }

    /**
     * Test user show page displays user details.
     */
    public function test_user_show_page_displays_details(): void
    {
        $user = User::factory()->create([
            'email' => 'show@example.com',
            'nameEnglish' => 'Show User',
        ]);

        $response = $this->get('/users/' . $user->id);

        $response->assertStatus(200);
        $response->assertSee('Show User');
        $response->assertSee('show@example.com');
    }

    /**
     * Test user edit page loads successfully.
     */
    public function test_user_edit_page_loads(): void
    {
        $user = User::factory()->create();

        $response = $this->get('/users/' . $user->id . '/edit');

        $response->assertStatus(200);
        $response->assertViewIs('users.edit');
    }

    /**
     * Test user can be updated.
     */
    public function test_user_can_be_updated(): void
    {
        $user = User::factory()->create([
            'email' => 'old@example.com',
            'nameEnglish' => 'Old Name',
        ]);

        $response = $this->put('/users/' . $user->id, [
            'email' => 'new@example.com',
            'nameEnglish' => 'New Name',
            'hr' => false,
            'dataChecked' => false,
            'photoDone' => false,
            'idDone' => false,
            'allThingsDone' => false,
            'out' => false,
        ]);

        $response->assertRedirect('/users');
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'email' => 'new@example.com',
            'nameEnglish' => 'New Name',
        ]);
    }

    /**
     * Test user can be deleted.
     */
    public function test_user_can_be_deleted(): void
    {
        $user = User::factory()->create();

        $response = $this->delete('/users/' . $user->id);

        $response->assertRedirect('/users');
        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);
    }
}
