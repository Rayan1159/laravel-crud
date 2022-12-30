<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("app.css")}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body class="flex flex-col min-h-screen bg-gradient-to-b from-yellow-700 to-yellow-400">
    <div class="text-white m-auto rounded-3xl bg-yellow-800 w-5/12">
        <div class="flex gap-3 flex-col text-center pb-[12%] pt-[12%]">
            <div>
                <input type="text" id="username" placeholder="Your username" class="placeholder:text=gray text-black text-center border border-gray rounded-3xl">
            </div>
            <div>
                <input type="password" id="password" placeholder="Your password" class="placeholder:text=gray text-black text-center border border-gray rounded-3xl">
            </div>
            <div>
                <button type="button" id="submit" class="rounded-3xl text-black bg-yellow-200 text-center w-7/12">Login</button>
            </div>
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
