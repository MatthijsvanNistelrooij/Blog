<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Blog', 'Blog') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('styles')

</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fa fa-cubes" style="color: rgb(7, 56, 50)"></i>
            {{ config('Blog', 'Blog') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<main class="py-4">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <div class="container">
        <div class="row">

            @if(Auth::check())

            <div class="col">
                <ul class="list-group" style="margin-top: 35px">
                    <div class="card card-default">
                        <div class="card-header" style="border-bottom: none">View</div>
                            <li class="list-group-item" style="border-left: none; border-right: none">
                                <a href="{{ route('home') }}" style="text-decoration: none">
                                    <i class="fa fa-home" style="color:rgb(224, 224, 224)"></i>
                                    Home
                                </a>
                                <li class="list-group-item" style="border-left: none; border-right: none">
                                    <a href="{{ route('categories') }}" style="text-decoration: none">
                                        <i class="fa fa-tag" style="color:rgb(233, 233, 233)"></i>
                                        Categories</a>
                                    </li>
                                    <li class="list-group-item" style="border-left: none; border-right: none">
                                        <a href="{{ route('tags') }}" style="text-decoration: none">
                                           <i class="fa fa-tags" style="color:rgb(211, 211, 211)"></i>
                                            Tags</a>
                                        </li>

                                        @if(Auth::user()->admin)
                                        <li class="list-group-item" style="border-left: none; border-right: none">
                                            <a href="{{ route('users') }}" style="text-decoration: none">
                                               <i class="fa fa-users" style="color: rgb(197, 197, 197)"></i>
                                                Users</a>
                                            </li>
                                            <li class="list-group-item" style="border-left: none; border-right: none">
                                                <a href="{{ route('user.create') }}" style="text-decoration: none">
                                                   <i class="fa fa-user-plus" style="color:rgb(187, 187, 187)"></i>
                                                    Add users</a>
                                                </li>
                                            @endif
                                            <li class="list-group-item" style="border-left: none; border-right: none">
                                                <a href="{{ route('user.profile') }}" style="text-decoration: none">
                                                   <i class="fa fa-user" style="color:rgb(167, 167, 167)"></i>
                                                    My Profile</a>
                                                </li>
                                    <li class="list-group-item" style="border-left: none; border-right: none">
                                        <a href="{{ route('posts') }}" style="text-decoration: none" >
                                            <i class="fa fa-cube" style="color: rgb(124, 124, 124)"></i>
                                            Posts</a>
                                        </li>
                                        <li class="list-group-item" style="border-left: none; border-right: none">
                                            <a href="{{ route('posts.trashed') }}" style="text-decoration: none">
                                                <i class="fa fa-ban" style="color:rgb(80, 80, 80)"></i>
                                                Trashed posts</a>
                                            </li>
                                        </div>
                                    </tbody>
                                </thead>
                            </table>
                            <br>
                            <div class="card card-default">
                                <div class="card-header" style="border-bottom: none">Settings</div>
                            @if(Auth::user()->admin)
                            <li class="list-group-item" style="border-left: none; border-right: none">
                                <a href="{{ route('settings') }}" style="text-decoration: none">
                                    <i class="fa fa-cog" style="color: rgb(70, 70, 70)"></i>
                                    Settings</a>
                                </li>
                            @endif
                                </li>
                            </div>
                        <br>
                        <div class="card card-default">
                            <div class="card-header" style="border-bottom: none">Create</div>
                            <li class="list-group-item" style="border-left: none; border-right: none">
                                <a href="{{ route('category.create') }}" style="text-decoration: none">
                                    <i class="fa fa-plus-square" style="color:rgb(65, 65, 65)"></i>
                                    Create new category</a>
                                </li>
                            </li>
                            <li class="list-group-item" style="border-left: none; border-right: none">
                                <a href="{{ route('post.create') }}" style="text-decoration: none">
                                    <i class="fa fa-plus-square" style="color:rgb(49, 49, 49)"></i>
                                    Create new post</a>
                                </li>
                                <li class="list-group-item" style="border-left: none; border-right: none">
                                    <a href="{{ route('tag.create') }}" style="text-decoration: none">
                                        <i class="fa fa-plus-square" style="color: rgb(8, 8, 8)"></i>
                                        Create new tag</a>
                                    </li>


                            </li>
                        </ul>
                    </div>
                    @endif
                    <div class="col-md-8 col-lg-8">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/toastr.min.js')}}" ></script>

    <script>
        @if(Session::has('success'))
        <p class="alert alert-info">{{ Session::get('success') }}</p>
        @endif

        @if(Session::has('info'))
        <p class="alert alert-info">{{ Session::get('info') }}</p>
        @endif
    </script>
@yield('scripts')

</body>
</html>


