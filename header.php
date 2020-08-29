<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/import.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <button class="header__menu clearfix" id="headerButton">
            <span>これはボタンです</span>
        </button>
        <header>
            <div class="header__l">
                <h1 class="header__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </div>
            <div class="header__s">
                <form action="" class="header__search" method="POST">
                    <div type="submit" class="header__search__searchicon" id="searchIcon"><i class="fas fa-search"></i></div>
                    <label for="searchbox">これは検索フォームです</label>
                    <input type="search" name="searchbox" class="header__search__searchbox" id="searchBox">
                    <input type="submit" value="検索" class="header__search__searchbtn">
                </form>
            </div>
        </header>