
<form action="{{url('identitydetails/'.$can->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }} 
<div id="identity_details{{ $can->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Candidate Identity Details</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h6 class="font-weight-semibold"></h6>
                <div class="col-md-12">
                    <hr/>
                    <p style="padding-bottom: 15px !important;">Reasons for not having identity card</p>
                   
                    <input type="hidden" name="profileid" value="{{ $can->id }}"> 
                        <div class="row">
                            <div class="form-group col-3">
                                <label> Out side Country Birth:</label>
                                <select name="birthinforgn" class="form-control form-control-select2">
                                  <option value="1">ِYes</option>
                                  <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>No Having Identity Card:</label>
                                <select name="nothavingID" class="form-control form-control-select2">
                                  <option value="1">ِYes</option>
                                  <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label> Lost Identity Card:</label>
                                <select name="lostID" class="form-control form-control-select2">
                                  <option value="1">ِYes</option>
                                  <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label> Burnt Identity Card:</label>
                                <select name="burntID" class="form-control form-control-select2">
                                  <option value="1">ِYes</option>
                                  <option value="0">No</option>
                                </select>
                            </div>
                           
                          
                        </div>
                        <hr/>
                    <p>Current Identity Card</p>
                     <div class="row">
                        <div class="form-group col-3">
                            <label> Dirver Liscens:</label>
                            <select name="dirverliscens" class="form-control form-control-select2">
                              <option value="1">ِYes</option>
                              <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label> Passport/Temporary Residence Card:</label>
                            <select name="currentID" class="form-control form-control-select2">
                               @foreach($currentIDList as $curr)
                               <option value="{{$curr->id}}">{{$curr->nameEn}}</option>
                               @endforeach
                            </select>
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