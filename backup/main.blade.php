<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>M4M</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/popup.css">

    <script src="https://use.fontawesome.com/20edb795b9.js"></script>
</head>
<body>

<div class="background_wrapper_first">
    <div class="container">

        <header class="header d-flex justify-content-between align-items-center">
            <h1 class="logo logoWrap">
                <a href="index.html" class="logo" onClick="">
                    <img src="images/logo.svg" alt="">
                </a>
            </h1>
            <div>
                <!-- <a href="private-office.html" title="Ссылка для разработчиков для быстрого перехода на страницы личного кабинета">Личный кабинет</a> -->
                <button type="button" onClick="" class="button openAuthorizationPopup_js">Войти</button>
                <button type="button" onClick="" class="button openRegistrationPopup_js">Регистрация</button>
            </div>
        </header>



        <div class="first">
            <h1>Следи за своими расходами онлайн с помощью наших счеткиков за 2 минуты </h1>
            <div class="advantages col-lg-12 col-md-12">
                <div class="advantage">
                    <div class="image"></div>
                    <span>Первое преимущество</span>
                </div>

                <div class="advantage">
                    <div class="image"></div>
                    <span>Первое преимущество</span>
                </div>

                <div class="advantage">
                    <div class="image"></div>
                    <span>Первое преимущество</span>
                </div>

                <div class="advantage">
                    <div class="image"></div>
                    <span>Первое преимущество</span>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container">

    <div class="second">
        <div class="second_content"></div>
    </div>

    <div class="cases">
        <h2>Наши кейсы</h2>
        <h3>Из чего мы состоим</h3>

        <div class="case case_left row">
            <div class="picture picture1 col-sm-5"></div>
            <div class="picture_description col-sm-7">
                <h5>Умный дом</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                @if(Auth::guest())
                    <button class="button openAuthorizationPopup_js">Подробнее</button>
                @else
                    <button class="button"><a href="/office">Подробнее</a></button>
                @endif
            </div>
        </div>



        <div class="case case_right row">
            <div class="picture_description col-sm-7">
                <h5>Автомобиль</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                @if(Auth::guest())
                    <button class="button openAuthorizationPopup_js">Подробнее</button>
                @else
                    <button class="button"><a href="/office">Подробнее</a></button>
                @endif
            </div>
            <div class="picture picture2 col-sm-5"></div>
        </div>



        <div class="case case_left row">
            <div class="picture picture3 col-sm-5"></div>
            <div class="picture_description col-sm-7">
                <h5>Здоровье</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                @if(Auth::guest())
                    <button class="button openAuthorizationPopup_js">Подробнее</button>
                @else
                    <button class="button"><a href="/office">Подробнее</a></button>
                @endif
            </div>
        </div>

    </div>



    <div class="results">
        <h2>Результаты нашей работы</h2>
        <h3>Какой-то текст который напишите вы</h3>

        <div class="row">
            <div class="result col-lg-3 col-md-3 col-sm-3">
                <div class="picture"></div>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
            </div>

            <div class="result col-lg-3 col-md-3 col-sm-3">
                <div class="picture"></div>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
            </div>

            <div class="result col-lg-3 col-md-3 col-sm-3">
                <div class="picture"></div>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
            </div>

            <div class="result col-lg-3 col-md-3 col-sm-3">
                <div class="picture"></div>
                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>

</div>

<div class="background_wrapper_second">
    <div class="container">
        <div class="free text-center">
            <h4>Опробуйте бесплатно возможности M4M на нашем демо сайте</h4>
            <button type="button" class="button_big">Попробовать бесплатно</button>
        </div>
    </div>
</div>

<div class="container">

    <div class="econom">
        <h2>Как начать экономить?</h2>
        <h3>Lorem ipsum dolor sit amet, consectetur</h3>

        <div class="instructions d-flex">
            <div class="instruction_top">
                <div class="instruction_text">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                    <h6>Заголовок</h6>
                </div>
                <div class="number">1</div>
            </div>

            <div class="instructions_bottom">
                <div class="number">2</div>
                <div class="instruction_text">
                    <h6>Заголовок</h6>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                </div>
            </div>

            <div class="instruction_top">
                <div class="instruction_text">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                    <h6>Заголовок</h6>
                </div>
                <div class="number">3</div>
            </div>

            <div class="instructions_bottom">
                <div class="number">4</div>
                <div class="instruction_text">
                    <h6>Заголовок</h6>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                </div>
            </div>

            <div class="instruction_top">
                <div class="instruction_text">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                    <h6>Заголовок</h6>
                </div>
                <div class="number">5</div>
            </div>
        </div>
    </div>

</div>

<div class="background_wrapper_third">
    <div class="container">
        <div class="form row">

            <div class="form_header col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                <p>Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
            </div>

            <form action="#" class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Ваше имя">
                <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Ваш телефон">
                <input type="text" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Ваш email">
                <input type="submit" class="button col-lg-12 col-md-12 col-sm-12 col-xs-12" value="Отправить">
            </form>
        </div>

    </div>
</div>

<div class="container">
    <div class="reviews">
        <h2>Отзывы о нас</h2>
        <h3>Что о нас говорят клиенты</h3>

        <div class="row">
            <div class="review col-lg-6 col-md-6">
                <img src="images/index/user.jpg" alt="Пользователь">
                <div class="review_text">
                    <h6>Макс Черномырдин</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

            <div class="review col-lg-6 col-md-6">
                <img src="images/index/user.jpg" alt="Пользователь">
                <div class="review_text">
                    <h6>Макс Черномырдин</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="clients">
        <h2>Наши клиенты</h2>
        <h3>Кто нам доверяет</h3>

        <div class="row">

            <div class="client col-lg-2 col-md-4 col-sm-4">
                <img src="images/index/google.png" alt="Клиент">
            </div>

            <div class="client col-lg-2 col-md-4 col-sm-4">
                <img src="images/index/microsoft.png" alt="Клиент">
            </div>

            <div class="client col-lg-2 col-md-4 col-sm-4">
                <img src="images/index/google.png" alt="Клиент">
            </div>

            <div class="client col-lg-2 col-md-4 col-sm-4">
                <img src="images/index/microsoft.png" alt="Клиент">
            </div>

            <div class="client col-lg-2 col-md-4 col-sm-4">
                <img src="images/index/google.png" alt="Клиент">
            </div>

            <div class="client col-lg-2 col-md-4 col-sm-4">
                <img src="images/index/microsoft.png" alt="Клиент">
            </div>
        </div>
    </div>
</div>



<div class="popup registrationPopup_js">
    <div class="popup-overlay">
        <div class="popup-body">
            <div class="popup-content">
                <div class="popupFormWrap">
                    <h3 class="text-center">Регистрация</h3>
                    <form id="registrationForm" class="popupForm" method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="newUserFname">Имя:</label>
                            <input id="newUserFname" name="name" type="text" class="form-control form-field input_validator_js" value="{{ old('name') }}" data-input-validate="name" required minlength="3" />
                            <small class="form-control-feedback errorMsg_js"></small>
                        </div>
                        <div class="form-group">
                            <label for="newUserSname">Фамилия:</label>
                            <input id="newUserSname" type="text" name="surname" class="form-control form-field input_validator_js" value="{{ old('surname') }}" data-input-validate="surname" required minlength="3" />
                            <small class="form-control-feedback errorMsg_js"></small>
                        </div>
                        <div class="form-group">
                            <label for="newUserEmail">E-mail адрес:</label>
                            <input id="newUserEmail" type="email" name="email" class="form-control form-field input_validator_js" value="{{ old('email') }}" data-input-validate="email" required />
                            <small class="form-control-feedback errorMsg_js"></small>
                        </div>
                        <div class="form-group">
                            <label for="newUserPassword">Пароль:</label>
                            <input id="newUserPassword" type="text" name="password" class="form-control form-field input_validator_js" data-input-validate="papasswordssword" required minlength="6" />
                            <small class="form-control-feedback errorMsg_js"></small>
                        </div>
                        <div class="form-group">
                            <label for="confirmNewUserPassword">Подтверждение пароля:</label>
                            <input id="confirmNewUserPassword" type="text" name="password_confirmation" class="form-control form-field input_validator_js" data-input-validate="confirmpassword" required minlength="6" />
                            <small class="form-control-feedback errorMsg_js"></small>
                        </div>
                        <span class="popupForm__item text-center ">
                            <button class="btn btnStyle btnStyle_сolor reg">Регистрация</button>
                        </span>
                        <script type="text/javascript">
                            window.onload = function () {
                                document.getElementById("newUserPassword").onchange = validatePassword;
                                document.getElementById("confirmNewUserPassword").onchange = validatePassword;
                            }
                            function validatePassword(){
                                var pass2=document.getElementById("confirmNewUserPassword").value;
                                var pass1=document.getElementById("newUserPassword").value;
                                if(pass1!=pass2)
                                    document.getElementById("confirmNewUserPassword").setCustomValidity("Passwords Don't Match");
                                else
                                    document.getElementById("confirmNewUserPassword").setCustomValidity('');
//empty string means no validation error
                            }
                        </script>
                    </form>
                </div>
            </div>
            <span class="closePopup closePopupRegistration_js"><span class="icon-cross"></span></span>
        </div>
    </div>
</div>


<div class="popup authorizationPopup_js" id="login-form">
    <div class="popup-overlay">
        <div class="popup-body">
            <div class="popup-content">
                <div class="popupFormWrap">
                    <h3 class="text-center">Авторизация</h3>
                    <form id="authorizationForm" class="popupForm" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="userEmail">E-mail адрес:</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            <small class="form-control-feedback errorMsg_js"></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль:</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <small class="form-control-feedback errorMsg_js"></small>
                        </div>
                        <button class="popupForm__item text-center">
                            <a class="btn btnStyle btnStyle_сolor popupEnterBtn">Войти
                                <!-- <button class="btn btnStyle btnStyle_сolor">Войти</button> -->
                            </a>
                        </button>
                    </form>
                </div>
            </div>
            <span class="closePopup closePopupAuthorization_js"><span class="icon-cross"></span></span>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script src="/js/main.js"></script>
<script src="/js/popup.js"></script>

</body>
</html>