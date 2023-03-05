

@extends('layout')

@section('content')
<div class="row col-md-12 justify-content-center mt-5">
    <div class="col-md-10">

        <!-- Right aligned buttons -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="card-title just-centent-center">Grant Access</h3>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="reload"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @if(!isset($users->id))
               <form action="{{url('accesstouser/'.$users->id) }}" method="POST" >
               @else
            <form action="{{url('accesstouser/'.$users->id) }}" method="POST">
                @endif
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" class="form-control" value="{{$users->name}}" name="name" placeholder="Enter User Name">
                            @error('name')
                            <p class="alert alert-danger mt-1">
                                {{$message}}
                            </p>
                            @enderror
                        </div>

                    <div class="form-group">
                        <select class="form-control form-control-lg select" data-container-css-class="select-lg"
                        name="role" required>
                            <option></option>
                            <optgroup label="select access" >
                                <option value="1" {{ $users->role==1 ? 'selected' : ''}}>Admin</option>
                                <option value="2" {{ $users->role==2 ? 'selected' : ''}}>User</option>>
                            </optgroup>
                        </optgroup>
                        </select>
                    </div>

                    <div class="d-flex justify-content-start align-items-center">
                        <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                        <a href="/searchusers" type="button" class="btn bg-green ml-3">Search Users <i class="icon-search4 ml-2"></i></a>
                    </div>
                 
                </form>
            </div>
        </div>
        <!-- /right aligned buttons -->

<!-- Contextual classes -->

<!-- /contextual classes -->


    </div>
    </div>
@endsection