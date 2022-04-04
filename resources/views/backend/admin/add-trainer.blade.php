@extends('backend.layouts.app')

@section('title')
Admin - Dashboard
@endsection

@section('page_name')
Add Trainer
@stop

@section('content')
<div class="card shadow mb-4 col-md-6 col-12 m-auto">
    <div class="card-body">
    <form method="POST" action="{{ route('add_trainer_post')}}" id="add_trainer">
          @csrf
          <div class="form-group">
              <input type="text" name="type" value="trainer" class="form-control" readonly>
          </div>
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="number" name="phone" class="form-control" placeholder="Phone" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary w-100">Add</button>
          </div>
        </form>
        <div id="trainer_alert">
				</div>
    </div>
</div>
@endsection
