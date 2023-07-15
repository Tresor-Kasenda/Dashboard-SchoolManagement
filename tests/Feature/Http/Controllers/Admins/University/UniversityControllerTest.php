<?php

declare(strict_types=1);

use App\Models\University;
use App\Models\User;
use Illuminate\Support\Arr;
use function Pest\Laravel\actingAs;

beforeEach(function (): void {
    $this->user = User::factory()->create();
});

it('show de route of university controller', function (): void {
    actingAs($this->user)
        ->get(route('university.index'))
        ->assertRedirect();
});

it('show information of users attached to university', function (): void {
    actingAs($this->user)
        ->get(route('university.index'));

    $university = University::factory()->create();

    $user = User::factory()->for($university)->create();

    $this->assertDatabaseHas('users', [
        'university_id' => $university->id
    ]);

    expect($user->university->name)
        ->toBe($university->name);
});

it('store university in database', function (): void {
    actingAs($this->user)
        ->post(route('university.store'), [
            'name' => 'University of the Philippines',
            'initials' => 'UP',
            'address' => 'University of the Philippines',
            'email' => '',
            'code' => Arr::random(['UP', 'UPD', 'UPM', 'UPC', 'UPV',]),
            'phone' => '09123456789'
        ])
        ->assertRedirect()
        ->assertSessionHas('success', 'University created successfully.');

    expect(University::query()->count())
        ->toBe(1);
});
