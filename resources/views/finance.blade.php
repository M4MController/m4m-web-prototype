@extends('layouts.app')

@section('content')
	<main class="mainContent">
		<div class="container">
			<div class="row align-items-center page__title">
				<div class="col-md-12">
					<h2><span class="icon-settings"></span><span>Финансы</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="cardStyle cardStyle_noPaddings">
						<div class="tabsWrap tabsWrap_minHeight">
							<div class="tabs">
								<div class="tabs_block tabs_block_js tabs_block_row">
									<ul class="tabs tabs_col">
										<li class="tabs__item tabs__item_col font-weight-bold active"><span>Дом у дороги</span></li>
										<li class="tabs__item tabs__item_col font-weight-bold"><span>Дом у озера</span></li>
										<li class="tabs__item tabs__item_col font-weight-bold"><span>Дом у костра</span></li>
									</ul>
									<div class="box box_js visible archiveMarker archiveMarker_js">
										<div class="finance finance_js">
											<div class="finance__title d-flex justify-content-between align-items-center">
												<div class="">
													<h4 class="font-weight-bold">Дом у дороги</h4>
													<div class="financeSmallText">г. Харьков, ул. Богдана Хмельницкого, д.2</div>
													<div class="financeSmallText">8F-4G-1F-4A-4G-4D</div>
												</div>
												<div>
													<button class="btn btnStyle btnStyle_сolorless toShowArchive_js"><span class="icon-disabled"></span> История платежей</button>
												</div>
											</div>

											<div class="finance__details">
												<div class="finance__info d-flex">
													<div><span class="financeSmallText">Оператор</span><br><span class="financeBiggerBasicText">Ростелеком</span></div>
													<div><span class="financeSmallText">Лицевой счет:</span><br><span class="financeBiggerBasicText">123456789</span></div>
													<div><span class="financeSmallText">Call центр</span><br><span class="financeBiggerBasicText">+7 (123) 123-123-123</span></div>
												</div>
												<div class="financeSmallerBasicText">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas harum numquam reiciendis fugiat quos quam et cumque eos, consequatur hic, sequi amet tenetur delectus? Cum quia, sed vero illum eos. Voluptas harum numquam reiciendis fugiat quos quam et cumque eos, consequatur hic, sequi amet tenetur delectus? Cum quia, sed vero illum eos.
												</div>
											</div>

											<div class="finance__formWrap">
												<form action="/" class="finance__form">
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>

													<div class="finance__submit text-right">
														Всего к оплате 14000 руб
														<button class="btn btnStyle btnStyle_сolor">Оплатить</button>
													</div>
												</form>
											</div>
										</div>

										<div class="financeArchive financeArchive_js">
											<div class="d-flex justify-content-between align-items-center">
												<h4 class="font-weight-bold">Статистика платежей</h4>

												<button class="btn btnStyle btnStyle_сolorless financeSmallerBasicText toShowArchive_js"><span class="icon-disabled"></span> Вернуться к оплате</button>
											</div>
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<form action="/" class="form-inline financeArchive__calendarForm financeSmallerBasicText">
														<!-- <label class="sr-only" for="inlineFormInputGroup">Username</label> -->
														<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="01.04.2017 - 11.04.2017">
															<div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
														</div>
														<button type="submit" class="btn btnStyle btnStyle_сolor financeSmallerBasicText">Показать</button>
													</form>
												</div>

												<div>
													<form action="/" class="d-inline-block financeArchive__searchForm financeSmallerBasicText">
														<!-- <label class="sr-only" for="inlineFormInputGroup">Username</label> -->
														<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															<input type="search" class="form-control" id="inlineFormInputGroup" placeholder="Поиск">
															<div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
														</div>
													</form>
													<form action="/" class="d-inline-block ">
														<label for="downloadExel"><img src="images/excel.svg" alt=""></label>
														<input type="file" class="form-control" id="downloadExel">
													</form>
												</div>
											</div>
											<div class="financeArchive__check">
												<div class="financeArchive__table faTable">
													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Газовый котел</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Интернет</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>
													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>

													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>

															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>

													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>

															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>

													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>

															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="box box_js archiveMarker archiveMarker_js">
										<div class="finance finance_js">
											<div class="finance__title d-flex justify-content-between align-items-center">
												<div class="">
													<h4 class="font-weight-bold">Дом у озера</h4>
													<div class="financeSmallText">г. Харьков, ул. Богдана Хмельницкого, д.2</div>
													<div class="financeSmallText">8F-4G-1F-4A-4G-4D</div>
												</div>
												<div>
													<button class="btn btnStyle btnStyle_сolorless toShowArchive_js"><span class="icon-disabled"></span> История платежей</button>
												</div>
											</div>

											<div class="finance__details">
												<div class="finance__info d-flex">
													<div><span class="financeSmallText">Оператор</span><br><span class="financeBiggerBasicText">Ростелеком</span></div>
													<div><span class="financeSmallText">Лицевой счет:</span><br><span class="financeBiggerBasicText">123456789</span></div>
													<div><span class="financeSmallText">Call центр</span><br><span class="financeBiggerBasicText">+7 (123) 123-123-123</span></div>
												</div>
												<div class="financeSmallerBasicText">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas harum numquam reiciendis fugiat quos quam et cumque eos, consequatur hic, sequi amet tenetur delectus? Cum quia, sed vero illum eos. Voluptas harum numquam reiciendis fugiat quos quam et cumque eos, consequatur hic, sequi amet tenetur delectus? Cum quia, sed vero illum eos.
												</div>
											</div>

											<div class="finance__formWrap">
												<form action="/" class="finance__form">
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>

													<div class="finance__submit text-right">
														Всего к оплате 14000 руб
														<button class="btn btnStyle btnStyle_сolor">Оплатить</button>
													</div>
												</form>
											</div>
										</div>

										<div class="financeArchive financeArchive_js">
											<div class="d-flex justify-content-between align-items-center">
												<h4 class="font-weight-bold">Статистика платежей</h4>

												<button class="btn btnStyle btnStyle_сolorless financeSmallerBasicText toShowArchive_js"><span class="icon-disabled"></span> Вернуться к оплате</button>
											</div>
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<form action="/" class="form-inline financeArchive__calendarForm financeSmallerBasicText">
														<!-- <label class="sr-only" for="inlineFormInputGroup">Username</label> -->
														<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="01.04.2017 - 11.04.2017">
															<div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
														</div>
														<button type="submit" class="btn btnStyle btnStyle_сolor financeSmallerBasicText">Показать</button>
													</form>
												</div>

												<div>
													<form action="/" class="d-inline-block financeArchive__searchForm financeSmallerBasicText">
														<!-- <label class="sr-only" for="inlineFormInputGroup">Username</label> -->
														<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															<input type="search" class="form-control" id="inlineFormInputGroup" placeholder="Поиск">
															<div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
														</div>
													</form>
													<form action="/" class="d-inline-block ">
														<label for="downloadExel"><img src="images/excel.svg" alt=""></label>
														<input type="file" class="form-control" id="downloadExel">
													</form>
												</div>
											</div>
											<div class="financeArchive__check">
												<div class="financeArchive__table faTable">
													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Газовый котел</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Интернет</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>
													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>

													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>

															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>

													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>

															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>

													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>

															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="box box_js archiveMarker archiveMarker_js">
										<div class="finance finance_js">
											<div class="finance__title d-flex justify-content-between align-items-center">
												<div class="">
													<h4 class="font-weight-bold">Дом у костра</h4>
													<div class="financeSmallText">г. Харьков, ул. Богдана Хмельницкого, д.2</div>
													<div class="financeSmallText">8F-4G-1F-4A-4G-4D</div>
												</div>
												<div>
													<button class="btn btnStyle btnStyle_сolorless toShowArchive_js"><span class="icon-disabled"></span> История платежей</button>
												</div>
											</div>

											<div class="finance__details">
												<div class="finance__info d-flex">
													<div><span class="financeSmallText">Оператор</span><br><span class="financeBiggerBasicText">Ростелеком</span></div>
													<div><span class="financeSmallText">Лицевой счет:</span><br><span class="financeBiggerBasicText">123456789</span></div>
													<div><span class="financeSmallText">Call центр</span><br><span class="financeBiggerBasicText">+7 (123) 123-123-123</span></div>
												</div>
												<div class="financeSmallerBasicText">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas harum numquam reiciendis fugiat quos quam et cumque eos, consequatur hic, sequi amet tenetur delectus? Cum quia, sed vero illum eos. Voluptas harum numquam reiciendis fugiat quos quam et cumque eos, consequatur hic, sequi amet tenetur delectus? Cum quia, sed vero illum eos.
												</div>
											</div>

											<div class="finance__formWrap">
												<form action="/" class="finance__form">
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
													<div class="finance__service d-flex justify-content-between align-items-center">
														<div class="">
															<div class="finance__serviceTitle">Горячая вода</div>
															<div class="finance__serviceDetails d-flex">
																<div class="financeSmallerBasicText">Долг: 1000руб</div>
																<div class="financeSmallerBasicText">За последний месяц: 600руб</div>
															</div>
														</div>

														<div class="finance__inputWrap">
															<div class="form-group">
																<input type="number" class="form-control form-field" id="exampleInputlorem" aria-describedby="emailHelp" placeholder="" value="1000">
																<label for="exampleInputlorem" class="financeSmallerBasicText">руб.</label>
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>

													<div class="finance__submit text-right">
														Всего к оплате 14000 руб
														<button class="btn btnStyle btnStyle_сolor">Оплатить</button>
													</div>
												</form>
											</div>
										</div>

										<div class="financeArchive financeArchive_js">
											<div class="d-flex justify-content-between align-items-center">
												<h4 class="font-weight-bold">Статистика платежей</h4>

												<button class="btn btnStyle btnStyle_сolorless financeSmallerBasicText toShowArchive_js"><span class="icon-disabled"></span> Вернуться к оплате</button>
											</div>
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<form action="/" class="form-inline financeArchive__calendarForm financeSmallerBasicText">
														<!-- <label class="sr-only" for="inlineFormInputGroup">Username</label> -->
														<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="01.04.2017 - 11.04.2017">
															<div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
														</div>
														<button type="submit" class="btn btnStyle btnStyle_сolor financeSmallerBasicText">Показать</button>
													</form>
												</div>

												<div>
													<form action="/" class="d-inline-block financeArchive__searchForm financeSmallerBasicText">
														<!-- <label class="sr-only" for="inlineFormInputGroup">Username</label> -->
														<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															<input type="search" class="form-control" id="inlineFormInputGroup" placeholder="Поиск">
															<div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
														</div>
													</form>
													<form action="/" class="d-inline-block ">
														<label for="downloadExel"><img src="images/excel.svg" alt=""></label>
														<input type="file" class="form-control" id="downloadExel">
													</form>
												</div>
											</div>
											<div class="financeArchive__check">
												<div class="financeArchive__table faTable">
													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Газовый котел</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Интернет</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>
													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>

													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>

															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>

													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>

															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>

													<div class="faTable__head">
														<div class="faTable__row d-flex justify-content-between align-items-center font-weight-bold">
															<div class="faTable__col financeSmallerBasicText">11 апреля <span> 11:11</span></div>
															<div class="faTable__col text-right financeBiggerBasicText">15000 руб</div>
														</div>
													</div>
													<div class="faTable__body financeSmallerBasicText">
														<div class="faTable__row d-flex">
															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Холодная вода</div>
																<div>1300 руб</div>
															</div>

															<div class="faTable__col d-flex justify-content-between align-items-center">
																<div>Горячая вода</div>
																<div>1300 руб</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

@endsection