<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Edit submission</title>
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

        /* .create {


            background-image: url("https://images.unsplash.com/photo-1691085289669-8732efd90fb3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80");
        } */
    </style>
</head>

<body>
    <div class=" hero container-fluid">
        <h1>SUBMIT YOUR WORK HERE</h1>
    </div>
    <div class="big-div">
        <div class="container bg-light p-5 border  ">
            <h2 class="bold text-center">EDIT ASSIGNMENT</h2>
           
            @php
            $user = auth()->user();
                                    @endphp
            <div class="container-fluid m-4 ">
                <div class="d-flex justify-content-around align-item-center ">
                    <div class="" data-aos="fade-up">
                        <h1 class="text-secondary">Edit your assignment {{ $user->name }}</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">GO TO DASHBOARD  </a></li>
        
                        </ol>
                        <form action="{{ route('submissions.update', $submission->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                        
                        <div class="mb-3">
                            <label for="exampleInputAssignment" class="form-label">Assignment Description</label>
                            <input type="text" class="form-control" name="description" id="exampleInputDescription" value="{{ old('description', $submission->description) }}">
                        </div>
                        
                        @if ($errors->has('file'))
                            <span class="text-danger">{{ $errors->first('file') }}</span>
                        @endif
                        
                        <div class="mb-3">
                            <label for="exampleInputAssignment" class="form-label">Assignment</label>
                            <input type="file" class="form-control" name="file" id="exampleInputAssignment">
                            
                            @if ($submission->file)
                                <div class="text-center m-3">
                                    <img src="{{ asset('uploads/' . $submission->file) }}" height="200px" width="200px" class="img-fluid" alt="Previous Image">
                                </div>
                            @endif
                        </div>
                        
                        @if ($errors->has('date'))
                            <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                        
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" readonly class="form-control" name="date" id="date" value="{{ old('date', $submission->date) }}">
                        </div>
                        
                            <div class="text-center m-2 ">
                                <button type="submit" name="submit" class="btn btn-primary w-100 ">UPDATE</button>
                            </div>

                        </form>

                    </div>


                </div>

            </div>


        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
