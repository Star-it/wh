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
	<link rel="stylesheet" href="./css/doc.css">
	 <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
         <script>
    function disp(form) {
        if (form.style.display == "none") {
            form.style.display = "block";
        } else {
            form.style.display = "none";
        }
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

		<div class="setr2">		
		фильтр >
		</div>

		<div id="drop-add2" class="dropdo__content dropdo__content--style">										
		<form id="form1">
		<div  class="filterblock2">
		<h1>ФИЛЬТР</h1></div><br>
		<div  class="filterblock3">
       <p>по дате: </p><br>
       <input type="text"  class="widthblock1" /><br><br>
       <input type="text"  class="widthblock1"/><br>
        <p>по ответственному: </p><br>
        <input type="text"  class="widthblock1"/><br>
         <p>по контрагенту </p><br>
         <input type="text" class="widthblock1"/><br><br>
		 <input type="button" value="ОК"  class="btnfilterblock" /><br>
		 <br>

                     
                      </div>
    </form>
									</div>

		
				
				
				
						
						
							<table class="tableborder" >
								<tr class="income-heading-row table-income__income-heading-row income-heading-row--style">
									<th class="income-heading__col income-heading__col--style">
										№
									</th>
									<th class="income-heading__col income-heading__col--style">
										ID
									</th>
									<th class="income-heading__col income-heading__col--style">
										ДАТА
									</th>
									<th class="income-heading__col income-heading__col--style">
										НАИМЕНОВАНИЕ
									</th>
									<th class="income-heading__col income-heading__col--style">
										ОТВЕТСТВЕННЫЙ
									</th>
									<th class="income-heading__col income-heading__col--style">
										КОНТРАГЕНТ
									</th>
									<th class="income-heading__col income-heading__col--style">
										СКАЧАТЬ
									</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style"><a href="#"><img src="./img/d.png">SLA</a></td>
									
								</tr>
								<tr class="income-row income-row--style">
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style">тест Все</td>
									<td class="income-row__col income-row__col--style"><a href="#"><img src="./img/d.png">SLA</a></td>
									
								</tr>
							</table>	
						
				
					
					
				</div>
			</div>
		</div>
	</main>
	
	<script src="dest/libs.min.js"></script>
	<script src="dest/main2.min.js"></script>

	<script type="text/javascript">
$(document).mouseup(function (e) {
    var container = $("#drop-add2");
    if (container.has(e.target).length === 0){
        container.slideUp();
    }
});

</script>

</body>
</html>
