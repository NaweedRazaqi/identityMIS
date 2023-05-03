
@extends('layout')

@section('content')

<div class="container">
    <div class="row col-md-12 justify-content-center mt-5">
    <div class="col-md-10">

        <!-- Right aligned buttons -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h3 class="card-title just-centent-center">User Registeration</h3>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form method="POST" action="/users">
                    <input type="hidden" value="2">
                    @csrf
                    <div class="form-group">
                        <label for="">UserName</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter User Name">
                        @error('name')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                         <input type="email" class="form-control" name="email" placeholder="Enter Email">
                         @error('email')
                         <p class="alert alert-danger mt-1">
                             {{$message}}
                         </p>
                         @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter Password">
                         @error('password')
                        <p class="alert alert-danger mt-1">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                         <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password">
                         @error('confirm_password')
                         <p class="alert alert-danger mt-1">
                             {{$message}}
                         </p>
                         @enderror
                    </div>

                    <div class="d-flex justify-content-start align-items-center">
                        <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                        <a href="/searchusers" type="button" class="btn bg-green ml-3">Search Users <i class="icon-search4 ml-2"></i></a>
                    </div>
                 
                </form>
            </div>
        </div>
        <!-- /right aligned buttons -->



    </div>
    </div>
</div>
@endsection