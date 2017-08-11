<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Склад</title>
	<link rel="stylesheet" href="./dest/normalize.css">
	<link rel="stylesheet" href="./dest/style.min.css">
	<link rel="stylesheet" href="./css/doc.css">
</head>
<body class="page">

	<div class="main-finder page__main-finder main-finder--style">
		<div class="finder-input-wrapper">
			<form action="" class="finder-form finder-form--style">
				<input type="text" class="finder-input main-finder__input main-finder__input--style" placeholder="Поиск">
			</form>
		</div>
	</div>
		
	<main class="main page__main main--style clearfix">
		
		<?php require_once "navbar.php"; ?>
		<div class="main-content main__main-content main-content--style">
			<div class="tabs main-content__tabs tabs--style">
				<div class="content-function content-function--style clearfix">
					<ul class="tab-links tabs__tab-links tab-links--style">
						<li class="tab-links__item tab-link__item--style"><a href="#tab1" class="tab-link tab-link--active tab-link--style">Все</a></li><!-- 
						--><li class="tab-links__item tab-link__item--style"><a href="#tab2" class="tab-link tab-link--style">Мои</a></li><!--
						--><li class="tab-links__item tab-link__item--style"><a href="#tab3" class="tab-link tab-link--style">Менеджер</a></li>
					</ul>
					<ul class="date-change content-function__date-change date-change--style">
						<li class="date-change__item date-change__item--style"><a href="#" class="date-change__link date-change__link--style date-change__link--active">сегодня</a></li><!--
						--><li class="date-change__item date-change__item--style"><a href="#" class="date-change__link date-change__link--style">неделя</a></li><!--
						--><li class="date-change__item date-change__item--style"><a href="#" class="date-change__link date-change__link--style">месяц</a></li><!--
						--><li class="date-change__item date-change__item--style"><a href="#" class="date-change__link date-change__link--style">весь период</a></li>
					</ul>
					<div class="content-settings-wrapper">
						
					</div>
				</div>

				<div class="tab-content tabs__tab-content tab-content--style">
					<div id="tab1" class="tab tab-content__tab tab-content__tab--style tab--active">
						
						<div class="income-wrapper main-content__income-wrapper income-wrapper--style">
							<table class="tableborder">
								<tr class="income-heading-row table-income__income-heading-row income-heading-row--style">
									<th class="income-heading__col income-heading__col--style">
										наименование товара
									</th>
									<th class="income-heading__col income-heading__col--style">
										контрагент
									</th>
									<th class="income-heading__col income-heading__col--style">
										ID груза
									</th>
									<th class="income-heading__col income-heading__col--style">
										кол-во товара
									</th>
									<th class="income-heading__col income-heading__col--style">
										план дата отгрузки 
									</th>
									<th class="income-heading__col income-heading__col--style">
										факт дата отгрузки
									</th>
									<th class="income-heading__col income-heading__col--style">
										тип хранения
									</th>
									<th class="income-heading__col income-heading__col--style">
										оплата хранени
									</th>
									
								</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
								</tr>
							</table>
						</div>
					</div>
					<div id="tab2" class="tab tab-content__tab tab-content__tab--style">
						<div class="income-wrapper main-content__income-wrapper income-wrapper--style">
							<table class="tableborder">
								<tr class="income-heading-row table-income__income-heading-row income-heading-row--style">
									<th class="income-heading__col income-heading__col--style">
										наименование товара
									</th>
									<th class="income-heading__col income-heading__col--style">
										контрагент
									</th>
									<th class="income-heading__col income-heading__col--style">
										ID груза
									</th>
									<th class="income-heading__col income-heading__col--style">
										кол-во товара
									</th>
									<th class="income-heading__col income-heading__col--style">
										план дата отгрузки 
									</th>
									<th class="income-heading__col income-heading__col--style">
										факт дата отгрузки
									</th>
									<th class="income-heading__col income-heading__col--style">
										тип хранения
									</th>
									<th class="income-heading__col income-heading__col--style">
										оплата хранени
									</th>
									
								</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
								</tr>
							</table>	
						</div>
					</div>
					<div id="tab3" class="tab tab-content__tab tab-content__tab--style">
						<div class="income-wrapper main-content__income-wrapper income-wrapper--style">
							<table class="tableborder">
								<tr class="income-heading-row table-income__income-heading-row income-heading-row--style">
									<th class="income-heading__col income-heading__col--style">
										наименование товара
									</th>
									<th class="income-heading__col income-heading__col--style">
										контрагент
									</th>
									<th class="income-heading__col income-heading__col--style">
										ID груза
									</th>
									<th class="income-heading__col income-heading__col--style">
										кол-во товара
									</th>
									<th class="income-heading__col income-heading__col--style">
										план дата отгрузки 
									</th>
									<th class="income-heading__col income-heading__col--style">
										факт дата отгрузки
									</th>
									<th class="income-heading__col income-heading__col--style">
										тип хранения
									</th>
									<th class="income-heading__col income-heading__col--style">
										оплата хранени
									</th>
									
								</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
								</tr>
							</table>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<script src="dest/libs.min.js"></script>
	<script src="dest/main.min.js"></script>
</body>
</html>