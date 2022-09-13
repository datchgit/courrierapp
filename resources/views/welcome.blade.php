<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acceuil</title>

        <!-- Fonts -->
      
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                       @if (Auth::user()->role->nom=='user')
                           <a href="{{route('agent.dashboard.home')}}"> Tableau de bord Agent </a>  
                       @elseif (Auth::user()->role->nom=='super-admin')   
                          <a href="{{route('admin.dashboard.home')}}"> Tableau de bord Administrateur </a>  
                       @endif
                      
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                      
                    @endauth
                </div>
            @endif

        </div>

        @include('sweetalert::alert');
    </body>
</html>
