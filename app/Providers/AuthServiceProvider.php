<?php

namespace App\Providers;
use App\Policies\TeacherPolicy;
use App\Policies\StudentPolicy;
use Illuminate\Support\Facades\Gate;


// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    
        protected $policies = [
            Teacher::class => TeacherPolicy::class,
            Student::class => StudentPolicy::class,
        ];    

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

      
        
    }
}
