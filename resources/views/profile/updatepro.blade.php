@extends('layout')

@section('content')
<div class="row col-md-12 justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="card-title just-centent-center">تغیر در جزییات کاندید</h3>
            </div>

            <div class="card-body">
                @if(!isset($candidates->id))
            <form action="{{url('updatepro/'.$candidates->id) }}" method="POST" >
            @else
             <form action="{{url('updatepro/'.$candidates->id) }}" method="POST">
            @endif
                {{ csrf_field() }} 
                    @method('PUT')
            <div class="form-group row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">نام:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="{{$candidates->firstname}}" name="firstname" required="this is required">
                        @error('firstname')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                                    
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3">First Name:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="{{$candidates->firstnameEn}}"name="firstnameEn" required>
                        @error('firstnameEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3"><label for="">تخلص:</label>
                        <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="{{$candidates->lastname}}" name="lastname" required>
                        @error('lastname')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3"><label for="">Last Name:</label>
                        <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="{{$candidates->lastnameEn}}"name="lastnameEn" required>
                        @error('lastnameEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3"><label for="">نام پدر:</label>
                        <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="{{$candidates->fathername}}" name="fathername" required>
                        @error('fathername')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3"><label for="">Father Name:</label>
                        <span class="text-danger">*</span></label>
                        <input type="text" class="form-control"value="{{$candidates->fathernameEn}}" name="fathernameEn" required>
                        @error('fathernameEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3"><label for="">نام پدر کلان:</label>
                        <span class="text-danger">*</span></label>
                        <input type="text" class="form-control"name="grandfathername"value="{{$candidates->grandfathername}}" required>
                        @error('grandfathername')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="form-group col-6">
                        <label class="col-form-label col-lg-3"><label for="">Grand Father Name:</label>
                        <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="grandfathernameEn"value="{{$candidates->grandfathernameEn}}" required>
                        @error('grandfathernameEn')
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
                            <input type="text" name="dateofbirth"class="form-control daterange-single"value="{{$candidates->dateofbirth}}" value="03/18/2000">
                        </div>
                        @error('dateofbirth')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">قد:</label>
                        <input type="text" class="form-control"value="{{$candidates->hight}}"name="hight">
                        @error('hight')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>محل تولد:</label>
                        <select name="placeofbirthID"  class="form-control form-control-select2" required>
                            @foreach($provincelist as $item){
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Place of Birth:</label>
                        <select name="placeofbirthIDEn" class="form-control form-control-select2" required>
                            @foreach($provincelist as $item){
                                <option value="{{$item->id}}">{{$item->nameEn}}</option>
                            }
                            @endforeach
                            
                        </select>
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
                        <label>Marital Status:</label>
                        <select name="maritalstatusIDEn"  class="form-control form-control-select2" required>
                            @foreach($maritalstatuslist as $item){
                                <option value="{{$item->id}}">{{$item->nameEn}}</option>
                            }
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>جنسیت:</label>
                        <select name="genderID"  class="form-control form-control-select2"required>
                            @foreach($genderlist as $item){
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Gender:</label>
                        <select name="genderIDEn" class="form-control form-control-select2" required>
                            @foreach($genderlist as $item){
                                <option value="{{$item->id}}">{{$item->nameEn}}</option>
                            }
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="">رنگ چشم:</label>
                        <input type="text" class="form-control"name="eyecolor"value="{{$candidates->eyecolor}}">
                        @error('eyecolor')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="">Eye Color:</label>
                        <input type="text" class="form-control"name="eyecolorEn"value="{{$candidates->eyecolorEn}}">
                        @error('eyecolorEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="">رنگ پوست:</label>
                        <input type="text" class="form-control"name="skincolor"value="{{$candidates->skincolor}}">
                        @error('skincolor')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="">Skin Color: </label>
                        <input type="text" class="form-control"name="skincolorEn"value="{{$candidates->skincolorEn}}">
                        @error('skincolorEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="">سایر علایم:</label>
                        <input type="text" class="form-control"name="otherIdent"value="{{$candidates->otherIdent}}">
                        @error('otherIdent')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="">Other Signs:</label>
                        <input type="text" class="form-control"name="otherIdentEn"value="{{$candidates->otherIdentEn}}">
                        @error('otherIdentEn')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>دلیل نداشتن سند:</label>
                        <select name="reasonfornoID" class="form-control form-control-select2">
                            @foreach($reasonfornoidlist as $item){
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Reason For Identity Card:</label>
                        <select name="reasonfornoIDEn" class="form-control form-control-select2">
                            @foreach($reasonfornoidlist as $item){
                                <option value="{{$item->id}}">{{$item->nameEn}}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>سند فعلی:</label>
                        <select name="currentID"class="form-control form-control-select2">
                            @foreach($currentidlist as $item){
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Current Identity Card:</label>
                        <select name="currentIDEn"class="form-control form-control-select2">
                            @foreach($currentidlist as $item){
                                <option value="{{$item->id}}">{{$item->nameEn}}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                </div>
                </div>
                
            </div>
            <div class="d-flex justify-content-start align-items-center ">
                <button type="submit" class="btn bg-blue ml-3">ثبت معلومات <i class="icon-paperplane ml-2"></i></button>
                <a href="/profilelists" type="button" class="btn bg-green ml-3">جستجو کاندید<i class="icon-search4 ml-2"></i></a>
            </div>
            {{-- <div class="d-flex justify-content-end align-item-right" style="margin-top:-2.5rem">
            <input type="button" class="btn btn-danger"onclick="newFunction()" value="Reset">
            </div> --}}
        </div>
        </form>
            </div>
        </div>
    </div>

    {{-- <script>
        function newFunction() {
            document.getElementById("reset").reset();
        }
    </script> --}}
@endsection