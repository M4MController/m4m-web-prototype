@foreach($objects as $object)
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="cardStyle objectWrap">
            <div class="objectWrap__title">
                                                <span class="objectWrap__name">
                                                    <strong class="objectName blackText">{{$object['name']}}</strong>
                                                    <span class="objectIndicator"></span>
                                                </span>
                {{--<small class="objectTitle">система "{{$object->category}}"</small>--}}
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
                            <span class="cardRow__item text-right blackText">{{ $object['month'] }} кВт</span>
                        </div>
                        <!-- <StakedBarChart current_indicators={300} compared={400} special_color={true} /> -->
                    </div>

                    <div class="stakedBarChartWrap">
                        <div class="cardRow">
                            <span class="cardRow__item">За прошлый месяц:</span>
                            <span class="cardRow__item text-right blackText">{{ $object['prev_month'] }} кВт</span>
                        </div>
                        <!-- <StakedBarChart current_indicators={200} compared={400} /> -->
                    </div>

                    <div class="stakedBarChartWrap">
                        <div class="cardRow">
                            <span class="cardRow__item">Среднее за год:</span>
                            <span class="cardRow__item text-right blackText">{{ $object['prev_year'] }} кВт</span>
                        </div>
                        <!-- <StakedBarChart current_indicators={250} compared={400} /> -->
                    </div>
                </div>
            </div>
            <div class="row cardBtnsWrap">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="/entity/{{$object['cotroller_id']}}"><button class="btn btnStyle btnStyle_сolorless">Подробнее</button></a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="/payment"><button class="btn btnStyle btnStyle_сolor">Оплатить</button></a>
                </div>
            </div>
        </div>
    </div>
@endforeach