<form action="{{url('createaddress/'.$can->id) }}"  method="POST" enctype="multipart/form-data">
    {{ csrf_field() }} 
<div id="addressmodal{{ $can->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Candidates Address</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                
                <div class="col-md-12">
                    <hr/>
                    <h6>Permenant Address</h6>
                   
                    <input type="hidden" name="profileid" value="{{ $can->id }}"> 
                        <div class="row">
                            <div class="form-group col-4">
                                <label> Province:</label>
                                <select name="provinceIDEn" class="form-control form-control-select2">
                                   @foreach($provincelist as $pro)
                                   <option value="{{$pro->id}}">{{$pro->nameEn}}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="form-group col-4">
                                <label class="col-form-label">District:</label>
                                <input type="text" class="form-control" name="districtEn">
                                @error('villageEn')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label class="col-form-label">Village:</label>
                                <input type="text" class="form-control" name="villageEn">
                                @error('villageEn')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                <label> ولایت:</label>
                                <select name="provinceID" class="form-control form-control-select2">
                                   @foreach($provincelist as $pro)
                                   <option value="{{$pro->id}}">{{$pro->name}}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="form-group col-4">
                                <label class="col-form-label"> گذر:</label>
                                <input type="text" class="form-control" name="district">
                                @error('district')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label class="col-form-label"> قریه:</label>
                                <input type="text" class="form-control" name="village">
                                @error('village')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <hr/>
                    <h6>Current Address</h6>
                     <div class="row">
                        <div class="form-group col-4">
                            <label for="">Immigrating Date:</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                </span>
                                <input type="text" name="imigratingDate"class="form-control daterange-single" value="03/06/2023">
                            </div>
                            @error('imigratingDate')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label> Country:</label>
                            <select name="countryID" class="form-control form-control-select2">
                               @foreach($countryList as $cou)
                               <option value="{{$cou->id}}">{{$cou->nameEn}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">City:</label>
                            <input type="text" class="form-control" name="city">
                            @error('district')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-4">
                            <label class="col-form-label">Street No:</label>
                            <input type="text" class="form-control" name="streetNo">
                            @error('district')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label"> House No:</label>
                            <input type="text" class="form-control" name="houseNo">
                            @error('district')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                     </div>
                     <hr style="color:#ffff !important"/>
                     <h6> </h6>
                        {{-- <input type="hidden" name="id" value="{{ $users->id }}">   --}}

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn bg-blue ml-3">Save changes <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    
	
                  
                </div>
            </div>
        </div>
    </div>
</div>
</form>

