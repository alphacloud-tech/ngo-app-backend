<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
});



Route::get('/clear', function () {
    // Clear application cache
    Artisan::call('cache:clear');

    // Clear configuration cache
    Artisan::call('config:clear');

    // Clear view cache
    Artisan::call('view:clear');

    return redirect()->back();
})->name('clear.Cache');


Route::get('/', [IndexController::class, "index"])->name('home');
Route::get('/about-us', [IndexController::class, "about"])->name('about');
Route::get('/cause-lists', [IndexController::class, "cause"])->name('cause');
Route::get('/cause-list-detail/{id}', [IndexController::class, "causeDetail"])->name('cause.single');
Route::get('/cause-list/{name}', [IndexController::class, "causeByCat"])->name('cause.category');
Route::get('/events', [IndexController::class, "event"])->name('event');
Route::get('/event-detail/{id}', [IndexController::class, "eventDetail"])->name('event.single');

Route::get('/blogs', [IndexController::class, "blog"])->name('blog');
Route::get('/blogs-detail/{id}', [IndexController::class, "blogDetail"])->name('blog.single');

Route::any('/contact-us', [IndexController::class, "contact"])->name('contact');

Route::get('/donation', [IndexController::class, "donation"])->name('donation');
Route::get('/faq', [IndexController::class, "faq"])->name('faq');
Route::get('/image-gallery', [IndexController::class, "gallery"])->name('gallery');
Route::get('/video-gallery', [IndexController::class, "video"])->name('video');
Route::get('/team', [IndexController::class, "volunteer"])->name('volunteer');
Route::get('/become-a-volunteer', [IndexController::class, "becomeVolunteer"])->name('volunteer.become');
Route::get('/team-detail/{id}', [IndexController::class, "volunteerDetail"])->name('volunteer.single');

Route::post('/volunteer-member', 'IndexController@memberFrontend');



// Route::post('/blog/{blogPost}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/comments', 'CommentController@store')->name('comments.store');
Route::get('/comments', 'CommentController@index');

Route::post('/replies', 'ReplyController@store');
Route::get('/replies', 'ReplyController@indexOLD');
// Route::get('/comments/{comment}/replies', 'CommentController@replies');
Route::get('/comments/{comment}/replies', 'ReplyController@index');
Route::get('/comments/{commentId}/replies', 'CommentController@getRepliesForComment');
Route::get('/comments/{blog_post_id}', 'CommentController@getCommentsByPost');

Route::post('/contact', 'ContactController@store')->name('contact.store');

//////////////////////////////////////////////////////////////////////////////////////

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth']], function () {
// });
Route::resource('slider', 'SliderController');
Route::resource('causes', 'CauseController');
Route::resource('causes-list-category', 'CauseCategoryController');

Route::post('/update-featured/{cause}', 'CauseController@updateFeatured');


Route::resource('partner', 'PartnerController');
Route::post('/partner-activate/{partner}', 'PartnerController@activation');

Route::resource('testimonial', 'TestimonialController');
Route::post('/testimonial-activate/{testimonial}', 'TestimonialController@activation');

Route::resource('event', 'EventController');
Route::resource('event-organizer', 'EventOrganizerController');

Route::resource('volunteer', 'VolunteerController');
Route::post('/volunteer-activate/{volunteer}', 'VolunteerController@activation');


Route::resource('gallery', 'GalleryController');
Route::post('/gallery-activate/{gallery}', 'GalleryController@activation');



// Resourceful routes for blog posts
Route::resource('blog', 'BlogPostController');
Route::post('/blog-activate/{blog}', 'BlogPostController@activation');


// Resourceful routes for categories
Route::resource('categories', 'CategoryController');
