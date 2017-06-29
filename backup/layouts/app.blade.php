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
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/custom-chart.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/popup.css">
    <link rel="stylesheet" href="/css/media.css">
    <script src="https://use.fontawesome.com/20edb795b9.js"></script>
</head>
<body>
<div class="page">
    <header>
        <div class="container">
            <div class="headerPanel">
                <div class="logoWrap">
                    <a href="/" class="logo">
                        <img src="/images/logo.svg" alt="">
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
                        <img src="/images/logo.svg" alt="">
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
                    <a href="http://www.crepla.com/"><img class="creplaLogo" src="/images/crepla-logo.png" alt="CrePla"/></a>
                </div>
            </div>
        </div>
    </footer>
</div>


<!-- PopUp's -->
<!-- PopUp's -->
<div class="popup popup_js">
    <div class="popup-overlay">
        <div class="popup-body">
            <div class="popup-content">
                <!-- <button onClick="drawGraph();">Refresh</button> -->
                <div id="chart" style="margin: 0 auto;">
                    <svg width="600" height="450" style="overflow: visible;"><line x1="80" x2="520" y1="390" y2="390" stroke="#efefef" stroke-width="2" fill="none"></line><line x1="80" x2="520" y1="334.2857142857143" y2="334.2857142857143" stroke="#efefef" stroke-width="2" fill="none"></line><line x1="80" x2="520" y1="278.57142857142856" y2="278.57142857142856" stroke="#efefef" stroke-width="2" fill="none"></line><line x1="80" x2="520" y1="222.85714285714286" y2="222.85714285714286" stroke="#efefef" stroke-width="2" fill="none"></line><line x1="80" x2="520" y1="167.14285714285714" y2="167.14285714285714" stroke="#efefef" stroke-width="2" fill="none"></line><line x1="80" x2="520" y1="111.42857142857144" y2="111.42857142857144" stroke="#efefef" stroke-width="2" fill="none"></line><line x1="80" x2="520" y1="55.71428571428572" y2="55.71428571428572" stroke="#efefef" stroke-width="2" fill="none"></line><path stroke="#2990ea" stroke-width="3" fill="none" transform="translate(80,0)" d="M0,356.16541353383457L48.888888888888886,322.3308270676692L97.77777777777777,277.21804511278197L146.66666666666666,282.85714285714283L195.55555555555554,378.7218045112782L244.44444444444446,96.76691729323305L293.3333333333333,373.0827067669173L342.22222222222223,333.609022556391L391.1111111111111,316.69172932330827L440,339.24812030075185"></path><path class="area" fill="rgba(41,144,234,0.1)" transform="translate(80,0)" d="M0,356.16541353383457L48.888888888888886,322.3308270676692L97.77777777777777,277.21804511278197L146.66666666666666,282.85714285714283L195.55555555555554,378.7218045112782L244.44444444444446,96.76691729323305L293.3333333333333,373.0827067669173L342.22222222222223,333.609022556391L391.1111111111111,316.69172932330827L440,339.24812030075185L440,390L391.1111111111111,390L342.22222222222223,390L293.3333333333333,390L244.44444444444446,390L195.55555555555554,390L146.66666666666666,390L97.77777777777777,390L48.888888888888886,390L0,390Z"></path><g><circle fill="#2990ea" transform="translate(80,0)" r="4" cx="0" cy="356.16541353383457"></circle><circle fill="#2990ea" transform="translate(80,0)" r="4" cx="48.888888888888886" cy="322.3308270676692"></circle><circle fill="#2990ea" transform="translate(80,0)" r="4" cx="97.77777777777777" cy="277.21804511278197"></circle><circle fill="#2990ea" transform="translate(80,0)" r="4" cx="146.66666666666666" cy="282.85714285714283"></circle><circle fill="#2990ea" transform="translate(80,0)" r="4" cx="195.55555555555554" cy="378.7218045112782"></circle><circle fill="#2990ea" transform="translate(80,0)" r="4" cx="244.44444444444446" cy="96.76691729323305" stroke="none" stroke-width="0" style="fill: rgb(41, 144, 234);"></circle><circle fill="#2990ea" transform="translate(80,0)" r="4" cx="293.3333333333333" cy="373.0827067669173"></circle><circle fill="#2990ea" transform="translate(80,0)" r="4" cx="342.22222222222223" cy="333.609022556391"></circle><circle fill="#2990ea" transform="translate(80,0)" r="4" cx="391.1111111111111" cy="316.69172932330827"></circle><circle fill="#2990ea" transform="translate(80,0)" r="4" cx="440" cy="339.24812030075185"></circle></g><text x="55" y="393" fill="#b7bbbd" text-anchor="middle" style="font-size: 14px;">0</text><text x="55" y="337.2857142857143" fill="#b7bbbd" text-anchor="middle" style="font-size: 14px;">10</text><text x="55" y="281.57142857142856" fill="#b7bbbd" text-anchor="middle" style="font-size: 14px;">20</text><text x="55" y="225.85714285714286" fill="#b7bbbd" text-anchor="middle" style="font-size: 14px;">30</text><text x="55" y="170.14285714285714" fill="#b7bbbd" text-anchor="middle" style="font-size: 14px;">40</text><text x="55" y="114.42857142857144" fill="#b7bbbd" text-anchor="middle" style="font-size: 14px;">50</text><text x="55" y="58.71428571428572" fill="#b7bbbd" text-anchor="middle" style="font-size: 14px;">60</text><text x="128.88888888888889" y="420" text-anchor="middle" fill="#b7bbbd" style="font-size: 14px;">May 23</text><text x="226.66666666666666" y="420" text-anchor="middle" fill="#b7bbbd" style="font-size: 14px;">May 25</text><text x="324.44444444444446" y="420" text-anchor="middle" fill="#b7bbbd" style="font-size: 14px;">May 27</text><text x="422.22222222222223" y="420" text-anchor="middle" fill="#b7bbbd" style="font-size: 14px;">May 29</text><text x="520" y="420" text-anchor="middle" fill="#b7bbbd" style="font-size: 14px;">May 31</text></svg>
                </div>
            </div>
            <span class="closePopup closePopup_js"><span class="icon-cross"></span></span>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="/js/custom-chart.js"></script>
<script src="/js/main.js"></script>
<script src="/js/app.js"></script>
<script src="/js/popup.js"></script>
</body>
</html>
