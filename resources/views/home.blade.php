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
     @foreach(\App\Folder::all()->take(6) as $folder)
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
 <div class="row">
     <div class="col-lg-12 col-xl-12">
         <div class="card card-block card-stretch card-height files-table">
             <div class="card-header d-flex justify-content-between">
                 <div class="header-title">
                     <h4 class="card-title">Files</h4>
                 </div>
                 <div class="card-header-toolbar d-flex align-items-center">
                     <a href="/backend/page-files.html" class=" view-more">View All</a>
                 </div>
             </div>
             <div class="card-body pt-0">
                 <div class="table-responsive">
                     <table class="table mb-0 table-borderless tbl-server-info">
                         <thead>
                         <tr>
                             <th scope="col">Name</th>
                             <th scope="col">Users</th>
                             <th scope="col">Last Edit</th>
                             <th scope="col">Size</th>
                             <th scope="col"></th>
                         </tr>
                         </thead>
                         <tbody>
                            @foreach(\App\Material::orderBy('id', 'desc')->take(5)->get() as $material)
                             <tr>
                                 <td>
                                     <div class="d-flex align-items-center">
                                         <div class="icon-small bg-danger rounded mr-3">
                                             <i class="ri-file-excel-line"></i>
                                         </div>
{{--                                         <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal" data-title="Weekly-report.pdf" style="cursor: pointer;">Weekly-report.pdf</div>--}}
                                         <div  style="cursor: pointer;">{{$material->name}}</div>
                                     </div>
                                 </td>
                                 <td>{{$material->docOwner->name}}</td>
                                 <td>{{$material->created_at->format('d m Y')}}</td>
                                 <td>2MB</td>
                                 <td>
                                     <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton6" data-toggle="dropdown">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                             <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                             <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                             <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                             <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                             <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                         </div>
                                     </div>
                                 </td>
                             </tr>
                            @endforeach

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>

@endsection
