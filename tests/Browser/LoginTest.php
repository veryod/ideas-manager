<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

test('logs in a user', function () {
    $user = User::factory()->create(['password' => 'password']);

    visit('/login')
        ->fill('email', $user->email)
        ->fill('password', 'password')
        ->press('@login-btn')
        ->assertPathIs('/');

    $this->assertAuthenticated();
});

test('logs out a user', function () {
    $user = User::factory()->create();

    Auth::login($user);

    visit('/')
        ->press('@logout-btn')
        ->assertPathIs('/login');

    $this->assertGuest();
});