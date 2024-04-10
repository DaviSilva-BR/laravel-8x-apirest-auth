<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function testSuccessRegistration()
    {
        $payload = [
            "name" => "John Doe",
            "email" => "dowe@example.com",
            "password" => "demo12345",
            "password_confirmation" => "demo12345"
        ];

        $this->json('POST', 'api/register', $payload, ['Accept' => 'application/json'])
            ->assertStatus(200);
    } 

    public function testErrorRegistrationInputVoid()
    {
        $payload = [
            "name" => "",
            "email" => "",
            "password" => "",
            "password_confirmation" => ""
        ];

        $response = $this->json('POST', 'api/register', $payload, ['Accept' => 'application/json']);
        $response->assertJson([
            'message' => 'The given data was invalid.'
        ]);
    }
}
