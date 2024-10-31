var sPathToIcon;
var fileName = "";
(function($) {
$(document).ready(function () {
    'use strict';
    scheduleDateVal();
    addTask.changeWebsite();

    $('select#244').on('change', function(e){ 
       var domain1 = $(this).find("option:selected").data('subdomain');
    console.log( domain1 ); 
     $('.pr-notify-site').text(domain1);  //+ '.' + $('#subdomain').text());
    e.preventDefault(); 
}); 

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#preview-push-chrome-win, #preview-push-chrome-mac, #preview-push-safari-mac ').attr('src', e.target.result);
			}
		reader.readAsDataURL(input.files[0]);
		}
	};
	$("#push4site_projectbundle_information_attachement").change(function(){
		readURL(this);
	});
	$("#push4site_projectbundle_information_urllien").on('keyup', function () {
		var sitelink = $("#push4site_projectbundle_information_urllien").val();
		var sitelink = sitelink.replace(new RegExp("http://|https://", "gm"), "");
		$("#push4site_projectbundle_information_urllien").val(sitelink);
	});
	$('#sendBtn2').on('click', function () {
		console.log("button2 clicked");
		var inputFile = document.getElementById('push4site_projectbundle_information_attachement2').files;
		console.log(inputFile); 
		console.log(addTask.getPathToIcon());
	});
    
	// $('#push4site_projectbundle_information_attachement').fileupload({
	// 	add: function(e, data) {
	// 		data.url = sPathToIcon;
	// 		data.submit();
	// 	},
	// 		crossDomain: true,
	// 		dataType:'json',
	// 		process: [
	// 			{	action: 'load',
	// 				fileTypes: /^image\/(gif|jpeg|png)$/,
	// 				maxFileSize: 20000000 }, // 20MB
	// 			{	action: 'resize',
	// 				maxWidth: 1440,
	// 				maxHeight: 900 	},
	// 			{ action: 'save' }
	// 		],
	// 		progressall: function (e, data) {
	// 			console.log(e);
	// 			console.log(data);
	// 			$(this).find('.progressbar').progressbar({ value: parseInt(data.loaded / data.total * 100, 10) });
	// 		},
	// 		done: function (e, data) {
	// 			console.log(e);
	// 			console.log(data);
	// 			console.log("file uploaded");
	// 	},
	// 	error: function (e, data) {
	// 		console.log(e);
	// 		console.log(data);
	// 		console.log("ERROR");
	// 	},
	// 	complete: function(xhr) {
	// 		console.log(xhr);
	// 		if (xhr.readyState == 4) {
	// 			if (xhr.status == 201) {
	// 				console.log("Created");
	// 			}
	// 		} else {
	// 			console.log("NoGood");
	// 		}
	// 	}
	// });

	$('#push4site_projectbundle_information_attachement').bind('fileuploadadd', function (e, data) {
		$.each(data.files, function (index, file) {
			fileName = file.name;
		});
	});

    //var a = $('#sendBtn')[0];
    //var evObj = document.createEvent('MouseEvents');
    //evObj.initMouseEvent('click', true, true, window);
    

	$('#sendBtn').on('click', function () {
        //a.dispatchEvent(evObj);
        //e.preventDefault();
		console.log("button clicked");
        if($('#push4site_projectbundle_information_titre').val() !== '' && 
            $('#push4site_projectbundle_information_message').val() !== '')
        {
           $('.modal-backdrop.in').show();//css('display','block');
		   $('#confirmsending').show();//css('display','block');
           var parforurl = $('#push4site_projectbundle_information_urllien').val();
           $('#parforurl').text(parforurl);

        }else{window.alert('Not all fields filled');}
        //addTask.realSendTask();
	}); 
    $('#realsendbtn').on('click', function () {
        console.log("button clicked2");
        addTask.realSendTask();
        $('#confirmsending').hide();
        $('.modal-backdrop.in').hide();
        //window.location = '/information/success';
    });
    $('#modalclosebtn').on('click', function () {
       $('#confirmsending').hide();
       $('.modal-backdrop.in').hide();
    });
    $('#modalclosecross').on('click', function () {
       $('#confirmsending').hide();
       $('.modal-backdrop.in').hide();
    });
	$('#push4site_projectbundle_information_categories').on('change', function () {
		console.log("site changed");
		addTask.changeWebsite();
	});
	$('#push4site_projectbundle_information_titre, #push4site_projectbundle_information_message').on('keyup', function () {
		var target = $(this).data('target');
		var currentText = $(this).val();
		$(target).text(currentText);
	});

	$('#taskPicture').on('click', '.js-btn-upload-icon', function () {
		$(this).parents('.js-upload-icon-block').find('input[name="file-push_icon_image"]').click();
	});
	$('#pushSentModal').on('shown.bs.modal', function () {
		$(this).find('.check-pic').addClass('active');
	});
	$(document.body).on('click', '.js-variables-list li a', function (e) {
		e.preventDefault();
		var variable = $(this).data('val');
		var targetInput = $(this).parents('.has-feedback').find('.js-target-input');
		targetInput.val(targetInput.val() + ' {{' + variable + '}}');
	});
});
function AddTask() {
    this.changeWebsite = function () {
        if ($('push4site_projectbundle_information_categories').prop('type') === 'hidden') {
            $('#sendBtn, #toggleScheduller, #toggleAdvSettings').attr('disabled', true);
            return;
        }
        var iWebsiteID = $('.form-control.sSubDomain').find("option:selected").val();
        var sDomain = $('#push4site_projectbundle_information_categories [value="' + iWebsiteID + '"]').data('url');
        var sProtocol = $('#push4site_projectbundle_information_categories [value="' + iWebsiteID + '"]').data('protocol');
        var sSubDomain = $('.form-control.sSubDomain').find("option:selected").data('subdomain');
        //console.log(iWebsiteID);
        //console.log(sSubDomain);
        if (sSubDomain) {
            $('.pr-notify-site').text(sSubDomain); //+ '.' + $('#subdomain').text());
        } else {
            $('.pr-notify-site').text(sDomain);
        }
        $('#notify-link').val(sProtocol + '://' + sDomain);
        var sUniqueSitename = $('#push4site_projectbundle_information_categories [value="' + iWebsiteID + '"]').data('unique-sitename');
        var sIconSite = $('#push4site_projectbundle_information_categories [value="' + iWebsiteID + '"]').data('icon');
        sPathToIcon = "https://" + sSubDomain + ".push4site.com/fotos/index.php";
        //$('#preview-push-chrome-win, #preview-push-chrome-mac, #preview-push-safari-mac ').attr('src', 'https://' + sSubDomain + '.push4site.com/fotos/safavatar/default.png');
        fileName = 'default.png';
        console.log(sPathToIcon);
        $('.picture-element-principal').css('background-image', 'url("' + sPathToIcon + '")');
        $('.picture-element-principal').css('background-size', "cover");
        if ($('#push4site_projectbundle_information_titre').val().indexOf('}}') !== -1) {
            $('#push4site_projectbundle_information_titre').val('');
        }
    };
    this.getPathToIcon = function () {
		return sPathToIcon;
    } 
    
    this.getSendTaskData = function () {
        var tagids = [];
        var regids = []; 
        var cityids = [];
        var period = [];
        var utm = [];
        var oSendData = {};
        $('#TagsSegmentation>div>div>ul li.search-choice').each(function(){tagids.push($(this).text())});
        $('#RegionSegmentation>div>div>ul li.search-choice').each(function(){regids.push($(this).text())});
        $('#CitySegmentation>div>div>ul li.search-choice').each(function(){cityids.push($(this).text())});
        $('#DateSegmentation>div>div input').each(function(){period.push($(this).val())});
        if(period==','){period=[];}
        $('#OpenUtm').is(':checked') ? $('#UtmParameters>div div input').each(function(){utm.push($(this).val())}):utm = [];
        //alert(period);
        oSendData.tagsid = tagids;
        oSendData.regids = regids;
        oSendData.cityids = cityids;
        oSendData.period = period;
        oSendData.utm = utm;
        oSendData.interact = $('#secinterval').is(':checked');
        oSendData.website_id = $('.form-control.sSubDomain').find("option:selected").val(); //children('option').val();
        oSendData.subdomain = $('.form-control.sSubDomain').find("option:selected").data('subdomain')+"/"; //'http://pravo-vertikal.ru/';
        oSendData.title = $.trim($('#push4site_projectbundle_information_titre').val());
        oSendData.body = $.trim($('#push4site_projectbundle_information_message').val());
        oSendData.link = $.trim($('#push4site_projectbundle_information_urllien').val());
        oSendData.icon = fileName;
        oSendData.send_date = ($('#scheduleCheckb').is(':checked')) ? $.trim($('#date').val()) : '';
        oSendData.TTL = $.trim($('#push4site_projectbundle_information_TTL').val());
        oSendData.api_key = $.trim($('#push4site_projectbundle_information_api_key').val());
        if(oSendData.TTL == ''){oSendData.TTL = 'null';}
        oSendData.stretch_time = $.trim($('#stretch_time').val());
        oSendData.invited_user_id = '';
        oSendData.csrf = $('#push4site_projectbundle_information__token').val();
        console.log(oSendData.cityids);
        return oSendData;
    };

    this.realSendTask = function () {
        var oSendData = addTask.getSendTaskData();
        //alert(oSendData.website_id);
        $.ajax({
            url: 'https://go.push4site.com/v1/save.php',
            dataType: "json",
            crossDomain: true,
            data: {task: oSendData},
            type: 'POST',
            async: false,
            success: function (response) {
                console.log(response);
                if (response.result) {
                    console.log('OK');
                } else if (response.error) {
                    console.log(response.error);
                } else {
                    console.log('unknown error');
                }
            }
        });
    };
}
var addTask = new AddTask();
$('.js-adv-menu').click(function (e) {
    if (e.target.nodeName !== 'BUTTON')
        e.stopPropagation();
});
$.fn.toggleDisabled = function () {
    return this.each(function () {
        this.disabled = !this.disabled;
    });
};
function scheduleDateVal() {
    var currentDate = new Date();
    var timezoneOffset = currentDate.getTimezoneOffset() * 60 * 1000;
    var localDate = new Date(currentDate.getTime() - timezoneOffset);
    var localDateISOString = localDate.toISOString().replace(/:\d\d\.\d\d\dZ/, '').replace('T', ' ');
    $('#date').val(localDateISOString);
    $('#scheduleInfo').text($('#date').val());
}
$('#scheduleCheckb').on('click', function () {
    if ($('#scheduleCheckb').is(":checked")) {
        setTimeout(function () {
            $('#date').focus();
        }, 500);
    }
    $('#date').toggleDisabled();
    $('#sendBtn').toggleClass('scheduled');
});
$('#ttlSettings, #stretch_time').on('change', function () {
    $('#toggleAdvSettings').addClass('active');
});
$('#scheduleDatetime').on('change', function () {
    scheduleDateVal();
});
$('.form-group').on('change', '#urlSegmentOptions', function () {
    var $val = $(this).val();
    var $bSelect = $('.url-segment').find('.bootstrap-select');
    var $urlSegmentValue = $('#urlSegmentValue');
    switch ($val) {
        case '':
            $bSelect.addClass('hidden');
            $urlSegmentValue.removeClass('hidden').attr('disabled', 'disabled');
            break;
        case 'choose':
            if ($bSelect.length == 0) {
                $('#loading-block').removeClass('hidden');
                setTimeout(function () {
                    $('.selectpicker2').selectpicker();
                    setTimeout(function () {
                        $urlSegmentValue.addClass('hidden');
                        $('.url-segment').find('.bootstrap-select').removeClass('hidden');
                        $('#loading-block').addClass('hidden');
                    }, 4000);
                }, 10);
            } else {
                $urlSegmentValue.addClass('hidden');
                $bSelect.removeClass('hidden');
            }
            break;
        default:
            $bSelect.addClass('hidden');
            $urlSegmentValue.removeClass('hidden').removeAttr('disabled').focus();
    }
    addTask.getCountSubcriptions();
});

})(jQuery);