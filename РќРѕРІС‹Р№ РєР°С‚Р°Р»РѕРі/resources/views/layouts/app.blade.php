<?php
if(\Illuminate\Support\Facades\Auth::guest()) {

} else {
    $user = \App\User::getUserToLayout(\Illuminate\Support\Facades\Auth::id());
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>M4M</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/media.css">
    <script src="https://use.fontawesome.com/20edb795b9.js"></script>
</head>
<body>
<div class="page">
    <header>
        <div class="container">
            <div class="headerPanel">
                <div class="logoWrap">
                    <a href="/" class="logo">
                        <img src="images/logo.svg" alt="">
                    </a>
                </div>
                <div class="headerMenu headerMenu_js">
                    <div class="mobileMenuBtn mobileMenuBtn_js"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <div class="menuPanel menuPanel_js"></div>
                    <nav class="nav headerNav headerMenu__nav">
                        <span class="closeMenu"><span class="icon-cross closeMenu__btn closeMenu__btn_js"></span></span>
                        <span class="menuItem">Объекты
									<ul class="headerSubMenu">
										<li><a href="/">Домик у моря</a></li>
										<li><a href="/">Мое авто</a></li>
									</ul>
								</span>
                        <a class="nav-link menuItem" href="/finance">Финансы</a>
                        <a class="nav-link menuItem" href="/settings">Настройки</a>
                        <nav class="nav footerNav footerMenuInHeader">
                            <a href="/" class="nav-link menuItem">О компании</a>
                            <a href="/" class="nav-link menuItem">Контакты</a>
                            <a href="/" class="nav-link menuItem">Новости</a>
                            <a href="/" class="nav-link menuItem">Инвесторам</a>
                            <a href="/" class="nav-link menuItem">Партнерам</a>
                            <a href="/" class="nav-link menuItem">Юридическая информация</a>
                        </nav>
                    </nav>
                </div>
                @if(!\Illuminate\Support\Facades\Auth::guest())
                    <div class="userInfo">
                        <span class="userInfo__name">
                            <i class="fa fa-user-o" aria-hidden="true"></i> {{$user['name']}} {{$user['surname']}}</span>
                        <span class="userInfo__id">id {{$user['id']}}</span>

                            <a href="{{route('logout')}}"><i class="fa fa-power-off" aria-hidden="true"></i></a>

                    </div>
                @endif
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="footerTop">
            <div class="container footerRow">
                <div class="logoWrap">
                    <a href="/" class="logo">
                        <img src="images/logo.svg" alt="">
                    </a>
                </div>
                <nav class="nav footerNav footerMenu">
                    <a href="/" class="nav-link footerMenuItem">О компании</a>
                    <a href="/" class="nav-link footerMenuItem">Контакты</a>
                    <a href="/" class="nav-link footerMenuItem">Новости</a>
                    <a href="/" class="nav-link footerMenuItem">Инвесторам</a>
                    <a href="/" class="nav-link footerMenuItem">Партнерам</a>
                    <a href="/" class="nav-link footerMenuItem">Юридическая информация</a>
                </nav>
                <nav class="socialsNav text-right">
                    <a href="https://www.facebook.com/crepla.ua"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://vk.com/crepla"><i class="fa fa-vk" aria-hidden="true"></i></a>
                </nav>
            </div>
        </div>
        <div class="footerBottom">
            <div class="container footerRow align-items-baseline">
                <div>2к17 Все права защищены</div>
                <div>
                    <span class="siteDevelopment">Разработка сайта: </span>
                    <a href="http://www.crepla.com/"><img class="creplaLogo" src="images/crepla-logo.png" alt="CrePla"/></a>
                </div>
            </div>
        </div>
    </footer>
</div>


<!-- PopUp's -->
<div class="popup popup_js">
    <div class="popup-overlay">
        <div class="popup-body">
            <div class="popup-content">
                <div class="entityFormWrap">
                    <h3 class="text-center">Форма для создания объекта</h3>
                    <form onSubmit={this.handleSubmit} id="entityForm" class="entityForm">
								<span class="entityForm__item">
									<label htmlFor="name">Название:</label>
									<input type="text" name="name" value=""/>
								</span>
                        <span class="entityForm__item">
									<label htmlFor="systems">Система:</label>
									<select name="system" value="">
										<option value="умный дом">умный дом</option>
										<option value="крутой дом">крутой дом</option>
										<option value="красивый дом">красивый дом</option>
									</select>
								</span>
                        <span class="entityForm__item">
									<span>Отметьте службы, которые Вы хотели бы подключить.</span>
									<div class="checkboxWrap">
										<input name="electric" type="checkbox"/>
										<label htmlFor="electric">Электричество</label>
									</div>
									<div class="checkboxWrap">
										<input name="waterhot" type="checkbox"/>
										<label htmlFor="waterhot">Горячая вода</label>
									</div>
									<div class="checkboxWrap">
										<input name="watercold" type="checkbox"/>
										<label htmlFor="watercold">Холодная вода</label>
									</div>
									<div class="checkboxWrap">
										<input name="gas" type="checkbox"/>
										<label htmlFor="gas">Газ</label>
									</div>
								</span>
                        <span class="entityForm__item">
									<label htmlFor="msg">Сообщение:</label>
									<textarea name="msg" value=""></textarea>
								</span>
                        <span class="entityForm__item text-center">
									<button class="btn btnStyle btnStyle_сolor">Создать</button>
								</span>
                    </form>
                </div>
            </div>
            <span class="closePopup closePopup_js"><i class="fa fa-times" aria-hidden="true"></i></span>
        </div>
    </div>
</div>


<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
{{--<script src="https://cdn.jsdelivr.net/lodash/4.17.4/lodash.min.js"></script>--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>

<script src="js/main.js"></script>
<script src="js/app.js"></script>
<script src="js/popup.js"></script>
</body>
</html>
