$(document).ready(function(){
    $("#add_trainer").submit(function(e) {
        e.preventDefault();
        var actionurl = e.currentTarget.action;
        $.ajax({
            url: actionurl,
            type: 'post',
            data: $("#add_trainer").serialize(),
            success: function(data){
                if(data.success){
                    $('#add_trainer')[0].reset();
                    $("#trainer_alert").html("<div class='alert alert-success mt-4' role='alert'>Trainer Added Successfully</div>").delay(5000).fadeOut('slow');
                }
            }
        });
    });


    // $("#add_plans").submit(function(e) {
    //     e.preventDefault();
    //     var actionurl = e.currentTarget.action;
    //     $.ajax({
    //         url: actionurl,
    //         type: 'post',
    //         data: $("#add_plans").serialize(),
    //         success: function(data){
    //             if(data.success){
    //                 $('#add_plans')[0].reset();
    //                 $("#plans_alert").html("<div class='alert alert-success mt-4' role='alert'>Plan Added Successfully</div>").delay(5000).fadeOut('slow');
    //                 var table = $("#dataTable").DataTable() ;
    //                 table.ajax.reload(null, false );
    //             }
    //         }
    //     });
    // });
});