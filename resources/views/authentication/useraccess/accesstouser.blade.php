

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
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form method="post"  action="{{url('/accesstouser')}}">
                    @csrf
                    <div class="form-group">
                        <select class="form-control form-control-lg select" data-container-css-class="select-lg"
                        name="user_id" required>
                            <option></option>
                            <optgroup label="User List" >
                            @foreach($users as $user){
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            }
                        

                        @endforeach
                    </optgroup>
                </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control form-control-lg select" data-container-css-class="select-lg"
                        name="access_id" required>
                            <option></option>
                            <optgroup label="Access Types" >
                            @foreach($accessType as $item){
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            }
                            @endforeach
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
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">User List</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="reload"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Access Level</th>
                </tr>
            </thead>
            @foreach ($userslist  as $uslist) {
                <tbody> 
                <tr>
            <tbody>
                <tr class="table-success">
                    <td>{{$uslist->usname}}</td>
                    <td>{{$uslist->usemail}}</td>
                    <td>{{$uslist->access_name}}</td>
                </tr>
                
            </tbody>
        }
        @endforeach
        </table>
    </div>
</div>
<!-- /contextual classes -->


    </div>
    </div>
@endsection