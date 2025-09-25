@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<main>
    <div class="main__inner">

        <!-- main__top -->
        <div class="main__top">
            <table class="main__top--table-left">
                <tr class="main__top--table-row">
                    <th class="main__top--table-header">目標体重</th>
                </tr>
                <tr class="main__top--table-row">
                    <td class="main__top--table-left--item">

                    </td>
                </tr>
            </table>
            <table class="main__top--table-center">
                <tr class="main__top--table-row">
                    <th class="main__top--table-header">目標まで</th>
                </tr>
                <tr class="main__top--table-row">
                    <td class="main__top--table-center--item">

                    </td>
                </tr>
            </table>
            <table class="main__top--table-right">
                <tr class="main__top--table-row">
                    <th class="main__top--table-header">最新体重</th>
                </tr>
                <tr class="main__top--table-row">
                    <td class="main__top--table-right--item">

                    </td>
                </tr>
            </table>
        </div>

        <!-- main__center -->
        <div class="main__center">
            <div class="main__center-top">
                <form action="" class="search-form">
                    <div class="search-form__item">
                        <input type="text" name="date" class="search-form__item-input">
                        <p class="search-form__item-p">~</p>
                        <input type="text" name="date" class="search-form__item-input">
                    </div>
                    <div class="search-form__btn">
                        <button class="search-form__btn-submit" type="submit">検索</button>
                    </div>
                </form>
                <div class="main__center-top--btn">
                    <a href="" class="main__center-top--btn-a">データ追加</a>
                </div>
            </div>
            
            <table class="main__center-table">
                <tr class="main__center-table--row">
                    <th class="main__center-table--header">日付</th>
                    <th class="main__center-table--header">体重</th>
                    <th class="main__center-table--header">食事摂取カロリー</th>
                    <th class="main__center-table--header">運動時間</th>
                </tr>
                <tr class="main__center-table--row">
                    <td class="main__center-table--item"></td>
                    <td class="main__center-table--item"></td>
                    <td class="main__center-table--item"></td>
                    <td class="main__center-table--item"></td>
                    <td class="main__center-table--item"></td>
                </tr>
                <tr class="main__center-table--row"></tr>
                <tr class="main__center-table--row"></tr>
                <tr class="main__center-table--row"></tr>
                <tr class="main__center-table--row"></tr>
                <tr class="main__center-table--row"></tr>
                <tr class="main__center-table--row"></tr>
                <tr class="main__center-table--row"></tr>
            </table>
        </div>
    </div>
</main>
@endsection