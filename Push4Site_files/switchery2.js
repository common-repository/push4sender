(function($) {

$(document).ready(function(){


			$(".switchery").each(function(index,item){
				var sw=new Switchery(item,{color:"#1AB394"});
			});

			$(".chosenselect").chosen();


			$.fn.datepicker.dates['ru'] = {
				days: ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"],
				daysShort: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
				daysMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
				months: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
				monthsShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июнь", "Июль", "Авг", "Сен", "Окт", "Ноя", "Дек"],
				today: "Сегодня",
				clear: "Очистить",
				format: 'dd.mm.yyyy',
				titleFormat: "MM yyyy",
				weekStart: 1
			};
			$('.input-daterange').datepicker({
				keyboardNavigation: false,
				forceParse: false,
				autoclose: true,
				format: "dd.mm.yyyy",
				language: "ru"
			});



			$("#OpenUtm").change(function(){
				if($(this).is(":checked")){
					$("#UtmParameters").show("slow");
				}
				else{
					$("#UtmParameters").hide("slow");
				}
			});

			$("#OpenAdvancedOptions").change(function(){
				if($(this).is(":checked")){
					$("#AdvancedOptions").show("slow");
				}
				else{
					$("#AdvancedOptions").hide("slow");
				}
			});

			$("#OpenCitySegmentation").change(function(){
				if($(this).is(":checked")){
					$("#CitySegmentation").show("slow");
				}
				else{
					$("#CitySegmentation").hide("slow");
				}
			});

			$("#OpenRegionSegmentation").change(function(){
				if($(this).is(":checked")){
					$("#RegionSegmentation").show("slow");
				}
				else{
					$("#RegionSegmentation").hide("slow");
				}
			});
			$("#OpenDateSegmentation").change(function(){
				if($(this).is(":checked")){
					$("#DateSegmentation").show("slow");
				}
				else{
					$("#DateSegmentation").hide("slow");
				}
			});
		});
})(jQuery);