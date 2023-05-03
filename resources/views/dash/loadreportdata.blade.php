@extends('layout')

@section('content')
<div class="container">
<div class="row col-md-12 justify-content-center mt-5">
    <div class="col-md-12">
        <!-- User list table-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title"> Applicants List</h5>
                {{-- <form action="{{route('exportcandidates')}}" method="post" target="_blank">
                    @csrf
                    <button type="submit" class="btn btn-success">Export to excel</button>
                    </form> --}}
                    {{-- <button onclick="tableToExcel()" class="btn btn-success">Export To Excel</button>
                    <button id="htmlToPdf" class="btn btn-warning">Export To Pdf</button> --}}
                    <span class="badge bg-success badge-pill" style="position: absolute;right:4rem;">Download</span>
                    <div class="list-icons ml-3">
                        <div class="list-icons-item dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                            <div class="dropdown-menu">
                                <a type="button" onclick="tableToExcel()"  class="dropdown-item"><i class="icon-file-excel"></i>Export To Excel</a>
                                <a type="button" id="htmlToPdf"class="dropdown-item"><i class="icon-file-pdf"></i> Export To Pdf</a>
                               
                            </div>
                        </div>
                    </div>
            </div>

            <div class="card-body">
           

            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="datatable-header">
        <div class="datatable-scroll">
            <table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row" style="background-color: #263238; color:white">
                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">Code</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">First Name</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">Last Name </th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending"> Father Name</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending"> Grand Fathername</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">DOB</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending"> Gender</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending"> Marital Status</th>
                </thead>
                
                    @foreach ($candidatelist as $can)
                        <tbody> 
                        <tr>
                            <td>{{$can->code}}</td>
                            <td>{{$can->firstnameEn}}</td>
                            <td>{{$can->lastnameEn}}</td>
                            <td>{{$can->fathernameEn}}</td>
                            <td>{{$can->grandfathernameEn}}</td>
                            <td>{{$can->dateofbirth}}</td>
                            <td>{{$can->genderID == 1 ?'Male':'Female'}}</td>
                            <td>{{$can->martialstatusID == 1 ?'Single':'Married'}}</td>
                           
                        </tr> 
                    </tbody>
               @endforeach
            </table>
        </div>
    </div>
            </div>
            </div>
            <div class="datatable-footer">
        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Total Applicants
            
            <span class="badge bg-warning badge-pill" style="position: absolute;left:8rem;">{{$candidatelist->count()}} </span>
        </div>
        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0"
             tabindex="0" id="DataTables_Table_0_previous">←</a><span>
                <a class="paginate_button current" aria-controls="DataTables_Table_0"
                 data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
                  aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></span>
                  <a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0"
                   id="DataTables_Table_0_next" >→</a></div></div></div>
        </div>
    </div>
    </div>
</div>
</div>
<script type="text/javascript" src="../assets/js/table2excel.js"></script>
<script type="text/javascript" src="../assets/js/html2pdf.bundle.min.js"></script>
<script type="text/javascript">
    function tableToExcel(){
    var table2excel = new Table2Excel();
    table2excel.export(document.querySelectorAll("table"));
    }

    // export to pdf
    document.getElementById('htmlToPdf').onclick = function(){

       var element = document.getElementById('DataTables_Table_0');

       var opt ={
           margin: 1,
           filename:'applicant_list.pdf',
           image: {type:'png', quality:0.98},
           html2canvas:{scale:1},
           jsPDF: {unit: 'in',format:'letter',orientation:'landscape',dpi: 192,
        letterRendering: true}
       };
        html2pdf(element,opt);

    };

    
  </script>
@endsection