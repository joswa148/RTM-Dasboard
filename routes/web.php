<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Artisan;

// ─── Admin Panel ──────────────────────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->group(function () {

    // Login (public)
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])
        ->middleware('throttle:10,1')
        ->name('login.submit');



    // Authenticated admin routes
    Route::middleware('admin.auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard.alt');

        Route::resource('logos', LogoController::class)->names([
            'index'   => 'logos.index',
            'create'  => 'logos.create',
            'store'   => 'logos.store',
            'edit'    => 'logos.edit',
            'update'  => 'logos.update',
            'destroy' => 'logos.destroy',
        ]);
    });
});

// Legacy /logos routes (redirects so existing links don't break)
Route::redirect('/logos',        '/admin/logos',        301);
Route::redirect('/logos/create', '/admin/logos/create', 301);


Route::get('/clear-route-cache', function() {
    Artisan::call('route:clear');
    return 'Route cache cleared!';
});

/*
Route::get('/clear-all', function () {

    // Clear everything
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    // Rebuild caches
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');

    return "All caches cleared & optimized successfully!";
});
*/

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);

Route::get('/test', [HomeController::class, 'test']);

Route::get('/brand-registration-uae', [HomeController::class, 'brandregistrationuae']);

Route::get('/register-trademark-uae', [HomeController::class, 'registertrademarkuae']);

Route::get('/brand-uae', [HomeController::class, 'branduae']);

Route::get('/trademark-registration-india', [HomeController::class, 'india']);
Route::get('/trademark-registration-bangladesh', [HomeController::class, 'bangladesh']);
Route::get('/trademark-registration-bahrain', [HomeController::class, 'bahrain'])->name('bahrain');
Route::get('/trademark-registration-australia', [HomeController::class, 'australia']);
Route::get('/trademark-registration-germany', [HomeController::class, 'germany']);
Route::get('/trademark-registration-benelux', [HomeController::class, 'benelux']);
Route::get('/trademark-registration-canada', [HomeController::class, 'canada']);
Route::get('/trademark-registration-china', [HomeController::class, 'chines']);
Route::get('/trademark-registration-eu', [HomeController::class, 'eu']);
Route::get('/trademark-registration-france', [HomeController::class, 'france']);
Route::get('/trademark-registration-hongkong', [HomeController::class, 'hongu']);
Route::get('/trademark-registration-indonesia', [HomeController::class, 'indonesia']);
Route::get('/trademark-registration-ireland', [HomeController::class, 'ireland']);
Route::get('/trademark-registration-italy', [HomeController::class, 'italy']);
Route::get('/trademark-registration-japan', [HomeController::class, 'japan']);
Route::get('/trademark-registration-kuwait', [HomeController::class, 'kuwait']);
Route::get('/trademark-registration-malasiya', [HomeController::class, 'malasiya']);
Route::get('/trademark-registration-mexico', [HomeController::class, 'mexico']);
Route::get('/trademark-registration-newzealand', [HomeController::class, 'newzealand']);
Route::get('/trademark-registration-norway', [HomeController::class, 'norwayt']);
Route::get('/trademark-registration-oman', [HomeController::class, 'oman']);
Route::get('/trademark-registration-qatar', [HomeController::class, 'qatar']);
Route::get('/trademark-registration-russia', [HomeController::class, 'russia']);
Route::get('/trademark-registration-saudi', [HomeController::class, 'sauthi']);
Route::get('/trademark-registration-singapore', [HomeController::class, 'singapore']);
Route::get('/trademark-registration-southkorea', [HomeController::class, 'southkorea']);
Route::get('/trademark-registration-spain', [HomeController::class, 'spain']);
Route::get('/trademark-registration-switzerland', [HomeController::class, 'switzerland']);
Route::get('/trademark-registration-thailand', [HomeController::class, 'thailand']);
Route::get('/trademark-registration-uae', [HomeController::class, 'uae']);
Route::get('/trademark-registration-uk', [HomeController::class, 'uk']);
Route::get('/trademark-registration-usa', [HomeController::class, 'usa']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/register', [HomeController::class, 'review']);
Route::get('/trademark-watch', [HomeController::class, 'watch']);
Route::get('/international-trademark', [HomeController::class, 'trademark']);
Route::get('/trademark-search', [HomeController::class, 'search']);
Route::get('/trademark-renewal', [HomeController::class, 'renewal']);
Route::get('/trademark-registration', [HomeController::class, 'register'])->name('trademarkregistration');
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/trademark-revival', [HomeController::class, 'revival']);
Route::get('/trademark-office-actions', [HomeController::class, 'officeaction']);
Route::get('/trademark-statement', [HomeController::class, 'statementuse']);
Route::get('/trademark-extension', [HomeController::class, 'extensionuse']);
Route::get('/trademark-oppositions', [HomeController::class, 'opposition']);
Route::get('/trademark-litigation', [HomeController::class, 'litigation']);
Route::get('/brand-monitoring', [HomeController::class, 'brand']);
Route::get('/trademark-ownership-transfer', [HomeController::class, 'ownership']);
Route::get('/cease-desist-tetter', [HomeController::class, 'cease']);
Route::get('/trademark-certificate', [HomeController::class, 'certificate']);
Route::get('/mainland-company-registration', [HomeController::class, 'mainland']);
Route::get('/free-zone-company-setup', [HomeController::class, 'freezone']);
Route::get('/offshore-company-incorporation', [HomeController::class, 'offshore']);
Route::get('/trade-license-assistance', [HomeController::class, 'license']);
Route::get('/vat-tax-registration', [HomeController::class, 'vattax']);
Route::get('/contract-Drafting-Review', [HomeController::class, 'contract']);
Route::get('/regulatory-Approvals-Permits', [HomeController::class, 'regulatory']);
Route::get('/accounting-Bookkeeping', [HomeController::class, 'accounting']);
Route::get('/corporate-Bank-Account-Opening', [HomeController::class, 'corporate']);
Route::get('/pro-Visa-Services', [HomeController::class, 'provisa']);
Route::get('/office-Space-Virtual-Address-Solutions', [HomeController::class, 'officespace']);
Route::get('/software-development', [HomeController::class, 'software']);
Route::get('/web-app-development', [HomeController::class, 'webapp']);
Route::get('/cloud-computing', [HomeController::class, 'cloudcomputing']);
Route::get('/cyber-security', [HomeController::class, 'cyber']);
Route::get('/it-consulting', [HomeController::class, 'itconsulting']);
Route::get('/uiux', [HomeController::class, 'uiux']);

Route::get('/blog/how-to-register-a-brand-in-dubai-uae', [HomeController::class, 'companyindubai']);
Route::get('/blog/trademark-search-dubai-uae', [HomeController::class, 'uaetrademarksearch']);
Route::get('/blog/trademark-consultant-uae', [HomeController::class, 'uaetmconsultant']);
Route::get('/blog/uae-trademark-registration-process-cost', [HomeController::class, 'TrademarkRegistrationProcessCost']);

Route::get('/blog/intellectual-property-registration-uae', [HomeController::class, 'IntellectualPropertyuae']);
Route::get('/blog/trademark-uae-myths-and-facts', [HomeController::class, 'TrademarkuaeMythsandfacts']);
Route::get('/blog/trademark-logo-vs-name-vs-tagline', [HomeController::class, 'TrademarklLogovsNamevsTagline']);
Route::get('/blog/trademark-objection-uae', [HomeController::class, 'TrademarkObjectionuae']);
Route::get('/blog/trademark-registration-for-online-brand-growth', [HomeController::class, 'TrademarkOnlineBrandGrowth']);
Route::get('/blog/how-to-register-a-trademark-in-dubai-uae', [HomeController::class, 'TrademarksRegistrationDubai']);

Route::get('/blog', function () {
    return view('blogs.index');
});

Route::get('/blog/details', function () {
    return view('blogs.details');
});

Route::get('/brand-strategy-consulting', [HomeController::class, 'brandstrategy']);
Route::get('/corporate-identity', [HomeController::class, 'corporateidentity']);
Route::get('/website-app-design', [HomeController::class, 'appdesign']);
Route::get('/social-media-creatives', [HomeController::class, 'socialmediacreatives']);
Route::get('/ads-campaign-designs', [HomeController::class, 'ads']);
Route::get('/packaging-product-design', [HomeController::class, 'packaging']);
Route::get('/marketing-materials', [HomeController::class, 'marketingmaterials']);
Route::get('/presentation-design', [HomeController::class, 'presentationdesign']);

Route::get('/network-design-Consulting', [HomeController::class, 'networkdesign']);
Route::get('/managed-network-services', [HomeController::class, 'managednetworkservices']);
Route::get('/it-support-for-enterprises', [HomeController::class, 'itsupportforenterprises']);
Route::get('/manufacturing-automation', [HomeController::class, 'manufacturingautomation']);
Route::get('/smart-factories', [HomeController::class, 'smartfactories']);
Route::get('/transportation-tech', [HomeController::class, 'transportationtech']);
Route::get('/aerospace-defense', [HomeController::class, 'aerospace']);
Route::get('/customer-support-chatbot', [HomeController::class, 'customersupport']);
Route::get('/business-chatbot-integration', [HomeController::class, 'businesschatbot']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/branding', [HomeController::class, 'branding']);
Route::get('/technology', [HomeController::class, 'technology']);
Route::get('/business-setup', [HomeController::class, 'businesssetup']);
Route::get('/trade', [HomeController::class, 'trade']);
Route::get('/tm-registration', [HomeController::class, 'tmregister']);
Route::get('/trademark', [HomeController::class, 'trademarklis']);
Route::get('/error', [HomeController::class, 'error']);

Route::get('/clear-app-cache', function() {
    \Illuminate\Support\Facades\Cache::forget('trusted_logos');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    
    $logo = \App\Models\Logo::where('id', 1)->first(); // Adjust ID if needed
    $path = $logo ? $logo->image_path : 'none';
    $absPath = storage_path('app/public/' . $path);
    $exists = file_exists($absPath) ? 'YES' : 'NO';
    $url = $logo ? $logo->image_url : 'none';
    
    $cssFile = public_path('assets/css/style.css');
    $cssContent = file_exists($cssFile) ? file_get_contents($cssFile) : 'CSS NOT FOUND';
    $hasLanding = str_contains($cssContent, 'landingbg') ? 'FOUND' : 'CLEAN';
    
    return [
        'message' => "Cache cleared!",
        'logo_db_path' => $path,
        'logo_abs_path' => $absPath,
        'logo_exists' => $exists,
        'logo_url_returned' => $url,
        'css_status' => $hasLanding,
        'app_url' => config('app.url')
    ];
});

// Proxy route to bypass 403 Forbidden symlink issues on Windows
Route::get('/storage-img/{path}', function($path) {
    $fullPath = storage_path('app/public/' . $path);
    if (!file_exists($fullPath)) {
        // Try fallback extension
        $ext = pathinfo($fullPath, PATHINFO_EXTENSION);
        $base = pathinfo($fullPath, PATHINFO_FILENAME);
        $dir = pathinfo($fullPath, PATHINFO_DIRNAME);
        $fallbackExt = ($ext === 'webp') ? 'png' : 'webp';
        $fallbackPath = $dir . DIRECTORY_SEPARATOR . $base . '.' . $fallbackExt;
        if (file_exists($fallbackPath)) {
            $fullPath = $fallbackPath;
        } else {
            abort(404);
        }
    }
    
    $file = file_get_contents($fullPath);
    $type = mime_content_type($fullPath);
    
    return response($file)->header('Content-Type', $type);
})->where('path', '.*')->name('storage.proxy');