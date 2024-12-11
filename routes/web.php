Route::get('/', function () {
    return view('pages.main');
});

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});
