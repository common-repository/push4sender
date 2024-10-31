	(function($) {
		$(document).ready(function () {


		$("#main_api_key").keyup(function(event) {

		if(event.keyCode==13) {SetBtn();}

		});

		$("#EnterBtn").click(function(event) {

		SetBtn();

		});

		});

		function SetBtn() {
		// var date = new Date(new Date().getTime() + 600 * 1000);
		var api_key = document.getElementById('main_api_key').value;
		api_key = api_key.trim();
					var oSendData = {};
					oSendData.api_key = api_key;
						$.ajax({
						url: 'https://go.push4site.com/v1/save-new.php', //https://go.push4site.com/v1/save-new.php  https://push4site.com/push/tasks/save.php
						dataType: "json",
						crossDomain: true,
						data: {task: oSendData},
						type: 'POST',
						async: false,
						success: function (response) {
								console.log("result "+response.result);
								console.log("api_key "+response.api_key);
								if (response.result) {
										console.log('OK');
								} else if (response.error) {
										console.log(response.error);
								} else {
										console.log('unknown error');
								}

								if (response.api_key == true) {
												$("#result_send").html('<span style="color: green; margin-bottom: 20px;">API_key верный</span>');
												// $('#main_api_key').css('border-color','#ddd');
												// $('#api_key').css('color','green');result_send
												// $("#api_key").text("API_KEY");
												//$("#result_send").html('<span style="color: green; margin-bottom: 20px;"> API_KEY установлен</span><br><button type="button" onclick="location = location">Запустить плагин</button>');
												//$('#api_key').innerHTML = 'API_KEY';
												// Установка проверенного API_KEY
												var date = new Date(98, 1);
												date.setFullYear(2018);
												var options={};
												options.expires = date;
												//var x = window.location;
												//options.domain = 
												//updatedCookie += "; expires="+date;
												setCookie('push4site', api_key, options);
												location = location;
												//alert(date);
										}else if (response.api_key == false){
												$('#main_api_key').css('border-color','red');
												//$('#api_key').html('<a href="https://push4site.com" style="text-decoration:none;">Если у вас нет API_KEY, получите его, зарегистрировавшись по этой ссылке </a>');
												$("#result_send").html('<span style="color: red; margin-bottom: 20px;"> Не верный API_key</span>');
												//location = "https://push4site.com";
										}
						}
				});

			
		}

		function GetBtn() {
		alert(getCookie('push4site'));
		}

		// возвращает cookie с именем name, если есть, если нет, то undefined
		function getCookie(name) {
			var matches = document.cookie.match(new RegExp(
			"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
			));
			return matches ? decodeURIComponent(matches[1]) : undefined;
		}


		// устанавливает cookie с именем name
		function setCookie(name, value, options) {
			options = options || {};

			var expires = options.expires;

			if (typeof expires == "number" && expires) {
				var d = new Date();
				d.setTime(d.getTime() + expires * 1000);
				expires = options.expires = d;
			}
			if (expires && expires.toUTCString) {
				options.expires = expires.toUTCString();
			}

			value = encodeURIComponent(value);

			var updatedCookie = name + "=" + value;

			for (var propName in options) {
				updatedCookie += "; " + propName;
				var propValue = options[propName];
				if (propValue !== true) {
					updatedCookie += "=" + propValue;
				}
			}
			
				//alert(updatedCookie);
			document.cookie = updatedCookie;
		}


		// удаляет cookie с именем name
		function deleteCookie(name) {
		setCookie(name, "", {
		expires: -1
		})
	}
})(jQuery);