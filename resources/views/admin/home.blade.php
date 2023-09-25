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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

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
                
                    <table class="table">
                     
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
        <td>{{$input->email}}</td>
        <td>\
        <form action="{{route ('destroy',$input->id )}}" method="POST" type="button" class="btn btn-danger">

@csrf
@method("DELETE")

<a href="/destroy/{{$input->id}}" type="button"  class="btn btn-danger btn-sm">Delete</a>
</form>
        </td>
        <td> <a href="/update/{{ $input>id }}" type="button" class="btn btn-success">Edit</a></td>
    
    
    
    
    </tr>
    @endforeach
 
    
                    </table>
                
                    @if(session('we'))
<div class="alert alert-primary" role="alert">
{{session('we')}}
</div>

@endif
                </div>
            </div>
        </div>
    </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>

