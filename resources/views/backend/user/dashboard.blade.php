@extends('backend.layouts.app')

@section('title')
User's - Dashboard
@endsection

@section('page_name')
{{Auth::user()->name}}'s Dashboard
@stop

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="text-danger text-uppercase text-center">
            You have not selected any plans yet!!!
        </div>
        
    </div>
</div>
@endsection