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
<body>

<div class="col-md-4 col-md-offset-4 main">

    <div class="panel panel-container input-area">

        <form>
            <div class="col-md-12 margin-top-30">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="col-md-12 margin-top-30">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" id="password">
            </div>

            <button type="submit" class="btn btn-primary margin-top-30">login</button>
        </form>

        <hr>


        <a href="/user-register"><button type="submit" class="btn btn-success margin-top-30 margin-bottom-30">user register</button></a>



    </div>
</div>	<!--/.main-->


{{--<span id="followers-chart-labels" data-name="{{ $output['followers_chart_labels'] }}"></span>--}}

</body>
</html>
