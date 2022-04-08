@extends('backend.layouts.app')

@section('title')
User's - Dashboard
@endsection

@section('page_name')
Plans
@stop

@section('content')
@if(!empty($is_plan))
<div class="card shadow mb-4">
    <div class="card-body">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <tbody>
                <tr>
                    <td>Months Durations</td>
                    <td>{{ $purchsed_plan->duration }} Months</td>
                </tr>
                <tr>
                    <td>Amount to Pay</td>
                    <td>&#x20B9; {{ $purchsed_plan->price }}</td>
                    <td><a href="{{ route('user_payment')}}" class="btn btn-sm btn-warning">Pay Now</a></td>
                </tr>
                <tr>
                    @php
                       $plan_created = $purchsed_plan->created_at;
                       $plan_expire = $purchsed_plan->created_at->addMonths($purchsed_plan->duration);
                       $diffdate = \Carbon\Carbon::parse($plan_created)->diffInDays($plan_expire);
                    @endphp
                    <td>Plan Renew's in</td>
                    <td>{{$diffdate}} Days</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@else
<div id="plan_alert">
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Duration</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plans as $key => $value)
                <tr>
                    <td>{{ $value['duration'] }} Months</td>
                    <td>&#x20B9; {{ $value['price'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form id="user_plan">
            @csrf
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label for="">Plan Duration</label>
                    <select name="selected_plan" class="form-control" required>
                        <option value="" selected>Select Month</option>
                        @foreach($plans as $plan)
                        <option value="{{$plan['id']}}">{{ $plan['duration'] }} Months</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="">Add Plan Here</label>
                    <div>
                        <button class="btn btn-primary w-100">Buy this plan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
@endsection


@section('script')
<script type="text/javascript">
$( document ).ready(function() {
    $("#user_plan").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'add-user-plan',
            type: 'post',
            data: $("#user_plan").serialize(),
            success: function(data){
                if(data.success){
                    $('#user_plan')[0].reset();
                    $("#plan_alert").html("<div class='alert alert-success mt-4' role='alert'>Plan Added Successfully</div>").delay(5000).fadeOut('slow');
                }else{
                    $("#plan_alert").html("<div class='alert alert-danger mt-4' role='alert'>Something went wrong</div>").delay(5000).fadeOut('slow');   
                }
            }
        });
    });
});
</script>
@endsection