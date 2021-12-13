@extends('layouts.header')

@section('content')
    <link rel="stylesheet" href="/css/index.css">
    <div class="container">
        <div class="container__column--left">
            <div class="create-form">
                <form action="" method="POST" class="create-form__wrap">
                    <div class="create-form__todo">
                        <label for="content" class="create-form__label">Todo</label>
                        <input type="text" class="create-form__input large" name="content" id="content">
                    </div>
                    <div class="create-form__category">
                        <label for="category" class="create-form__label">カテゴリ</label>
                        <input type="text" class="create-form__input" name="category" id="category">
                        <ul class="create-form-option">
                                <li class="create-form-option__row">
                                    <p class="create-form-option__text"></p>
                                    <div class="create-form-option__btns">
                                        <img class="create-form-option__img" src="/img/reply.png" onClick="quoteCategory('')">
                                        <a href="">
                                            <img class="create-form-option__img" src="/img/delete.png" >
                                        </a>
                                    </div>
                                </li>
                        </ul>
                    </div>
                    <button class="btn btn--right">追加</button>
                </form>
            </div>
        </div>
        <div class="container__column--right">
            <div class="todos">
                <div class="todos__header">
                    <p class="todos__header--todo">Todo</p>
                    <p class="todos__header--category">カテゴリ</p>
                    <p class="todos__header--createdAt">作成日</p>
                    <p class="todos__header--btn">更新</p>
                    <p class="todos__header--btn">削除</p>
                </div>
                <div class="todos__content">
                    <table class="todos-table">
                            <tr class="todos-table__row">
                                <form method="POST">
                                    <td class="todos-table__column--todo">
                                        <input type="text" class="todos-table__input" name="content" value="Todo">
                                    </td>
                                    <td class="todos-table__column--category">
                                        <input type="text" class="todos-table__input" name="category" value="カテゴリ">
                                    <td class="todos-table__column--createdAt">
                                        <p>日付</p>
                                    </td>
                                    <td class="todos-table__column--btn">
                                        <button class="btn btn--center" formaction="">更新</button>
                                    </td>
                                    <td class="todos-table__column--btn">
                                        <button class="btn btn--center" formaction="">削除</button>
                                    </td>
                                </form>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
@endsection
