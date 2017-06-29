@extends('layouts.app')

@section('content')

			<main class="mainContent">
				<div class="container">
					<div class="row align-items-center page__title">
						<div class="col-md-12">
							<h2><span class="icon-settings"></span><span>Настройки</span></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="cardStyle cardStyle_noPaddings">
								<div class="tabsWrap">
									<div class="tabs">
										<div class="tabs_block tabs_block_js">
											<ul class="tabs">
												<li class="tabs__item active"><span>Мой аккаунт</span></li>
												<li class="tabs__item"><span>Мои устройства</span></li>
												<li class="tabs__item"><span>Платежные карты</span></li>
											</ul>
											<div class="box box_js visible personalData">
												<div class="personalData__block">
													<div class="box__title align-items-center">
														<h5 class="box__name">Личные данные</h5>
														<span><span class="icon-check-symbol"></span></i> Изменения успешно сохранены</span>
													</div>
													<div class="row inputsSet">
														<div class="col-md-6">
															<div class="form-group">
																<label for="exampleInputEmail1">Ф.И.О</label>
																<input type="text" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="Васильев Марк Олегович">
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label for="exampleInputEmail1">Ф.И.О</label>
																<input type="text" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="Васильев Марк Олегович">
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label for="exampleInputEmail1">Ф.И.О</label>
																<input type="text" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="Васильев Марк Олегович">
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label for="exampleInputEmail1">Ф.И.О</label>
																<input type="text" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="Васильев Марк Олегович">
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
												</div>
												<div class="personalData__block">
													<div class="box__title align-items-center">
														<h5 class="box__name">Контакты</h5>
														<span><span class="icon-check-symbol"></span></i> Изменения успешно сохранены</span>
													</div>
													<div class="row inputsSet">
														<div class="col-md-6">
															<div class="form-group">
																<label for="exampleInputEmail1">Телефон:</label>
																<input type="text" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="Васильев Марк Олегович">
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label for="exampleInputEmail1">Email:</label>
																<input type="text" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="Васильев Марк Олегович">
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
													</div>
												</div>
												<div class="personalData__block">
													<div class="box__title align-items-center">
														<h5 class="box__name">Личные данные</h5>
														<span><span class="icon-check-symbol"></span></i> Изменения успешно сохранены</span>
													</div>
													<div class="row inputsSet">
														<div class="col-md-4">
															<div class="form-group">
																<label for="exampleInputEmail1">Пароль:</label>
																<input type="password" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="123456789">
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="exampleInputEmail1">Новый пароль:</label>
																<input type="password" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="123456789">
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="exampleInputEmail1">Повторите пароль:</label>
																<input type="password" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="123456789">
																<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
															</div>
														</div>
														<div class="col-md-12">
															<button type="submit" class="btn btnStyle btnStyle_сolor">Обновить пароль</button>
														</div>
													</div>
												</div>
											</div>
											<div class="box box_js">
												<div class="box__title align-items-center">
													<h5 class="box__name">Мои контролеры</h5>
													<button id="addCounter" class="btn btnStyle btnStyle_сolor">Новый контролер</button>
												</div>
												<div id="substrate"></div>
												<div class="inspectors">
													<div class="inspector">
														<div class="inspector__pannel">
															<div class="inspector__info">
																<div class="inspector__title">Домик у моря</div>
																<div class="inspector__address">г. Харьков, ул. Богдана Хмельницкого, д.2</div>
																<div class="inspector__id">8F-4G-1F-4A-4G-4D</div>
															</div>
															<div class="inspector__mobileBtns inspector__mobileBtns_js"><span class="icon-ellipsis"></span></div>
															<div class="inspector__btns inspector__btns_js">
																<button class="btn btnStyle btnStyle_сolorless inspector__btn"><span class="icon-disabled"></span> <span>Заблокировать</span></button>
																<button class="btn btnStyle btnStyle_сolorless inspector__btn"><span class="icon-move"></span> Переместить</button>
																<button class="btn btnStyle btnStyle_сolorless inspector__btn"><span class="icon-cross"></span> Удалить</button>
															</div>
														</div>
														<div class="inspector__counters">
															<div class="inspector__countersTitle align-items-center">
																<span>Счетчики</span>
																<button class="btn btnStyle btnStyle_сolorgray">Добавить счетчик</button>
															</div>
															<div class="inspector__countersList">
																<ul class="counters__list">
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="inspector">
														<div class="inspector__pannel">
															<div class="inspector__info">
																<div class="inspector__title">Домик у моря</div>
																<div class="inspector__address">г. Харьков, ул. Богдана Хмельницкого, д.2</div>
																<div class="inspector__id">8F-4G-1F-4A-4G-4D</div>
															</div>
															<div class="inspector__mobileBtns inspector__mobileBtns_js"><span class="icon-ellipsis"></span></div>
															<div class="inspector__btns inspector__btns_js">
																<button class="btn btnStyle btnStyle_сolorless inspector__btn"><span class="icon-disabled"></span> <span>Заблокировать</span></button>
																<button class="btn btnStyle btnStyle_сolorless inspector__btn"><span class="icon-move"></span> Переместить</button>
																<button class="btn btnStyle btnStyle_сolorless inspector__btn"><span class="icon-cross"></span> Удалить</button>
															</div>
														</div>
														<div class="inspector__counters">
															<div class="inspector__countersTitle">
																<span>Счетчики</span>
																<button class="btn btnStyle btnStyle_сolorgray">Добавить счетчик</button>
															</div>
															<div class="inspector__countersList">
																<ul class="counters__list">
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="inspector">
														<div class="inspector__pannel">
															<div class="inspector__info">
																<div class="inspector__title">Домик у моря</div>
																<div class="inspector__address">г. Харьков, ул. Богдана Хмельницкого, д.2</div>
																<div class="inspector__id">8F-4G-1F-4A-4G-4D</div>
															</div>
															<div class="inspector__mobileBtns inspector__mobileBtns_js"><span class="icon-ellipsis"></span></div>
															<div class="inspector__btns inspector__btns_js">
																<button class="btn btnStyle btnStyle_сolorless inspector__btn"><span class="icon-disabled"></span> <span>Заблокировать</span></button>
																<button class="btn btnStyle btnStyle_сolorless inspector__btn"><span class="icon-move"></span> Переместить</button>
																<button class="btn btnStyle btnStyle_сolorless inspector__btn"><span class="icon-cross"></span> Удалить</button>
															</div>
														</div>
														<div class="inspector__counters">
															<div class="inspector__countersTitle">
																<span>Счетчики</span>
																<button class="btn btnStyle btnStyle_сolorgray">Добавить счетчик</button>
															</div>
															<div class="inspector__countersList">
																<ul class="counters__list">
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																	<li class="counterItem">
																		<span class="counterIcon icon-high-voltage"></span>
																		<span class="counterItem__details">
																			<span class="counterItem__name">Электричество</span>
																			<span class="counterItem__firm">(Nokia sm-455 id123456)</span>
																			<span class="counterItem__indications">11000 <span class="counterItem__units">кВт</span></span>
																		</span>
																		<span class="icon-ellipsis counterItem__mobileControls counterItem__mobileControls_js"></span>
																		<span class="counterItem__controls">
																			<span class="icon-disabled counterItem__control blockageBtn_js"> <span class="controlText"> Заблокировать</span></span>
																			<span class="icon-cross counterItem__control deletionBtn_js"> <span class="controlText"> Удалить</span></span>
																		</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="box box_js">
												<div class="box__title align-items-center">
													<h5 class="box__name">Мои карты</h5>
													<button class="btn btnStyle btnStyle_сolor">Новая карта</button>
												</div>
												<div class="row bankCards">
													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
														<div class="bankCard">
															<div class="bankCard__title">
																<span class="bankCard__bankName">ПриватБанк</span>
																<span class="bankCard__settings text-right"><span class="icon-settings"></span></span>
															</div>
															<div class="bankCard__content">
																<div class="bankCard__info"></div>
																<div class="bankCard__number text-center">4149 **** **** 9343</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
														<div class="bankCard">
															<div class="bankCard__title">
																<span class="bankCard__bankName">ПриватБанк</span>
																<span class="bankCard__settings text-right"><span class="icon-settings"></span></span>
															</div>
															<div class="bankCard__content">
																<div class="bankCard__info"></div>
																<div class="bankCard__number text-center">4149 **** **** 9343</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
														<div class="bankCard">
															<div class="bankCard__title">
																<span class="bankCard__bankName">ПриватБанк</span>
																<span class="bankCard__settings text-right"><span class="icon-settings"></span></span>
															</div>
															<div class="bankCard__content">
																<div class="bankCard__info"></div>
																<div class="bankCard__number text-center">4149 **** **** 9343</div>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
														<div class="bankCard">
															<div class="bankCard__title">
																<span class="bankCard__bankName">ПриватБанк</span>
																<span class="bankCard__settings text-right"><span class="icon-settings"></span></span>
															</div>
															<div class="bankCard__content">
																<div class="bankCard__info"></div>
																<div class="bankCard__number text-center">4149 **** **** 9343</div>
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