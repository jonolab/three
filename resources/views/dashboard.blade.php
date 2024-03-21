@extends('layouts.head')
@extends('layouts.logo')
@extends('layouts.sidebar')

<body>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
                        {{--                        <div class="large">{{ $userAccount['followers_count'] }}</div>--}}
                        <div class="large">2200</div>
                        <div class="text-muted">followers</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fas fa-xl fa-eye color-teal"></em>
                        <div class="large">65000</div>
                        <div class="text-muted">impressions</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-search color-purple"></em>
                        <div class="large">250000</div>
                        <div class="text-muted">reaches</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fas fa-xl fa-address-card color-orange"></em>
                        <div class="large">9200</div>
                        <div class="text-muted">profile views</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
