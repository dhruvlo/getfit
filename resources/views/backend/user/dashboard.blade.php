@extends('backend.layouts.app')

@section('title')
User's - Dashboard
@endsection

@section('page_name')
{{Auth::user()->name}}'s Dashboard
@stop

@section('content')

@if (empty($is_plan))
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="text-danger text-uppercase text-center">
        You have not selected any plans yet!!!
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{ route('user_payment')}}">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Amount to Pay</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">&#x20B9; {{$purchsed_plan->price}}</div>
                        </div>
                    </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Status</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            @if($purchsed_plan->status == 1)
                            Active
                            @else
                            Non-Active
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endif

@endsection


