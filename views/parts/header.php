<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>E-SHOPPER</title>
    <link href="<?php ROOT?>/template/css/main.css" rel="stylesheet">
    <script src="<?php ROOT?>/template/js/jquery.js"></script>
</head>
<body>
<div id="wrapper">
<header id="header">
    <div class="header_top">
        <ul class="header_top_nav_1">
            <li><a href="#">375-29-604-72-83</a></li>
            <li><a href="#">Email: yul1579@gmail.com</a></li>
        </ul>
        <ul class="header_top_nav_2">
            <li><a href="#">FB</a></li>
            <li><a href="#">G+</a></li>
        </ul>
    </div>
    <div class="header_middle">
        <a href="/" class="logo"><img alt="" src="<?php ROOT?>/template/images/logo.png" /></a>

        <ul class="header_middle_nav">
        <?php if(User::isGuest()):?>
            <li><a href="/cart">
                    Cart
            (<span class="cart_count"><?php echo Cart::itemsCount();?></span>)
            </a></li>
            <li><a href="/user/register">Registration</a></li>
            <li><a href="/user/login">Login</a></li>
        <?php else:?>
            <li><a href="/cart">
                    Cfrt
                    (<span class="cart_count"><?php echo Cart::itemsCount();?></span>)
                </a></li>
            <li><a href="/cabinet">Account</a></li>
            <li><a href="/user/logout">Logout</a></li>
        <?php endif;?>
        </ul>
    </div>
    <div class="header_bottom">
        <ul class="header_bottom_nav">
            <li><a href="/">Home</a></li>
            <li><a href="/catalog/">Catalog</a></li>
            <li><a href="/cart">Cart</a></li>
        </ul>
    </div>
</header>