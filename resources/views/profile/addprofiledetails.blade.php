
@extends('layout')

@section('content')
<div class="container">
    <div class="row col-md-12 justify-content-center mt-5">
        <div class="col-md-12">
            <!-- User list table-->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title"> Candidates details</h5>
                </div>
    
                <div class="card-body">
             
    
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="datatable-header">
            <div class="datatable-scroll">
                <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row" style="background-color: #263238; color:white">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Last Name </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending"> Father Name</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending"> Grand Fathername </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">  DOB</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending"> Marital Status</th>
                            <th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 100px;" aria-label="Actions"> Actions</th></tr>
                    </thead>
                    
                        @foreach ($candidateDetails as $can)
                            <tbody> 
                            <tr>
                                <td>{{$can->firstnameEn}}</td>
                                <td>{{$can->lastnameEn}}</td>
                                <td>{{$can->fathernameEn}}</td>
                                <td>{{$can->grandfathernameEn}}</td>
                                <td>{{$can->dateofbirth}}</td>
                                <td>{{$can->martialstatusID == 1 ?'Single':'Married'}}</td>
                                <td class="text-center d-flex">
                                         <a href="/updatepro/{{$can->id}}" type="button" class="btn btn-danger" style="margin-right: 16px">Edit</a>
                                         <a href="/candidateDetails/{{$can->id}}" type="button" class="btn btn-primary" >Next</a>
                                               
                                       
                                    </div>
                                </td>
                            </tr> 
                        </tbody>
                   @endforeach
                </table>
            </div>
        </div>
                </div>
                </div>
              
        </div>
        </div>
    </div>
    
    </div>
</div>

@endsection

