<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @stack('style')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/template/master.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('asset/css/style.css')}}"> -->

</head>

<body>
    <div class="content-home">
        <header class="header">
            <div class="nameApp">
                <h4>Restbook</h4>
            </div>
            <ul class="navbar fw-semibold" type="none">
                <li class="nav-item"><a href="welcome" class="nav-link active">home</a></li>
                <li class="nav-item"><a href="users" class="nav-link active">users</a></li>
                <li class="nav-item"><a href="" class="nav-link active">roles</a></li>
                <li class="nav-item"><a href="/login">
                        <span class="icon">
                            <svg xmlns=" http://www.w3.org/2000/svg" fill="currentColor" width="auto" height="auto" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96C43 32 0 75 0 128V384c0 53 43 96 96 96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32h64zM504.5 273.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32H320v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z" />
                            </svg>
                        </span>
                    </a></li>
            </ul>
        </header>
        @yield('content')
    </div>
</body>

</html>