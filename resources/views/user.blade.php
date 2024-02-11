@extends('layouts.head')
@extends('layouts.logo')
@extends('layouts.sidebar')

<body>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li class="active">ユーザーマスタ</li>
        </ol>
    </div>

    <div class="panel panel-container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 main">

                <div class="panel panel-container input-area">
                    <a href="/master/user/register">
                        <button class="btn btn-primary margin-bottom-30">新規登録</button>
                    </a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ログインID</th>
                            <th scope="col">姓</th>
                            <th scope="col">名</th>
                            <th scope="col">管理者</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->login_id }}</td>
                                <td>{{ $user->sei }}</td>
                                <td>{{ $user->mei }}</td>
                                <td class="center">@if($user->is_admin === 1) 〇 @endif</td>
                                <td>
                                    <a href="/master/user/register/{{ $user->login_id }}">
                                        <button class="btn btn-link">更新</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
