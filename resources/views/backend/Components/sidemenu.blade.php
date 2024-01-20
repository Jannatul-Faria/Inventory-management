<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{ url('dashboard') }}">
            <img src="{{ asset('assets/images') }}/favicon2.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Jannatul Faria</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>


        <li>
            <a href="{{ url('dashboard') }}">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="" class=" dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" type="button">
                <i class="zmdi zmdi-account-box"></i><span>User</span>
            </a>


            <ul class="sidebar-menu do-nicescrol dropdown-menu">
                <li class="dropdown-item" href="#"><a href=""><i class="zmdi zmdi-account-add"></i> add
                        user</a></li>
                <li class="dropdown-item" href="#"><a href=""><i class="zmdi zmdi-accounts-list"></i> user
                        list</a></li>
                {{-- <li class="dropdown-item" href="#">Something else here</li>
                <li class="dropdown-item" href="#">Separated link</li> --}}
            </ul>



        </li>

        <li>
            <a href="" class=" dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" type="button">
                <i class="zmdi zmdi-collection-folder-image"></i><span>Gallary</span>
            </a>


            <ul class="sidebar-menu do-nicescrol dropdown-menu">
                <li class="dropdown-item" href="#"> <a href="{{ url('admin/gallary') }}">
                        <i class="zmdi zmdi-collection-folder-image"></i><span>Albums</span>
                    </a></li>
                <li class="dropdown-item" href="#"><a href="{{ url('admin/imageUplode') }}">
                        <i class="zmdi zmdi-image"></i><span>images-uplode</span>
                    </a></li>

            </ul>
        </li>

        <li>
            <a href="{{ url('admin/tasks') }}">
                <i class="zmdi zmdi-assignment-check"></i> <span>tasks</span>
            </a>
        </li>



        <li>
            <a href="{{ url('admin/icons') }}">
                <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
            </a>
        </li>

        {{-- <li>
            <a href="{{ route('admin.forms') }}">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.tables') }}">
                <i class="zmdi zmdi-grid"></i> <span>Tables</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.calender') }}">
                <i class="zmdi zmdi-calendar"></i> <span>Calendar</span>
                <small class="badge float-right badge-light">New</small>
            </a>
        </li> --}}

        {{-- <li>
            <a href="{{ route('profile') }}">
                <i class="zmdi zmdi-face"></i> <span>Profile</span>
            </a>
        </li>

        <li>
            <a href="{{ route('login') }}" target="_blank">
                <i class="zmdi zmdi-lock"></i> <span>Login</span>
            </a>
        </li>

        <li>
            <a href="{{ route('register') }}" target="_blank">
                <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
            </a>
        </li> --}}

        <li class="sidebar-header">LABELS</li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a>
        </li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

    </ul>

</div>
<!--End sidebar-wrapper-->
