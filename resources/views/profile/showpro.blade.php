
@extends('layout')

@section('content')
<div class="row col-md-12 justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="card-title just-centent-center">Register Candidate Details</h3>
            </div>
            <div class="card-body">
        <form method="POST" action="/showpro" id="reset">
            @csrf

            <div class="form-group row">
            <div class="col-lg-12">
                <div class="row">       
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">First Name:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control"name="firstnameEn" placeholder="Enter first name" required>
                        @error('firstnameEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                
                <div class="form-group col-6">
                    <label class="col-form-label col-lg-3">Last Name:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"name="lastnameEn" placeholder="Enter last name"required>
                    @error('lastnameEn')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
            </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">Father Name:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control"name="fathernameEn" placeholder="Enter father name" required>
                        @error('fathernameEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">Grand Fathername:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="grandfathernameEn" placeholder="Enter grand father name" required>
                        @error('grandfathernameEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">نام:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="firstname"placeholder="نام را بنوسید " required="this is required">
                        @error('firstname')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">تخلص:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control"name="lastname" placeholder="تخلص را بنوسید "required>
                        @error('lastname')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">نام پدر:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control"name="fathername" placeholder="نام پدر را بنوسید "required>
                        @error('fathername')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                        <div class="form-group col-6">
                            <label class="col-form-label col-lg-3">نام پدر کلان:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control"name="grandfathername" placeholder="نام پدر کلان را بنوسید "required>
                            @error('grandfathername')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="">تاریخ تولد:</label>
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-calendar22"></i></span>
                            </span>
                            <input type="text" name="dateofbirth"class="form-control daterange-single" value="03/18/2000">
                        </div>
                        @error('dateofbirth')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label>محل تولد:</label>
                        <select name="placeofbirthID"  class="form-control form-control-select2" id="provinceChange" required>
                            @foreach($provincelist as $item){
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row" id="outside" style="display: none !important">
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">Born out side:</label>
                        <input type="text" class="form-control"name="bornoutsideEn" placeholder="Enter where you born">
                        @error('bornoutsideEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">تولد خارج از کشور</label>
                        <input type="text" class="form-control"name="born_outside" placeholder="محل تولد را درج نمایید">
                        @error('born_outside')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label>حالت مدنی:</label>
                    <select name="martialstatusID" class="form-control form-control-select2" required>
                        @foreach($maritalstatuslist as $item){
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        }
                        @endforeach
                    
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>جنسیت:</label>
                    <select name="genderID"  class="form-control form-control-select2"required>
                        @foreach($genderlist as $item){
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        }
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="">قد:</label>
                        <input type="text" class="form-control"name="hight" placeholder="اندازه قد را بنوسید ">
                        @error('hight')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                
                <div class="form-group col-6">
                    <label for="">رنگ چشم:</label>
                    <input type="text" class="form-control"name="eyecolor" placeholder=" رنگ جشم را بنوسید  ">
                    @error('eyecolor')
                    <p class="alert alert-danger mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-4">
                        <label for="">رنگ پوست:</label>
                        <input type="text" class="form-control"name="skincolor"placeholder=" رنگ پوست را بنوسید  ">
                        @error('skincolor')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="">رنگ موی:</label>
                        <input type="text" class="form-control"name="hiarcolor"placeholder=" رنگ موی را بنوسید  ">
                        @error('hiarcolor')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                     <div class="form-group col-4">
                        <label for="">سایر علایم:</label>
                        <input type="text" class="form-control"name="otherIdent"placeholder=" درصورت علایم دیگر آنرا درج نمایید  ">
                        @error('otherIdent')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-3">
                        <label for="">Eye Color:</label>
                        <input type="text" class="form-control"name="eyecolorEn" placeholder="Enter eye color">
                        @error('eyecolorEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Skin Color: </label>
                        <input type="text" class="form-control"name="skincolorEn" placeholder="Enter skin color">
                        @error('skincolorEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Hair Color: </label>
                        <input type="text" class="form-control"name="haircolorEn" placeholder="Enter hair color">
                        @error('haircolorEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group col-3">
                        <label for="">Other Signs:</label>
                        <input type="text" class="form-control"name="otherIdentEn" placeholder="Enter if any">
                        @error('otherIdentEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                </div>
                
            </div>
            <div class="d-flex justify-content-start align-items-center ">
                <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                <a href="/profilelists" type="button" class="btn bg-green ml-3">جستجو متقاضی <i class="icon-search4 ml-2"></i></a>
            </div>
            <div class="d-flex justify-content-end align-item-right" style="margin-top:-2.5rem">
            <input type="button" class="btn btn-danger"onclick="newFunction()" value="Reset">
            </div>
        </div>
        </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function newFunction() {
            document.getElementById("reset").reset();
        }

   
      $('#provinceChange').on('change', function(){
      
    	
         if ( this.value == '32'){
            debugger;
            $("#outside").show();
         }
         else{
            $("#outside").hide();
         }

        
        
       });
  
    </script>
@endsection