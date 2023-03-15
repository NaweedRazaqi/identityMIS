


<form action="{{url('relativesmodal/'.$can->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }} 
<div id="relatives_modal{{ $can->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Candidate Relatives</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h6 class="font-weight-semibold"></h6>
                <div class="col-md-12">
                    <input type="hidden" name="profileid" value="{{ $can->id }}"> 
                        <div class="row">
                            <div class="form-group col-4">
                                <label class="col-form-label">First Name:</span></label>
                                <input type="text" class="form-control" name="firstnameEn"placeholder="first name" required="this is required">
                                @error('firstnameEn')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>           
                            <div class="form-group col-4">
                                <label class="col-form-label">Father Name:</span></label>
                                <input type="text" class="form-control" name="fathernameEn" placeholder=" father name"required>
                                @error('fathernameEn')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-4 mt-2">
                                <label> Relatives Type:</label>
                                <select name="relativeTypeID" class="form-control form-control-select2">
                                   @foreach($relativesType as $rel)
                                   <option value="{{$rel->id}}">{{$rel->nameEn}}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                <label class="col-form-label">نام:</span></label>
                                <input type="text" class="form-control" name="firstname"placeholder=" نام" required="this is required">
                                @error('firstname')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>     
                            <div class="form-group col-4">
                                <label class="col-form-label">نام پدر:</span></label>
                                <input type="text" class="form-control" name="fathername" placeholder="نام پدر"required="this is required">
                                @error('firstnameEn')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>  
                            <div class="form-group col-4">
                                <label class="col-form-label">نمبر تذکره:</span></label>
                                <input type="text" class="form-control" name="IdentityNo" placeholder="نمبر تذکره" required>
                                @error('IdentityNo')
                                <p class="alert alert-danger mt-1">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                        </div>
                       <div class="row">  
                        <div class="form-group col-4">
                            <label class="col-form-label">شماره صفحه:</span></label>
                            <input type="text" class="form-control" name="pageNo" placeholder="شماره صفحه" required>
                            @error('pageNo')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label class="col-form-label">شماره جلد:</span></label>
                            <input type="text" class="form-control" name="juldNo" placeholder="شماره جلد" required>
                            @error('juldNo')
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
         
        </div>
    </div>
</div>
</form>