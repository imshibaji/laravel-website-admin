<?php
use Illuminate\Support\Facades\Route;
use Shibaji\Admin\Facades\Calculator;
use Shibaji\Admin\Http\Controllers\Common\Dashboard;
use Shibaji\Admin\Http\Controllers\Sales\InvoiceController;
use Shibaji\Admin\Http\Controllers\Settings\Setup;

/* -------------------------------------------------------------------------- */
/*                          This is the routing file                          */
/* -------------------------------------------------------------------------- */

$prefix = config('admin.prefix', 'admin');
$namesapce = 'Shibaji\\Admin\\Http\\Controllers';

Route::prefix($prefix)
->middleware(['web', 'auth'])
->namespace($namesapce)
->name('admin.')
->group(function(){
    Route::get('/', [Dashboard::class, 'index'])->name('home');
    Route::get('/crm', [Dashboard::class, 'crm'])->name('crm');
    Route::get('/search', [Dashboard::class, 'search'])->name('search');
    Route::view('/widgets', 'admin::widgets');

    //Banking
    Route::resource('/accounts', 'Banking\AccountController')->names('accounts');
    Route::resource('/reconciliations', 'Banking\ReconciliationController')->names('reconciliations');
    Route::resource('/transactions', 'Banking\TransactionController')->names('transactions');
    Route::resource('/transfers', 'Banking\TransferController')->names('transfers');

    // Commons
    Route::resource('/contacts', 'Common\ContactController')->names('contacts');
    Route::resource('/items', 'Common\ItemController')->names('items');
    Route::resource('/seo', 'Common\SeoController')->names([
        'index' => 'seo'
    ]);
    Route::resource('/businesses', 'Common\BusinessController')->names('businesses');
    Route::resource('/reports', 'Common\ReportController')->names('reports');

    // Sales
    InvoiceController::routes();
    // Route::resource('/invoices', 'Sales\InvoiceController')->names('invoices');
    Route::resource('/revenues', 'Sales\RevenueController')->names('revenues');
    Route::resource('/customers', 'Sales\CustomerController')->names('customers')->only(['index', 'show']);

    // Purchases
    Route::resource('/bills', 'Purchases\BillController')->names('bills');
    Route::resource('/payments', 'Purchases\PaymentController')->names('payments');
    Route::resource('/vendors', 'Purchases\VendorController')->names('vendors');

    // Settings
    Route::resource('/websites', 'Settings\WebsiteController')->names('websites');
    Route::resource('/currencies', 'Settings\CurrencyController')->names('currencies');
    Route::resource('/categories', 'Settings\CategoryController')->names('categories');
    Route::resource('/taxes', 'Settings\TaxController')->names('taxes');
    Route::resource('/countries', 'Settings\CountryController')->names('countries')->except(['update', 'show']);
    Route::resource('/locations', 'Settings\LocationController')->names('locations')->except(['update', 'show']);
    Setup::routes();

    // Users
    Route::resource('/user', 'Users\UserController')->names([
        'index' => 'users'
    ]);
    Route::resource('/role', 'Users\RoleController')->names([
        'index' => 'roles'
    ]);
    Route::resource('/permission', 'Users\PermissionController')->names([
        'index' => 'permissions'
    ]);
    Route::get('/profile', 'Users\UserController@profile')->name('profile');
    Route::post('/profile', 'Users\UserController@profilePost')->name('profile.post');

    // Others
    Route::get('/help', function(){
        return view('admin::document');
    });
    Route::get('test', function () {
        $obj = json_to_object(json_encode(['name'=>'Shibaji', 'loc'=>'Duum Dum']), true);
        return $obj;
    });
});
