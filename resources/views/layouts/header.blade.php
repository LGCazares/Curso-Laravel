<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        header {
           background-color: black;
           height: 2em;
        }

        .btn-01 {
            color:white;
            border: none;
            background-color: transparent;
            font-size: 16px;
            font-weight: 300;
            padding: 10px 15px;
            line-height: 25px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <div class="row mt-2 container my-3">
            <div class="ml-auto">
            <a href="https://getbootstrap.com/" target="_blank" class="btn-01">Bootstrap</a>
            <a href="https://laravel.com/" target="_blank" class="btn-01">Laravel</a>
            <a href="https://www.w3schools.com/" target="_blank" class="btn-01">w3schools.com</a>
            </div>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>