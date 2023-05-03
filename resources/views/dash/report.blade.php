

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
                <form  action="/loadreportdata" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for=""> Start Date:</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                </span>
                                <input type="text" name="startdate"class="form-control daterange-single" value="01/01/2023">
                                
                            </div>
                            @error('dateofbirth')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="">End Date:</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                </span>
                                <input type="text" name="enddate"class="form-control daterange-single" value="03/18/2023">
                            </div>
                            @error('dateofbirth')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
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
   
    </div>
</div>

<script type="text/javascript">
 $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
    </script>
@endsection

