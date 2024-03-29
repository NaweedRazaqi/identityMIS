
@extends('layout')

@section('content')
<div class="row col-md-12 justify-content-center mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="card-title just-centent-center">Update applicant details</h3>
            </div>
            <div class="card-body">
                @if(!isset($candidates->id))
            <form action="{{url('updatecandidatedetails/'.$candidatesdetails->profileID) }}" method="POST" >
            @else
             <form action="{{url('updatecandidatedetails/'.$candidatesdetails->profileID) }}" method="POST">
            @endif
                {{ csrf_field() }} 
                    @method('PUT')
    <div class="form-group row">
        <div class="col-lg-12">
            <div class="row">  
                <div class="form-group col-3">
                    <label class="col-form-label">Provinces:</label>
                    <select name="provinceID" class="form-control form-control-select2">
                        <option value="" disabled="disabled" selected="ولایت">Select province</option>
                        @foreach($provincelist as $pro)
                                <option {{ isset($pro->id) 
                                && $pro->id == $candidatesdetails->provinceID ? 'selected="selected"':'' }} 
                                value="{{$pro->id}}">{{$pro->nameEn}}
                                </option>      
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-3">
                    <label class="col-form-label">District:</label>
                    <input type="text" class="form-control"  value="{{$candidatesdetails->districtEn}}" placeholder="Enter district name" name="districtEn">
                    @error('villageEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">Village:</label>
                    <input type="text" class="form-control" value="{{$candidatesdetails->villageEn}}" placeholder="Enter village name" name="villageEn">
                    @error('villageEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label"> گذر:</label>
                    <input type="text" class="form-control" value="{{$candidatesdetails->district}}" placeholder="گذر را درج نمایید" name="district">
                    @error('district')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label"> قریه:</label>
                    <input type="text" class="form-control" value="{{$candidatesdetails->village}}" placeholder="قریه را درج نمایید" name="village">
                    @error('village')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
            </div>
            <hr/>
                    <p>Current Address</p>
            <div class="row">
                <div class="form-group col-3">
                    <label class="col-form-label">Country:</label>
                    <select name="countryID" class="form-control form-control-select2">
                        <option value="" disabled="disabled" selected="کشور">Select</option>
                        @foreach($countrylist as $cou)
                                <option {{ isset($cou->id) 
                                && $cou->id == $candidatesdetails->countryID ? 'selected="selected"':'' }} 
                                value="{{$cou->id}}">{{$cou->nameEn}}
                                </option>      
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-3">
                    <label class="col-form-label">Immigrating Date:</label>
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                        </span>
                        <input type="text" name="imigratingDate" class="form-control" id="datepicker"
                        value="{{ date('m-d-Y',strtotime($candidatesdetails->imigratingDate)) }}" placeholder="Date of immigration">
                    </div>
                    @error('imigratingDate')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">City:</label>
                    <input type="text" class="form-control"value="{{$candidatesdetails->city}}" placeholder="Enter city name" name="city">
                    @error('district')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">Street No:</label>
                    <input type="text" class="form-control"value="{{$candidatesdetails->streetNo}}" placeholder="Enter street no" name="streetNo">
                    @error('district')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label"> House No:</label>
                    <input type="number" class="form-control" value="{{$candidatesdetails->houseNo}}" placeholder="Enter house no"name="houseNo">
                    @error('district')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
          
            </div>

            <hr/>
                    <p>Job Details </p>
         <div class="row">
            <div class="form-group col-3">
                <label class="col-form-label">Previouse Job:</label>
                <input type="text" class="form-control" name="jobinAfgEn" placeholder="Enter previouse job" value="{{$candidatesdetails->jobinAfgEn}}">
                @error('jobinAfgEn')
                <p class="alert alert-danger mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="form-group col-3">
                <label class="col-form-label">Current Job:</label>
                <input type="text" class="form-control" name="jobinforgnEn" placeholder="Enter current job" value="{{$candidatesdetails->jobinforgnEn}}">
                @error('jobinforgnEn')
                <p class="alert alert-danger mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="form-group col-2">
                <label class="col-form-label">وظیفه درافغانستان:</label>
                <input type="text" class="form-control" name="jobinAfg" placeholder="عنوان وظیفه در کشور" value="{{$candidatesdetails->jobinAfg}}">
                @error('jobinAfg')
                <p class="alert alert-danger mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="form-group col-2">
                <label class="col-form-label">وظیفه در خارج:</label>
                <input type="text" class="form-control" name="jobinforgn" placeholder="عنوان وظیفه در خارج" value="{{$candidatesdetails->jobinforgn}}">
                @error('jobinforgn')
                <p class="alert alert-danger mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="form-group col-2">
                <label class="col-form-label">phone:</label>
                <input type="text" class="form-control" name="phone" placeholder="enter job phone number" value="{{$candidatesdetails->phone}}">
                @error('phone')
                <p class="alert alert-danger mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
         </div>
            <hr/>
                    <p>Relatives </p>
            <div class="row">  
                <div class="form-group col-4">
                    <label class="col-form-label">First Name:</span></label>
                    <input type="text" class="form-control" name="firstnameEn"placeholder="first name" value="{{$candidatesdetails->firstnameEn}}">
                    @error('firstnameEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>           
                <div class="form-group col-4">
                    <label class="col-form-label">Father Name:</span></label>
                    <input type="text" class="form-control" name="fathernameEn" value="{{$candidatesdetails->fathernameEn}}" placeholder="father name">
                    @error('fathernameEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label class="col-form-label">Relatives Type:</label>
                    <select  name="relativeTypeID" class="form-control form-control-select2" aria-placeholder="select relative type">
                        <option value="" disabled="disabled" selected="جنسیت">Select relative type</option>
                        @foreach($relativetype as $rel)
                                <option {{ isset($rel->id) 
                                && $rel->id == $candidatesdetails->relativeTypeID ? 'selected="selected"':'' }} 
                                value="{{$rel->id}}">{{$rel->nameEn}}
                                </option>      
                        @endforeach
                  </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-3">
                    <label class="col-form-label">نام:</span></label>
                    <input type="text" class="form-control" name="firstname"placeholder="نام"value="{{$candidatesdetails->firstname}}">
                    @error('firstname')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>     
                <div class="form-group col-3">
                    <label class="col-form-label">نام پدر:</span></label>
                    <input type="text" class="form-control" name="fathername" placeholder="نام پدر"value="{{$candidatesdetails->fathername}}">
                    @error('firstnameEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>  
                <div class="form-group col-2">
                    <label class="col-form-label">شماره ثبت:</span></label>
                    <input type="number" class="form-control" name="IdentityNo" placeholder="نمبر تذکره"value="{{$candidatesdetails->IdentityNo}}">
                    @error('IdentityNo')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">شماره صفحه:</span></label>
                    <input type="number" class="form-control" name="pageNo" placeholder="شماره صفحه" value="{{$candidatesdetails->pageNo}}">
                    @error('pageNo')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">شماره جلد:</span></label>
                    <input type="number" class="form-control" name="juldNo" placeholder="شماره جلد"  value="{{$candidatesdetails->juldNo}}">
                    @error('juldNo')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
            </div>
            <hr/>
                    <p>Identity Details </p>
            <div class="row">
                <div class="form-group col-2">
                    <label class="col-form-label">Out side Country Birth:</label>
                    <select name="birthinforgn" class="form-control form-control-select2">
                        <option></option>
                            <option value="1" {{ $candidatesdetails->birthinforgn==1 ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{ $candidatesdetails->birthinforgn==0 ? 'selected' : ''}}>No</option>>
                        
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">No Having Identity Card:</label>
                    <select name="nothavingID" class="form-control form-control-select2">
                        <option></option>
                            <option value="1" {{ $candidatesdetails->nothavingID==1 ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{ $candidatesdetails->nothavingID==0 ? 'selected' : ''}}>No</option>>
                        
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">Lost Identity Card:</label>
                    <select name="lostID" class="form-control form-control-select2">
                        <option></option>
                            <option value="1" {{ $candidatesdetails->lostID==1 ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{ $candidatesdetails->lostID==0 ? 'selected' : ''}}>No</option>>
                        
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">Burnt Identity Card:</label>
                    <select name="burntID" class="form-control form-control-select2">
                        <option></option>
                            <option value="1" {{ $candidatesdetails->burntID==1 ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{ $candidatesdetails->burntID==0 ? 'selected' : ''}}>No</option>>
                       
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label"> Dirver Liscens:</label>
                    <select name="dirverliscens" class="form-control form-control-select2">
                        <option></option>
                            <option value="1" {{ $candidatesdetails->dirverliscens==1 ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{ $candidatesdetails->dirverliscens==0 ? 'selected' : ''}}>No</option>>
                       
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label"> Passport/Temporary Permit</label>
                    <select name="currentID" class="form-control form-control-select2">
                        <option value="" disabled="disabled" selected="جنسیت">Select ID Type</option>
                        @foreach($currentIDList as $curr)
                                <option {{ isset($curr->id) 
                                && $curr->id == $candidatesdetails->currentID ? 'selected="selected"':'' }} 
                                value="{{$curr->id}}">{{$curr->nameEn}}
                                </option>      
                        @endforeach
                  </select>
                </div>
            </div>
         </div>
            </div>
            <div class="d-flex justify-content-start align-items-center ">
                <a href="/updatepro/{{$candidatesdetails->profileID}}" type="button" class="btn bg-warning ml-3"> Back <i class="icon-backward "></i></a>
                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                <a href="/profilelists" type="button" class="btn bg-green ml-3"> Search <i class="icon-search4 ml-2"></i></a>
            </div>
            <div class="d-flex justify-content-end align-item-right" style="margin-top:-2.5rem">
            <input type="button" class="btn btn-danger"onclick="newFunction()" value="Reset">
            </div>
        </div>
    </div>
     </form>
            </div>
        </div>
    </div>
</div>

<script>
    function newFunction() {
        document.getElementById("reset").reset();
    }


    $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
@endsection