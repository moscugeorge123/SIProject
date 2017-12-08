$(document).ready(function () {
    var interval;
    var checkSession = function() {
        $.ajax({
            method: 'get',
            url: 'verify.php',
            success: function(data) {
                // console.log(data);
                if(!JSON.parse(data).logged) {
                    clearInterval(interval);
                    $('.ui.modal').modal('setting', 'closable', false).modal('show');
                }
                // console.log(JSON.parse(data).logged);
            }
        })
    }
    interval = setInterval(checkSession, 1000);

    setTimeout(function() {
        // document.cookie = 'PHPSESSID' + '=';
        // $(document).on('click', '#login', function(){
        //     $.ajax({
        //         method: 'POST',
        //         url: 'http://localhost:3000',
        //         data: {
        //             username: $('#username').val(),
        //             password: $('#password').val()
        //         },
        //         success: function(data) {
        //             console.log({
        //                 username: $('#username').val(),
        //                 password: $('#password').val()
        //             });
        //         }
        //     })
        // })
    }, 3000);
})