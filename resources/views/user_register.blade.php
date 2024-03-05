@extends('layouts.head')
@extends('layouts.logo')
@extends('layouts.sidebar')

<script>
    function register()
    {
        document.form-register.submit();
    }

</script>
<body>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/master/user">ユーザーマスタ</a></li>
            <li class="active">ユーザーマスタ登録</li>
        </ol>
    </div>

    <div class="panel panel-container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 main">
                <div class="panel panel-container input-area">
                    @foreach ($errors->all() as $error)
                        <div class="color-red">{{$error}}</div>
                    @endforeach
                    <form name="form-register" action="/master/user/register" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="@if(isset($user)){{ $user->id }}@endif">
                        @if(isset($user))
                            <div class="col-md-12 margin-top-30">
                            <label for="login_id" class="form-label">ログインID</label>
                            <input type="text" class="form-control" id="login_id" name="login_id" value="{{ $user->login_id }}">
                        </div>
                        @endif
                        <div class="col-md-6 margin-top-30">
                            <label for="sei" class="form-label">姓</label>
                            <input type="text" class="form-control" id="sei" name="sei" value="@if(isset($user)){{ $user->sei }}@endif">
                        </div>
                        <div class="col-md-6 margin-top-30">
                            <label for="mei" class="form-label">名</label>
                            <input type="text" class="form-control" id="mei" name="mei" value="@if(isset($user)){{ $user->mei }}@endif">
                        </div>
                        <div class="col-md-12 margin-top-30">
                            <label for="password" class="form-label">パスワード</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="col-md-12 margin-top-30 form-check">
                            <input name="is_admin" type="hidden" value="0">
                            <input class="form-check-input" type="checkbox" value="1" id="is_admin" name="is_admin"
                                   @if(isset($user) && $user->is_admin === 1) checked @endif >
                            <label class="form-check-label" for="is_admin">
                                管理者
                            </label>
                        </div>

                        <button class="btn btn-primary margin-top-30 margin-bottom-30" onclick="register()">登録</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
