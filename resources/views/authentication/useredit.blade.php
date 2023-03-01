
@extends('layout')

@section('content')
<div class="row col-md-12 justify-content-center mt-5">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="card-title just-centent-center">Edit User</h3>
            </div>

            <div class="card-body">
                @if(!isset($users->id))
            <form action="{{url('useredit/'.$users->id) }}" method="POST" >
            @else
             <form action="{{url('useredit/'.$users->id) }}" method="POST">
            @endif
                {{ csrf_field() }} 
                    @method('PUT')
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
                        <label for="">Email</label>
                         <input type="email" class="form-control" value="{{$users->email}}" name="email" placeholder="Enter Email">
                         @error('email')
                         <p class="alert alert-danger mt-1">
                             {{$message}}
                         </p>
                         @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                         <input type="password" class="form-control" value="{{$users->password}}" name="password" placeholder="Enter Password">
                         @error('password')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <input type="hidden" name="id" value="{{ $users->id }}"> 
                    <div class="d-flex justify-content-start align-items-center">
                        <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                        <a href="/searchusers" type="button" class="btn bg-green ml-3">Search Users <i class="icon-search4 ml-2"></i></a>
                    </div>
                 
                </form>
            </div>
        </div>
    </div>
</div>
@endsection