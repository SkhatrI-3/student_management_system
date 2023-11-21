<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>STUDENT MANAGEMENT SYSTEM</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
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
        .hero h1{
            color:#F8DA85;
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
        .footer{
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .about,.links,.contact{
            width:33.33%;
            height: 100px;
            padding: 4px;
           
        }
        .about{
            padding-left: 1rem;
        }
        .links{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .links a{
            text-decoration: none;
        }
        .about p{
            text-align: justify;
        }
        footer{
            background-color: bisque;
            height: 200px;
        }
        footer p{
            padding-top: 2rem;
            text-align: center;
            
            
        }
        footer a{
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

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="#">STUDENT MANAGEMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-5">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT US</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center"> <!-- Added this container -->
                    @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 d-flex">
                        @auth
                        
                        @if (auth()->user()->role === 'student')
                        <a href="{{ url('/home') }}" class="dropdown-item">Student Dashboard</a>
                    @elseif (auth()->user()->role === 'teacher')
                        <a href="{{ url('/teacher/home') }}" class="dropdown-item">Teacher Dashboard</a>
                    @elseif (auth()->user()->role === 'admin')
                        <a href="{{ url('/admin/home') }}" class="dropdown-item">Admin Dashboard</a>
                    @endif
                    
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                        @else
                        <div >
                            <a class="btn btn-outline-grey bg-warning text-dark " href="{{route('register')}}"  >
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
        <h1 >WELCOME TO STUDENT MANAGEMENT </h1>
        <h1>SYSTEM</h1>
        <h2>HERE YOU CAN MANAGE YOUR STUDENT DIGITALLY</h2>
        <p>EFFICIENT AND EASY TO USE</p>






    </div>
    <div class="page2">

        <div class="service-content container-fluid mt-3" id="services">
            <h1>Our services</h1>
            <ul>
                <li>STUDENT REGISTRATION AND ENROLLMENT</li>
                <li>USER AUTHENTICATION AND ROLE MANAGMENT</li>
                <li>ACADEMIC RECORD MANAGMENT</li>
                <li>COURSE MANAGMENT</li>
                <li>ATTENDENCE MANAGMENT</li>
                <li>ASSIGNMENT MANAGMENT</li>
                <li>EXAMINATION AND GRADING</li>

            </ul>





        </div>



    </div>
    <div class="page3">
        <div class="container-fluid " id="about">
            <div class="row align-items-start">
                <div class="admin col  col-md-6 col-lg-8">
                    <img src="https://images.unsplash.com/photo-1632406898177-95f7acd8854f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                </div>
                <div class="about-admin col ">
                    <h1>Benefits for administration</h1>
                    <p>simple and efficient</p>
                    <ul>
                        <li>Efficient user management</li>
                        <li>Assignment and Grading Management</li>
                        <li>Easy Reporting and Analytics</li>
                        <li>Time and Resource Saving</li>
                        <li>Secure and Privacy protection</li>

                    </ul>

                </div>

            </div>


        </div>
    </div>
    <div class="page4">
        <div class="container-fluid ">
            <div class="row align-items-start">

                <div class="about-teacher col">
                    <h1>Benefits for teachers</h1>
                    <p>Making it easy to manage</p>
                    <ul>
                        <li>Assignment Management</li>
                        <li>Grade Management</li>
                        <li>Easy Management of attendence</li>
                        <li>Subject and course infromation</li>
                        <li>Secure and Privacy protection</li>

                    </ul>

                </div>
                <div class="teacher col  col-md-6 col-lg-9">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                </div>

            </div>
        </div>



    </div>
    <div class="page5">
        <div class="container-fluid ">
            <div class="row align-items-start">
                <div class="student col  col-md-6 col-lg-8">
                    <img src="https://images.unsplash.com/photo-1599687351724-dfa3c4ff81b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                </div>
                <div class="about-student col ">
                    <h1>Benefits for student</h1>
                    <p>convenient and productive</p>
                    <ul>
                        <li>Online assignment submission</li>
                        <li>View course details</li>
                        <li>view attedence records</li>
                        <li>Acess marks and notifications</li>
                        <li>Secure and Privacy protection</li>

                    </ul>

                </div>

            </div>


        </div>
    </div>
    <div class="page6 container-fluid">
        <h1>About us</h1>
        <p>A Student Management System (SMS), often referred to as a Student Information System (SIS) or Student Record System, is a software application or platform designed to facilitate the management of student-related information within educational institutions such as schools, colleges, and universities. This comprehensive system serves as the backbone of administrative operations and significantly contributes to the enhancement of educational processes. Key functionalities encompassed within a Student Management System include the management of student data, admission processes, academic records, attendance tracking, course and curriculum management, faculty and staff records, communication and collaboration tools, grade management, fee and payment processing, library management, timetable scheduling, report generation, access control, data analytics, mobile accessibility, and seamless integration with other educational software systems.</p>



    </div>
    <footer>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

{{-- <script>
     function toggleDropdown() {
        var dropdownContent = document.getElementById("dropdownContent");
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    }
</script> --}}


</html>