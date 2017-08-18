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
			<div class="block-contain">
				<div class="row clearfix">
					<div class="col-12">
						<div class="col-6 clearfix"><div class="dropdown-menu filter__dropdown-menu">
							<a href="#" class="dropdown-btn dropdown-btn--filter">Фильтр ></a>
								<div id="dropdown__content--filter" class="dropdown__content dropdown__content--style" style="width: 250px;">
								    <div class="dropdown-filter-wrapper">
								    	<h1 class="center">Фильтр</h1>
								    	 <hr class="light">
								    	<form action="handler.php" role="form" method="POST" id="#" name="filter">
								    	 <div class="form-group__label">	<label>Блок</label></div>
								    	 <div class="form-group form-group__input">
								    	 <input type="text" name="" placeholder="Блок" >
								    	 </div>
	                                    <div class="form-group__label">
	                                    	<label>Ряд</label></div><div class="form-group form-group__input">
	                                    	<input type="text" name="" placeholder="Ряд" >
	                                        </div><div class="form-group__label">
	                                        <label>Этаж</label></div><div class="form-group form-group__input">
	                                        <input type="text" name="" placeholder="Этаж" >
	                                        </div><div class="form-group__label">
	                                        <label>Срок доставки</label></div><div class="form-group form-group__input">
	                                    <input class="form-group__input__style" type="date" name="deliver" id="deliver" type="name" placeholder="Срок Доставки" required>
	                                    </div><div class="form-group__label"><label>Срок отгрузки</label></div>
	                                    <div class="form-group form-group__input">
	                                        <input class="form-group__input__style" name="income" id="income" type="date" placeholder="Срок отгрузки" required></div>
	                                    <div class="form-group form-group__input">
	                						<button type="submit" class="btn btn-first">Применить</button></div>
		                                </form>
	                            	</div>
                            	</div>
						    </div>
						</div>
					</div>
		<div class="col-6">
			<h1>80 дней</h1>
			<div id="progressbar" class="under-progress">
				<div class="inner-progress"></div>
			</div>
		</div>
		<div class="col-6">
		<div class="col-12 col--float-right facts--margin-bottom">
		<div class="col-2"><h1>9874</h1></div>
		<div class="col-2"><center><p>Чат</p></center>
		<div class="gradient__first">
		<div class="text-faded center">242</div></div></div>
		<div class="col-2"><center><p>Форма</p></center>
		<div class="gradient__second">
		<div class="text-faded center">1</div></div></div>
		<div class="col-2"><center><p>Почта</p></center>
		<div class="gradient__third">
		<div class="text-faded center">261</div></div></div>
		<div class="col-2"><center><p>Тел</p></center>
		<div class="gradient__forth">
		<div class="text-faded center">4191</div></div></div>
		<div class="col-2 col--float-right"><h2 class="padding-top">Заказы</h2></div>
		</div>
		<div class="col-2 col--float-right"><h2>Произведено</h2></div>
		<div class="text-faded center col-2 col--float-right gradient__forth"><h2>nothing</h2></div>
		<div class="col-2 col--float-right"><h1>8756</h1></div>
		</div>
		</div>
	</div>
	<div class="block-contain"><div class="row clearfix">
		<div class="col-12">
			<div class="dropdown-menu">
    			<a href="#" class="dropdown-btn dropdown-btn--factory">Производство</a>
    			<div id="dropdown__content--factory" class="dropdown__content">
	    			<div class="dropdown__content-factory">
	        			content <br>
	        			content <br>
	        			content <br>
	        			content <br>
	        			content <br>
	        		</div>
    			</div>
			</div>
		</div>
	</div></div>
			<div class="tabs main-content__tabs tabs--style">
				<div id="analytics-tab" class="content-function content-function--style content-function--analytics clearfix">
					<ul class="tab-links tab-links__analytics tabs__tab-links tab-links--style">
						<li class="tab-links__item tab-link__item--style"><a href="#tab1" class="tab-link tab-link--active-red tab-link--style">Все</a></li><!-- 
						--><li class="tab-links__item tab-link__item--style"><a href="#tab2" class="tab-link tab-link--style">Активные</a></li><!--
						--><li class="tab-links__item tab-link__item--style"><a href="#tab3" class="tab-link tab-link--style">Закрытые</a></li>
					</ul>
					<ul class="date-change date-change--analytics content-function__date-change date-change--style">
						<li class="date-change__item date-change__item--style"><a href="#" class="date-change__link date-change__link--style date-change__link--active-red">по бюджету</a></li><!--
						--><li class="date-change__item date-change__item--style"><a href="#" class="date-change__link date-change__link--style">по количеству</a></li>
					</ul>
				</div>

				<div class="tab-content tabs__tab-content tab-content--style">
					<div id="tab1" class="tab tab-content__tab tab-content__tab--style tab--active">
						<div class="col-4"><h1 class="big-red">1 Д.</h1>
								<h2 class="mid-red">Средняя длительность сделки</h2></div>	
							<div class="col-8 col--float-right">
								<div class="bar-chart bar-chart--style" id="barChart1">
									
								</div>
							</div>	
					</div>
					<div id="tab2" class="tab tab-content__tab tab-content__tab--style">
						<div class="col-4"><h1 class="big-red">2 Д.</h1>
								<h2 class="mid-red">Средняя длительность сделки</h2></div>	
							<div class="col-8">
							<div class="bar-chart bar-chart--style" id="barChart2">
							</div>
						</div>
					</div>
					<div id="tab3" class="tab tab-content__tab tab-content__tab--style">
						<div class="col-4"><h1 class="big-red">3 Д.</h1>
								<h2 class="mid-red">Средняя длительность сделки</h2></div>	
							<div class="col-8">
							<div class="bar-chart bar-chart--style" id="barChart3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<script src="dest/highcharts.js"></script>
	<script src="dest/libs.min.js"></script>
	<script src="dest/main.min.js"></script>
	<script type="text/javascript">
$(document).mouseup(function (e) {
    var container = $("#dropdown__content--filter");
    if (container.has(e.target).length === 0){
        container.slideUp();
    }
});

</script>
</body>
</html>