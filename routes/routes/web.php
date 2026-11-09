<?php

use Illuminate\Support\Facades\Route;

// 3-нұсқа: Жеке сәлемдесу

Route::get('/welcome/{name}', function ($name) {
    return 'Қош келдіңіз, ' . $name . '!';
});

