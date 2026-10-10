<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menu', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Classic Espresso', 'category' => 'Hot Coffee', 'price' => 95],
        ['id' => 2, 'name' => 'Vanilla Oat Latte', 'category' => 'Latte', 'price' => 145],
        ['id' => 3, 'name' => 'Caramel Cloud Latte', 'category' => 'Signature', 'price' => 155],
        ['id' => 4, 'name' => 'Dark Chocolate Mocha', 'category' => 'Mocha', 'price' => 150],
        ['id' => 5, 'name' => 'Iced Americano', 'category' => 'Cold Coffee', 'price' => 120],
    ]);
});

Route::get('/beans', function () {
    return response()->json([
        ['id' => 1, 'origin' => 'Brazil', 'name' => 'Brazil Cerrado', 'roast' => 'Medium', 'notes' => 'Chocolate, caramel'],
        ['id' => 2, 'origin' => 'Ethiopia', 'name' => 'Ethiopia Yirgacheffe', 'roast' => 'Light', 'notes' => 'Floral, citrus'],
        ['id' => 3, 'origin' => 'Colombia', 'name' => 'Colombia Supremo', 'roast' => 'Medium', 'notes' => 'Nutty, balanced'],
    ]);
});

Route::get('/baristas', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Alex Rivera', 'role' => 'Head Barista', 'specialty' => 'Latte Art'],
        ['id' => 2, 'name' => 'Mia Santos', 'role' => 'Coffee Specialist', 'specialty' => 'Pour Over'],
        ['id' => 3, 'name' => 'Noah Cruz', 'role' => 'Barista', 'specialty' => 'Espresso'],
    ]);
});

Route::get('/orders', function () {
    return response()->json([
        ['id' => 1042, 'item' => 'Caramel Cloud Latte', 'quantity' => 1, 'total' => 155, 'status' => 'Ready'],
        ['id' => 1041, 'item' => 'Iced Americano', 'quantity' => 2, 'total' => 240, 'status' => 'Completed'],
        ['id' => 1038, 'item' => 'Dark Chocolate Mocha', 'quantity' => 1, 'total' => 150, 'status' => 'Completed'],
    ]);
});

Route::get('/featured', function () {
    return response()->json([
        'id' => 1,
        'name' => 'Caramel Cloud Latte',
        'description' => 'Velvety espresso, steamed milk and caramel sweetness.',
        'price' => 155,
        'category' => 'Signature Coffee',
        'available' => true,
    ]);
});

