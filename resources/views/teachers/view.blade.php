<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>STUDENT MANAGEMENT SYSTEM</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .item {
            width: 300px;
            height: 300px;
            margin: 50px auto;
            padding-top: 75px;
            background: #fb8500;
            text-align: center;
            color: #000000;
            font-size: 3em;
            border-radius: 3rem;
        }
        .item:hover{
            background-color: #F8DA85;
            color: #8338ec;
        }
        .item a{
        text-decoration: none;
        color: #000000;
        }


        .hero {
            background-image: url('https://images.unsplash.com/photo-1501290836517-b22a21c522a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
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

        .page2 {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;


        }



        .service-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-radius: 4rem;
            color: whitesmoke;
            width: 80%;
            height: 600px;
            background-color: wheat;
            text-transform: uppercase;
        }

        .service-content h1 {
            font-weight: bolder;
        }

        .service-content li {

            padding: 1rem;
            font-size: larger;
            font-weight: bold;

        }

        .page3,
        .page4,
        .page5 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
        }

        .page3 .container-fluid,
        .page4 .container-fluid,
        .page5 .container-fluid {
            padding: 2rem;
        }

        .page3 .admin img,
        .page4 .teacher img,
        .page5 .student img {
            width: 100%;
            max-width: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        .page3 .about-admin,
        .page4 .about-teacher,
        .page5 .about-student {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            flex-direction: column;
            padding: 1rem;
        }

        .page3 .about-admin h1,
        .page4 .about-teacher h1,
        .page5 .about-student h1 {
            font-weight: bolder;
            font-size: 3rem;

        }

        .hero h1 {
            color: #F8DA85;
        }

        .page3 .about-admin p,
        .page4 .about-teacher p,
        .page5 .about-student p {
            font-size: 1.5rem;

        }

        .page3 .about-admin li,
        .page4 .about-teacher li,
        .page5 .about-student li {
            padding-bottom: 1rem;
            font-size: 1.5rem;

        }

        .page6 {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: justify;
            padding: 2rem;
            line-height: 2rem;
        }

        .footer {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .about,
        .links,
        .contact {
            width: 33.33%;
            height: 100px;
            padding: 4px;

        }

        .about {
            padding-left: 1rem;
        }

        .links {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .links a {
            text-decoration: none;
        }

        .about p {
            text-align: justify;
        }

        footer {
            background-color: bisque;
            height: 200px;
        }

        footer p {
            padding-top: 2rem;
            text-align: center;


        }

        footer a {
            color: black;
        }


        @media (max-width: 768px) {

            .page3 .about-admin h1,
            .page4 .about-teacher h1,
            .page5 .about-student h1 {
                font-size: 2rem;
            }

            .page3 .about-admin p,
            .page4 .about-teacher p,
            .page5 .about-student p {
                font-size: 1rem;
            }

            .page3 .about-admin li,
            .page4 .about-teacher li,
            .page5 .about-student li {
                font-size: 1rem;
            }

            .page3 .col,
            .page4 .col,
            .page5 .col {
                flex-basis: 100%;
                /* Make the columns take full width */
            }

            .page3 .about-admin,
            .page4 .about-teacher,
            .page5 .about-student {
                text-align: center;
                /* Center-align text on mobile */
            }


        }
    </style>




</head>

<body class="antialiased" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid" data-aos="fade-up">
            <a class="navbar-brand text-warning" href="#">STUDENT MANAGEMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-5">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#">Home</a>
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

    <div class=" hero container-fluid" data-aos="fade-up">
        <h1>VIEW YOUR TEACHER</h1>
        <h2>HERE YOU CAN VIEW YOUR TEACHERS DIGITALLY</h2>
        <p>EFFICIENT AND EASY TO USE</p>
    </div>
    <div class="container-fluid m-4">
        <div class="d-flex justify-content-around align-item-center ">
            <div class="" data-aos="fade-up">
                <h1 class="text-secondary">View your teacher</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-center"><a class="text-center" href="{{route('admin.home')}}">GO TO DASHBOARD  </a></li>

                </ol>
                <form action="{{ route('teachers.index') }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input readonly type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value={{$teacher->teacher_name}}>
                        <p class="text-danger error-message">@error('name')
                            {{ $message}}
                          @enderror</p>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <!-- Display the previous image if it exists -->
                        @if ($teacher->teacher_image)
                        <div class="text-center m-3">

                            <img  src="{{ asset('uploads/' . $teacher->teacher_image) }}" height="200px" width="200px" class="img-fluid " alt="Previous Image">
                        </div>
                        @endif
                        <p class="text-danger error-message">@error('image') {{ $message }} @enderror</p>
                    </div>
                    
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input readonly type="text" class="form-control" name="subject" id="subject" aria-describedby="emailHelp"  value={{$teacher->teacher_sub}}>
                    </div>
                    <p   class="text-danger error-message">@error('subject')
                        {{ $message}}
                      @enderror</p>
                      <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <input type="number" class="form-control" readonly name="class" id="class" aria-describedby="emailHelp"  value={{$teacher->class}}>
                    </div>
                    <p   class="text-danger error-message">@error('class')
                        {{ $message}}
                      @enderror</p>
                    <div class="mb-3">
                        <label for="section" class="form-label">Section</label>
                        <input type="text" class="form-control" readonly name="section" id="section" aria-describedby="emailHelp"  value={{$teacher->section}}>
                    </div>
                    <p   class="text-danger error-message">@error('section')
                        {{ $message}}
                      @enderror</p>
                      <div class="text-center m-2 ">
                        <button type="submit" name="submit" class="btn btn-primary w-100 ">Return </button>
                      </div>
                   
                </form>
               
            </div>
           

        </div>

    </div>





    <footer >
        <div class="footer">
            <div class="about">
                <p>STUDENT MANAGEMENT SYSTEM IS DESIGNED
                    TO MANAGE CARIOUS ASPECTS OF STUDENT
                    DATA AND ADMINISTRATIVE TASKS IN
                    EDUCATIONSNAL INSTITUTION SUCH AS SCHOOLS, COLLEGES, AND UNIVERSITIES </p>

            </div>
            <div class="links">

                <a href="#">services</a>
                <a href="#">About us</a>

            </div>
            <div class="contact">
                <p>studentmanagement@gmil.com</p>


            </div>


        </div>
        <p>&copy student management system</p>

    </footer>




    <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
@else
    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
    @endif
            @endauth
        </div>
        @endif


    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
    integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    AOS.init({
        duration: 1200,
    })
    
    // Function to hide the error message after 2 seconds
   // Function to hide the error message after 2 seconds
// Function to hide the error message after 2 seconds
function hideErrorMessages() {
    var errorMessages = document.getElementsByClassName('error-message');
    for (var i = 0; i < errorMessages.length; i++) {
        (function(index) {
            setTimeout(function () {
                errorMessages[index].style.display = 'none';
            }, 5000); // 2000 milliseconds = 2 seconds
        })(i);
    }
}



// Call the function when the page loads
window.addEventListener('load', hideErrorMessages);

</script>


</html>
