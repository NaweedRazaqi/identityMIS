

@extends('layout')

@section('content')
<div class="container">
 
    <div class="row col-md-12 justify-content-center mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Basic columns</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>
        
                <div class="card-body">
                    <div class="chart-container">
                        <div class="chart has-fixed-height" id="columns_basic"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection