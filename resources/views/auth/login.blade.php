<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="login">
        <form action="authLogin" method="post" class="login-form">
            @csrf
            <div class="textLogin">
                <h1>login</h1>
                <h5>welcome back!</h5>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="email...">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="password...">
            </div>
            <div class="help">
                <h6 class="fw-light">Don't have account? <span class="fw-semibold">
                        <a href="register" style="text-decoration:none;">register now</a>
                    </span></h6>
            </div>
            <div class="submit align-items-center">
                <button class="fw-bold text-white btn" role="button" style="background-color:#f0c51d;">Submit</button>
            </div>
        </form>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>