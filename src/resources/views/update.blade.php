@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/update.css') }}">
@endsection

@section('content')
<main>
    <div class="main__inner">
        <h2>Weight Log</h2>
        <form action="" class="update-form">
            @csrf
            <!-- 日付form -->
            <div class="update-form__group">
                <div class="update-form__group-ttl">
                    <spam class="update-form__label--item">日付</spam>
                </div>
                <div class="update-form__group-content">
                    <input type="date" name="date" placeholder="2024年1月1日" class="update-form__group-content--input">
                </div>
                <div class="update-form__group-error">
                    <!-- バリデーション -->
                     @if ($errors->has('date'))
                     <p class="update-form__group-error--p">
                        {{ $errors->first('date') }}
                     </p>
                     @endif
                </div>
            </div>
            <!-- 体重form -->
            <div class="update-form__group">
                <div class="update-form__group-ttl">
                    <spam class="update-form__label--item">体重</spam>
                </div>
                <div class="update-form__group-content">
                    <input type="number" name="weight" placeholder="50.0" class="update-form__group-content--input">
                </div>
                <div class="update-form__group-error">
                    <!-- バリデーション -->
                    @if ($errors->has('weight'))
                     <p class="update-form__group-error--p">
                        {{ $errors->first('weight') }}
                     </p>
                     @endif
                </div>
            </div>
            <!-- 摂取カロリーform -->
            <div class="update-form__group">
                <div class="update-form__group-ttl">
                    <spam class="update-form__label--item">摂取カロリー</spam>
                </div>
                <div class="update-form__group-content">
                    <input type="number" name="calories" placeholder="50.0" class="update-form__group-content--input">
                </div>
                <div class="update-form__group-error">
                    <!-- バリデーション -->
                    @if ($errors->has('calories'))
                     <p class="update-form__group-error--p">
                        {{ $errors->first('calories') }}
                     </p>
                     @endif
                </div>
            </div>
            <!-- 運動時間form -->
            <div class="update-form__group">
                <div class="update-form__group-ttl">
                    <spam class="update-form__label--item">運動時間</spam>
                </div>
                <div class="update-form__group-content">
                    <input type="time" name="exercise_time" placeholder="00:00" class="update-form__group-content--input">
                </div>
                <div class="update-form__group-error">
                    <!-- バリデーション -->
                    @if ($errors->has('exercise_time'))
                     <p class="update-form__group-error--p">
                        {{ $errors->first('exercise_time') }}
                     </p>
                     @endif
                </div>
            </div>
            <!-- 運動内容form -->
            <div class="update-form__group">
                <div class="update-form__group-ttl">
                    <spam class="update-form__label--item">運動内容</spam>
                </div>
                <div class="update-form__group-content">
                    <textarea name="exercise_content" placeholder="運動内容を追加" class="update-form__group-content--textarea"></textarea>
                </div>
                <div class="update-form__group-error">
                    <!-- バリデーション -->
                    @if ($errors->has('exercise_content'))
                     <p class="update-form__group-error--p">
                        {{ $errors->first('exercise_content') }}
                     </p>
                     @endif
                </div>
            </div>
            <div class="update-form__group-btn">
                <div class="update-form__group-btn--back">
                    <a href="/weight_logs" class="update-form__group-btn--back-a">
                        戻る
                    </a>
                </div>
                <div class="update-form__group-btn--update">
                    <button class="update-form__group-btn--update-submit" type="submit">
                        更新
                    </button>
                </div>
                <div class="update-form__group-btn--delete">
                    <a href="/weight_logs" class="update-form__group-btn--delete-a">
                        <img src="/src/img/ゴミ箱のアイコン素材.jpeg" alt="trash can">
                    </a>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection