<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="{{route('home')}}" class="header-logo">
            <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
            <img src="../assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo" alt="logo">
        </a>
        <div class="iq-menu-bt-sidebar pt-2">
            <!-- <i class="las la-bars wrapper-menu"></i> -->
            <i class="ri-close-line wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <div class="new-create select-dropdown input-prepend input-append">
            <div class="btn-group">
{{--                <a href="/backend/upload.html" class="search-query selet-caption">Upload File</a>--}}
                <a href="#" data-toggle="modal" data-target="#uploadModal" class="search-query selet-caption">Upload File</a>
            </div>
        </div>
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="active">
                    <a href="{{route('home')}}" class="">
                        <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                    </a>
                    <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
                <li class=" ">
                    <a href="/app/user-profile-edit.html" class="">
                        <i class="las la-stopwatch iq-arrow-left"></i><span>My Profile</span>
                    </a>
                    <ul id="profile" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle"></ul>
                </li>
{{--                <li class=" ">--}}
{{--                    <a href="/backend/page-folders.html" class="">--}}
{{--                        <i class="las la-stopwatch iq-arrow-left"></i><span>Recent</span>--}}
{{--                    </a>--}}
{{--                    <ul id="page-folders" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li class=" ">
                    <a href="#mydrive" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="las la-hdd"></i><span>My Drive</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="mydrive" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" ">
                            <a href="/backend/folder-1.html">
                                <i class="lab la-blogger-b"></i><span>Year 1</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class=" ">
                    <a href="{{route('folders')}}" class="">
                        <i class="lar la-file-alt iq-arrow-left"></i><span>Files</span>
                    </a>
                    <ul id="page-files" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
                <li class=" ">
                    <a href="https://smallpdf.com/edit-pdf" class="" target="_blank">
                        <i class="lar la-file-alt iq-arrow-left"></i><span>PDF Converter</span>
                    </a>
                    <ul id="page-files" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
                <li class=" ">
                    <a href="{{ route('logout') }}" class=""
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="lar la-file-alt iq-arrow-left"></i><span>Sign out</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                    <ul id="page-files" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
    </div>
</div>
