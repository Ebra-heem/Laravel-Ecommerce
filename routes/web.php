<?php
Route::get('/','WelcomeController@index');
Route::get('/category-view/{id}','WelcomeController@category');
Route::get('/product-details/{id}','WelcomeController@productDetails');
Route::get('/contactus','WelcomeController@contactUs')->name('contactus');
Route::post('/search','WelcomeController@search');
Route::get('/search','WelcomeController@searchget');
Route::get('/admin/home/user','ContactController@user')->name('user');
Route::get('/admin/home/add','ContactController@uadd')->name('uadd');
Route::get('/test',function(){
  return  App\Category::with('childs')
                 ->where('parent_id',0)->get();
        
});
/*
Route::get('/{name}', function () {
    return redirect('/');
})->where('name','[A-Za-z]+');
*/


//################ FrontEnd #######################
//Cart Info save 
Route::get('/cart-show','CartController@showCart');
Route::get('/cart-add/{id}','CartController@addToCart');
Route::get('/cart-delete/{id}','CartController@deleteToCart');
Route::get('/cart-update','CartController@updateCart');

Route::get('/checkout','CheckoutController@index');
Route::post('/checkout/sign-up','CheckoutController@customerRegistration');
Route::post('/checkout/login','CheckoutController@customerLogin');
Route::get('/checkout/shipping','CheckoutController@showShippingForm');
Route::post('/checkout/save-shipping','CheckoutController@saveShippingInfo');
Route::get('/checkout/payment','CheckoutController@showPaymentForm');
Route::post('/checkout/save-order','CheckoutController@customerHome');
Route::get('/complete/order','CheckoutController@completeOrder');


//################ Backend #######################
Route::group(['prefix'=>'/admin','middleware'=>'auth'],function(){
/*Category info*/
Route::get('/category/add','CategoryController@createCategory');
Route::post('/category/save','CategoryController@storeCategory');
Route::get('/category/manage','CategoryController@manageCategory');
Route::get('/category/edit/{id}','CategoryController@editCategory');
Route::post('/category/update','CategoryController@updateCategory');
Route::get('/category/delete/{id}','CategoryController@deleteCategory');
/*Category info*/

/*Manufacturar info*/
Route::get('/manufacturar/add','ManufacturarController@createCategory');
Route::post('/manufacturar/save','ManufacturarController@storeCategory');
Route::get('/manufacturar/manage','ManufacturarController@manageCategory');
Route::get('/manufacturar/edit/{id}','ManufacturarController@editCategory');
Route::post('/manufacturar/update','ManufacturarController@updateCategory');
Route::get('/manufacturar/delete/{id}','ManufacturarController@deleteCategory');
/*Manufacturar info*/

/*Product info*/
Route::get('/product/add','ProductController@createProduct');
Route::post('/product/save','ProductController@storeProduct');
Route::get('/product/manage','ProductController@manageProduct');
Route::get('/product/edit/{id}','ProductController@editProduct');
Route::post('/product/update','ProductController@updateProduct');
Route::get('/product/delete/{id}','ProductController@deleteProduct');
Route::get('/product/view/{id}','ProductController@viewProduct');
/*Product info*/

Route::resource('/contact','ContactController');
Route::resource('/slider','SliderController');
});


Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('admin.home');
Route::get('/admin/calendar', 'HomeController@calendar');

/*Category info*/
Route::get('/category/add','CategoryController@createCategory');
Route::post('/category/save','CategoryController@storeCategory');
Route::get('/category/manage','CategoryController@manageCategory');
Route::get('/category/edit/{id}','CategoryController@editCategory');
Route::post('/category/update','CategoryController@updateCategory');
Route::get('/category/delete/{id}','CategoryController@deleteCategory');
/*Category info*/

/*Manufacturar info*/
Route::get('/manufacturar/add','ManufacturarController@createCategory');
Route::post('/manufacturar/save','ManufacturarController@storeCategory');
Route::get('/manufacturar/manage','ManufacturarController@manageCategory');
Route::get('/manufacturar/edit/{id}','ManufacturarController@editCategory');
Route::post('/manufacturar/update','ManufacturarController@updateCategory');
Route::get('/manufacturar/delete/{id}','ManufacturarController@deleteCategory');
/*Manufacturar info*/

/*Product info*/
Route::get('/product/add','ProductController@createProduct');
Route::post('/product/save','ProductController@storeProduct');
Route::get('/product/manage','ProductController@manageProduct');
Route::get('/product/edit/{id}','ProductController@editProduct');
Route::post('/product/update','ProductController@updateProduct');
Route::get('/product/delete/{id}','ProductController@deleteProduct');
Route::get('/product/view/{id}','ProductController@viewProduct');
/*Product info*/


Route::get('/order/download-order-invoice/{id}', [
    'uses'  =>  'OrderController@downloadOrderInvoice',
    'as'    =>  'download-order-invoice'
]);

    Route::get('/order/manage-order', [
        'uses'  =>  'OrderController@manageOrderInfo',
        'as'    =>  'manage-order',

    ]);

    Route::get('/order/view-order-detail/{id}', [
        'uses'  =>  'OrderController@viewOrderDetail',
        'as'    =>  'view-order-detail'
    ]);
    Route::get('/order/view-order-invoice/{id}', [
        'uses'  =>  'OrderController@viewOrderInvoice',
        'as'    =>  'view-order-invoice'
    ]);
    Route::get('/order/edit-order-detail/{id}', [
        'uses'  =>  'OrderController@editOrderDetail',
        'as'    =>  'edit-order-detail'
    ]);
    Route::post('/order/update-order-detail', [
        'uses'  =>  'OrderController@updateOrderDetail',
        'as'    =>  'update-order-detail'
    ]);
    Route::get('/order/delete/{id}', [
        'uses'  =>  'OrderController@orderDelete',
        'as'    =>  'delete-order'
    ]);



Route::get('/subs', function () {
	if (Gate::allows('subs-only', Auth::user())) {
    		return view('subs');
		}else{
			return "you are not subscriber in this page ";
		}
    
});