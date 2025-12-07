<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>CREATE Assignment</title>
    <style>
        .big-div {


            height: 100vh;
            display: flex;
            justify-content: center;
            /* horizontally center the content */
            align-items: center;
            /* vertically center the content */


        }

        .hero {
            background-image: url('https://plus.unsplash.com/premium_photo-1671070290401-1974bd9f4d18?auto=format&fit=crop&q=80&w=1973&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 95vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: relative;

            color: aliceblue;




        }

        .hero::before {
            content: '';
            background-color: rgba(0, 0, 0, 0.5);
            /* Adjust the opacity to control the dimness (0.5 for 50% dim) */
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }


        .hero h1 {
            font-size: 60px;
            font-weight: bolder;
            padding-bottom: 1rem;
            z-index: 1;
        }

        .hero h2 {
            font-size: 25px;
            padding-bottom: 1rem;
            z-index: 1;

        }

        .hero p {
            z-index: 1;
        }

        /* .create {


            background-image: url("https://images.unsplash.com/photo-1691085289669-8732efd90fb3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80");
        } */
    </style>
</head>
@php 
$teacher = \App\Models\Teacher::where('submission_id', $submission->id)->first();
@endphp

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="#">STUDENT MANAGEMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-5">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center"> <!-- Added this container -->
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 d-flex">
                            @auth
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                                @else
                                <div>
                                    <a class="btn btn-outline-grey bg-warning text-dark " href="{{ route('register') }}">
                                        Register
                                    </a>

                                </div>
                                <a href="{{ route('login') }}" class="  btn btn-outline-grey text-dark">Log in</a>
                            @endauth
                        </div>
                    @endif
                </div> <!-- Close the container -->
            </div>

    </nav>
    <div class=" hero container-fluid">
        <h1>SUBMIT YOUR WORK HERE</h1>
    </div>
    <div class="big-div mt-5">
        <div class="container bg-light p-5 border  ">
            <h2 class="bold text-center ">SUBMIT ASSIGNMENT</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('submissions.index')}}">VIEW ASSIGNMENT</a></li>

                </ol>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">GO TO DASHBOARD  </a></li>

                </ol>
            </nav>
            <form action="{{route('submissions.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="teacher" class="col-md-4 col-form-label text-md-start">{{ __('Teacher') }}</label>

                        <div class="select-container">
                            <select id="teacher" class="form-control @error('teacher') is-invalid @enderror" name="teacher">
                                <option value="" disabled selected>Select  Teacher</option>
                                @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->teacher_name}}   </option>
                                @endforeach
                                <!-- Add more role options as needed -->
                            </select>
                        </div>
                        @error('teacher')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    
                </div>
                
                
                <div class="row mb-3">
                    <label for="subject" class="col-md-4 col-form-label text-md-start">{{ __('Subject') }}</label>
                    <div class="select-container">
                        <select id="subject" class="form-control" name="subject" >
                            <option value="" disabled selected>Select Subject</option>
                            <!-- You can dynamically populate the subject options here based on the selected teacher -->
                            @if ($teacher)
                            @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->teacher_sub }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputDescription" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="exampleInputDescription" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription" class="form-label">Assignment</label>
                    <input type="file" class="form-control" name="file" id="exampleInputAssignment">

                </div>

               @error('description')
    <span class="text-danger">{{ $message }}</span>
@enderror

            
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" readonly class="form-control" name="date" id="date">
            </div>
            
           @error('description')
    <span class="text-danger">{{ $message }}</span>
@enderror

            














                <button type="submit" class="btn btn-primary " name="submit">Submit</button>
            </form>


        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        const currentDate = new Date();

// Format the date as "YYYY-MM-DD"
const year = currentDate.getFullYear();
const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Months are zero-based
const day = String(currentDate.getDate()).padStart(2, '0');

// Set the date input value
const formattedDate = `${year}-${month}-${day}`;
document.getElementById('date').value = formattedDate;
    </script>
</body>

</html>