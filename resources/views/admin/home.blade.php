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
        <link rel="stylesheet" href="http://localhost/Fuck/resources/assets/js/jPlayer/jplayer.flat.css" type="text/css" />
        <link rel="stylesheet" href="http://localhost/Fuck/resources/assets/css/app.v1.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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

		<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
			<div class="container aside-xl">
			

			 	<section class="m-b-lg">

					<form method="POST" enctype="multipart/form-data" action="http://localhost/Fuck/public/up-file">
						{!! csrf_field() !!}

						<input type="file" name="song_name"  class="form-control rounded input-lg text-center no-border" />
						<p></p>

						<input type="text" name="song_title" placeholder="Song Title"  class="form-control rounded input-lg text-center no-border" />
						<p></p>


						<input type="text" name="song_remarks" placeholder="Remarks"  class="form-control rounded input-lg text-center no-border" />
						<p></p>

						<input type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded" value="Upload"/>

					</form>


				</section>
			</div>
		</section>


</div>

            </main>
        </div>

        @stack('modals')

        @livewireScripts


        <script src="http://localhost/Fuck/resources/assets/js/app.v1.js"></script>
        <script src="http://localhost/Fuck/resources/assets/js/app.plugin.js"></script>
        <script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
        <script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/jPlayer/demo.js"></script>
        <script type="text/javascript" src="http://localhost/Fuck/resources/assets/js/sign_in.js"></script>
    </body>
</html>

