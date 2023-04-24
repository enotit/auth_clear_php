<?php
/*
 * This code was written by enotit.
 * distribution/modification/copying is free (but please mention me).
 * t.me/enotit 9.2022
 *
 */
namespace Passing;
require "./tools/dependents.php";
$phrases = [
	'Hi',
	'Хорошего времени суток',
	'Добро пожаловать',
	'Успехов'
];

?>
<head>
    <head>
		
        <title> Попутка </title>
		<link type="Image/x-icon" href="/sources/duck.ico" rel="icon">
        <link href="styles\style.css" rel="stylesheet" type="text/css">
    </head>
</head>
<body>
<header>
    <div class="header_block">
        <div class="head_container">
            <div class="center_header_block header_part">
                <a href="#auth" onclick="signin()"> ПопУтка </a>
            </div>
            <div class="right_header_block header_part">
                <?php if (true): ?>
                    <a href='#auth' onclick="signin()"> Войти </a>
                <?php else: ?>
                    <b><?= $phrases[array_rand($phrases)] ; ?>, </b><?= $USER->getName() ?>!
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<div style="padding: 5vh"></div>
<script src="auth.js"> </script>
