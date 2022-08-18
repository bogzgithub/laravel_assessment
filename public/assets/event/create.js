$(document).ready(function(){
    $("#btnSubmit").on("click", function(){
        $.ajax({
            url: API_URL + "/events",
            type: "post",
            data: $("#formCreate").serialize() ,
            success: function (response) {
                var message = "";
                if (!response.success){
                    $.each(response.errors, function(i, item){
                        message += '<div class="text-danger">' + item[0] + '</div>';
                    });
                }
                else {
                    message += '<div class="text-success">' + response.message + '</div>';
                    $("#formCreate").trigger("reset");
                }
                $("#message").html(message);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});