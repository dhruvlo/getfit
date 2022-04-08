@extends('backend.layouts.app')

@section('title')
Admin - Dashboard
@endsection

@section('page_name')
Assign Trainer to User
@stop

@section('content')
<div id="assign_alert"></div>

<div class="card shadow mb-4">
    <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact No</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact No</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $key => $value)
                        <tr>
                            <td>{{ $value['name'] }}</td>
                            <td>{{ $value['email'] }}</td>
                            <td>{{ $value['phone'] }}</td>
                            <td>
                                <form class="assign_trainer_to_user">
                                    @csrf
                                    <input type="hidden" value="{{ $value['id'] }}" name="get_user">
                                    <select name="assign_trainer" id="select_trainer" class="form-control">
                                        <option value="" selected>Select Trainer</option>
                                        @foreach($trainers as $key => $trainer)
                                            @if(\App\Models\UserTrainer::where('user_id', '=', $value['id'])->where('trainer_id' ,'=',$trainer['id'])->exists())
                                            <option selected value="{{ $trainer['id']}}">{{ $trainer['name']}}</option>
                                            @else
                                            <option value="{{ $trainer['id']}}">{{ $trainer['name']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
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


@section('script')
<script type="text/javascript">
$( document ).ready(function() {
    $(".assign_trainer_to_user").on("change", function(e){
        e.preventDefault();
        $.ajax({
            url: 'add-assign-trainer',
            type: 'post',
            data: $(this).serialize(),
            success: function(data){
                if(data.success){
                    $("#assign_alert").removeAttr("style");
                    $("#assign_alert").html("<div class='alert alert-success mt-4' role='alert'>Trainer assigned to User Successfully</div>").delay(5000).fadeOut('slow');
                }else{
                    $("#assign_alert").removeAttr("style");
                    $("#assign_alert").html("<div class='alert alert-danger mt-4' role='alert'>Something went wrong</div>").delay(5000).fadeOut('slow');   
                }
            }
        });
    });
});
</script>
@endsection