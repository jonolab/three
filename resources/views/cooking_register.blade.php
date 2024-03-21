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
            <li><a href="/cooking">料理一覧</a></li>
            <li class="active">料理登録</li>
        </ol>
    </div>

    <div class="panel panel-container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 main">
                <div class="panel panel-container input-area">
                    @foreach ($errors->all() as $error)
                        <div class="color-red">{{$error}}</div>
                    @endforeach
                    <form name="form-register" action="/cooking/register" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="@if(isset($cooking)){{ $cooking->id }}@endif">
                        <div class="col-md-12 margin-top-30">
                            <label for="name" class="form-label">料理名</label>
                            <input type="text" class="form-control" id="name" name="name" value="@if(isset($cooking)){{ $cooking->name }}@endif">
                        </div>

                        <label class="col-md-12 margin-top-30">
                            <select class="form-control" type="text" name="ingredient_id_1">
                                <option value="">食材１ を選択してください</option>
                                @foreach($ingredients as $ingredient)
                                    <option value="{{ $ingredient->id }}" @if(isset($cooking->ingredient_id_1) && $cooking->ingredient_id_1 === $ingredient->id) selected @endif>{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </label>

                        <label class="col-md-12 margin-top-30">
                            <select class="form-control" type="text" name="ingredient_id_2">
                                <option value="">食材２ を選択してください</option>
                                @foreach($ingredients as $ingredient)
                                    <option value="{{ $ingredient->id }}" @if(isset($cooking->ingredient_id_2) && $cooking->ingredient_id_2 === $ingredient->id) selected @endif>{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </label>

                        <label class="col-md-12 margin-top-30">
                            <select class="form-control" type="text" name="ingredient_id_3">
                                <option value="">食材３ を選択してください</option>
                                @foreach($ingredients as $ingredient)
                                    <option value="{{ $ingredient->id }}" @if(isset($cooking->ingredient_id_3) && $cooking->ingredient_id_3 === $ingredient->id) selected @endif>{{ $ingredient->name }}</option>
                                @endforeach
                            </select>
                        </label>

                        <div class="col-md-12 margin-top-30 form-check">
                            <input name="is_release" type="hidden" value="0">
                            <input class="form-check-input" type="checkbox" value="1" id="is_release" name="is_release"
                                   @if(isset($cooking) && $cooking->is_release === 1) checked @endif >
                            <label class="form-check-label" for="is_release">
                                公開する
                            </label>
                        </div>

                        <button class="btn btn-primary margin-top-30 margin-bottom-30" onclick="register()">@if(isset($cooking)) 更新 @else 登録 @endif</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
