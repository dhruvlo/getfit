@extends('backend.layouts.app')

@section('title')
Admin - Dashboard
@endsection

@section('page_name')
Plans
@stop

@section('content')
<div>
    <div class="card shadow mb-4 col-md-6">
    <div class="card-body" >
            <div id="plans_alert">

            </div>
            <form action="{{route('add_plan')}}" method="post" id="add_plans">
                @csrf
                    <div class="form-group">
                        <label for="">Plans Duration</label>
                        <input type="text" name="duration" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add New Plan</button>
                    </div>
            </form>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header">All Plans</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Duration</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $key => $value)
                    <tr>
                        <td>{{ $value['duration'] }} Months</td>
                        <td>&#x20B9; {{ $value['price'] }}</td>
                        <td>
                        <form action="{{ route('plan_delete', $value['id'] )}}" method="post">  
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection