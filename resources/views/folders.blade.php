@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-block card-stretch card-transparent">
                <div class="card-header d-flex justify-content-between pb-0">
                    <div class="header-title">
                        <h4 class="card-title">Folders</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">

                    </div>
                </div>
            </div>
        </div>
        @foreach($folders as $folder)
            <div class="col-lg-2">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="{{route('materials', $folder->id)}}" class="folder">
                                <div class="icon-small bg-danger rounded mb-4">
                                    <i class="ri-file-copy-line"></i>
                                </div>
                            </a>
                            <div class="card-header-toolbar">
                                <div class="dropdown">
                                            <span class="dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown">
                                                <i class="ri-more-2-fill"></i>
                                            </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('materials', $folder->id)}}" class="folder">
                            <h5 class="mb-2">{{$folder->name}}</h5>
                            <p class="mb-0"><i class="font-size-14"></i>{{$folder->created_at->format('d, m Y')}}</p>
                            <p class="mb-0"><i class="font-size-14"></i> {{$folder->materials->count()}} Files</p>
                        </a>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
