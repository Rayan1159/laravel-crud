<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form>
                <div class="form-input">
                    <input type="text" id="username" name="username" placeholder="Your username">
                </div>
                <div class="form-input">
                    <input type="password" id="password" name="password" placeholder="Your password">
                </div>
                <div class="form-button">
                    <button type="button" id="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="{{asset('jquery.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#submit').click(function() {
            let username = $('#username').val();
            let password = $('#password').val();

            if (username && password) {
                $.ajax('/crud/store', {
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        username: username,
                        password: password,
                        _token: "{{csrf_token()}}",
                    }
                }).then(data => {
                    console.log(data);
                }).catch(err => {
                    console.log(err);
                })
            } else {
                alert("fill out the form");
            }
        }) 
    })
</script>
</html>