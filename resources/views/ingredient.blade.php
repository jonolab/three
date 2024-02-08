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
<nav class="navbar navbar-custom navbar-fixed-top header-color" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand header-logo" href="/dashboard">three cms</a>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-picture">
{{--            <img src="{{ $userAccount['profile_picture_url'] }}" class="img-responsive" alt="">--}}
            <img src="https://source.unsplash.com/random/300x200" class="img-responsive" alt="files">
        </div>
        <div class="clear"></div>
        <div class="profile-title">
{{--            <div class="profile-title-name">{{ $userAccount['name'] }}</div>--}}
            <div class="profile-title-name">ログイン名</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li class="active"><a href="/master/ingredient"><em class="fa fa-home">&nbsp;</em> 食材マスタ</a></li>
{{--        <li><a href="/feeds"><em class="fas fa-rss">&nbsp;</em> Feeds</a></li>--}}
{{--        <li><a href="/stories"><em class="fas fa-mobile-alt">&nbsp;</em> Stories</a></li>--}}
{{--        <li><a href=""><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>--}}
    </ul>

</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li class="active">食材マスタ</li>
        </ol>
    </div>

    <div class="panel panel-container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 main">

                <div class="panel panel-container input-area">
                    <a href="/master/ingredient/register"><button class="btn btn-primary margin-bottom-30">新規登録</button></a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">食材名</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ingredients as $ingredient)
                            <tr>
                                <td>{{ $ingredient->id }}</td>
                                <td>{{ $ingredient->name }}</td>
                                <td><a href="/master/ingredient/register/{{ $ingredient->id }}"><button class="btn btn-link">更新</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


{{--<span id="followers-chart-labels" data-name="{{ $output['followers_chart_labels'] }}"></span>--}}

</body>
</html>
