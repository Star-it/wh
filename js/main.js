$(document).ready(function() {
	
	// function for setting the width of the content part
/*	let setRightWidth = function() {
	let windowWidth = $(window).width();
	let leftDiv = $('.main-nav').outerWidth();
	$('.main-content').width(windowWidth-leftDiv-2);
	};
	setRightWidth();
*/
	// function for setting the height of the left main menu

	/*let menuHeight = function() {
		let winHeight = $(window).height();
		let finderHeight = $('.main-finder').outerHeight();
		let mainContentHeight = $('.main-content').height();
		let lastMenuItemOffset = $('.menu-item:last-child').offset().top + 
		$('.menu-item:last-child').height();
		$('.main-nav').css('min-height', lastMenuItemOffset - finderHeight);
		if (window.location.pathname == '/management.html') {
			let vertMenuHeight = $('.vertical-menu').height();
			$('.main-nav').height(vertMenuHeight);
		} else {
			if (mainContentHeight >= winHeight) {
				$('.main-nav').height(mainContentHeight);
			} else {
				$('.main-nav').height(winHeight - finderHeight);
			}
		}
	};*/

// function for setting the height of the vertical menu in management page

	/*let verticalMenuHeight = function() {
		let lastMenuItemOffset = $('.menu-item:last-child').offset().top + 
		$('.menu-item:last-child').height();
		let winHeight = $(window).height();
		let finderHeight = $('.main-finder').outerHeight();
		let mainContentHeight = $('.vertical-tabs__container').height();
		$('.vertical-menu').css('min-height', lastMenuItemOffset - finderHeight);
		if (mainContentHeight >= winHeight) {
			$('.vertical-menu').height(mainContentHeight);
		} else {
			$('.vertical-menu').height(winHeight - finderHeight);
		}
	};*/

	/*if (window.location.pathname == '/management.html') {
		verticalMenuHeight();
	}

	menuHeight();*/

	let mainMenuHeight = function() {
		let winHeight = $(window).height();
		$('.main-nav').css('max-height', winHeight-50);
		$('.main-nav').css('min-height', winHeight-50);
	};
	mainMenuHeight();

	let managementMenuHeight = function() {
		let winHeight = $(window).height();
		$('.vertical-menu').css('max-height', winHeight-50);
		$('.vertical-menu').css('min-height', winHeight-50);
		$('.vertical-menu__wrapper').css('max-height', winHeight-50);
		$('.vertical-menu__wrapper').css('min-height', winHeight-50);
	};
	if (window.location.pathname == '/management.html' || window.location.pathname == '/settings.html') {
		managementMenuHeight();
	}

  let makeTriangle = function() {
      let pos = $('.selected-triangle').offset();
      let elem = '<div class="selected-triangle--inserted"></div>';
      $('.menu-item__link--selected').append(elem);
      $(document).find('.selected-triangle--inserted').css({
        left: pos.left,
        top: pos.top
      });
    };

    makeTriangle();

	$(window).on('resize', function(event) {
		// setRightWidth();
		/*if (window.location.pathname == '/management.html') {
			verticalMenuHeight();
		}
		menuHeight();*/
		mainMenuHeight();
		if (window.location.pathname == '/management.html' || window.location.pathname == '/settings.html') {
			managementMenuHeight();
		}
    makeTriangle();
	});

  let chartObj = {
    chart: {
        type: 'bar',
    style: {
            fontFamily: 'Gost'
        }
    },
    title: {
        text: null
    },
    xAxis: {
        categories: ['Новая Заявка', 'Недозвон', 'Выявление потребностей', 'Проведена не до конца', 'Квалификация пройдена','Закрыто и не реализовано'],
        opposite: true,
     labels: {
          useHTML:true,
                style: {
                    fontSize:'20px',
                    width: '150px',
                    color: '#344965'
                },
                step: 1
            }
        },
    yAxis: {
        reversed: true,
        visible: false,
        min: 0,
        max: 150
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        },
        series: {
          colorByPoint: true,
          colors: ['#e71b1c','#c4222d','#a7393e','#95425c','#573a66','#234680']
        },
        column: {
            grouping: false,
            shadow: false
        }
    },
    legend: {
        enabled: false
    },
    credits: {
        enabled: false
    },
    series: [
    {},
    {
        data: [120, 120, 120, 120, 120, 120],
        enableMouseTracking: false,
        pointWidth:10,
    dataLabels: {
      className: 'highlight',
      format: '0 Д.',
      enabled: true,
      style: {
        color: '#344965',
        textOutline: false,
        fontSize:'20px'
      }
    }
    },
    {
        data: [{y: 120, color: 'white'},{y: 120, color: 'white'},{y: 90, color: 'white'},{y: 120, color: 'white'},{y: 120, color: 'white'},{y: 120, color: 'white'}],
        dataLabels: {enabled: false},
        enableMouseTracking: false,
        grouping: false
    },
   
    {
        data: [98, 75, 65, 63, 53, 46],
        enableMouseTracking: false,
        grouping: false,
    dataLabels: {
      className: 'highlight',
      format: '{y}%',
      enabled: true,
      style: {
        color: '#344965',
        textOutline: false,
        fontSize:'20px'
      }
    }
    }]
  };

	// function for creating the tabs in the content part
  
  let tabFunction = function(selector) {
      $(selector).on('click', function(e)  {
        let currentAttrValue = $(this).attr('href');
 
        // Show/Hide Tabs
        $(currentAttrValue).show().siblings().hide();
        // Change/remove current tab to active

        $(this).parent().siblings().find('.tab-link--active').removeClass('tab-link--active');
        $(this).addClass('tab-link--active');
        
        if (selector == '#analytics-tab .tab-link') {
            $(this).parent().siblings().find('.tab-link--active-red').removeClass('tab-link--active-red');
            $(this).removeClass('tab-link--active');
            $(this).addClass('tab-link--active-red');
        }

        if (window.location.pathname == '/management.html') {
           verticalMenuHeight();
        }

        if (window.location.pathname == '/analytics.html') {
          let tabNumber = +currentAttrValue.charAt(currentAttrValue.length - 1);
          console.log(tabNumber);
           Highcharts.chart('barChart'+tabNumber, chartObj); 
        }
    // menuHeight();
        e.preventDefault();
    });  
  };

  tabFunction('.tab-link');
  tabFunction('#analytics-tab .tab-link');

    // function for creating date links
  let dateChangeFunction = function(selector) {
    $(selector).on('click', function(event) {
      event.preventDefault();
      var target = event.currentTarget;
      $(target).parent().siblings().find('.date-change__link--active').removeClass('date-change__link--active');
        $(target).addClass('date-change__link--active');

        if (selector == '#analytics-tab .date-change__link') {
          $(target).parent().siblings().find('.date-change__link--active-red').removeClass('date-change__link--active-red');
          $(target).addClass('date-change__link--active-red');
          $(target).removeClass('date-change__link--active');
        }
    });
  };

  dateChangeFunction('.date-change__link');
  dateChangeFunction('#analytics-tab .date-change__link');

    // chess page showing content animation

    $('.under-block-wrapper').mouseenter(function(event) {
    	$(this).find('.inner-block-wrapper').fadeOut(200);
    }).mouseleave(function(event) {
    	$(this).find('.inner-block-wrapper').fadeIn(100);
    });

    // management page vertical tabs function

    $('.vertical-nav__link').on('click', function(event) {
    	event.preventDefault();
    	let currentAttrValue = $(this).attr('href');
    	$(currentAttrValue).show().siblings().hide();

    	$(this).parent().siblings().find('.vertical-nav__link--active').removeClass('vertical-nav__link--active');
    	$(this).addClass('vertical-nav__link--active');
    	/*if (window.location.pathname == '/management.html') {
			verticalMenuHeight();
		}
		menuHeight();*/
    });

    // settings page form styles

    $('.settings-form__open-button').on('click', function(){
    	if ($('.settings-form__pay-wrapper').is(':visible')) {
    		$('.settings-form__pay-wrapper').slideUp(500);
    	} else {
    		$('.settings-form__pay-wrapper').slideDown(500);
    	}
    });

    $('.settings-form__add-button').on('click', function(){
    	let inputs = Array.from(document.getElementsByClassName('settings-form__pay-input'));
    	let inputData = [];
    	inputs.forEach(function(item, i, arr){
    		inputData.push($(item).val());
    		$(item).val('');
    	});
    	$('#settings-pay-info').html('');
    	$('#settings-pay-info').html(inputData.join(';'));
    });

    let setDropdown = function(selector) {
    	if ($(selector).is(':visible')) {
    		$(selector).slideUp(300);
    	} else {
    		$(selector).slideDown(300);
    	}
    };

    $('.arrow-down').on('click', function(){
    	setDropdown('table .dropdown__content');
    });

    $('.settings-roles__table-adding').on('click', function(){
    	setDropdown('#drop-add');
    });

    $('.dropdown-btn--filter').on('click', function() {
      setDropdown('#dropdown__content--filter');
    });

    $('.dropdown-btn--factory').on('click', function() {
      setDropdown('#dropdown__content--factory');
    });

      Highcharts.chart('barChart1', chartObj); 

});
