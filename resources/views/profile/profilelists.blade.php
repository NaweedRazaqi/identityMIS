
@extends('layout')

@section('content')
<div class="container">
    <div class="row col-md-12 justify-content-center mt-5">
    <div class="col-md-12">

        <!-- Search Form -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="card-title just-centent-center"> Search Candidates</h3>
            </div>

            <div class="card-body">
                <form  action="/profilelists">
                    <div class="row">
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">نام:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="firstname" 
                        value="{{old('firstname')}}" placeholder="نام را بنوسید">
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">تخلص:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="lastname" 
                        value="{{old('lastname')}}" placeholder="تخلص را بنوسید">
                    </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="col-form-label col-lg-3">First Name:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="firstnameEn" 
                            value="{{old('firstnameEn')}}" placeholder="Enter the first name">
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label col-lg-3">Last Name:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="lastnameEn" 
                            value="{{old('lastnameEn')}}" placeholder="Enter the last name">
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label class="col-form-label col-lg-3">Code:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="code" 
                                value="{{old('code')}}" placeholder="Enter unique code of candidate to search">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start align-items-center">
                            <button type="submit" class="btn bg-blue ml-3" style="background-color: #26a69a">Search <i class="icon-search4 ml-2"></i></button>
                        </div>
                    </div>
                   
                    
                </form>
            </div>
        </div>
        <!-- /Search Form -->
    </div>
    <div class="row col-md-12 justify-content-center">
        <div class="col-md-12">
            <!-- User list table-->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title"> Candidates</h5>
                </div>
    
                <div class="card-body">
             
    
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="datatable-header">
            <div class="datatable-scroll">
                <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row" style="background-color: #263238; color:white">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">نام</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">تخلص </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">نام پدر</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending"> نام پدر کلان</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending"> تاریخ تولد</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending"> جنسیت</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending"> حالت مدنی</th>
                            <th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 100px;" aria-label="Actions">عملیه ها</th></tr>
                    </thead>
                    
                        @foreach ($candidateDetails as $can)
                            <tbody> 
                            <tr>
                                <td>{{$can->firstnameEn}}</td>
                                <td>{{$can->lastnameEn}}</td>
                                <td>{{$can->fathernameEn}}</td>
                                <td>{{$can->grandfathernameEn}}</td>
                                <td>{{$can->dateofbirth}}</td>
                                <td>{{$can->genderID == 1 ?'Male':'Female'}}</td>
                                <td>{{$can->martialstatusID == 1 ?'Single':'Married'}}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
        
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a  href="/addprofiledetails/{{$can->id}}" class="dropdown-item">
                                                    <i class="icon-unlocked2"></i>بروز رسانی</a>
                                                {{-- <a href="#" class="dropdown-item"data-toggle="modal" data-target="#modal_default{{$can->id}}"><i class="
                                                    icon-briefcase"></i>مشخصات وظیفه </a>
                                                <a href="#" id="addressmodal" class="dropdown-item"data-toggle="modal" data-target="#addressmodal{{$can->id}}">
                                                    <i class="icon-location4"></i> مشخصات آدرس</a>
                                                <a href="#" class="dropdown-item"data-toggle="modal" data-target="#relatives_modal{{$can->id}}" >
                                                    <i class="icon-collaboration"></i>مشخصات اقارب </a>
                                                <a href="#" class="dropdown-item"data-toggle="modal" data-target="#identity_details{{$can->id}}" >
                                                    <i class="icon-collaboration"></i>مشخصات تذکره </a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                {{-- @include('profile.profilemodal.createjob')
                                @include('profile.profilemodal.createaddress')
                                @include('profile.profilemodal.relativesmodal')
                                @include('profile.profilemodal.identitydetails') --}}
                            </tr> 
                        </tbody>
                   @endforeach
                </table>
            </div>
        </div>
                </div>
                </div>
                <div class="datatable-footer">
            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div>
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">←</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">→</a></div></div></div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection

