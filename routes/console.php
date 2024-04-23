<?php

use App\Models\Document;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

Artisan::command('app:prepare', function () {

    Artisan::call('migrate:fresh');

    $user = User::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
    ]);

    $team = Team::create([
        'name' => 'Test Team',
    ]);

    $user->teams()->attach($team);

    Document::create([
        'title' => 'Test Document',
        'team_id' => $team->id,
    ]);

})->purpose('Prepare Application');
