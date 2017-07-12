@extends('layouts.app')
@section('content')
	<main class="mainContent">
		<div class="container" id="sensors_block">
			@foreach($objects as $object)
			<div class="row align-items-center page__title">
				<div class="col-md-12">
					<h2><span class="icon-home"></span><span class="controllerid" data-controllerid="{{$object['controller_id']}}">{{$object['name']}}</span></h2>
				</div>
			</div>
			<div class="row havings">
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="cardStyle">
						<div class="service">
							<div class="service__title">
								<span class="counterIcon icon-high-voltage"></span>
								<div class="service__item">
									<h5 class="service__name blackText">Электроенергия <span class="objectIndicator"></span></h5>
									<small class="service__company">{{$object['Company']}}</small>
								</div>
							</div>

							<div class="payableBlock">
								<div class="service__accrual cardRow">
									<span class="cardRow__item">Начисление:</span>
									<span class="cardRow__item text-right blackText sum"><b>{{ $object['accrual'] }}</b> руб</span>
								</div>

								<div class="service__overpayment cardRow">
									<span class="cardRow__item">Переплата:</span>
									<span class="cardRow__item text-right blackText">{{ $object['over'] }} руб</span>
								</div>

								<div class="service__total cardRow">
									<span class="cardRow__item">И того к оплате:</span>
									<span class="cardRow__item text-right blackText">{{ $object['result'] }} руб</span>
								</div>
							</div>

							<div class="stakedBarChartWrap">
								<div class="cardRow">
									<span class="cardRow__item">За месяц:</span>
									<span class="cardRow__item text-right"><span class="blackText">{{ $object['stats']['current_month'] }} </span> <small>({{ $object['stats']['current_month'] }} прогноз)</small></span>
								</div>
								<div class="stakedBarChart stakedBarChart_month"></div>
								<!-- <StakedBarChart current_indicators={current_indicators} compared={prediction} special_color={true} /> -->
							</div>

							<div class="stakedBarChartWrap">
								<div class="cardRow">
									<span class="cardRow__item">За прошлый месяц:</span>
									<span class="cardRow__item text-right"><span class="blackText">{{ $object['stats']['prev_year_month'] }} </span></span>
								</div>
								<div class="stakedBarChart stakedBarChart_lastMonth"></div>
								<!-- <StakedBarChart current_indicators={current_indicators} compared={prediction} /> -->
							</div>

							<div class="stakedBarChartWrap">
								<div class="cardRow">
									<span class="cardRow__item">Среднее за год:</span>
									<span class="cardRow__item text-right"><span class="blackText">{{ $object['stats']['prev_year_average'] }} </span></span>
								</div>
								<div class="stakedBarChart stakedBarChart_avgYear"></div>
								<!-- <StakedBarChart current_indicators={current_indicators} compared={prediction} /> -->
							</div>

							<div class="row cardBtnsWrap">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<button class="openPopup_js btn btnStyle btnStyle_сolorless">Подробнее</button>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="/payment" class="btn btnStyle btnStyle_сolor">Оплатить</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</main>
	<script>
        $(document).ready(function() {
            setInterval(function () {
                var id = $('.controllerid').data('controllerid');
                $.ajax({
                    url: '/entity/update/view',
                    dataType: 'json',
                    data: {
                        id: id
                    },
                    type: 'GET',
                    success: function (html) {
                        if (html.result) {
                            $('#sensors_block').empty();
                            $('#sensors_block').html(html.result);
                        }
                    }
                });
            }, 60*5*1000);
        });
	</script>
@endsection