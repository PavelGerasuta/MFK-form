$( document ).ready(function() {
    $("#btn_auth").click(
        function(){
            sendAjaxAuth('ajax_form', 'vendor/signin.php');
            return false;
        }
    );
    $("#btn_reg").click(
        function(){
            sendAjaxReg('ajax_form_reg', 'vendor/signup.php');
            return false;
        }
    );
});

function sendAjaxAuth(ajax_form, url) {
    $.ajax({
        url:     url,
        type:     "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
    });
}



function sendAjaxReg(ajax_form_reg, url) {
    $.ajax({
        url:     url,
        type:     "POST",
        dataType: "html",
        data: $("#"+ajax_form_reg).serialize(),  // Сеарилизуем объект
    });
}