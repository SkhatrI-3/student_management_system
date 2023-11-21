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
        .teacher{
            box-shadow: #F8DA85 5px 5px 6px;
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
        td,th{
            text-align: center;
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
        <h1>SEE YOUR TEACHERS</h1>
        <h2>HERE YOU CAN MANAGE YOUR TEACHERS DIGITALLY</h2>
        <p>EFFICIENT AND EASY TO USE</p>
    </div>
    <div class="container">
        {{-- <x-notify::notify /> <!-- Place it here --> --}}

        <div class="add w-100 text-center d-flex justify-content-center align-item-center ">

            <a class="text-center text-decoration-none m-3 teacher fs-4 w-100 text-secondary" href="{{route('teachers.create')}} ">Add Teachers</a>
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-center"><a class="text-center" href="{{route('admin.home')}}">GO TO DASHBOARD  </a></li>

        </ol>
        <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$teacher->teacher_name}}</td>
                    <td ><img src="{{ asset('uploads/' . $teacher->teacher_image) }}" alt="{{ $teacher->teacher_name }}" width="100" height="100"></td>
                    <td>{{$teacher->teacher_sub}}</td>
                    <td>{{$teacher->class}}</td>
                    <td>{{$teacher->section}}</td>
                    <td>
                        <a href="{{route('teachers.show',$teacher->id)}}" class="btn btn-info btn-sm m-2">View</a>
                        <a href="{{route('teachers.edit',$teacher->id)}}" class="btn btn-primary btn-sm m-2">Edit</a>
                        <form onclick="return confirm('Are you sure you want to delete this data?')" action="{{route('teachers.destroy',$teacher->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm m-2" >Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        {{$teachers->links('pagination::bootstrap-5')}}

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
</script>

</html>
