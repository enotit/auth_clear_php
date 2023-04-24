<?php require_once "header.php"; ?>

<div class="post">
    <b> Попутка </b> - приложение, которое помогает заработать или сэкономить на поездке.
    <br> <br>
    Выбери свою роль в поездке:
    <div style="margin-top:1vh"></div>
    <div class="whoareyou">
        <div>водитель</div>
        <input type="radio" name="who-are-you" onclick="isDriver(true)" id="a">
        <input type="radio" name="who-are-you" checked onclick="isDriver(false)" id="b">
        <div style="margin-left: 3vw;">пассажир</div>
    </div>
    <table class="choose" style="width: 100%">
        <td style="width: 50%">
            <div class="left-driver non-selected" id="left_driver">
                <p class="title">+ Выбирай сам себе попутчика</p>
                <p class="title" id="change-price">+ Указывай цену </p>
                <p id="for-change-price">
                    В среднем, одна "попутка" занимает 10км
                    <br>
                    от <b><?= $MIN_PRICE_PEER_KM ?></b>р
                    <input type="range" min="<?= $MIN_PRICE_PEER_KM ?>" max="<?= $MAX_PRICE_PEER_KM ?>"
                           onchange="change_price(this)">
                    до<b> <?= $MAX_PRICE_PEER_KM ?></b>р
                    Итого, в месяц вы можете получать:
                <b id="salary"> </b>р. с 2х пассажиров
                </p>
            </div>
        </td>
        <td style="width: 50%">
            <div class="right-passanger" id="right_passanger">
                Тебя кинут на деньги, идиот
            </div>
        </td>
    </table>
</div>

<div class="post">
    Тут я хочу показать, что посты реализовано удобно
</div>
<div class="post">
    И<br>даже<br>высокие посты <br> норм отображаются
</div>
<div class="post">
</div>  
<div class="post">
    Да и пустым то же здесь не плохо. Но лучше всего здесь ощущаются посты, которые широкие. Желательно,
    ооооооооооооооооооооооооооооооооооооооочень широкие, даже через чур широкие. а если шире, то вообще круто, а если
    ещё чууть пошире, то хватит.
</div>
<script src="who-are-you.js">