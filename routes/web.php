<?php

use Illuminate\Support\Facades\Route;

//Admin Panel
//Account Login Admin
use App\Http\Controllers\AdminPanel\Setting\Account\UserController;
//Dashboard Module
use App\Http\Controllers\AdminPanel\DashboardController;
//Resident Module
use App\Http\Controllers\AdminPanel\ResidentInfoController;
//Blotter Module
use App\Http\Controllers\AdminPanel\BlotterController;
//Setttlement Module
use App\Http\Controllers\AdminPanel\Settlement\PersonInvolveController;
use App\Http\Controllers\AdminPanel\Settlement\ScheduleController;
use App\Http\Controllers\AdminPanel\Settlement\UnscheduleController;
use App\Http\Controllers\AdminPanel\Settlement\ScheduleTodayController;
use App\Http\Controllers\AdminPanel\Settlement\SettledCasesController;
//Certificate Module
use App\Http\Controllers\AdminPanel\CertificateController;
use Barryvdh\DomPDF\Facade as PDF;
//Setting Module:Account Section
use App\Http\Controllers\AdminPanel\Setting\Account\AccountController;

//Setting Module:Barangay Section
use App\Http\Controllers\AdminPanel\Setting\Barangay\BrgyOfficialController;
use App\Http\Controllers\AdminPanel\Setting\Barangay\BarangayimageController;
//Admin Panel End

//Client Side

//Account Login
use App\Http\Controllers\ClientSide\ResidentAccountController;
//Home Module
use App\Http\Controllers\ClientSide\HomeController;
//AccountSettings
use App\Http\Controllers\ClientSide\ResidentUserAccountController;

//Client Side End
//Testing Area
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PagesController;




//Redirect
Route::get('/', function () {
    return redirect('/home');
});


//Admin Panel Start

//Dashboard Module
Route::get('/dashboard',[DashboardController::class, 'dashboard']);

//Resident Module
Route::resource('resident', ResidentInfoController::class);
Route::get('resident/person/{resident_id}', [ResidentInfoController::class, 'person']);
Route::get('resident/person/{resident_id}/blotter/', [ResidentInfoController::class, 'blotter']);


// Blotter Module
Route::get('/blotter', [BlotterController::class, 'show']);
Route::resource('blotters', BlotterController::class);
Route::resource('personinvolves', PersonInvolveController::class);

//Settlement Module
Route::get('/schedule', [ScheduleController::class, 'index']);
Route::resource('schedules', ScheduleController::class);
Route::resource('unschedules', UnscheduleController::class);
Route::resource('scheduletoday', ScheduleTodayController::class);
Route::resource('settled', SettledCasesController::class);



//Certificate Module

Route::resource('certificate', CertificateController::class);
Route::get('certificate/table/paid', [CertificateController::class, 'certrequestpaid'])->name('certrequestpaid.index');
Route::post('certificate/table/paid', [CertificateController::class, 'storerequest'])->name('storerequest.post');
Route::delete('certificate/table/paid/{request_id}', [CertificateController::class, 'deleterequest'])->name('deleterequest.delete');
Route::get('certificate/table/type', [CertificateController::class, 'certificate_type'])->name('certificate_type.index');
Route::post('certificate/table/type', [CertificateController::class, 'certtypesubmit'])->name('certtypesubmit.post');
Route::get('certificate/table/type/{cert_id}/edit', [CertificateController::class, 'certtypeedit'])->name('certtypesubmit.edit');
Route::delete('certificate/table/type/{cert_id}', [CertificateController::class, 'certtypedelete'])->name('certtypedelete.delete');
Route::get('sampledata', [PagesController::class, 'sampledata']);


//Maintenance Moduule
    // Barangay Setting Section
Route::resource('setting/maintenance', BrgyOfficialController::class);
Route::get('setting/maintenance/official/table', [BrgyOfficialController::class, 'barangay'])->name('barangay.index');
Route::post('setting/maintenance/official/table', [BrgyOfficialController::class, 'barangayPOST'])->name('barangay.post');
Route::get('setting/maintenance/official/table/{barangay}/edit', [BrgyOfficialController::class, 'barangayedit'])->name('barangay.edit');
Route::delete('setting/maintenance/official/table/{barangay}/', [BrgyOfficialController::class, 'barangaydelete'])->name('barangay.destroy');
Route::post('setting/maintenance/barangay/image', [ BarangayimageController::class, 'store' ])->name('image.store');

    // Account Setting Section
Route::resource('/setting/account', AccountController::class);
Route::post("/setting/account/form",[AccountController::class, 'accountSettingCheck'])->name("accountSettingCheck");
Route::get("/setting/account/session/table", [AccountController::class, 'getSessionTable'])->name("getSessionTable");

    // User Login Section
Route::get("/login", [UserController::class, 'login']);
Route::get("/profile", [UserController::class, 'profile']);
Route::post("/login", [UserController::class, 'check']);
Route::get("/logout", [UserController::class, 'logout']);

//Admin Panel End


// NOTES for Developer
// Create Controller for blotters, schedule, and certificate
// for seeding, type in command line: composer dump-autoload

// Client Side Start

Route::get('barangay/home', function () {
    return view('pages.ClientSide.userdashboard.homepage');
});
Route::get('/barangay/schedule', function () {
    return view('pages.ClientSide.userdashboard.schedule');
});
Route::get('/barangay/blotter', function () {
    return view('pages.ClientSide.userdashboard.blotter');
});
Route::get('/barangay/certificate', function () {
    return view('pages.ClientSide.userdashboard.certificate');
});
Route::get('/barangay/accountsetting', [ResidentAccountController::class, 'index']);

Route::get('/barangay/news', function () {
    return view('pages.ClientSide.userdashboard.news');
});
Route::get('/barangay/info', function () {
    return view('pages.ClientSide.userdashboard.info');
});

// Client Login
Route::get("/barangay/login", [ResidentUserAccountController::class, 'client_login']);
Route::post("/barangay/login", [ResidentUserAccountController::class, 'client_check']);
Route::get("/barangay/register", [ResidentUserAccountController::class, 'client_register']);
Route::post("/barangay/register", [ResidentUserAccountController::class, 'client_register_check']);
Route::get("/barangay/logout", [ResidentUserAccountController::class, 'client_logout']);

// Client Modal on Account Setting
Route::get("/barangay/{resident_id}/edit", [ResidentAccountController::class, 'edit']);
Route::post("/barangay/accountsetting/check",[ResidentAccountController::class, 'clientaccountsettingcheck'])->name("client_accountsetting_check");

//barangay Side End





























//Testing Area
Route::resource('books', BooksController::class);
Route::get('/invoice', function () {
    return view('Testing.invoice');
    $pdf = PDF::loadView('Testing.invoice')->setOptions(['defaultFont' => 'sans-serif']);;
    return $pdf->download('invoice.pdf');
});
Route::get('/invoice-pdf', function () {
 //   return view('/invoice-pdf');
    $pdf = PDF::loadView('Testing.invoice-pdf')->setOptions(['defaultFont' => 'sans-serif','isRemoteEnabled' => true,'format' => 'letter']);;
    return $pdf->download('invoice.pdf');
});

Route::get('/certificates', function () {
    return view('Testing.certificate');
});
Route::get('/certificate-pdf', function () {
    return view('Testingcertificate-pdf');
    $pdf = PDF::loadView('Testing.certificate-pdf')->setPaper('A4','portrait')->setOptions(['defaultFont' => 'sans-serif','isRemoteEnabled' => true]) ;
    return $pdf->download('certificate.pdf');
});
Route::resource('books', BooksController::class);
Route::get('sampledata', [PagesController::class, 'sampledata']);
// Testing Area End
