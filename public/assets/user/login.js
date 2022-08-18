$(document).ready(function(){
    $("#btnSubmit").on("click", function(){
        $(this).attr("disabled", true);
        $.ajax({
            url: API_URL + "/user/login",
            type: "post",
            data: $("#formLogin").serialize() ,
            success: function (response) {
                var message = "";
                if (response.success){
                    message += '<div class="text-success">' + response.message + '</div>';
                    $("#formLogin").trigger("reset");

                    // this is temporary we will save to the local storage
                    localStorage.setItem("api_token", response.api_token);

                    // will redirec to home events list
                    window.location.href = BASE_URL + "/events";
                }
                // $("#message").html(message);
                $("#btnSubmit").removeAttr("disabled");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                var message = '<div class="text-danger">Error in Log in, Please try again!</div>';
                $("#message").html(message);
                $("#btnSubmit").removeAttr("disabled");
                console.log(textStatus, errorThrown);
            }
        });
    });
});