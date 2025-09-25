<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register2.css') }}">
</head>
<body>
    <div class="register2__inner">
        <div class="register2__header">
            <h1>PiGLy</h1>
            <h2>新規会員登録</h2>
            <p class="register2__header-p">
                STEP2 体重データの入力
            </p>
        </div>
        <form action="" class="register2-form" method="post">
            @csrf
            <table class="register2-form__table">
                <tr class="register2-form__table-row">
                    <th class="register2-form__table-header">現在の体重</th>
                </tr>
                <tr class="register2-form__table-row">
                    <td class="register2-form__table-item">
                        <input type="text" name="weight_now" class="register2-form__table-item--input">
                    </td>
                </tr>
                <!-- error message -->
                @error('weight_now')
                <tr class="register2-form__table-row">
                    <td class="register2-form__table-item--message">
                        {{ $errors->first('weight_now') }}
                    </td>
                </tr>
                @enderror

                <tr class="register2-form__table-row">
                    <th class="register2-form__table-header">目標の体重</th>
                </tr>
                <tr class="register2-form__table-row">
                    <td class="register2-form__table-item">
                        <input type="text" name="weight_target" class="register2-form__table-item--input">
                    </td>
                </tr>
                <!-- error message -->
                @error('weight_now')
                <tr class="register2-form__table-row">
                    <td class="register2-form__table-item--message">
                        {{ $errors->first('weight_target') }}
                    </td>
                </tr>
                @enderror

            </table>
            <div class="register2-form__btn">
                <button class="register2-form__btn-submit" type="submit">
                    <a href="/weight_logs" class="register2-form__btn-submit-a">
                        アカウント作成
                    </a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>