<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="register__inner">
        <div class="register__header">
            <h1>PiGLy</h1>
            <h2>新規会員登録</h2>
            <p class="register__header-p">
                STEP1 アカウント情報の登録
            </p>
        </div>
        <form action="/register/step1" class="register-form" method="post">
            @csrf
            <table class="register-form__table">
                <tr class="register-form__table-row">
                    <th class="register-form__table-header">お名前</th>
                </tr>
                <tr class="register-form__table-row">
                    <td class="register-form__table-item">
                        <input type="text" name="name" class="register-form__table-item--input">
                    </td>
                </tr>
                <!-- エラーメッセージ -->
                @error('name')
                <tr class="register-form__table-row">
                    <td class="register-form__table-item--message">
                        {{ $errors->first('name') }}
                    </td>
                </tr>
                @enderror

                <tr class="register-form__table-row">
                    <th class="register-form__table-header">メールアドレス</th>
                </tr>
                <tr class="register-form__table-row">
                    <td class="register-form__table-item">
                        <input type="email" name="email" class="register-form__table-item--input">
                    </td>
                </tr>
                <!-- エラーメッセージ -->
                @error('email')
                <tr class="register-form__table-row">
                    <td class="register-form__table-item--message">
                        {{ $errors->first('email') }}
                    </td>
                </tr>
                @enderror

                <tr class="register-form__table-row">
                    <th class="register-form__table-header">パスワード</th>
                </tr>
                <tr class="register-form__table-row">
                    <td class="register-form__table-item">
                        <input type="pass" name="password" class="register-form__table-item--input">
                    </td>
                </tr>
                <!-- エラーメッセージ -->
                @error('email')
                <tr class="register-form__table-row">
                    <td class="register-form__table-item--message">
                        {{ $errors->first('password') }}
                    </td>
                </tr>
                @enderror

            </table>
            <div class="register-form__btn">
                <button class="register-form__btn-submit" type="submit">
                    <a href="/register/step2" class="register-form__btn-submit-a">
                        次に進む
                    </a>
                </button>
            </div>
        </form>
        <a href="/login" class="login__a">ログインはこちら</a>
    </div>
</body>
</html>