<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'ACMATShare') }} | File Sharing got easier</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('includes.styles')


</head>
<body class="  ">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">

    @include('includes.sidebar')

    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light mt-2">
                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                    <i class="ri-menu-2-line wrapper-menu"></i>
                    <a href="/backend/dashboard.html" class="header-logo">
                        <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                        <img src="../assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo" alt="logo">
                    </a>
                </div>
                <!-- search query -->
                <div class="iq-search-bar device-search">
                    <form>
                        <div class="input-prepend input-append">
                            <div class="btn-group">
                                <label class="dropdown-toggle searchbox" data-toggle="dropdown">
                                    <input class="dropdown-toggle search-query text search-input" type="text"  placeholder="Type here to search..."><span class="search-replace"></span>
                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                    <span class="caret"><!--icon--></span>
                                </label>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><div class="item"><i class="far fa-file-pdf bg-info"></i>PDFs</div></a></li>
                                    <li><a href="#"><div class="item"><i class="far fa-file-alt bg-primary"></i>Documents</div></a></li>
                                    <li><a href="#"><div class="item"><i class="far fa-file-excel bg-success"></i>Spreadsheet</div></a></li>
                                    <li><a href="#"><div class="item"><i class="far fa-file-powerpoint bg-danger"></i>Presentation</div></a></li>
                                    <li><a href="#"><div class="item"><i class="far fa-file-image bg-warning"></i>Photos & Images</div></a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="d-flex align-items-center">
                    <div class="change-mode">
                        <div class="custom-control custom-switch custom-switch-icon ">
                            <div class="custom-switch-inner">
                                <p class="mb-0"> </p>
                                <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                    <span class="switch-icon-left"><i class="a-left"></i></span>
                                    <span class="switch-icon-right"><i class="a-right"></i></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </a>
                        <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                            <form action="#" class="searchbox p-2">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                    <a href="#" class="search-link"><i class="las la-search"></i></a>
                                </div>
                            </form>
                        </div>
                    </li>
                    </ul>
                </div>
        </div>
        </nav>
    </div>
</div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <div class="card-transparent card-block card-stretch card-height mb-3">
                    <div class="d-flex justify-content-between">
                        <div class="select-dropdown input-prepend input-append mt-2">
                            <div class="btn-group">
                                <label data-toggle="dropdown">
                                    <div class="dropdown-toggle search-query">My Drive<i class="las la-angle-down ml-3"></i></div><span class="search-replace"></span>
                                    <span class="caret"><!--icon--></span>
                                </label>
                                <ul class="dropdown-menu">
                                    <li><div class="item"><i class="ri-folder-add-line pr-3"></i>New Folder</div></li>
                                    <li><div class="item"><i class="ri-file-upload-line pr-3"></i>Upload Files</div></li>
                                    <li><div class="item"><i class="ri-folder-upload-line pr-3"></i>Upload Folders</div></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-block card-stretch card-height iq-welcome" style="background: url(../assets/images/layouts/mydrive/background.png) no-repeat scroll right center; background-color: #ffffff; background-size: contain;">
                    <div class="card-body property2-content">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="col-lg-6 col-sm-6 p-0">
                                <h4 class="mb-4">Welcome {{auth()->user()->name}}</h4>
                                <p class="text-font mt-3"><em>...File Sharing just got fun</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-block ">
                    <div class="card-header">
                        <div class="header-title ">
                            <h4 class="card-title ">Statistic</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="media align-items-center">
                                    <div class="icon iq-icon-box bg-primary rounded icon-statistic">
                                        <i class="las la-long-arrow-alt-down"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <p class="mb-0">Downloads</p>
                                        <h5>12,594</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="media align-items-center">
                                    <div class="icon iq-icon-box bg-light rounded icon-statistic">
                                        <i class="las la-long-arrow-alt-up"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <p class="mb-0">Uploads</p>
                                        <h5>{{\App\Material::all()->count()}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                @yield('content')
            </div>



        </div>
    </div>
</div>
</div>
<!-- Wrapper End-->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright &copy;
                <span>
                        <script>
                            const today = new Date()
                            const getYear = today.getFullYear()
                            document.write(getYear)
                        </script>
                    </span>
                <a href="/backend/dashboard.html">| AcMat |</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-l" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">
                    <a href="/backend/dashboard.html" class="w-25 h-15" >
                        <img style="height: 2em;" src="../assets/images/logo-white.png" class="img-fluid rounded-normal " alt="logo">
                    </a>
                </h4>
                <div>
                    <a class="btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
            </div>
            <div class="modal-body">
                <div id="resolte-contaniner" style="height: 150px;" class="overflow-auto">
                    <div class="container">
                        <form method="POST" enctype="multipart/form-data" action="{{route('upload')}}">
                            @csrf
                            <select class="select2 form-control @error('folder') is-invalid @enderror" style="width: 100%;"
                                    name="folder" id="">
                                @foreach(\App\Folder::all() as $folder)
                                    <option >{{$folder->name}}</option>
                                @endforeach
                            </select>
                            @error('folder')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="file-upload-wrapper mt-2">
                                <input type="file" name="file" id="input-file-max-fs" class="form-control @error('file') is-invalid @enderror" data-max-file-size="2M" multiple/>
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button class="btn btn-block btn-primary mt-2" type="submit">Upload</button>
                        </form>


{{--                        <form action="/file-upload" class="dropzone">--}}
{{--                            <div class="fallback">--}}
{{--                                <input name="file" type="file" multiple />--}}
{{--                            </div>--}}
{{--                        </form>--}}


{{--                        <!-- Preview -->--}}
{{--                        <div class="dropzone-previews mt-3" id="file-previews"></div>--}}

{{--                        <!-- file preview template -->--}}
{{--                        <div class="d-none" id="uploadPreviewTemplate">--}}
{{--                            <div class="card mt-1 mb-0 shadow-none border">--}}
{{--                                <div class="p-2">--}}
{{--                                    <div class="row align-items-center">--}}
{{--                                        <div class="col-auto">--}}
{{--                                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="col pl-0">--}}
{{--                                            <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>--}}
{{--                                            <p class="mb-0" data-dz-size></p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-auto">--}}
{{--                                            <!-- Button -->--}}
{{--                                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>--}}
{{--                                                <i class="dripicons-cross"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.scripts')

{{--<script src="{{asset('assets/dropzone/dropzone.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/dropzone/component.fileupload.js')}}"></script>--}}

</body>
</html>
