<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wp_enqueue_style("add_css13", plugins_url("Push4Site_files/after_style.css", dirname(__FILE__)), array(), time(), "all");

wp_enqueue_script('jquery');
wp_enqueue_script('jquery-ui-datepicker');
wp_enqueue_script('jquery-ui-core');
//wp_enqueue_script("ajs02", plugins_url("push4sender/Push4Site_files/jquery-2.js"), array(), time(), true);
//wp_enqueue_script("ajs03", plugins_url("push4sender/Push4Site_files/jquery-ui.js"), array(), time(), true);
wp_enqueue_script("ajs04", plugins_url("Push4Site_files/intro.js", dirname(__FILE__)), array(), time(), true);

?>

<div id="pfs_registration">Registration</div>

<div id="pfs_intropage">
	<div class="row">
		<div class="col-xs-6" style="padding:0 30px ;">
			
			<div class="pfs_registration">
				<label id="api_key" class="control-label">API-key</label><br>
				<input data-original-title="Вставьте ссылку" id="main_api_key" name="push4site_projectbundle_information[apikey]" class="form-control"  title="" data-toggle="tooltip" data-placement="right" value="AAABBBCCC555" type="text">
				<label id="result_send" class="control-label"></label><br>
				<button class="btn btn-primary" style="background-color: #ffd400; color:#000;border-color:#ffd400;" id="EnterBtn" onclick="" >Enter API_KEY</button><br>
				<label id="or" class="control-label">or</label><br>
				<button class="btn btn-primary" style="background-color: #ffd400; color:#000;border-color:#ffd400;" id="SetBtn" ><a href="https://push4site.com" style="text-decoration:none;">Registration</a></button>
				<br>
			</div>

		</div>
	</div>
</div>

