<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/custom_styles.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <a class="btn btn-secondary mx-1" type="button" href="/aboutus">
                        About Us
                    </a>

                    @if (Auth::user() && Auth::user()->role_id == 3)
                        <a class="btn btn-secondary mx-1" type="button" href="/project">
                            Add Project
                        </a>
                        <a class="btn btn-secondary mx-1" type="button" href="/group">
                            Group
                        </a>
                    @endif


                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Templates and Formes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach ($templates as $template)
                                <a class="dropdown-item" type="button"
                                    href="/templates/download/{{ $template->id }}">{{ $template->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <a class="btn btn-secondary mx-1" type="button" href="/previousProject">
                        Previous project
                    </a>


                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Companies
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" type="button" href="#" data-toggle="modal"
                                data-target="#sendJobModal">Send Job</a>
                        </div>
                    </div>

                    @if (Auth::user())
                        <a class="btn btn-secondary mx-1" type="button" href="mailto: ">
                            Contact
                        </a>
                    @endif

                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <form action="/action_page.php">
                        <input class=" mt-2" type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role_id == 3)
                                    <a class="dropdown-item"> student</a>
                                @elseif(Auth::user()->role_id == 1)
                                    <a class="dropdown-item"> admin</a>
                                @elseif(Auth::user()->role_id == 2)
                                    <a class="dropdown-item"> Supervisor</a>
                                @endif
                                @if (Auth::user() && Auth::user()->role_id == 1)
                                    <a class="dropdown-item" href="/admin/users_management"> Users Management</a>
                                    <a class="dropdown-item" href="/admin/templates"> Temlates Management</a>
                                    <a class="dropdown-item" href="/admin/project_management"> Project Management</a>
                                    <a class="dropdown-item" href="/admin/AD_Management"> AD management</a>
                                @endif
                                @if (Auth::user() && Auth::user()->role_id == 2)
                                    <a class="dropdown-item" href="/supervisor/display_groups"> group</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>



    <main class="row">

        @yield('content')
    </main>
    {{-- send jobs form --}}
    <div class="modal fade" id="sendJobModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <form action="/admin/AD_Management" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Submit a job offer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                            <div class="form-group">
                                <label>Company's name:</label>
                                <input type="text" class="form-control" name="company_name">
                            </div>

                            <div class="form-group">
                                <label>Location: </label>
                                <input type="text" class="form-control" name="location">
                            </div>

                            <div class="form-group">
                                <label >Job's name: </label>
                                <input type="text" class="form-control" name="job_name">
                            </div>

                            <div class="form-group">
                                <label>More details: </label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">If you want upload file</label>
                                <input type="file" class="form-control-file" name="file">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>

</body>
@yield('scripts')

</html>
