<?php

use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/onetoone', function () {
    $user = User::with('image')->first();
    return response()->json([
        'user' => $user,
        'user_image' => $user->image->url,
    ]);
});

Route::get('/onetomany', function () {
    $post = Post::with('images')->first();
    return response()->json(
        $post
    );
});

Route::get('/image', function () {
    $image = Image::find(1);
    $owner = $image->imageable; // Returns the User instance with id 1

    return response()->json([
        $owner
    ]);
});
