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
            <li class="active">料理一覧</li>
        </ol>
    </div>

    <div class="panel panel-container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 main">

                <div class="panel panel-container input-area">
                    <a href="/cooking/register">
                        <button class="btn btn-primary margin-bottom-30">新規登録</button>
                    </a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">料理名</th>
                            <th scope="col">食材1</th>
                            <th scope="col">食材2</th>
                            <th scope="col">食材3</th>
                            <th scope="col">公開中</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cookingList as $cooking)
                            <tr>
                                <td>{{ $cooking->id }}</td>
                                <td>{{ $cooking->name }}</td>
                                <td>{{ $cooking->ingredient_name_1 }}</td>
                                <td>{{ $cooking->ingredient_name_2 }}</td>
                                <td>{{ $cooking->ingredient_name_3 }}</td>
                                <td class="center">@if($cooking->is_release === 1) 〇 @endif</td>
                                <td>
                                    <a href="/cooking/register/{{ $cooking->id }}">
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
