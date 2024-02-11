@extends('layouts.head')

<body>

<div class="col-md-4 col-md-offset-4 main">
    <div class="panel panel-container input-area">

        <form name="form-login" action="/login" method="POST">
            <div class="col-md-12 margin-top-30">
                <label for="email" class="form-label">ログインID</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="col-md-12 margin-top-30">
                <label for="password" class="form-label">パスワード</label>
                <input type="password" class="form-control" id="password">
            </div>

            <button type="submit" class="btn btn-primary margin-top-30">ログイン</button>
        </form>

    </div>
</div>
</body>
</html>
