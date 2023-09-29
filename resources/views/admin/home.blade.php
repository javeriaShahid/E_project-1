<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sound</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-dark shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content-->
            <main>
                {{-- {{ $slot }} --}}
                <div class="p-6 lg:p-8 bg-black border-b border-gray-200">
                    <x-application-logo class="block h-12 w-auto" />
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-black overflow-hidden shadow-xl sm:rounded-lg">
                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Welcome to Admin Dashboard
                    </h1>

                    <p class="mt-6 text-gray-500 leading-relaxed">
                The Administrator should be able to do the following: <br><br>

                a)	Add Music files with information.<br>
                b)	Add Video files with information.<br>
                c)	Create Categories viz. YEAR, ARTIST, ALBUM etc.<br>
                d)	Delete Music files<br>
                e)	Delete Video files.<br>
                f)	Create/Manage Users/Logins<br>
                g)	Manage information/details on the WEBSITE<br>


                </p>

                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">

                    {{-- <table class="table">

    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>



        @foreach ($fetch as $input)


        <tr>
        <td>{{$input->id}}</td>
        <td>{{$input->name}}</td>
        <td>{{$input->email}}</td> --}}

        {{-- <td> <a href="/update/{{ $input->id}}" type="button" class="btn btn-success">Edit</a></td>

        <td>


    @csrf
    @method("DELETE")

    <a href="/destroy/{{$input->id}}" type="button"  class="btn btn-danger btn-sm">Delete</a>

            </td>
 --}}

    {{-- </tr>
    @endforeach


                    </table> --}}


                </div>
                {{-- @if(session('we'))
                <div class="alert alert-primary" role="alert">
                {{session('we')}}
                </div>

                @endif --}}
            </div>
        </div>
    </div>
<div>




</div>

<h1 class="text-center "><b>Add Songs</b></h1>
<br>
<form action="" method="POST" class="form-group" enctype="multipart/form-data" >


@csrf
              <input type="text" class="form-control" name="music" placeholder="Song Name">
              <input type="text" class="form-control" name="inform" placeholder="Information">
              <input type="file" class="form-control" name="file">

              <input type="submit" class="btn btn-primary">

</form>
            </main>
        </div>

        @stack('modals')

        @livewireScripts


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>

