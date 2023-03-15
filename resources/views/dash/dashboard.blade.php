

@extends('layout')

@section('content')
<div class="container">
    <div class="row col-md-12 mt-5">
        <div class="col-md-4">
        <div class="card bg-teal-400">
            <div class="card-body">
                <div class="d-flex">
                    <h3 class="font-weight-semibold mb-0">{{$usersdetails->count() == 0 ? '0':$usersdetails->count()}}</h3>
                    <div class="list-icons ml-auto">
                      
                    </div>
                </div>
                
                <div>
                    Users online
                    <div class="font-size-sm opacity-75">Active</div>
                </div>
            </div>

        </div>
        </div>
        <div class="col-md-4">

            <!-- Current server load -->
            <div class="card bg-pink-400">
                <div class="card-body">
                    <div class="d-flex">
                        <h3 class="font-weight-semibold mb-0">{{$deactivateduser->count()== 0? '0':$deactivateduser->count()}}</h3>
                        <div class="list-icons ml-auto">
                          
                        </div>
                    </div>
                    
                    <div>
                       Deactivated Users
                        <div class="font-size-sm opacity-75">No Active</div>
                    </div>
                </div>

            </div>
            <!-- /current server load -->

        </div>

        <div class="col-md-4">

            <!-- Today's revenue -->
            <div class="card bg-blue-400">
                <div class="card-body">
                    <div class="d-flex">
                        <h3 class="font-weight-semibold mb-0">{{$candidates->count() == 0? '0':$candidates->count()}}</h3>
                        <div class="list-icons ml-auto">
                            <a class="list-icons-item" data-action="reload"></a>
                        </div>
                    </div>
                    
                    <div>
                        Total Candidates
                        <div class="font-size-sm opacity-75">So Far</div>
                    </div>
                </div>

                <div id="today-revenue"></div>
            </div>
            <!-- /today's revenue -->

        </div>
        
   
</div>
    <div class="row col-md-12 justify-content-center">
        <div class="col-xl-6">
           
            <!-- Basic pie -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Gender Popularity</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div id="piechart" style="width: 100%; height:20rem"></div>

                </div>
            </div>
            <!-- /basic pie -->

        </div>

               <div class="col-md-6">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Serices that are offered so far</h6>
                        <div class="header-elements">
                            <select class="form-control" id="select_date" data-fouc>
                                <option value="val1">June, 29 - July, 5</option>
                                <option value="val2">June, 22 - June 28</option>
                                <option value="val3" selected>June, 15 - June, 21</option>
                                <option value="val4">June, 8 - June, 14</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-body py-0">
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="font-weight-semibold mb-0">{{$underprocess->count()== 0? '0':$underprocess->count()}}</h5>
                                    <span class="text-muted font-size-sm">Under Process</span>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="font-weight-semibold mb-0">{{$isprinted->count()== 0 ?'0':$isprinted->count()}}</h5>
                                    <span class="text-muted font-size-sm">Printed</span>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <h5 class="font-weight-semibold mb-0">{{$finished->count()== 0 ? '0':$finished->count()}}</h5>
                                    <span class="text-muted font-size-sm">Finished</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart mb-2" id="app_sales"></div>
                    <div class="chart" id="monthly-sales-stats"></div>
                </div>
                <!-- /sales stats -->
               </div>
        </div>
    
</div>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable({{ Js::from($charatdata) }})

      var options = {
        title: 'Candidates based on Gender Type'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>

@endsection