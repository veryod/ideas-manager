<?php

use App\Models\Idea;
use App\Models\User;

test('creates a new idea', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    visit('/ideas/create')
        ->fill('title', 'Test title')
        ->fill('description', 'Test description.')
        ->select('@select-status', 'completed')
        ->press('@create-btn')
        ->assertPathIs('/ideas/1');

    expect($user->ideas()->first())->toMatchArray([
        'title' => 'Test title',
        'description' => 'Test description.',
        'status' => 'completed',
    ]);
});

test('', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    visit('/ideas/create')
        ->fill('title', 'Test title')
        ->fill('description', 'Test description.')
        ->select('@select-status', 'in_progress')
        ->press('@add-link-btn')
        ->fill('links[]', 'https://example.com/')
        ->press('@create-btn')
        ->assertPathIs('/ideas/1');

    expect($user->ideas()->first())->toMatchArray([
        'title' => 'Test title',
        'description' => 'Test description.',
        'status' => 'in_progress',
        'links' => ['https://example.com/'],
    ]);
});
