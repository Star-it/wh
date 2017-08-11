<?php

	if (preg_match('/(?i)msie [2-9]/', @$_SERVER['HTTP_USER_AGENT'], $B)) {
		// Browsers IE 9 and below
		?>fuck you<?php
	} 
	else {

		if (preg_match('/(?i)chrome [0-23]/', @$_SERVER['HTTP_USER_AGENT'], $B)) {
			// Browsers chrome 23 and below
			?>fuck you<?php
		} 
		else {

			if (preg_match('/(?i)opera [0-14]/', @$_SERVER['HTTP_USER_AGENT'], $B)) {
			// Browsers opera 14 and below
			?>fuck you<?php
			} 
			else {
				if (preg_match('/(?i)mozilla [0-18]/', @$_SERVER['HTTP_USER_AGENT'], $B)) {
				// Browsers mozilla 18 and below
				?>fuck you<?php
				}
			}
		}
	}

				//header("Location:index.html");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Склад</title>
	<link rel="stylesheet" href="./dest/normalize.css">
	<link rel="stylesheet" href="./dest/style.min.css">
	<link rel="stylesheet" href="./css/Tcss.css">
	<link rel="stylesheet" href="./css/additional.css">
	<link rel="stylesheet" href="./grap.css">
	<link rel="stylesheet" href="./css/set.css">
	<link rel="stylesheet" href="./css/doc.css">


<script>
		function popup(){
			$(document).ready(function(){
				if($("#popup").css("display") == "none"){
					$("#popup").css("display", "block");
				}
				else{
					$("#popup").css("display", "none");
				}
			});
		}	
	</script>



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
		<?php require_once 'navbar.php'; ?>
		<div class="main-content main__main-content main-content--style">
			<div class="tabs main-content__tabs tabs--style">
				<div class="content-function content-function--style clearfix" ><div  style="text-align: center;">
							<ul class="tab-links tabs__tab-links tab-links--style" style="text-align: center;">
								<li class="tab-links__item tab-link__item--style">
									<a href="#vertical-tab1" class="tab-link tab-link--active tab-link--style">Пользователи/Права</a>
								</li>
								<li class="tab-links__item tab-link__item--style">
									<a href="#vertical-tab2" class="tab-link tab-link--style">Справочник</a>
								</li>
								<li class="tab-links__item tab-link__item--style">
									<a href="#vertical-tab3" class="tab-link tab-link--style">Интеграции</a>
								</li>
								<li class="tab-links__item tab-link__item--style">
									<a href="#vertical-tab4" class="tab-link tab-link--style">SLA</a>
								</li>
								<li class="tab-links__item tab-link__item--style">
									<a href="#vertical-tab5" class="tab-link tab-link--style">Профиль</a>
								</li>
								<li class="tab-links__item tab-link__item--style">
									<a href="#vertical-tab6" class="tab-link tab-link--style">Возможности</a>
								</li>
								<li class="tab-links__item tab-link__item--style">
									<a href="#vertical-tab7" class="tab-link tab-link--style">Транспорт</a>
								</li>
								
							</ul>
</div>
						</div>
					</div>
				<div class="tab-content tabs__tab-content tab-content--style">
				

					<div id="vertical-tab1" class="tab tab-content__tab tab-content__tab--style tab--active">
						


<div class="setting-form-wrapper setting-form-wrapper--style">
			<label  class="setting-role__adding-label--style">ПОЛЬЗОВАТЕЛИ</label>
							<div class="settings-roles__table-wrapper settings-roles__table-wrapper">
								
									<div class="settings-roles__table-adding settings-roles__table-adding--style">
									&#43;
									</div>
									<div id="drop-add" class="dropd__content dropd__content--style">
										<form action="#" class="settings-roles__adding-form settings-roles__adding-form--style">
											<label for="settings-adding-fio" class="settings-roles__adding-label settings-roles__adding-label--style">Ф.И.О.</label>
											<input type="text" class="settings-roles__adding-input settings-roles__adding-input--style" id="settings-adding-fio" name="adding-fio"><br>
											<label for="settings-adding-branch" class="settings-roles__adding-label settings-roles__adding-label--style">E-mail</label>
											<input type="text" class="settings-roles__adding-input settings-roles__adding-input--style" id="settings-adding-branch" name="adding-branch">
											<label for="" class="settings-roles__adding-label settings-roles__adding-label--style">
												права
											</label>
											<div class="settings-roles-right-wrapper">
											<div class="setting-role__adding-checkbox-wrapper">
											<label for="" class="settings-roles__adding-label--check">
												администратор
											</label>
												<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style"><br>
												<label for="" class="settings-roles__adding-label--check">
												активность
											</label>
												<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style"><br>
												<label for="" class="settings-roles__adding-label--check">
												шахматка
											</label>
												<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style"><br>
												<label for="" class="settings-roles__adding-label--check">
												расчеты
												</label>
												<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style"><br>
												<label for="" class="settings-roles__adding-label--check">
												инвентаризация
												</label>
												<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style"><br>
												<label for="" class="settings-roles__adding-label--check">
												документы
												</label>
												<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style"><br>
												<label for="" class="settings-roles__adding-label--check">
												управление
											</label>
												<input type="checkbox" class="settings-roles__adding-checkbox settings-roles__adding-checkbox--style"><br>
												</div>

											</div><br>
											<button class="role-button role-button--style">ОК</button>
										</form>
									</div>
								</div>
								
							<form action="" method="POST" class="setting-form setting-form--style">

								<div class="setting-form__common setting-form__common--style">
									<table class="table_role">
									<tr><td class="table_td table_td--style">Ф.И.О.</td>
									<td class="table_td table_td--style">E-mail</td>
									<td class="table_td table_td--style">Права</td>
									<td class="table_td table_td--style"><div class="s1">
									Действия <img src="./img/ar.png">
									</div>
									<div id="drop1" class="dropdow dropdow--style ">
										<ul>
						 <li><input class="btt" type="submit" value="удалить"></li>
						  <li><input class="btt" type="submit" value="редактировать"></li>
						   <li><input class="btt" type="submit" value="выслать пароль на E-mail"></li>
						 </ul>
									</div></td></tr>
									<tr><td><label class="table_input table_input--style" name="name"></td>
									<td><label class="table_input table_input--style"></td>
									<td><label class="table_input table_input--style"></td>
									<td></td></tr>
								</table>									
								</div>								
							</form>
							</div>



					</div>


		<div id="vertical-tab2" class="tab tab-content__tab tab-content__tab--style">
					
			
				

<div class="one">
<div class="notebook">
    <input type="radio" name="notebook1" id="notebook1_1" checked>
    <label for="notebook1_1">cправочник тригеров</label>
    <input type="radio" name="notebook1" id="notebook1_2">
    <label for="notebook1_2">услуги</label>
    <input type="radio" name="notebook1" id="notebook1_3">
    <label for="notebook1_3">условия оплаты</label>
    <input type="radio" name="notebook1" id="notebook1_4">
    <label for="notebook1_4">товар</label>
    <div class="vk2">
        <table class="tableborder">
								<tr class="income-heading-row table-income__income-heading-row income-heading-row--style">
									<th class="income-heading__col income-heading__col--style">
										№
									</th>
									<th class="income-heading__col income-heading__col--style">
										НАЗВАНИЕ ТРИГГЕРА
									</th>
									<th class="income-heading__col income-heading__col--style">
										УСЛОВИЕ
									</th>
									<th class="income-heading__col income-heading__col--style">
										ДЕЙСТВИЕ
									</th>									
									
								</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									
								</tr>
							</table>	
    </div>
    <div>
         <table class="tableborder">
								<tr class="income-heading-row table-income__income-heading-row income-heading-row--style">
									<th class="income-heading__col income-heading__col--style">
										ДОЛГОСРОЧНОЕ ХРАНЕНИЕ
									</th>
									<th class="income-heading__col income-heading__col--style">
										КРАТКОСРОЧНОЕ ХРАНЕНИЕ
									</th>
									<th class="income-heading__col income-heading__col--style">
										ТОВАРНЫЕ УСЛУГИ
									</th>
									<th class="income-heading__col income-heading__col--style">
										УСЛУГИ ПОГРУЗКИ
									</th>
									<th class="income-heading__col income-heading__col--style">
										УПАКОВКА
									</th>									
									
								</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									
								</tr>
							</table>
    </div>
    <div>
        <table class="tableborder">
								<tr class="income-heading-row table-income__income-heading-row income-heading-row--style">
									<th class="income-heading__col income-heading__col--style">
										DX
									</th>
									<th class="income-heading__col income-heading__col--style">
										КС
									</th>
									<th class="income-heading__col income-heading__col--style">
										ТУ
									</th>
									<th class="income-heading__col income-heading__col--style">
										УУ
									</th>
									<th class="income-heading__col income-heading__col--style">
										УП
									</th>									
									
								</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									<td class="income-row__col income-row__col--style">тест</td>
									
								</tr>
							</table>
    </div>
    <div>
        <input type="button" value="КАРТОЧКА ТОВАРА" onclick="popup()" id="popup_button" class="btnfilterblock11" />




<div class="pop-form--style" id="popup">
					<div class="rty">

							<div class="tit1">КАРТОЧКА ТОВАРА:</div>
								<div class="tit11">ID ТОВАРА:<SPAN> 4588754 </SPAN></div>	<br>				
									<form><table><tr><td><label class="labinc" for="id">Наименование:</label></td><td>
									<input class="inc_inp1" type="text" name="id"></td></tr>
									<br>
									<tr><td><label class="labinc" for="in">Количество:</label></td><td>
									<input class="inc_inp1" type="text" name="in"></td></tr>
									<br>
									<tr><td><label class="labinc" for="out">Упаковка:</label></td><td>
									<input class="inc_inp1" type="text" name="out"></td></tr>									
									<br>
									<tr><td><label class="labinc" for="additional">Вес:</label></td><td>
									<input class="inc_inp1" type="text" name="additional"></td></tr>
									<br>
									<tr><td><label class="labinc" for="carrier">Объем/Габариты:</label></td><td>
									<input class="inc_inp1" type="text" name="carrier"></td></tr>
									<br>
									<tr><td><label class="labinc" for="sender">Группа:</label></td><td>
									<input class="inc_inp1" type="text" name="sender"></td></tr>
									<br>
									<tr><td><label class="labinc" for="destination">Цена:</label></td><td>
									<input class="inc_inp1" type="text" name="destination"></td></tr>
									<br>
									</table>
									</div><br>
							<input class="subinp1" type="submit" name="submit" value="СОХРАНИТЬ">	
						
					</form>
				</div>






    </div>
</div>
</div>

				</div>
			
					


					<div id="vertical-tab3" class="vertical-tabs__content vertical-tabs__content--style">
						<div class="settings-integration-wrapper">
							<div class="settings-integration-row clearfix">
								<div class="settings-integration__sap">
									<a href="#" class="settings-integration__link settings-integration__link--style">
										<img src="./img/sap.jpg" alt="sap integration" class="settings-integration__image">
									</a>
								</div>
								<div class="settings-integration__one-c">
									<a href="#" class="settings-integration__link settings-integration__link--style">
									<img src="./img/1c.jpg" alt="1c integration" class="settings-integration__image">
									</a>
								</div>
							</div>
							<div class="settings-integration-row">
								<div class="settings-integration__crm">
									<a href="#" class="settings-integration__link settings-integration__link--style">
									<img src="./img/crm.jpg" alt="crm integration" class="settings-integration__image">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div id="vertical-tab4" class="vertical-tabs__content vertical-tabs__content--style">
						<div class="sla-offer sla-offer__wrapper sla-offer__wrapper--style">
							<div class="sla-offer__deal sla-offer__deal--style">
								<h2 class="sla-offer__header sla-offer__header--style">оферта</h2>
							</div>
							<button class="sla-button sla-button--style">подписать ЭЦП</button>
						</div>
					</div>
					<div id="vertical-tab5" class="vertical-tabs__content vertical-tabs__content--style">
						test5
					</div>
					<div id="vertical-tab6" class="vertical-tabs__content vertical-tabs__content--style">
							
<div class="setting-form-wrapper setting-form-wrapper--style">
<form action="form.php" method="POST" class="setting-form setting-form--style">

								<div class="setting-form__common setting-form__common--style">
									
									<input type="text" class="setting-form__input setting-form__input--style" name="name" id="settings-name"><br>
									<textarea name="note" id="settings-note" cols="30" rows="20" class="setting-form__input setting-form__input--style"></textarea>
								</div>
								
							</form>



						</div>
					</div>

					<div id="vertical-tab7" class="tab tab-content__tab tab-content__tab--style tab--active" style=" display: none; ">
						<div class="top-checkboxes" class="pad5">
							<form class="formcenter">
								<div class="items">
									<input type="checkbox" name="international">
									<label for="international">Международные</label>
									<br>
									1кг = 1кг 1км = 1км
								</div>
								<div class="items">
									<input type="checkbox" name="international" >
									<label for="international">Междугородные (в стране)</label>
									<br>
									1кг = 1кг 1км = 1км
								</div>
								<div class="items">
									<input type="checkbox" name="international" >
									<label for="international">Внутри города (обл.)</label>
									<br>
									1кг = 1кг 1км = 1км
								</div>
							</form>
						</div>
						<div class="buttons" class="pad5">
							<input type="submit" name="submit" value="Добавить" class="default-buttons" >
							<input type="submit" name="submit" value="Удалить" class="default-buttons">
							<input type="submit" name="submit" value="Редактировать" class="default-buttons">
							<input type="submit" name="submit" value="+" class="plus">
						</div>
						<span class="orders-title" class="calculation">КАЛЬКУЛЯЦИЯ: </span>
						<div class="main-table pad5" >
							<table class="pad5">
								<tr class="shadowtable">
									<th >
										<input type="checkbox" name="checkall" style="">
									</th>
									<th>
										ID
									</th>
									<th>
										МАРКА
									</th>
									<th>
										МОДЕЛЬ
									</th>
									<th>
										ТИП
									</th>
									<th>
										РАЗРЕШЕНИЕ
									</th>
									<th>
										ДОПУСК
									</th>
									<th>
										ОБЪЕМ
									</th>
									<th>
										ГРУЗ-ТЬ	
									</th>
									<th>
										ТИП ПОГРУЗКИ
									</th>
									<th>
										ДОКУМЕНТЫ
									</th>
									<th>
										ПЕРЕВОЗЧИК
									</th>
									<th>
										СТОИМОСТЬ
									</th>
								</tr>
								<tr style="text-align: center;">
									<td><input type="checkbox" name="check1"></td>
									<td>
										01732
									</td>
									<td>
										VOLVO
									</td>
									<td>
										FH12
									</td>
									<td>
										Пикап
									</td>
									<td>
										<select class="select1">
											<option value="big">Крупногабаритные</option>
											<option value="licensed">Лицензированные</option>
											<option value="chemical">Химические</option>
											<option value="explosive">Взрывоопасные</option>
										</select>
									</td>
									<td>
										EA846556
									</td>
									<td>
										80m<sup>3</sup>
									</td>
									<td>
										40т
									</td>
									<td>
										БАС, КАР
									</td>
									<td>
										Важные ДОК
									</td>
									<td>
										Аскаров А. И.
									</td>
									<td>
										50 000тг
									</td>
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
	<script>
	  $('html').click(function(e) {
		if (!$(e.target).closest('#popup').length && !$(e.target).closest('#popup_button').length){
			$("#popup").css("display", "none");
		}
	});
  </script>
</body>
</html>