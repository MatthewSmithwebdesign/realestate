<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smithy Reality</title>
    <link rel="stylesheet" href="{{mix('/css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="contanier">
        <div class="header__logo">
            Smithy Realty
        </div>
        <div class="header__menu">
            <a href="#" class="header__menu-link--active">Home</a>
            <a href="#" class="header__menu-link">Listings</a>
            <a href="#" class="header__menu-link">Property</a>
            <a href="#" class="header__menu-link">Pages</a>
        </div>
        <div class="header__account">
            <div class="header__account-link"><i class="fa-solid fa-heart"></i></div>
            <div class="header__account-link"><i class="fa-solid fa-user"></i></div>
        </div>
    </div>

    </header>
@yield('content')
</body>
</html>
