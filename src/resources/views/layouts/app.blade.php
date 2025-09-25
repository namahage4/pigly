<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLY</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">
                PiGLy
            </a>
            <div class="header__btn">
                <div class="header__btn-goal">
                    <a href="/wight_logs/goal_setting" class="header__btn-goal--a">
                        目標体重設定
                    </a>
                </div>
                <div class="header__btn-logout">
                    <a href="/logout" class="header__btn-logout--a">
                        ログアウト
                    </a>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
</body>
</html>