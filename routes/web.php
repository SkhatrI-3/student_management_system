<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Auth\HomeController;
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

Route::get('/', function () {
    return view('index');
});
// Route::get('/admin', function () {
//     return view('admin-home');
// });
// Route::get('/teach', function () {
//     return view('teacher-home');
// });
Route::resource('teachers', TeacherController::class);
Route::resource('students', StudentController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('assignments', AssignmentController::class);
Route::resource('submissions', SubmissionController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('student');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('admin');
Route::get('/teacher/home', [App\Http\Controllers\HomeController::class, 'teacherHome'])->name('teacher.home')->middleware('teacher');
Route::get('/download/{file}', [SubmissionController::class, 'download'])->name('download');
Route::get('/teacher/assignments', [TeacherController::class, 'viewAssignments'])->name('teachers.viewAssignments');
Route::get('/student/assignments', [AssignmentController::class, 'givenAssignments'])->name('assignments.givenAssignments');

