<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>files</title>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('/css/styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <script src="{{asset('/js/html5shiv.js')}}"></script>
    <script src="{{asset('/js/respond.min.js')}}"></script>
    <script src="{{asset('/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/chart.min.js')}}"></script>
    <script src="{{asset('/js/chart-data.js')}}"></script>
    <script src="{{asset('/js/easypiechart.js')}}"></script>
    <script src="{{asset('/js/easypiechart-data.js')}}"></script>
    <script src="{{asset('/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('/js/custom.js')}}"></script>

</head>

<script>
    function register()
    {
        document.form-register.submit();
    }

</script>

<body>

<div class="col-md-4 col-md-offset-4 main">

    <div class="panel panel-container input-area">
        <form name="form-register" action="/user-register" method="POST">
            @csrf
            <div class="col-md-6 margin-top-30">
                <label for="sei" class="form-label">姓</label>
                <input type="text" class="form-control" id="sei" name="sei">
            </div>
            <div class="col-md-6 margin-top-30">
                <label for="mei" class="form-label">名</label>
                <input type="text" class="form-control" id="mei" name="mei">
            </div>
            <div class="col-md-12 margin-top-30">
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-12 margin-top-30">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="col-md-12 margin-top-30">
                <label for="password-confirm" class="form-label">password - 確認</label>
                <input type="password" class="form-control" id="password-confirm">
            </div>

            <button class="btn btn-primary margin-top-30 margin-bottom-30" onclick="register()">register</button>
        </form>

    </div>
</div>	<!--/.main-->

</body>
</html>
