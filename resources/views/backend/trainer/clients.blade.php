@extends('backend.layouts.app')

@section('title')
Trainer's Dashboard
@endsection

@section('page_name')
Clients List
@stop

@section('content')
<!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Plan Duration</th>
                        <th>Days Remaining</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Plan Duration</th>
                        <th>Days Remaining</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($myClients as $key => $value)
                    @php
                       $plan_created = $value->created_at;
                       $plan_expire = $value->created_at->addMonths($value->duration);
                       $diffdate = \Carbon\Carbon::parse($plan_created)->diffInDays($plan_expire);
                    @endphp
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->duration }} Months</td>
                        <td>{{ $diffdate }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection