@extends('layouts.head')
@extends('layouts.logo')
@extends('layouts.sidebar')

<script>
    function register() {
        document.form - register.submit();
    }
</script>

<body>
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
                    <a href="/master/ingredient/register">
                        <button class="btn btn-primary margin-bottom-30">新規登録</button>
                    </a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">食材名</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ingredients as $ingredient)
                            <tr>
                                <td>{{ $ingredient->id }}</td>
                                <td>{{ $ingredient->name }}</td>
                                <td>
                                    <a href="/master/ingredient/register/{{ $ingredient->id }}">
                                        <button class="btn btn-link">更新</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="/master/ingredient/delete/{{ $ingredient->id }}" method="POST">
                                        @csrf
                                        <a>
                                            <button type="submit" class="btn btn-link">削除</button>
                                        </a>
                                    </form>
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
