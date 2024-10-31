<?php 
		if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



		wp_enqueue_style("add_css01", plugins_url("Push4Site_files/bootstrap.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css02", plugins_url("Push4Site_files/font-awesome.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css03", plugins_url("Push4Site_files/toastr.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css04", plugins_url("Push4Site_files/switchery.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css05", plugins_url("Push4Site_files/chosen.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css06", plugins_url("Push4Site_files/toastr.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css07", plugins_url("Push4Site_files/switchery.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css08", plugins_url("Push4Site_files/datatable.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css09", plugins_url("Push4Site_files/jquery-ui-1.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css10", plugins_url("Push4Site_files/jquery.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css11", plugins_url("Push4Site_files/animate.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css12", plugins_url("Push4Site_files/style.css", dirname(__FILE__)), array(), time(), "all");
		
		wp_enqueue_style("add_css14", plugins_url("Push4Site_files/pushbutton.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css15", plugins_url("Push4Site_files/push.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css16", plugins_url("Push4Site_files/preview.css", dirname(__FILE__)), array(), time(), "all");
		wp_enqueue_style("add_css17", plugins_url("Push4Site_files/main-style.css", dirname(__FILE__)), array(), time(), "all");

		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-datepicker');
		wp_enqueue_script('jquery-ui-core');

		//wp_enqueue_script("ajs02", plugins_url("push4sender/Push4Site_files/jquery-2.js"), array(), time(), true);
		//wp_enqueue_script("ajs03", plugins_url("push4sender/Push4Site_files/jquery-ui.js"), array(), time(), true);
		wp_enqueue_script("ajs04", plugins_url("Push4Site_files/bootstrap.js", dirname(__FILE__)), array(), time(), true);
		//wp_enqueue_script("ajs05", plugins_url("push4sender/Push4Site_files/bootstrap.min.js"), array(), time(), true);
		wp_enqueue_script("ajs06", plugins_url("Push4Site_files/jquery_004.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs07", plugins_url("Push4Site_files/jquery_003.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs08", plugins_url("Push4Site_files/switchery.js", dirname(__FILE__)), array(), time(), true);

		wp_enqueue_script("ajs088", plugins_url("Push4Site_files/chosen.js", dirname(__FILE__)), array(), time(), true);
		//wp_enqueue_script("ajs09", plugins_url("push4sender/Push4Site_files/bootstrap-datepicker.js"), array(), time(),true);
		wp_enqueue_script("ajs10", plugins_url("Push4Site_files/icheck.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs11", plugins_url("Push4Site_files/inspinia.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs12", plugins_url("Push4Site_files/pace.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs13", plugins_url("Push4Site_files/ckeditor.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs14", plugins_url("Push4Site_files/jquery_002.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs15", plugins_url("Push4Site_files/function.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs15", plugins_url("Push4Site_files/siteadd.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs18", plugins_url("Push4Site_files/bootsrapdialog.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs19", plugins_url("Push4Site_files/bootstrap-filestyle.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs16", plugins_url("Push4Site_files/siteadd.js", dirname(__FILE__)), array(), time(), true);
		//wp_enqueue_script("ajs17", plugins_url("Push4Site_files/datepicker.js"), array(), time(), true);
		//wp_enqueue_script("ajs20", plugins_url("push4sender/Push4Site_files/jquery.js"), array(), time(), false);
		wp_enqueue_script("ajs21", plugins_url("Push4Site_files/pushaddv5.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs23", plugins_url("Push4Site_files/switchery2.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs24", plugins_url("Push4Site_files/moment-with-locales.min.js", dirname(__FILE__)), array(), time(), true);
		wp_enqueue_script("ajs24", plugins_url("Push4Site_files/moment.min.js", dirname(__FILE__)), array(), time(), true);

		wp_enqueue_script("ajs25", plugins_url("Push4Site_files/transition.js", dirname(__FILE__)), array(), time(),true);
		wp_enqueue_script("ajs26", plugins_url("Push4Site_files/collapse.js", dirname(__FILE__)), array(), time(),true);
		wp_enqueue_script("ajs27", plugins_url("Push4Site_files/bootstrap-datepicker.js", dirname(__FILE__)), array(), time(),true);
		wp_enqueue_script("ajs28", plugins_url("Push4Site_files/bootstrap-datetimepicker.min.js", dirname(__FILE__)), array(), time(),true);
		//wp_enqueue_script("ajs29", plugins_url("push4sender/Push4Site_files/datetimepicker.js"), array(), time(),true);
		//wp_enqueue_script("ajs30", plugins_url("push4sender/Push4Site_files/datepicker.js"), array(), time(),true);
		wp_enqueue_script("ajs31", plugins_url("Push4Site_files/moment-my.js", dirname(__FILE__)), array(), time(),true);
		wp_enqueue_script("ajs32", plugins_url("Push4Site_files/jquery.validate.min.js", dirname(__FILE__)), array(), time(),true);


?>
<!-- ======================================= New Template ====================================
 -->

			<div class="row border-bottom dashboard-header no-padding">

			<div class="col-xs-12">
		
		<form id="commentForm" name="push4site_projectbundle_information" method="post" action="" class="form-horizontal" enctype="multipart/form-data">


			<div class="panel">
				<div class="panel-heading border-bottom">
					<h4>Новое уведомление</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-6" style="padding: 0 30px ;">
							<div class="form-group no-margin">
								<label class="title control-label required" for="push4site_projectbundle_information_titre">Заголовок</label>

								<input data-original-title="Введите название" id="push4site_projectbundle_information_titre" name="push4site_projectbundle_information[titre]" required="required" class="form-control" placeholder="Максимум 48 символов" value="Vitalii" maxlength="100" data-toggle="tooltip" data-placement="right" data-target=".pr-notify-title" type="text">
							
							</div>
							<div class="form-group">
								<label class="body control-label required" for="push4site_projectbundle_information_message">Сообщение</label>
							<br><label for="push4site_projectbundle_information_message"></label>
								<textarea title="" data-original-title="" id="push4site_projectbundle_information_message" name="push4site_projectbundle_information[message]" required="required" class="form-control" cols="50" placeholder="Максимум 100 символов" maxlength="300" data-target=".pr-notify-message">Текст сообщения</textarea>
							
							</div>
							<div class="form-group">
								<label class="control-label" for="push4site_projectbundle_information_TTL">Время действия сообщения</label>
								<input data-original-title="Время действия" id="push4site_projectbundle_information_TTL" class="form-control input-sm" placeholder="Время действия" data-placement="right" type="text">
							</div>
							
							<div class="row">
								<div class="col-md-6" style="">
									<div class="form-group" style="display: none;">
										<label class="control-label required" for="push4site_projectbundle_information_categories">Мои сайты</label>
										<select data-original-title="Выберите сайты, подписчикам которых необходимо отправить push-уведомления" id="244" name="push4site_projectbundle_information[categories]" class="form-control sSubDomain" placeholder="Название" title="" data-toggle="tooltip" data-placement="right" data-siteid="">
										<option selected="selected" value="244" data-appid="f08de3bce5b54d5a11366cb0660d8af0" data-subdomain="<?php echo get_site_url(); ?>"><?php echo get_site_url(); ?></option>
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Включить UTM параметры</label>
									</div>
									<div class="form-group">
										<input data-switchery="true" style="display: none;" class="switchery" id="OpenUtm" type="checkbox"><span id="OpenUtm" style="display: none; box-shadow: 0px 0px 0px 0px rgb(223, 223, 223) inset; border-color: rgb(223, 223, 223); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;" class="switchery"><small style="left: 0px; transition: left 0.2s ease 0s;"></small></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Расширенные настройки</label>
									</div>
									<div class="form-group">
										<input  data-switchery="true" style="display: none;" class="switchery" id="OpenAdvancedOptions" type="checkbox">
									</div>
								</div>
							</div>




							<div class="row" id="UtmParameters" style="display: none;">
								<div class="col-xs-12">
									<div class="form-group">
										<label class="control-label">Источник</label>
										<input title="" data-original-title="" value="browser" class="form-control" type="text">
									</div>
									<div class="form-group">
										<label class="control-label">Посредник</label>
										<input title="" data-original-title="" value="push_notification" class="form-control" type="text">
									</div>
									<div class="form-group">
										<label class="control-label">Кампания</label>
										<input title="" data-original-title="" value="Campaign" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row" id="AdvancedOptions" style="display:none;">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="push4site_projectbundle_information_attachement">Вставьте фото</label>
									</div>
									<div class="form-group">
										<div style="display: inline-block; width:80px;">
											<input tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" data-original-title="Загрузите фото или вставьте ссылку на изображение в интернет" id="push4site_projectbundle_information_attachement" name="push4site_projectbundle_information[attachement]" class="form-control filestyle" placeholder="Фото" title="" data-toggle="tooltip" data-placement="right" data-buttontext=" " accept="image/*" type="file">
										</div>
										<div style="display: inline-block; width:50%;">
											Загрузите изображение в .PNG
формате не более 1Мб. Рекомендуемый размер изображения 300х300.
										</div>
									</div>

								</div>
								<div class="col-md-6" id="TagsSegmentation">
									<div class="form-group">
										<label class="control-label required" for="push4site_projectbundle_information_tags">Tэги</label>
										<select style="display: none;" data-original-title="Выберите тэги, подписчикам которых необходимо отправить push-уведомления" id="244" name="push4site_projectbundle_information[tags][]" required="required" class="form-control sTags chosenselect" placeholder="Название" title="" data-toggle="tooltip" data-placement="right" data-placeholder="Выберите теги" data-siteid="" multiple="multiple">            <option value="1" data-name2="AAA">AAA</option>            <option value="4" data-name2="cvvhf">cvvhf</option>            <option value="6" data-name2="dfgdufgl">dfgdufgl</option>            <option value="2" data-name2="sdfsdf">sdfsdf</option></select>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Сегментация по городам</label>
									</div>
									<div class="form-group">
										<input data-switchery="true" style="display: none;" class="switchery" id="OpenCitySegmentation" type="checkbox">
									</div>
								</div>
								<div class="col-xs-12" id="CitySegmentation" style="display: none;">
									<div class="form-group">
										<label class="control-label required" for="push4site_projectbundle_information_cities">Сегментация по городам</label>
										<select style="display: none;" data-original-title="Выберите города, подписчикам которых необходимо отправить push-уведомления" id="244" name="push4site_projectbundle_information[cities][]" required="required" class="form-control sCities chosenselect" placeholder="Название" title="" data-toggle="tooltip" data-placement="right" data-placeholder="Выберите города" data-siteid="" multiple="multiple">            <option value="1435" data-city=""></option>            <option value="1778" data-city="Moscow">Moscow</option>            <option value="4973" data-city="Podolsk">Podolsk</option>            <option value="1434" data-city="Volgograd">Volgograd</option></select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Сегментация по регионам</label>
									</div>
									<div class="form-group">
										<input data-switchery="true" style="display: none;" class="switchery" id="OpenRegionSegmentation" type="checkbox"><span id="OpenRegionSegmentation" style="display: none; box-shadow: 0px 0px 0px 0px rgb(223, 223, 223) inset; border-color: rgb(223, 223, 223); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;" class="switchery"><small style="left: 0px; transition: left 0.2s ease 0s;"></small></span>
									</div>
								</div>
								<div class="col-xs-12" id="RegionSegmentation" style="display: none;">
									<div class="form-group">
										<label class="control-label required" for="push4site_projectbundle_information_region">Сегментация по регионам</label>
										<select style="display: none;" data-original-title="Выберите регионы, подписчикам которых необходимо отправить push-уведомления" id="244" name="push4site_projectbundle_information[region][]" required="required" class="form-control sRegions chosenselect" placeholder="Название" title="" data-toggle="tooltip" data-placement="right" data-placeholder="Выберите регионы" data-siteid="" multiple="multiple">            <option value="1435" data-region=""></option>            <option value="4973" data-region="47">47</option>            <option value="1778" data-region="Moscow">Moscow</option>            <option value="1434" data-region="Volg">Volg</option></select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Сегментация по дате подписки</label>
									</div>
									<div class="form-group">
										<input data-switchery="true" style="display: none;" class="switchery" id="OpenDateSegmentation" type="checkbox"><span id="OpenDateSegmentation" style="display: none; box-shadow: 0px 0px 0px 0px rgb(223, 223, 223) inset; border-color: rgb(223, 223, 223); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;" class="switchery"><small style="left: 0px; transition: left 0.2s ease 0s;"></small></span>
									</div>
								</div>
								<div class="col-xs-12" id="DateSegmentation" style="display: none;">
									<div class="form-group">
										<div class="input-daterange input-group" id="datepicker">
											<input title="" data-original-title="" class="input-sm form-control" id="start-date" type="text">
											<span class="input-group-addon">до</span>
											<input title="" data-original-title="" class="input-sm form-control" id="end-date" type="text">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								
							</div>
						</div>
						<div class="col-xs-6" style="padding:0 30px ;">
							<div class="form-group" style = "display:none;">
								<label id="api_key" class="control-label">API-KEY</label>
								<input data-original-title="Вставьте ссылку" id="push4site_projectbundle_information_api_key" name="push4site_projectbundle_information[apikey]" class="form-control"  title="" data-toggle="tooltip" data-placement="right" value="" type="text">
							</div>
							
							<div class="form-group">
								<label class="control-label" for="push4site_projectbundle_information_urllien">Ссылка</label>
								<input data-original-title="Вставьте ссылку" id="push4site_projectbundle_information_urllien" name="push4site_projectbundle_information[urllien]" class="form-control" placeholder="Ссылка" title="" data-toggle="tooltip" data-placement="right" value="<?php echo get_site_url(); ?>" type="text">
							</div>
							<div class="form-group">
								<label class="control-label" style="padding-bottom: 7px;">Предварительный просмотр</label>
								<div class="preview-push preview-push-chrome-win">
									<span class="close-notify">×</span>
									<div class="pr-icon-side">
										<div class="pr-icon-wrapper">
											<img id="preview-push-chrome-win" src="<?php echo plugins_url('push4sender/Push4Site_files/default.png'); ?>" class="pr-icon">
											

										</div>
									</div>
									<div class="pr-message-wrapper">
										<div class="pr-notify-title">
											Hi, it's a title                                </div>
										<div class="pr-notify-message">
											Your message content                                </div>
										<div class="pr-notify-site"><?php echo get_site_url(); ?></div>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<!-- У Вас осталось 7634 уведомлений для отправки -->
							</div>
							<label id="result_send" class="control-label">
								
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2" style="padding:0 30px; text-align: left;">
							<div class="">
								
								<a class="btn btn-primary" id="sendBtn">Send notification</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</form></div>


	


</div>

			<div id="rightNavContainer">
				<nav id="rightNav">
					<ul class="nav metismenu" id="side-menu">
						<li class="nav-header" style="text-align: center; margin: 7px 0; color: #fff;">
							<span class="block m-t-xs">
								<strong class="font-bold"><i class="fa fa-user"></i> David Williams</strong>
							</span>
						</li>
						<li>
							<a href="#" style="padding-left: 25px;">
								<i></i>
								<span class="nav-label">Персональные настройки</span>
							</a>
						</li>
						<li>
							<a href="#" style="padding-left: 25px;">
								<i></i>
								<span class="nav-label">Реквизиты</span>
							</a>
						</li>
						<li>
							<a href="#" style="padding-left: 25px;">
								<i></i>
								<span class="nav-label">Тарифы</span>
							</a>
						</li>
						<li>
							<a href="#" style="padding-left: 25px;">
								<i></i>
								<span class="nav-label">История платежей</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>



<div class="modal inmodal in form-group" id="confirmsending" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content animated bounceInRight">
			 <div class="modal-header">
				<button type="button" class="close" id="modalclosecross" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h3 style="text-transform: capitalize">Подтвердите детали нового уведомления</h3>
			</div>
			<div class="modal-body" style="background-color: inherit;border: none">

				<p style="font-size:15px;">Ваше уведомление будет выглядеть так:</p>
				<div class="preview-push preview-push-chrome-win">
									<span class="close-notify">×</span>
									<div class="pr-icon-side">
										<div class="pr-icon-wrapper">
											<img id="preview-push-chrome-win" src="<?php echo plugins_url('push4sender/Push4Site_files/default.png'); ?>" class="pr-icon">
										</div>
									</div>
									<div class="pr-message-wrapper">
										<div class="pr-notify-title">Hi, it's a title  </div>
										<div class="pr-notify-message">Your message content </div>
										<div class="pr-notify-site"><?php echo get_site_url(); ?></div>
									</div>
				</div>
				<div>
				<p style="font-size:15px;">Страница, открываемая по нажатию:</p>
				<p id="parforurl"></p>
				</div>
			</div>
			<div class="modal-footer" style="border: none">
				<button type="button" id="realsendbtn" class="btn btn-primary">Отправить</button>
				<button type="button" id="modalclosebtn" class="btn btn-white" data-dismiss="modal">Отмена</button>
				<input id="push4site_projectbundle_information__token" name="push4site_projectbundle_information[_token]" value="SKlAQ6WxTZqqBFoKKPUSB8CkoovMLyxTsYdnbed5u5c" type="hidden">

					</div>
		</div>
	</div>
</div>

		<div class="modal fade" id="viewInfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel"></h4>
					</div>
					<div class="modal-body" id="myModalBody">
					
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Проверить</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
					</div>
				</div>
				</div>
		</div>