<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Cursos</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/signin.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    {{ Form::open(['route' => 'login_admin', 'method' => 'post', 'role' => 'form', 'novalidate', 'class' => 'form-signin']) }}
        <h2 class="form-signin-heading">Ingreso</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'inputEmail']) }}
        <label for="inputPassword" class="sr-only">Password</label>
        {{ Form::password('password', ['class' => 'form-control', 'id' => 'inputPassword']) }}
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Recordar
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    {{ Form::close() }}

</div>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
