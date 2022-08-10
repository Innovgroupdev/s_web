<div class="main-sidebar sidebar-dark-primary elevation-4 ">
    
    <div class="container-fluid text-center bg-orange ps-0" >
    <a href="{{ route('home') }}" class="brand-link container-fluid d-flex justify-content-center py-4 ms-0">
        <img src="{{ asset("/wp-content/themes/appino/assets/images/logo.png")}}"
             alt="AdminLTE Logo"
             class=" py-0"  height="70">
        <!-- <span class="brand-text font-weight-light">{{ config('app.name') }}</span> -->
    </a>
    </div>

    <div class="sidebar">
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column px-0" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</div>
