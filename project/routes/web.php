<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\GoogleController;
use App\Http\Controllers\client\AddToCartController;
use App\Http\Controllers\client\BlogController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\IntroController;
use App\Http\Controllers\client\OrderClientController;
use App\Http\Controllers\client\ProductInforController;
use App\Http\Controllers\client\SignInController;
use App\Http\Controllers\client\TaikhoanController;
use App\Http\Controllers\client\WatchMenController;
use App\Http\Controllers\client\WatchWomenController;
use App\Http\Controllers\client\WishlistController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoleUserController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




//Admin


Route::post('/postLogin', [AdminController::class, 'postloginAdmin'])->name('postAdmin');

Route::group(['middleware' => ['guest']], function () {
    Route::get('admin/login', [AdminController::class, 'loginAdmin'])->name('adminIndex');
});
Route::group(['prefix' => "admin", 'middleware' => 'auth'], function () {

    Route::get('/', [AdminController::class, 'loginAdmin'])->name('adminIndex');
    Route::get('/index', [AdminController::class, 'index'])->name('Index');
    //Supplier
    Route::get('supplier/index', [SupplierController::class, 'index'])->name('supplierIndex');
    Route::get('supplier/create', [SupplierController::class, 'create'])->name('supplierCreate');
    Route::post('supplier/postCreate', [SupplierController::class, 'postCreate'])->name('supplierPostCreate');
    Route::get('supplier/update/{id}', [SupplierController::class, 'update'])->name('supplierUpdate');
    Route::post('supplier/postUpdate/{id}', [SupplierController::class, 'postUpdate'])->name('supplierPostUpdate');
    Route::get('supplier/delete/{id}', [SupplierController::class, 'delete'])->name('supplierDelete');
    Route::get('supplier/view/{id}', [SupplierController::class, 'view'])->name('supplierView');

    //type
    Route::get('type/index', [TypeController::class, 'index'])->name('typeIndex');
    Route::get('type/create', [TypeController::class, 'create'])->name('typeCreate');
    Route::post('type/postCreate', [TypeController::class, 'postCreate'])->name('typePostCreate');
    Route::get('type/update/{id}', [TypeController::class, 'update'])->name('typeUpdate');
    Route::post('type/postUpdate/{id}', [TypeController::class, 'postUpdate'])->name('typePostUpdate');
    Route::get('type/delete/{id}', [TypeController::class, 'delete'])->name('typeDelete');
    Route::get('type/view/{id}', [TypeController::class, 'view'])->name('typeView');

    //product
    Route::get('product/index', [ProductController::class, 'index'])->name('productIndex');
    // Route::get('product/create', [ProductController::class, 'create'])->name('productCreate');
    Route::post('product/postCreate', [ProductController::class, 'postCreate'])->name('productPostCreate');
    Route::get('product/update/{id}', [ProductController::class, 'update'])->name('productUpdate');
    Route::post('product/postUpdate/{id}', [ProductController::class, 'postUpdate'])->name('productPostUpdate');
    Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('productDelete');
    Route::get('product/view/{id}', [ProductController::class, 'view'])->name('productView');

    //Product_Image
    Route::get('product_image/index', [ProductImageController::class, 'index'])->name('productimageIndex');
    Route::post('product_image/postCreate', [ProductImageController::class, 'postCreate'])->name('productimagePostCreate');
    Route::get('product_image/delete/{id}', [ProductImageController::class, 'delete'])->name('productimageDelete');

    //Customer
    Route::get('customer/index', [CustomerController::class, 'index'])->name('customerIndex');
    Route::get('customer/create', [CustomerController::class, 'create'])->name('customerCreate');
    Route::post('customer/postCreate', [CustomerController::class, 'postCreate'])->name('customerPostCreate');
    Route::get('customer/update/{id}', [CustomerController::class, 'update'])->name('customerUpdate');
    Route::post('customer/postUpdate/{id}', [CustomerController::class, 'postUpdate'])->name('customerPostUpdate');
    Route::get('customer/delete/{id}', [CustomerController::class, 'delete'])->name('customerDelete');
    Route::get('customer/view/{id}', [CustomerController::class, 'view'])->name('customerView');

    //Order
    Route::get('order/index', [OrderController::class, 'index'])->name('orderIndex');
    Route::get('order/create', [OrderController::class, 'create'])->name('orderCreate');
    Route::post('order/postCreate', [OrderController::class, 'postCreate'])->name('orderPostCreate');
    Route::get('order/update/{id}', [OrderController::class, 'update'])->name('orderUpdate');
    Route::post('order/postUpdate/{id}', [OrderController::class, 'postUpdate'])->name('orderPostUpdate');
    Route::get('order/delete/{id}', [OrderController::class, 'delete'])->name('orderDelete');
    Route::get('order/view/{id}', [OrderController::class, 'view'])->name('orderView');
    Route::get('order/print/{checkout_code}', [OrderController::class, 'print'])->name('orderPrint');
    //Order_Details
    Route::get('order_details/index', [OrderDetailsController::class, 'index'])->name('order_detailsIndex');
    Route::get('order_details/create', [OrderDetailsController::class, 'create'])->name('order_detailsCreate');
    Route::post('order_details/postCreate', [OrderDetailsController::class, 'postCreate'])->name('order_detailsPostCreate');
    Route::get('order_details/update/{id}', [OrderDetailsController::class, 'update'])->name('order_detailsUpdate');
    Route::post('order_details/postUpdate/{id}', [OrderDetailsController::class, 'postUpdate'])->name('order_detailsPostUpdate');
    Route::get('order_details/delete/{id}', [OrderDetailsController::class, 'delete'])->name('order_detailsDelete');
    Route::get('order_details/view/{id}', [OrderDetailsController::class, 'view'])->name('order_detailsView');

    //Cart
    Route::get('order/index', [OrderController::class, 'index'])->name('orderIndex');
    Route::get('order/create', [OrderController::class, 'create'])->name('orderCreate');
    Route::post('order/postCreate', [OrderController::class, 'postCreate'])->name('orderPostCreate');
    Route::get('order/update/{id}', [OrderController::class, 'update'])->name('orderUpdate');
    Route::post('order/postUpdate/{id}', [OrderController::class, 'postUpdate'])->name('orderPostUpdate');
    Route::get('order/delete/{id}', [OrderController::class, 'delete'])->name('orderDelete');
    Route::get('order/view/{id}', [OrderController::class, 'view'])->name('orderView');

    //feedback
    Route::get('feedback/index', [FeedbackController::class, 'index'])->name('feedbackIndex');
    Route::get('feedback/create', [FeedbackController::class, 'create'])->name('feedbackCreate');
    Route::post('feedback/postCreate', [FeedbackController::class, 'postCreate'])->name('feedbackPostCreate');
    Route::get('feedback/delete/{id}', [FeedbackController::class, 'delete'])->name('feedbackDelete');
    Route::get('feedback/view/{id}', [FeedbackController::class, 'view'])->name('feedbackView');

    //new
    Route::get('new/index', [NewController::class, 'index'])->name('newIndex');
    Route::get('new/create', [NewController::class, 'create'])->name('newCreate');
    Route::post('new/postCreate', [NewController::class, 'postCreate'])->name('newPostCreate');
    Route::get('new/update/{id}', [NewController::class, 'update'])->name('newUpdate');
    Route::post('new/postUpdate/{id}', [NewController::class, 'postUpdate'])->name('newPostUpdate');
    Route::get('new/delete/{id}', [NewController::class, 'delete'])->name('newDelete');
    Route::get('new/view/{id}', [NewController::class, 'view'])->name('newView');

    //Role
    Route::get('role/index', [RoleController::class, 'index'])->name('roleIndex');
    Route::get('role/create', [RoleController::class, 'create'])->name('roleCreate');
    Route::post('role/postCreate', [RoleController::class, 'postCreate'])->name('rolePostCreate');
    Route::get('role/update/{id}', [RoleController::class, 'update'])->name('roleUpdate');
    Route::post('role/postUpdate/{id}', [RoleController::class, 'postUpdate'])->name('rolePostUpdate');
    Route::get('role/delete/{id}', [RoleController::class, 'delete'])->name('roleDelete');
    Route::get('role/view/{id}', [RoleController::class, 'view'])->name('roleView');

    //RoleUser
    Route::get('role_user/index', [RoleUserController::class, 'index'])->name('roleUserIndex');
    Route::get('role_user/create', [RoleUserController::class, 'create'])->name('roleUserCreate');
    Route::post('role_user/postCreate', [RoleUserController::class, 'postCreate'])->name('roleUserPostCreate');
    Route::get('role_user/update/{id}', [RoleUserController::class, 'update'])->name('roleUserUpdate');
    Route::post('role_user/postUpdate/{id}', [RoleUserController::class, 'postUpdate'])->name('roleUserPostUpdate');
    Route::get('role_user/delete/{id}', [RoleUserController::class, 'delete'])->name('roleUserDelete');
    Route::get('role_user/view/{id}', [RoleUserController::class, 'view'])->name('roleUserView');

    //User
    Route::get('user/index', [UserController::class, 'index'])->name('userIndex');
    Route::get('user/create', [UserController::class, 'create'])->name('userCreate');
    Route::post('user/postCreate', [UserController::class, 'postCreate'])->name('userPostCreate');
    Route::get('user/update/{id}', [UserController::class, 'update'])->name('userUpdate');
    Route::post('user/postUpdate/{id}', [UserController::class, 'postUpdate'])->name('userPostUpdate');
    Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('userDelete');
    Route::get('user/view/{id}', [UserController::class, 'view'])->name('userView');

    //Discount
    Route::get('discount/index', [DiscountController::class, 'index'])->name('discountIndex');
    Route::get('discount/create', [DiscountController::class, 'create'])->name('discountCreate');
    Route::post('discount/postCreate', [DiscountController::class, 'postCreate'])->name('discountPostCreate');
    Route::get('discount/update/{id}', [DiscountController::class, 'update'])->name('discountUpdate');
    Route::post('discount/postUpdate/{id}', [DiscountController::class, 'postUpdate'])->name('discountPostUpdate');
    Route::get('discount/delete/{id}', [DiscountController::class, 'delete'])->name('discountDelete');
    Route::get('discount/view/{id}', [DiscountController::class, 'view'])->name('discountView');
    Route::post('discount/reviced-email', [DiscountController::class, 'sendEmail'])->name('sendDiscount');
    Route::get('discount/send/{id}', [DiscountController::class, 'sendindex'])->name('sendDiscountindex');

    //Report
    Route::get('report/index', [ReportController::class, 'index'])->name('ReportIndex');
    Route::get('report/delete/{id}', [ReportController::class, 'delete'])->name('ReportDelete');
    Route::post('report/reply', [ReportController::class, 'sendEmail'])->name('ReportReply');
    Route::get('report/send/{id}', [ReportController::class, 'sendindex'])->name('sendReportindex');
});


Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/intro', [IntroController::class, 'index'])->name('Intro');
Route::get('/dong-ho-nam', [WatchMenController::class, 'index'])->name('WatchMen');
Route::get('/dong-ho-nu', [WatchWomenController::class, 'index'])->name('WatchWomen');
//blog
Route::get('/blog', [BlogController::class, 'index'])->name('Blog');
Route::get('/blog/content/{id}', [BlogController::class, 'indexblogcontent'])->name('ContentBlog');
//Liên hệ
Route::get('/contact', [ContactController::class, 'index'])->name('Contact');
Route::post('/contact/create', [ContactController::class, 'postCreate'])->name('ContactpostCreate');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('Wishlist');
//Show sản phẩm
Route::get('/client/infor/{id}', [ProductInforController::class, 'index'])->name('ProductInfor');
Route::post('/client/infor/comment', [ProductInforController::class, 'createComment'])->name('createCm');
//Cart Client
Route::get('/cart', [CartController::class, 'index'])->name('Cart');
Route::post('/cart/post', [CartController::class, 'discount'])->name('discountCart');
//Order Client
Route::get('/order', [OrderClientController::class, 'index'])->name('OrderClientIndex');
Route::post('order/postCreate', [OrderClientController::class, 'create'])->name('OrderClientPostCreate');
Route::get('/add-to-cart', [AddToCartController::class, 'index'])->name('AddToCart');
Route::get('/add-to-cart/{id}', [AddToCartController::class, 'addcardturl'])->name('AddToCartUrl');
Route::get('/delete-item/{id}', [AddToCartController::class, 'deleteItem'])->name('DeleteItem');
Route::get('/delete-one/{id}', [AddToCartController::class, 'deleteOne'])->name('DeleteOne');
Route::get('/plus-one/{id}', [AddToCartController::class, 'plusOne'])->name('PlusOne');

//search client
Route::get('/search', [ProductInforController::class, 'search'])->name('searchProduct');
Route::get('/search/filter', [ProductInforController::class, 'filter'])->name('FilterSearch');

//filter men
Route::get('/dong-ho-nam/filter', [WatchMenController::class, 'filter'])->name('FilterMen');
//filter women
Route::get('/dong-ho-nu/filter', [WatchWomenController::class, 'filter'])->name('FilterWomen');

Route::group(["middleware" => "guest:client"], function () {
    Route::get('/signin', [SignInController::class, 'index'])->name('SignInIndex');
    Route::post('/signin/postCreate', [SignInController::class, 'postCreate'])->name('SignUpPostCreate');
    Route::post('/signin/postSignin', [SignInController::class, 'postSignin'])->name('clientLoginPost');
});


Route::group(["middleware" => "authClient"], function () {
    Route::get('/logout', [SignInController::class, 'logout'])->name('LogoutClient');

    //Trang người dùng
    Route::get('/tai-khoan', [TaikhoanController::class, 'index'])->name('Taikhoan');
    Route::post('/tai-khoan/postUpdate/{id}', [TaikhoanController::class, 'update'])->name('UpdateTaikhoan');
    Route::get('/tai-khoan/changePassword', [TaikhoanController::class, 'changepassIndex'])->name('changePassIndex');
    Route::post('/tai-khoan/postChangePass/{id}', [TaikhoanController::class, 'changepass'])->name('postchangePassIndex');
    Route::get('/tai-khoan/history', [TaikhoanController::class, 'history'])->name('historyOrder');
    Route::get('/tai-khoan/history/{id}', [TaikhoanController::class, 'view'])->name('taikhoanView');
});
Route::get('/add-to-wishlist/{id}', [WishlistController::class, 'addToWishlist'])->name('AddToWishlist');
Route::get('/remove-from-wishlist/{id}', [WishlistController::class, 'removeFromWishlist'])->name('RemoveFromWishlist');
//Login FB
// Route::get('/signin/{social}', [SocialController::class, 'getInfor'])->name('LoginFacebook');
// Route::get('/signin/checkinfor/{social}', [SocialController::class, 'checkInfor'])->name('CheckFacebook');

//Login Google

Route::get('/google', [GoogleController::class, 'redirectGoogle']);
Route::get('/google/callback', [GoogleController::class, 'handleGoogleCallBack']);
Route::get('/test-email', [AdminController::class, 'testEmail']);
Route::post('/reviced-email', [HomeController::class, 'sendEmail'])->name('InforEmail');

//Thanh toán ONLINE
Route::post('order/vnpay', [OrderClientController::class, 'vnpay'])->name('orderVNpay');

//Quên mật khẩu
Route::get('/forget-password', [HomeController::class, 'forgetPass'])->name('customer.forgetPass');
Route::post('/post-forget-password', [HomeController::class, 'postForgetPass'])->name('postForgetPass');
