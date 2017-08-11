<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Склад</title>
	<link rel="stylesheet" href="./dest/normalize.css">
	<link rel="stylesheet" href="./dest/style.min.css">
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
			<div class="vertical-tabs main-content__vertical-tabs vertical-tabs--style clearfix">
				<div class="inner-scrollbar-wrapper">
					<div class="vertical-menu vertical-tabs__vertical-menu vertical-menu--style">
						<div class="vertical-menu__wrapper vertical-menu__wrapper--style">
							<h1 class="vertical-tabs__header vertical-tabs__header--style">управление</h1>
							<ul class="vertical-nav vertical-tabs__vertical-nav vertical-nav--style">
								<li class="vertical-nav__item vertical-nav__item--style">
									<a href="#vertical-tab1" class="vertical-nav__link vertical-nav__link--style vertical-nav__link--active">сотрудники</a>
								</li>
								<li class="vertical-nav__item vertical-nav__item--style">
									<a href="#vertical-tab2" class="vertical-nav__link vertical-nav__link--style">заработная плата</a>
								</li>
								<li class="vertical-nav__item vertical-nav__item--style">
									<a href="#vertical-tab3" class="vertical-nav__link vertical-nav__link--style">график работ</a>
								</li>
								<li class="vertical-nav__item vertical-nav__item--style">
									<a href="#vertical-tab4" class="vertical-nav__link vertical-nav__link--style">ресурсы</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="vertical-tabs__container vertical-tabs__container--style">
					<div id="vertical-tab1" class="vertical-tabs__content vertical-tabs__content--style vertical-tabs__content--active">
						<table class="employers employers__table employers__table--style">
							<tr class="employers__header-row employers__header-row--style">
								<th class="employers__header employers__header--style">Ф.И.О</th>
								<th class="employers__header employers__header--style">должность</th>
								<th class="employers__header employers__header--style">анкета</th>
								<th class="employers__header employers__header--style">з/п</th>
								<th class="employers__header employers__header--style">отдел</th>
								<th class="employers__header employers__header--style">норматив</th>
							</tr>
							<tr class="employers__row employers__row--style">
								<td class="employers__data employers__data--style">data1</td>
								<td class="employers__data employers__data--style">data2</td>
								<td class="employers__data employers__data--style">data3</td>
								<td class="employers__data employers__data--style">data4</td>
								<td class="employers__data employers__data--style">data5</td>
								<td class="employers__data employers__data--style">data6</td>
							</tr>
						</table>
					</div>
					<div id="vertical-tab2" class="vertical-tabs__content vertical-tabs__content--style">
						<table class="salary salary__table salary__table--style">
							<tr class="salary__header-row salary__header-row--style">
								<th class="salary__header salary__header--style">Ф.И.О</th>
								<th class="salary__header salary__header--style">кол-во часов</th>
								<th class="salary__header salary__header--style">доп.бонусы</th>
								<th class="salary__header salary__header--style">штрафы</th>
							</tr>
							<tr class="salary__row salary__row--style">
								<td class="salary__data salary__data--style">data1</td>
								<td class="salary__data salary__data--style">data2</td>
								<td class="salary__data salary__data--style">data3</td>
								<td class="salary__data salary__data--style">data4</td>
							</tr>
						</table>
					</div>
					<div id="vertical-tab3" class="vertical-tabs__content vertical-tabs__content--style">
						<table class="schedule schedule__table schedule__table--style">
							<tr class="schedule__one-row schedule__one-row--style">
								<td class="schedule__data schedule__data--style schedule__data--month" colspan="8">месяц</td>
							</tr>
							<tr class="schedule__header-row schedule__header-row--style">
								<th class="schedule__header schedule__header--style schedule__header--purple">
								</th>
								<th class="schedule__header schedule__header--style schedule__header--purple">пн</th>
								<th class="schedule__header schedule__header--style schedule__header--purple">вт</th>
								<th class="schedule__header schedule__header--style schedule__header--purple">ср</th>
								<th class="schedule__header schedule__header--style schedule__header--purple">чт</th>
								<th class="schedule__header schedule__header--style schedule__header--purple">пт</th>
								<th class="schedule__header schedule__header--style schedule__header--purple">сб</th>
								<th class="schedule__header schedule__header--style schedule__header--purple">вс</th>
							</tr>
							<tr class="schedule__header-row schedule__header-row--style">
								<td class="schedule__header schedule__header--style">
									Ф.И.О
								</td>
								<td class="schedule__header schedule__header--style">
								</td>
								<td class="schedule__header schedule__header--style">
								</td>
								<td class="schedule__header schedule__header--style"></td>
								<td class="schedule__header schedule__header--style"></td>
								<td class="schedule__header schedule__header--style"></td>
								<td class="schedule__header schedule__header--style"></td>
								<td class="schedule__header schedule__header--style"></td>
							</tr>
							<tr class="schedule__row schedule__row--style">
								<td class="schedule__data schedule__data--style">data1</td>
								<td class="schedule__data schedule__data--style">data2</td>
								<td class="schedule__data schedule__data--style">data3</td>
								<td class="schedule__data schedule__data--style">data4</td>
								<td class="schedule__data schedule__data--style">data5</td>
								<td class="schedule__data schedule__data--style">data6</td>
								<td class="schedule__data schedule__data--style">data7</td>
								<td class="schedule__data schedule__data--style">data8</td>
							</tr>
						</table>	
					</div>
					<div id="vertical-tab4" class="vertical-tabs__content vertical-tabs__content--style">
						<table class="resource resource__table resource__table--style">
							<tr class="resource__header-row resource__header-row--style">
								<th class="resource__header resource__header--style">Наименование ресурса</th>
								<th class="resource__header resource__header--style">ответственный</th>
								<th class="resource__header resource__header--style">отдел</th>
							</tr>
							<tr class="resource__row resource__row--style">
								<td class="resource__data resource__data--style">data1</td>
								<td class="resource__data resource__data--style">data2</td>
								<td class="resource__data resource__data--style">data3</td>
							</tr>
						</table>		
					</div>
				</div>
			</div>
		</div>
	</main>

<script src="dest/libs.min.js"></script>
<script src="dest/main.min.js"></script></body>
</html>