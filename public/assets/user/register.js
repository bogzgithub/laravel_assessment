$(document).ready(function(){
    $("#btnSubmit").on("click", function(){
        $(this).attr("disabled", true);
        $.ajax({
            url: API_URL + "/user/register",
            type: "post",
            data: $("#formRegister").serialize() ,
            success: function (response) {
                var message = "";
                if (response.success){
                    message += '<div class="text-success">' + response.message + '</div>';
                    $("#formRegister").trigger("reset");
                }
                $("#message").html(message);
                $("#btnSubmit").removeAttr("disabled");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                var message = '<div class="text-danger">Theres an error during registerion please check the fields!</div>';
                $("#message").html(message);
                $("#btnSubmit").removeAttr("disabled");
                console.log(textStatus, errorThrown);
            }
        });
    });
});