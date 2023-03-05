
<form action="{{url('createjob/'.$can->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }} 
<div id="modal_default{{ $can->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Candidates Job</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <h6 class="font-weight-semibold">  Job Descriptions</h6>
                <div class="col-md-12">
                    <input type="hidden" name="profileid" value="{{ $can->id }}"> 
                        <div class="row">
                            <div class="form-group col-6">
                                <label class="col-form-label">وظیفه قبلی در افغانستان:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="jobinAfg" required="this is required">
                                @error('jobinAfg')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                                            
                            <div class="form-group col-6">
                                <label class="col-form-label">وظیفه در خارج:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="jobinforgn" required>
                                @error('jobinforgn')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label class="col-form-label">Previouse Job:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="jobinAfgEn" required="this is required">
                                @error('jobinAfgEn')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                                            
                            <div class="form-group col-6">
                                <label class="col-form-label">Current Job:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="jobinforgnEn" required>
                                @error('jobinforgnEn')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                        </div>
                       <div class="row">  
                            <div class="form-group col-6">
                                <label class="col-form-label">phone:</label>
                                <input type="text" class="form-control" name="phone">
                                @error('phone')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                        </div>
                        {{-- <input type="hidden" name="id" value="{{ $users->id }}">   --}}

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn bg-blue ml-3">Save changes <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    
	
                  
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Job Lists</h5>                           
                        </div>
        
                        <div class="card-body">
                        </div>
        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                @foreach($jobslist as $job)
                                <tbody>
                                    <tr>
                                        <td>{{$job->canname}}</td>
                                        <td>{{$job->prvjob}}</td>
                                        <td>{{$job->currjob}}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
            
        </div>
    </div>
</div>
</form>