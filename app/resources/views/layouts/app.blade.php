@extends('layouts.master')

@push('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/summernote/summernote-lite.min.css') }}">
@endpush

@section('_content')
    <div class="wrapper">
        <!-- Main Header -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('assets/images/user-avatar.png') }}"
                            class="user-image img-circle elevation-2" alt="">
                        <span class="d-none d-md-inline">{{-- Auth::user()->name --}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="{{ asset('assets/images/user-avatar.png') }}" class="img-circle elevation-2"
                                alt="">
                            <p>
                                {{-- Auth::user()->name --}}
                                <small>Member since {{-- Auth::user()->created_at->format('M. Y') --}}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a href="#" class="btn btn-default btn-flat float-right"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>
                Copyright &copy; 2023-2024 CNMH.</strong> All rights
            reserved.
        </footer>
    </div>
@endsection

@push('third_party_scripts')
    <script src="{{ asset('assets/summernote/summernote-lite.min.js') }}"></script>
@endpush
