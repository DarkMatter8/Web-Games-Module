$(document).ready(function(){
    $('#login-btn').removeAttr('disabled');
    //Login     
    $("#loginForm").submit(function (e) {
        $('#login-btn').html('<i class="fa fa-circle-o-notch fa-spin"></i> Logging in...');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var FORM_DATA = {
            email: $('#email').val(),
            password: $('#password').val(),
        }
        var POST_URL = "/ServiceLogin";
        $.ajax({
            type: "POST",
            url: POST_URL,
            data: FORM_DATA,
            dataType: 'json',
            success: function (response) {
                data = jQuery.parseJSON(JSON.stringify(response));
                if(data.status == 'fail') {
                    $('#login-btn').html('Login');
                    $("#error").text(data.message);
                    $("#error").show();
                }
                else if(data.status == 'success') {
                    $('#login-btn').attr('disabled', 'true');
                    setTimeout(function(){ 
                        window.location.href = '/'+data.message+'/home';
                    }, 1000);
                }
                else {
                    $('#login-btn').html('LOGIN');
                    $("#error").text("Something went Wrong !");
                    $("#error").show();
                }
            },
            error: function (data) {
                $('#login-btn').html('LOGIN');
                $("#error").text("Something went Wrong !");
                $("#error").show();
            }
        });
    });
});