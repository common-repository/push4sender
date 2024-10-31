document.addEventListener('DOMContentLoaded', function(){
								document.getElementById('push4site_projectbundle_information_api_key').value=getCookie('push4site');
							function getCookie(name) {
								var matches = document.cookie.match(new RegExp(
								"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
								));
								return matches ? decodeURIComponent(matches[1]) : undefined;
							}
							});

jQuery(document).ready(function($){
		$(document).ready(function(){

			$('#commentForm').validate();

			function toggleRightNav(){
			$("#rightNavContainer").toggle(300);
			}

			var locale = window.navigator.userLanguage || window.navigator.language;
			moment.locale('ru');
			$(function () {
				$('#push4site_projectbundle_information_TTL').datetimepicker({
				locale: 'ru',
				useCurrent: false
				});
			});
				//alert('moment-my.js');
		});
});