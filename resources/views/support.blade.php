@extends('layouts.app')

@section('content')
			<main class="mainContent">
				<div class="container">
					<div class="row align-items-center page__title">
						<div class="col-md-8">
							<h2><i class="fa fa-bar-chart" aria-hidden="true"></i><span>Техподдержка</span></h2>
						</div>
						<div class="col-md-4 text-right">
							<button class="btn btnStyle btnStyle_сolor">Новый вопрос</button>
							<!-- <Popup
								class="btn btnStyle btnStyle_сolor"
								content={(
								  <FormCreateEntity />
								)}

							>Добавить объект</Popup> -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="cardStyle cardStyle--withTitle">
								<div class="cardStyle--withTitle__title blackText">Просмотр</div>
								<div class="supportNav">
									<ul>
										<li class="supportNav__item flexRow"><span>Все вопросы</span><span class="itemIndicator">5</span></li>
										<li class="supportNav__item flexRow"><span>Открытые вопросы</span><span class="itemIndicator itemIndicator--color-green">5</span></li>
										<li class="supportNav__item flexRow"><span>Отвеченные вопросы</span><span class="itemIndicator itemIndicator--color-blue">5</span></li>
										<li class="supportNav__item flexRow"><span>Закрытые вопросы</span><span class="itemIndicator itemIndicator--color-gray">5</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="cardStyle cardStyle--withTitle">
								<div class="cardStyle--withTitle__title blackText">Новый вопрос</div>
								<div class="cardStyle--withTitle__content">
									<form action="" class="form">
										<div class="form-group">
											<label for="exampleInputEmail1">Тема обращения</label>
											<input type="text" class="form-control form-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
											<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
										</div>
										<div class="form-group">
											<label for="exampleTextarea">Полный текст обращения</label>
											<textarea class="form-control form-field" id="exampleTextarea" rows="5" cols="30"></textarea>
										</div>
										<div class="form-group form_fileInput">
											<label for="exampleInputFile" class="formLabelFlex">
												<span><i class="fa fa-paperclip clip" aria-hidden="true"></i> Прикрепить файл</span>
												<span><button class="btn btnStyle btnStyle_сolor">Новый вопрос</button></span>
											</label>
											<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
											<!-- <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

@endsection