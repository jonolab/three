@extends('layouts.head')

<script>
    function login()
    {
        document.form-login.submit();
    }
</script>
<body>

<div class="col-md-4 col-md-offset-4 main">
    <div class="panel panel-container input-area">

        <form name="form-login" action="/login" method="POST">
            @csrf
            <div class="col-md-12 margin-top-30">
                <label for="login_id" class="form-label">ログインID</label>
                <input type="text" class="form-control" id="login_id" name="login_id">
            </div>
            <div class="col-md-12 margin-top-30">
                <label for="password" class="form-label">パスワード</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary margin-top-30" onclick="login()">ログイン</button>
        </form>

    </div>
</div>
</body>
</html>
