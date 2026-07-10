<?php

use Illuminate\Support\Facades\Auth;

test('registers a new user', function () {
    visit('/register')
        ->fill('name', 'Bird Person')
        ->fill('email', 'birdperson@gmail.com')
        ->fill('password', 'password')
        ->press('@register-btn')
        ->assertPathIs('/');

    expect(Auth::user())->toMatchArray([
        'name' => 'Bird Person',
        'email' => 'birdperson@gmail.com',
    ]);

    $this->assertAuthenticated();
});

test('requires a valid email', function () {
    visit('/register')
        ->fill('name', 'Bird Person')
        ->fill('email', '')
        ->fill('password', 'password')
        ->press('@register-btn')
        ->assertPathIs('/register');
});