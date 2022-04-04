@extends('backend.layouts.app')

@section('title')
Admin - Dashboard
@endsection

@section('page_name')
Leads Data
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
                        <th>Type</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($contactList as $key => $value)
                    <tr>
                        <td>{{ $value['name'] }}</td>
                        <td>{{ $value['email'] }}</td>
                        <td>{{ $value['message'] }}</td>    
                        <td>
                        <form action="{{ route('contact_user_delete', $value['id'] )}}" method="post">  
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

@stop