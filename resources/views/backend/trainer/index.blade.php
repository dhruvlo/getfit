@extends('backend.layouts.app')

@section('title')
Trainer's Dashboard
@endsection

@section('page_name')
{{Auth::user()->name}}'s Dashboard
@stop

@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Clients</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalusers}}</div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection