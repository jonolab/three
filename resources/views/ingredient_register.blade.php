@extends('layouts.head')
@extends('layouts.logo')
@extends('layouts.sidebar')

<script>
    function register()
    {
        document.form-register.submit();
    }

</script>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/master/ingredient">食材マスタ</a></li>
            <li class="active">食材マスタ登録</li>
        </ol>
    </div>

    <div class="panel panel-container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 main">
                <div class="panel panel-container input-area">
                    @foreach ($errors->all() as $error)
                        <div class="color-red">{{$error}}</div>
                    @endforeach
                    <form name="form-register" action="/master/ingredient/register" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="@if(isset($ingredient)){{ $ingredient->id }}@endif">
                        <div class="col-md-12 margin-top-30">
                            <label for="name" class="form-label">食材名</label>
                            <input type="text" class="form-control" id="name" name="name" value="@if(isset($ingredient)){{ $ingredient->name }}@endif">
                        </div>
                        <button class="btn btn-primary margin-top-30 margin-bottom-30" onclick="register()">@if(isset($ingredient)) 更新 @else 登録 @endif</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
