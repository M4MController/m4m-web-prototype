@extends('layouts.app')

@section('content')
    <main class="mainContent">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-12">
                <h2><i class="fa fa-bar-chart" aria-hidden="true"></i><span>Статистика расходов</span></h2>
                <div class="row">
                    <div class="col-md-8">
                    <div class="cardStyle lineChartWrap">
                        <div class="row selectRow">
                        <div class="col-md-6">
                            <select name="scaleItems" value={this.state.scaleItems} onChange={this.selectChanged}>
                            <option value="31">За месяц</option>
                            <option value="7">За неделю</option>
                            <option value="24">За день</option>
                            </select>
                        </div>
                        <div class="col-md-6 text-right">
                            <select>
                            <option value="dacha">Дача</option>
                            <option value="kvartira">Квартира</option>
                            </select>
                        </div>
                        </div>
                        <div>
                        <LineChart data={totalData} />
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="cardStyle">
                        <div class="row">
                        <div class="col-md-6">
                            <small>Начисленно:</small>
                            <h4 class="blackText">25 000 руб</h4>
                        </div>
                        <div class="col-md-6"><Link to={'/payment'}><Button class="btn btnStyle btnStyle--small btnStyle_сolorless">Оплатить</Button></Link></div>
                        </div>
                        <div class="row chartWrap">
                        <div class="col-md-6">
                            <small>Прогноз:</small><br/>
                            <span class="blackText">30 000 руб</span>
                        </div>
                        <div class="col-md-6">
                            <small>В среднем за год:</small><br/>
                            <span class="blackText">30 000 руб</span>
                        </div>
                        </div>
                        <div class="chartWrap text-center">
                        <PieChart />
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div> -->

            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center page__title">
                        <div class="col-md-8">
                            <h2><span class="icon-diagram"></span><span>Мои объекты</span></h2>
                        </div>
                        <div class="col-md-4 text-right">
                            <button class="btn btnStyle btnStyle_сolor openNewEntityPopup_js">Добавить объект</button>
                        </div>
                    </div>
                    <div class="row havings">
                        @foreach($objects as $object)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="cardStyle objectWrap">
                                    <div class="objectWrap__title">
                                                <span class="objectWrap__name">
                                                    <strong class="objectName blackText">{{$object->name}}</strong>
                                                    <span class="objectIndicator"></span>
                                                </span>
                                        <small class="objectTitle">система "умный дом"</small>
                                    </div>
                                    <div class="row objectServices">
                                        {{--<div class="col-md-6 col-sm-6 col-xs-12 objectServicesWrap">--}}
                                            {{--<div class="objectService">--}}
                                                {{--<span class="counterIcon icon-high-voltage"></span>--}}
                                                {{--<div class="objectService__info">--}}
                                                    {{--<small>Электричество</small><br/>--}}
                                                    {{--<span class="blackText">1100 кВт</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6 col-sm-6 col-xs-12 objectServicesWrap">--}}
                                            {{--<div class="objectService">--}}
                                                {{--<span class="counterIcon icon-high-voltage"></span>--}}
                                                {{--<div class="objectService__info">--}}
                                                    {{--<small>Холодная вода</small><br/>--}}
                                                    {{--<span class="blackText">1100 кВт</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="col-md-6 col-sm-6 col-xs-12 objectServicesWrap">
                                            <div class="objectService">
                                                <span class="counterIcon icon-high-voltage"></span>
                                                <div class="objectService__info">
                                                    <small>Электричество</small><br/>
                                                    <span class="blackText" id="hot-water"><b>----</b> кВт</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="col-md-6 col-sm-6 col-xs-12 objectServicesWrap">--}}
                                            {{--<div class="objectService">--}}
                                                {{--<span class="counterIcon icon-high-voltage"></span>--}}
                                                {{--<div class="objectService__info">--}}
                                                    {{--<small>Газовый котел</small><br/>--}}
                                                    {{--<span class="blackText">1100 кВт</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6 col-sm-6 col-xs-12 objectServicesWrap">--}}
                                            {{--<div class="objectService">--}}
                                                {{--<span class="counterIcon icon-high-voltage"></span>--}}
                                                {{--<div class="objectService__info">--}}
                                                    {{--<small>Газ</small><br/>--}}
                                                    {{--<span class="blackText">1100 кВт</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="stakedBarChartWrap">
                                                <div class="cardRow">
                                                    <span class="cardRow__item">За месяц:</span>
                                                    <span class="cardRow__item text-right blackText">300 кВт</span>
                                                </div>
                                                <!-- <StakedBarChart current_indicators={300} compared={400} special_color={true} /> -->
                                            </div>

                                            <div class="stakedBarChartWrap">
                                                <div class="cardRow">
                                                    <span class="cardRow__item">За прошлый месяц:</span>
                                                    <span class="cardRow__item text-right blackText">200 кВт</span>
                                                </div>
                                                <!-- <StakedBarChart current_indicators={200} compared={400} /> -->
                                            </div>

                                            <div class="stakedBarChartWrap">
                                                <div class="cardRow">
                                                    <span class="cardRow__item">Среднее за год:</span>
                                                    <span class="cardRow__item text-right blackText">250 кВт</span>
                                                </div>
                                                <!-- <StakedBarChart current_indicators={250} compared={400} /> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row cardBtnsWrap">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="№"><button class="btn btnStyle btnStyle_сolorless">Подробнее</button></a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="payment.html"><button class="btn btnStyle btnStyle_сolor">Оплатить</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>




    <!-- PopUp's -->
    <!-- <div class="popup popup_js">
        <div class="popup-overlay">
            <div class="popup-body">
                <div class="popup-content">
                    <div class="popupFormWrap">
                        <h3 class="text-center">Форма для создания объекта</h3>
                        <form onSubmit={this.handleSubmit} id="popupForm" class="popupForm">
                            <span class="popupForm__item">
                                <label for="name">Название:</label>
                                <input type="text" name="name" value="" />
                            </span>
                            <span class="popupForm__item">
                                <label for="controller">Контроллер:</label>
                                <input type="text" name="controller" value="" />
                            </span>
                            <span class="popupForm__item text-center">
                                <button class="btn btnStyle btnStyle_сolor">Создать</button>
                            </span>
                        </form>
                    </div>
                </div>
                <span class="closePopup closePopup_js"><i class="fa fa-times" aria-hidden="true"></i></span>
            </div>
        </div>
    </div> -->

    <div class="popup popup_js newEntity newEntity_js">
        <div class="popup-overlay">
            <div class="popup-body">
                <div class="popup-content">
                    <div class="popupFormWrap entityFormWrap">
                        <form id="createEntity" class="popupForm entityForm">
                            <div class="screen screen_error screen_js screen_error_js">
                                <div class="screen__img">
                                    <img src="images/screen-error-icon.png" alt="">
                                </div>
                                <div class="screen__content">
                                    <h3>OOOPS!</h3>
                                    <p>Something went wrong. Perhaps you made a mistake when choosing values.</p>

                                    <div class="popupForm__item text-center">
                                        <button class="btn btnStyle btnStyle_сolor nextStepBtn nextStepBtn_js">Try again</button>
                                    </div>
                                </div>
                            </div>

                            <div class="screen screen_active screen_js add_controller" data-step="1">
                                <div class="screen__content">
                                    <h3>ADD OBJECT</h3>
                                    <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                                    <span class="popupForm__item">
											<label for="m4mEntityName">Название:</label>
											<input type="text" id="m4mEntityName" name="m4mEntityName" value="" />
										</span>
                                    <span class="popupForm__item">
											<label for="controller">Контроллер:</label>
											<input type="text" name="controller" id="search_controller_field" value="" />
										</span>
                                    <span class="popupForm__item text-center">
											<button class="btn btnStyle btnStyle_сolor nextStepBtn nextStepBtn_js step1" id="search_controller_button">Next step</button>
										</span>
                                </div>
                            </div>
                            <div class="screen screen_js add_device" data-step="2">
                                <div class="screen__img">
                                    <img src="images/screen2-icon.png" alt="">
                                </div>
                                <div class="screen__content">
                                    <h3>ADD CONTROLLER</h3>
                                    <p>On the back of the controller is the device ID. It is also on the box with the device.</p>

                                    <span class="popupForm__item">
											<input type="text" name="deviceId" id="deviceId" value="" placeholder="Enter device id" />
										</span>
                                    <span class="popupForm__item text-center">
											<button class="btn btnStyle btnStyle_сolor nextStepBtn nextStepBtn_js step2">Search device</button>
										</span>
                                </div>
                            </div>
                            <div class="screen screen_js" data-step="3">
                                <div class="screen__img">
                                    <img src="images/screen2-icon.png" alt="">
                                </div>
                                <div class="screen__content">
                                    <h3>SUMSUNG T1000</h3>
                                    <p>To add this device, enter the mac address of the router to which the controller is connected</p>

                                    <span class="popupForm__item">
											<input type="text" name="deviceMac" id="deviceMac" value="" placeholder="Enter mac" />
										</span>
                                    <span class="popupForm__item text-center">
											<button class="btn btnStyle btnStyle_сolor nextStepBtn nextStepBtn_js step3">Search device</button>
										</span>
                                </div>
                            </div>
                            <div class="screen screen_js" data-step="4">
                                <div class="screen__img">
                                    <img src="images/screen4-icon.png" alt="">
                                </div>
                                <div class="screen__content">
                                    <h3>SUMSUNG T1000</h3>
                                    <p>Choose a provider for your meters</p>

                                    <div class="radioBtnsBlock">
                                        <div class="form-check">
                                            <label class="form-check-label"><span class="counterIcon icon-high-voltage"></span> Water
                                            </label>
                                            <input type="radio" class="form-check-input" name="provider" id="waterRadio" value="water" checked>

                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label active"><span class="counterIcon icon-high-voltage"></span> Electricity
                                            </label>
                                            <input type="radio" class="form-check-input" name="provider" id="electricityRadio" value="electricity">

                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label"><span class="counterIcon icon-high-voltage"></span> Gas
                                            </label>
                                            <input type="radio" class="form-check-input" name="provider" id="gasRadio" value="gas">

                                        </div>
                                    </div>

                                    <div>
                                        <select id="city">
                                            <option value="kharkiv-city-water">Kharkiv-city-water</option>
                                            <option value="kharkiv-city-electricity">Kharkiv-city-Electricity</option>
                                            <option value="kharkiv-city-gas">Kharkiv-city-gas</option>
                                        </select>
                                    </div>

                                    <div class="checkboxBlock">
                                        <div class="form-check">
                                            <label for="accept-the-terms" class="form-check-label"><span class="customCheckbox"><span class="icon-check-symbol icon-ok"></span></span> accept the terms of the <a href="/">license agreement</a>
                                            </label>
                                            <input id="accept-the-terms" type="checkbox" class="form-check-input" name="accept-the-terms">
                                        </div>
                                    </div>

                                    <div class="popupForm__item text-center">
                                        <button class="btn btnStyle btnStyle_сolor nextStepBtn nextStepBtn_js">Search device</button>
                                    </div>
                                </div>
                            </div>
                            <div class="screen screen_js" data-step="5">
                                <div class="screen__img">
                                    <img src="images/screen5-icon.png" alt="">
                                </div>
                                <div class="screen__content">
                                    <h3>SUCCESS</h3>
                                    <p>You have succesfully registered an object in the service</p>

                                    <div class="popupForm__item text-center">
                                        <button class="btn btnStyle btnStyle_сolor nextStepBtn nextStepBtn_js" id="start">Start tracking</button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
                <span class="closePopup closePopup_js"><span class="icon-cross"></span></span>
            </div>
        </div>
    </div>

@endsection
