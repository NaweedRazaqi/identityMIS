
@extends('layout')

@section('content')
<div class="row col-md-12 justify-content-center mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="card-title just-centent-center">Candidate Details</h3>
            </div>
            <div class="card-body">
     <form action="{{url('candidateDetails/'.$candidates->id) }}"  method="POST" enctype="multipart/form-data" id="reset">
    {{ csrf_field() }} 
    <div class="form-group row">
        <div class="col-lg-12">
            <div class="row">  
                <div class="form-group col-3">
                    <label class="col-form-label">Provinces:</label>
                    <select name="provinceID" class="form-control form-control-select2">
                       @foreach($provincelist as $pro)
                       <option value="{{$pro->id}}">{{$pro->nameEn}}</option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group col-3">
                    <label class="col-form-label">District:</label>
                    <input type="text" class="form-control" name="districtEn" placeholder="Enter district name">
                    @error('villageEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">Village:</label>
                    <input type="text" class="form-control" name="villageEn" placeholder="Enter village name">
                    @error('villageEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label"> ولسوالی:</label>
                    <input type="text" class="form-control" name="district" placeholder="ولسوالی را درج نمایید">
                    @error('district')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label"> قریه:</label>
                    <input type="text" class="form-control" name="village" placeholder="قریه را درج نمایید">
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
                       @foreach($countrylist as $cou)
                       <option value="{{$cou->id}}">{{$cou->nameEn}}</option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group col-3">
                    <label class="col-form-label">Immigrating Date:</label>
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
                <div class="form-group col-2">
                    <label class="col-form-label">City:</label>
                    <input type="text" class="form-control" name="city" placeholder="Enter city name">
                    @error('district')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">Street No:</label>
                    <input type="number" class="form-control" name="streetNo" placeholder="Enter street no">
                    @error('district')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label"> House No:</label>
                    <input type="number" class="form-control" name="houseNo" placeholder="Enter house no">
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
                <input type="text" class="form-control" name="jobinAfgEn" required="this is required" placeholder="Enter job title in afghanistan">
                @error('jobinAfgEn')
                <p class="alert alert-danger mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="form-group col-3">
                <label class="col-form-label">Current Job:</label>
                <input type="text" class="form-control" name="jobinforgnEn" required placeholder="Enter current job title">
                @error('jobinforgnEn')
                <p class="alert alert-danger mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="form-group col-2">
                <label class="col-form-label">وظیفه درافغانستان:</label>
                <input type="text" class="form-control" name="jobinAfg" placeholder="وظیفه قبلی در افغانستان">
                @error('jobinAfg')
                <p class="alert alert-danger mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="form-group col-2">
                <label class="col-form-label">وظیفه در خارج:</label>
                <input type="text" class="form-control" name="jobinforgn"placeholder="وظیفه فعلی" >
                @error('jobinforgn')
                <p class="alert alert-danger mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div class="form-group col-2">
                <label class="col-form-label">phone:</label>
                <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
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
                    <input type="text" class="form-control" name="firstnameEn" placeholder="Enter relative name">
                    @error('firstnameEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>           
                <div class="form-group col-4">
                    <label class="col-form-label">Father Name:</span></label>
                    <input type="text" class="form-control" name="fathernameEn" placeholder="Enter ralative father name">
                    @error('fathernameEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label class="col-form-label">Relatives Type:</label>
                    <select name="relativeTypeID" class="form-control form-control-select2" aria-placeholder="Relative Type">
                       @foreach($relativetype as $rel)
                       <option value="{{$rel->id}}">{{$rel->nameEn}}</option>
                       @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-3">
                    <label class="col-form-label">نام:</span></label>
                    <input type="text" class="form-control" name="firstname" required="this is required" placeholder="نام اقارب">
                    @error('firstname')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>     
                <div class="form-group col-3">
                    <label class="col-form-label">نام پدر:</span></label>
                    <input type="text" class="form-control" name="fathername" required="this is required" placeholder="نام پدر اقارب">
                    @error('firstnameEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>  
                <div class="form-group col-2">
                    <label class="col-form-label">نمبر تذکره:</span></label>
                    <input type="number" class="form-control" name="IdentityNo" placeholder="نمبر تذکره" required>
                    @error('IdentityNo')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">شماره صفحه:</span></label>
                    <input type="number" class="form-control" name="pageNo" placeholder="شماره صفحه" required>
                    @error('pageNo')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">شماره جلد:</span></label>
                    <input type="number" class="form-control" name="juldNo" placeholder="شماره جلد" required>
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
                      <option value="1">ِYes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">No Having Identity Card:</label>
                    <select name="nothavingID" class="form-control form-control-select2">
                      <option value="1">ِYes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">Lost Identity Card:</label>
                    <select name="lostID" class="form-control form-control-select2">
                      <option value="1">ِYes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label">Burnt Identity Card:</label>
                    <select name="burntID" class="form-control form-control-select2">
                      <option value="1">ِYes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label"> Dirver Liscens:</label>
                    <select name="dirverliscens" class="form-control form-control-select2">
                      <option value="1">ِYes</option>
                      <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label class="col-form-label"> Passport/Temporary Permit</label>
                    <select name="currentID" class="form-control form-control-select2">
                       @foreach($currentIDList as $curr)
                       <option value="{{$curr->id}}">{{$curr->nameEn}}</option>
                       @endforeach
                    </select>
                </div>
            </div>
         </div>
            </div>
            <div class="d-flex justify-content-start align-items-center ">
                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                <a href="/profilelists" type="button" class="btn bg-green ml-3"> Search Candidate <i class="icon-search4 ml-2"></i></a>
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
</script>
@endsection