<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login__inner">
        <div class="login__header">
            <h1>PiGLy</h1>
            <h2>ログイン</h2>
        </div>
        <form action="" class="login-form" method="post">
            @csrf
            <table class="login-form__table">
                <tr class="login-form__table-row">
                    <th class="login-form__table-header">メールアドレス</th>
                </tr>
                <tr class="login-form__table-row">
                    <td class="login-form__table-item">
                        <input type="email" name="email" class="login-form__table-item--input">
                    </td>
                </tr>
                <tr class="login-form__table-row">
                    <th class="login-form__table-header">パスワード</th>
                </tr>
                <tr class="login-form__table-row">
                    <td class="login-form__table-item">
                        <input type="pass" name="password" class="login-form__table-item--input">
                    </td>
                </tr>
            </table>
            <div class="login-form__btn">
                <button class="login-form__btn-submit">
                    <a href="/weight_logs" class="login-form__btn-submit-a">
                        ログイン
                    </a>
                </button>
            </div>
        </form>
        <a href="/register/step1" class="register__a">アカウント作成はこちら</a>
    </div>
</body>
</html>


