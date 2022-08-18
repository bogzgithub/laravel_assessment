$(document).ready(function(){

    var tbl_events = $('#tbl_events').DataTable({
        ajax: {
            url: API_URL + "/events",
            method: "GET",
        },
        columns: [
                 { 
                    data: 'name',
                 },
                 { 
                    data: 'slug',
                 },
                 { 
                    data: 'startAt',
                 },
                 { 
                    data: 'endAt',
                 },
                 { 
                    'data': function ( row) {
                        var html = ''; // initialization
                        html += '<div class="d-flex justify-content-center">';
                            html += '<a href="' + BASE_URL +'/events/'+row.id+'" class="btn btn-sm btn-primary">View</a>';
                            html += '&nbsp;';
                            html += '<a href="' + BASE_URL +'/events/'+row.id+'/edit" class="btn btn-sm btn-success">Update</a>';
                            html += '&nbsp;';
                            html += '<button id="btnDelete" type="button" class="btn btn-sm btn-danger">Delete</button>';
                        html += '</div>';

                        return html;
                    },
                    orderable : false,
                 },
        ]
    });

    $("#tbl_events").on("click","button[id='btnDelete']",function(){
        var row = tbl_events.row($(this).parents('tr')).data()
        var message = "Are you sure you want to delete this " + row.name + "?";
        if (confirm(message) == true) {
            $.ajax({
                url: API_URL + "/events/" + row.id,
                type: "delete",
                data: $("#formCreate").serialize() ,
                success: function (response) {
                    var message = "";
                    if (!response.success){
                        message += '<div class="text-danger">' + response.message + '</div>';
                    }
                    else {
                        message += '<div class="text-success">' + response.message + '</div>';

                        // refresh data table
                        tbl_events.ajax.reload();
                    }
                    $("#message").html(message);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            }); 
        }
    });

});