$(document).ready(function(){
    $("#btnSubmit").on("click", function(){
        $(this).attr("disabled", true);
        $.ajax({
            url: API_URL + "/events/" + id,
            type: "put",
            data: $("#formEdit").serialize() ,
            success: function (response) {
                var message = "";
                if (!response.success){
                    $.each(response.errors, function(i, item){
                        message += '<div class="text-danger">' + item[0] + '</div>';
                    });
                }
                else {
                    message += '<div class="text-success">' + response.message + '</div>';
                }
                $("#message").html(message);
                $("#btnSubmit").removeAttr("disabled");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});