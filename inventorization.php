<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Склад</title>
	<link rel="stylesheet" href="./dest/normalize.css">
	<link rel="stylesheet" href="./dest/style.min.css">
	<link rel="stylesheet" href="./css/doc.css">
	<link rel="stylesheet" href="./css/set.css">
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
						--><li class="tab-links__item tab-link__item--style"><a href="#tab2" class="tab-link tab-link--style">Ответственный</a></li>
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
							<div class="inv-function income-wrapper__inv-function inv-function--style clearfix">
								<div class="inv-function__wrapper"><button  class="s2 inv-button inv-function__inv-button inv-button--blue inv-button--common">Фильтр</button>

								<div id="drop2" class="dropdow dropdow2 dropdow--style ">
										<form id="form1">
		<div  class="filterblock2">
		<h1>ФИЛЬТР</h1></div><br>
		<div  class="filterblock3">
       <p>ДАТА: </p>
       <input type="text"  class="widthblock1" /><br><br>
       <p>НАЗВАНИЕ: </p>
       <input type="text"  class="widthblock1"/><br><br>
        <p>ОТВЕТСТВЕННЫЙ: </p>
        <input type="text"  class="widthblock1"/><br><br>
         <p>КОНРАГЕНТ</p>
         <input type="text" class="widthblock1"/><br><br><br>
		 <input type="button" value="ОК"  class="btnfilterblock" /><br>
		 <br>

                     
                      </div>
    </form>
									</div>



								<button class="s3 inv-button inv-function__inv-button inv-button--red inv-button--common">Новая</button>


<div id="drop3" class="dropdow dropdow3 dropdow--style ">
										<form id="form1">
				<div  class="filterblock3">
				<table>
       <tr><td>Контрагент: </td><td>
       <select  class="widthblock"></select></td></tr>
        <tr><td>Место:</td><td>
       <input type="text"  class="widthblock2" placeholder="СКЛАД" />
       <input type="text"  class="widthblock2" placeholder="РЯД"/>
       <input type="text"  class="widthblock2" placeholder="УРОВЕНЬ"/>
       <input type="text"  class="widthblock2" placeholder="ЯЧЕЙКА"/><br><br></td></tr>
         <tr><td>Задолженность:</td><td>
        <input type="checkbox"  class="widthblock"/><br><br></td></tr>
         <tr><td> Ответственный:</td><td>
         <select  class="widthblock"></select><br><br></td></tr>
          <tr><td>Товар (группа):</td><td>
      <select  class="widthblock"></select><br><br></td></tr>
       <tr><td> Атрибут:</td><td>
       <select  class="widthblock"></select><br><br></td></tr>
        <tr><td> Дата:</td><td>
        <input type="date"  class="widthblock"/><br><br></td></tr>
         <tr><td> Услуга:</td><td>
         <select  class="widthblock"></select><br><br></td></tr>
		  <tr><td></td><td><input type="button" value="ОК"  class="btnfilterblock" /><br></td></tr>
		 <br></table>

                     
                      </div>
    </form>
									</div>



								</div>
							</div>
							<table class="tableborder">
								<tr class="income-heading-row table-income__income-heading-row income-heading-row--style">
									<th class="income-heading__col income-heading__col--style">
										№
									</th>
									<th class="income-heading__col income-heading__col--style">
										дата
									</th>
									<th class="income-heading__col income-heading__col--style">
										название
									</th>
									<th class="income-heading__col income-heading__col--style">
										контрагент
									</th>
									<th class="income-heading__col income-heading__col--style">
										ответственный
									</th>
									<th class="income-heading__col income-heading__col--style">
										скачать
									</th>
									
								</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style"><img src="./img/d.png"><img src="./img/d1.png"></td>
									
								</tr>
							</table>	
						</div>
					</div>
					<div id="tab2" class="tab tab-content__tab tab-content__tab--style">
						<div class="income-wrapper main-content__income-wrapper income-wrapper--style">
							<div class="inv-function income-wrapper__inv-function inv-function--style clearfix">
								<div class="inv-function__wrapper"><button class="inv-button inv-function__inv-button inv-button--blue inv-button--common">Фильтр</button><!--
								--><button  class="inv-button inv-function__inv-button inv-button--red inv-button--common">Новая</button></div>
							</div>
							<table class="tableborder">
								<tr class="income-heading-row table-income__income-heading-row income-heading-row--style">
									<th class="income-heading__col income-heading__col--style">
										№
									</th>
									<th class="income-heading__col income-heading__col--style">
										дата
									</th>
									<th class="income-heading__col income-heading__col--style">
										название
									</th>
									<th class="income-heading__col income-heading__col--style">
										контрагент
									</th>
									<th class="income-heading__col income-heading__col--style">
										ответственный
									</th>
									<th class="income-heading__col income-heading__col--style">
										скачать
									</th>
									
								</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style"><img src="./img/d.png"><img src="./img/d1.png"></td>
									
								</tr>
							</table>	
						</div>
					</div>
					<!--<div id="tab3" class="tab tab-content__tab tab-content__tab--style">
						<div class="income-wrapper main-content__income-wrapper income-wrapper--style">
							<div class="inv-function income-wrapper__inv-function inv-function--style clearfix">
								<div class="inv-function__wrapper"><button class="inv-button inv-function__inv-button inv-button--blue inv-button--common">Фильтр</button><!--
								<button class="inv-button inv-function__inv-button inv-button--red inv-button--common">Новая</button></div>
							</div>
							<table class="table-income income-wrapper__table-income table-income--style">
								<tr class="income-heading-row table-income__income-heading-row income-heading-row--style">
									<th class="income-heading__col income-heading__col--style">
										блок
									</th>
									<th class="income-heading__col income-heading__col--style">
										ряд
									</th>
									<th class="income-heading__col income-heading__col--style">
										этаж
									</th>
									<th class="income-heading__col income-heading__col--style">
										место
									</th>
									<th class="income-heading__col income-heading__col--style">
										ответственный
									</th>
									<th class="income-heading__col income-heading__col--style">
										дата
									</th>
									<th class="income-heading__col income-heading__col--style">
										срок
									</th>
									<th class="income-heading__col income-heading__col--style">
										статус
									</th>
								</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест Менеджер</td>
									<td class="income-row__col income-row__col--style">тест Менеджер</td>
									<td class="income-row__col income-row__col--style">тест Менеджер</td>
									<td class="income-row__col income-row__col--style">тест Менеджер</td>
									<td class="income-row__col income-row__col--style">тест Менеджер</td>
									<td class="income-row__col income-row__col--style">тест Менеджер</td>
									<td class="income-row__col income-row__col--style">тест Менеджер</td>
									<td class="income-row__col income-row__col--style">тест Менеджер</td>
								</tr>
							</table>	
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</main>
	
	<script src="dest/libs.min.js"></script>
	<script src="dest/main.min.js"></script>
	
<script type="text/javascript">
$(document).mouseup(function (e) {
    var container = $("#drop2");
    if (container.has(e.target).length === 0){
        container.slideUp();
    }
});

$(document).mouseup(function (e) {
    var container = $("#drop3");
    if (container.has(e.target).length === 0){
        container.slideUp();
    }
});
</script>

</body>
</html>