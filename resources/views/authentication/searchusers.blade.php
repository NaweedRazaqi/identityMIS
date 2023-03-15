
@extends('layout')

@section('content')
<div class="container">
    <div class="row col-md-12 justify-content-center mt-5">
    <div class="col-md-12">

        <!-- Search Form -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="card-title just-centent-center">Search User</h3>
            </div>

            <div class="card-body">
                <form  action="/searchusers">
                    <div class="form-group">
                        <label for="">UserName</label>
                        <input type="text" class="form-control" name="name" 
                        value="{{old('name')}}" placeholder="Enter User Name To Search">
                        <label for="">Email</label>
                        <input type="email" class="form-control"
                        value="{{old('email')}}" name="email" placeholder="Enter Email To Search">
                    </div>
                  
                    <div class="d-flex justify-content-start align-items-center">
                        <button type="submit" class="btn bg-green ml-3">Search Users <i class="icon-search4 ml-2"></i></button>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- /Search Form -->



    </div>
    </div>
    <div class="row col-md-12 justify-content-center">
    <div class="col-md-12">

        <!-- User list table-->
        
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Users List</h5>
            </div>

            <div class="card-body">
            </div>

            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="datatable-header">
        <div class="datatable-scroll">
            <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">First Name</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Email Address</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Activation</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">Created On</th>
                        <th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 100px;" aria-label="Actions">Actions</th></tr>
                </thead>
                
                    @foreach ($users as $user) 
                        <tbody> 
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->activate ? 'Yes' : 'No'}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->role== 1 ? 'Admin' : 'User'}}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
    
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a  href="/useractivation/{{$user->id}}" class="dropdown-item">
                                                <i class="icon-unlocked2"></i>Activate</a>
                                            <a href="/useredit/{{$user->id}}" class="dropdown-item"><i class="icon-pencil"></i>Edit</a>
                                            <a href="/accesstouser/{{$user->id}}" class="dropdown-item"><i class="icon-accessibility "></i>Grant Access</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                    </tbody>
                    
               @endforeach
            
               
            </table>
        </div>
            <div class="datatable-footer">
        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div>
        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">←</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">→</a></div></div></div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection