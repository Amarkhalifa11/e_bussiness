<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Team;
use App\Models\Portfolie;
use App\Models\Posts;


Route::get('/', function () {
    $services = Service::all()->random(6);
    $teams = Team::all()->random(4);
    $posts = Posts::all()->random(3);
    $teamss = Team::all();
    $all_protofoilo = Portfolie::all()->random(6);
    return view('frontend.index' , compact('services' , 'teams' , 'all_protofoilo' , 'posts' , 'teamss'));
})->name('index');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/service', function () {
        $services  = Service::all();
    return view('frontend.service' , compact('services'));
})->name('service');

Route::get('/team', function () {
    $teams = Team::all();
    return view('frontend.team' , compact('teams'));
})->name('team');


Route::get('/single_protfolio', function () {
    return redirect()->route('index');
});

Route::get('/pricing', function () {
    return view('frontend.pricing');
})->name('pricing');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');


Route::get('/news', function () {
    return view('frontend.news');
})->name('news');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('dashboard');
});



//protofolio

use App\Http\Controllers\PortfolieController;
 
Route::get('/protfolios', [PortfolieController::class, 'index'])->name('protfolios');
Route::get('/single_protfolio/{id}', [PortfolieController::class, 'single_protfolio'])->name('single_protfolio');
Route::get('/category/{id}', [PortfolieController::class, 'category'])->name('category');

Route::get('/dashboard/all_protfolie', [PortfolieController::class, 'all_protfolie'])->name('dashboard.all_protfolie');
Route::get('/dashboard/all_protfolie/create', [PortfolieController::class, 'create'])->name('dashboard.all_protfolie.create');
Route::post('/dashboard/all_protfolie/store', [PortfolieController::class, 'store'])->name('dashboard.all_protfolie.store');
Route::get('/dashboard/all_protfolie/edit/{id}', [PortfolieController::class, 'edit'])->name('dashboard.all_protfolie.edit');
Route::post('/dashboard/all_protfolie/update/{id}', [PortfolieController::class, 'update'])->name('dashboard.all_protfolie.update');
Route::get('/dashboard/all_protfolie/destroy/{id}', [PortfolieController::class, 'destroy'])->name('dashboard.all_protfolie.destroy');

// -----------------------------------------------------------------

//post

use App\Http\Controllers\PostsController;
 
Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::get('/posts/{id}', [PostsController::class, 'singlepost'])->name('singlepost');
Route::get('/post/category/{id}', [PostsController::class, 'category'])->name('category.category');
Route::post('/search', [PostsController::class, 'search'])->name('search');

Route::get('/dashboard/all_posts', [PostsController::class, 'all_posts'])->name('dashboard.all_posts');
Route::get('/dashboard/all_posts/create', [PostsController::class, 'create'])->name('dashboard.all_posts.create');
Route::post('/dashboard/all_posts/store', [PostsController::class, 'store'])->name('dashboard.all_posts.store');
Route::get('/dashboard/all_posts/edit/{id}', [PostsController::class, 'edit'])->name('dashboard.all_posts.edit');
Route::post('/dashboard/all_posts/update/{id}', [PostsController::class, 'update'])->name('dashboard.all_posts.update');
Route::get('/dashboard/all_posts/destroy/{id}', [PostsController::class, 'destroy'])->name('dashboard.all_posts.destroy');

// -----------------------------------------------------------------

//comment

use App\Http\Controllers\CommentsController;
 
Route::post('/comments', [CommentsController::class, 'store'])->name('comments.create');

//back

Route::get('/dashboard/all_comments', [CommentsController::class, 'index'])->name('comments.all_comments');
Route::get('/dashboard/all_comments/edit/{id}', [CommentsController::class, 'edit'])->name('dashboard.comments.edit');
Route::post('/dashboard/all_comments/update/{id}', [CommentsController::class, 'update'])->name('dashboard.comments.update');
Route::get('/dashboard/all_comments/destroy/{id}', [CommentsController::class, 'destroy'])->name('dashboard.comments.destroy');

// -----------------------------------------------------------------


//contact

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/create', [ContactController::class, 'store'])->name('contact.create');

//back
 
Route::get('/dashboard/all_contacts', [ContactController::class, 'all_contacts'])->name('dashboard.all_contacts');
Route::get('/dashboard/all_contacts/destroy/{id}', [ContactController::class, 'destroy'])->name('dashboard.all_contacts.destroy');



// -----------------------------------------------------------------

//logout

use App\Http\Controllers\backendController;

Route::get('/logout', [backendController::class, 'logout'])->name('logout');
Route::get('/dashboard/all_user', [backendController::class, 'index'])->name('dashboard.all_user');

// -----------------------------------------------------------------

//category

use App\Http\Controllers\CategoryController;

Route::get('/dashboard/all_category', [CategoryController::class, 'index'])->name('dashboard.all_category');
Route::get('/dashboard/category/create', [CategoryController::class, 'create'])->name('dashboard.category.create');
Route::post('/dashboard/category/store', [CategoryController::class, 'store'])->name('dashboard.category.store');
Route::get('/dashboard/category/edit/{id}', [CategoryController::class, 'edit'])->name('dashboard.category.edit');
Route::post('/dashboard/category/update/{id}', [CategoryController::class, 'update'])->name('dashboard.category.update');
Route::get('/dashboard/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('dashboard.category.destroy');

// -----------------------------------------------------------------

//sub_category

use App\Http\Controllers\SubCategoryController;

Route::get('/dashboard/subCategorys', [SubCategoryController::class, 'index'])->name('dashboard.subCategorys');
Route::get('/dashboard/subCategorys/create', [SubCategoryController::class, 'create'])->name('dashboard.subCategorys.create');
Route::post('/dashboard/subCategorys/store', [SubCategoryController::class, 'store'])->name('dashboard.subCategorys.store');
Route::get('/dashboard/subCategorys/edit/{id}', [SubCategoryController::class, 'edit'])->name('dashboard.subCategorys.edit');
Route::post('/dashboard/subCategorys/update/{id}', [SubCategoryController::class, 'update'])->name('dashboard.subCategorys.update');
Route::get('/dashboard/subCategorys/destroy/{id}', [SubCategoryController::class, 'destroy'])->name('dashboard.subCategorys.destroy');

// -----------------------------------------------------------------

//sub_category

use App\Http\Controllers\SubSubCategoryController;

Route::get('/dashboard/subsubCategorys', [SubSubCategoryController::class, 'index'])->name('dashboard.subsubCategorys');
Route::get('/dashboard/subsubCategorys/create', [SubSubCategoryController::class, 'create'])->name('dashboard.subsubCategorys.create');
Route::post('/dashboard/subsubCategorys/store', [SubSubCategoryController::class, 'store'])->name('dashboard.subsubCategorys.store');
Route::get('/dashboard/subsubCategorys/edit/{id}', [SubSubCategoryController::class, 'edit'])->name('dashboard.subsubCategorys.edit');
Route::post('/dashboard/subsubCategorys/update/{id}', [SubSubCategoryController::class, 'update'])->name('dashboard.subsubCategorys.update');
Route::get('/dashboard/subsubCategorys/destroy/{id}', [SubSubCategoryController::class, 'destroy'])->name('dashboard.subsubCategorys.destroy');

// -----------------------------------------------------------------

//service

use App\Http\Controllers\ServiceController;

Route::get('/dashboard/all_service', [ServiceController::class, 'all_service'])->name('dashboard.all_service');
Route::get('/dashboard/all_service/create', [ServiceController::class, 'create'])->name('dashboard.all_service.create');
Route::post('/dashboard/all_service/store', [ServiceController::class, 'store'])->name('dashboard.all_service.store');
Route::get('/dashboard/all_service/edit/{id}', [ServiceController::class, 'edit'])->name('dashboard.all_service.edit');
Route::post('/dashboard/all_service/update/{id}', [ServiceController::class, 'update'])->name('dashboard.all_service.update');
Route::get('/dashboard/all_service/destroy/{id}', [ServiceController::class, 'destroy'])->name('dashboard.all_service.destroy');

// -----------------------------------------------------------------


//team

use App\Http\Controllers\TeamController;

Route::get('/dashboard/all_team', [TeamController::class, 'index'])->name('dashboard.all_team');
Route::get('/dashboard/all_team/create', [TeamController::class, 'create'])->name('dashboard.all_team.create');
Route::post('/dashboard/all_team/store', [TeamController::class, 'store'])->name('dashboard.all_team.store');
Route::get('/dashboard/all_team/edit/{id}', [TeamController::class, 'edit'])->name('dashboard.all_team.edit');
Route::post('/dashboard/all_team/update/{id}', [TeamController::class, 'update'])->name('dashboard.all_team.update');
Route::get('/dashboard/all_team/destroy/{id}', [TeamController::class, 'destroy'])->name('dashboard.all_team.destroy');

// -----------------------------------------------------------------
