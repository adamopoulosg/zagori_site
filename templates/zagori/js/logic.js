// logic.js
var factor;
var width;
var height;
var root;



function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};










jQuery(document).ready(function(jQuery) {

	// YOUR SCRIPT HERE
	//setupcontactform();
	resizeme();

	switch (document.location.hostname)
	{
			case 'zagoriwater.gr':
							  root = 'http://zagoriwater.gr/'; break;
			case 'www.zagoriwater.gr':
							  root = 'http://www.zagoriwater.gr/'; break;
			case 'zagori.spotjwtdigital.gr':
							  root = 'http://zagori.spotjwtdigital.gr/'; break;

			case 'localhost' :
							 root = 'http://localhost/zagori_site/'; break;
			default :  // set whatever you want
	}



	var $ = jQuery;
	$('#bc_main_btn').on('click tap', function(e) {
		e.preventDefault();
		var submitForm = true;
		for(var i=1; i<=10; i++){
			if($('#f'+i).val() == undefined || $('#f'+i).val() == "" || (i==6 && !isValidEmailAddress($('#f6').val()))) {
				submitForm = false;
				$('#f'+i).addClass('error');
				$('#error_'+i).fadeOut(100).removeClass('hidden').delay(300).fadeIn(300);
				} else {
				$('#f'+i).removeClass('error');
				$('#error_'+i).addClass('hidden').delay(100).fadeOut(100);
			}
		}

		if(submitForm) {
			$.ajax({
				type	: "POST",
				cache	: false,
				url 	: root+"business_corner_panel/send.php",
				data	: $('#business-form').serialize(),
				success	: function(r) {
					console.log(r);
					if(r == 'sent') {
						$('#business-form').html('<div style="padding:30px 20px; height:350px;"><h3>Ευχαριστούμε για την επικοινωνία</h3></div>');
					}
				}
			});
		}
	});



	/*if(jQuery( "#userForm" ).length){
		var tt=jQuery( "#userForm" ).find('label.checkbox').html();
		//console.log(tt);
		var needle='Όρους χρήσης';
		var needle1='Δήλωση Ιδιωτικότητας';
		var lastIndex=tt.lastIndexOf(needle);
		var last = tt.substring(0, lastIndex) + '*ΟΡΟΙ*' + tt.substring(lastIndex + needle.length);

		var lastIndex1=last.lastIndexOf(needle1);
		var last1 = last.substring(0, lastIndex1) + '*ΙΔΙΩΤΙΚΟΤΗΤΑ*' + last.substring(lastIndex1 + needle1.length);

		var s1=last1.replace("*ΟΡΟΙ*", '<a href="'+root+'index.php/el/terms-el" target="_blank">Όρους χρήσης</a>');
		var s2=s1.replace("*ΙΔΙΩΤΙΚΟΤΗΤΑ*", '<a href="'+root+'index.php/el/privacy-el" target="_blank">Δήλωση Ιδιωτικότητας</a>');


		jQuery( "#userForm" ).find('label.checkbox').html(s2);

	}*/



















});

(function($) {
       $(window).load(function(e) {

	//topphotoinitheight=jQuery('.topphotocontainer').height();
				//setupcontactform();




				resizeme();

				$(window).resize(function(e) {
					resizeme();
				});





			});

 })(jQuery);



function resizeme(){

	width=jQuery(window).innerWidth();
	height=jQuery(window).innerHeight();


	if(width>767){
	jQuery('.footer table').height(jQuery('.footer').height());
	}else{
	jQuery('.footer table').height(50);

	}



	factor=width/1920;

var bigtitlefont=factor*2*70;
		if(bigtitlefont>60){
			bigtitlefont=60;
		}

var titlefont=factor*2*70;
		if(titlefont>44){
			titlefont=44;
		}
		var descfont=factor*2*25;
		if(descfont>16){
			descfont=16;
		}

		var thumbfonttitle=factor*1.6*44;
		if(thumbfonttitle>25){
			thumbfonttitle=25;
		}
		var more_width=factor*2*320;
		if(more_width>200){
			more_width=200;
		}


		var learnfont=factor*18;
		if(learnfont<11){
			learnfont=11;
		}


		jQuery('.main_top_title,.main_top_title h1').css('font-size',bigtitlefont+'px');

		jQuery(".learn_more_btn").css("font-size",learnfont+"px");
		jQuery('.main_top_thumb_title,.main_top_thumb_title h3').css('font-size',thumbfonttitle+'px');
		jQuery('.main_top_text_title,.main_top_text_title h1').css('font-size',titlefont+'px');
		jQuery('.main_top_text_mob').css('padding',factor*1.5*40+'px');
		//jQuery('.main_top_text_body').css('max-width',(100-10*factor*1.5)+'%');
		jQuery('.main_top_text_body').css('max-width','100%');
		jQuery('.main_top_text_body').css('font-size',descfont+'px');
		jQuery('.main_top_text_body').css('line-height',descfont*1.2+'px');


		//jQuery('input,textarea').css('font-size',learnfont+'px');
		//jQuery('input,textarea').css('line-height',learnfont*1.2+'px');

		var menufont=factor*22;
		if(menufont>20){
		menufont=20;
		}
		if(menufont<14){
		menufont=14;
		}


		var pd=factor*15;

		jQuery('.mainmenu').css('font-size',menufont+'px');



		if(width>=1024){

      if(jQuery('.main_top_title').length>0){
		jQuery('.main_top_title').css('top',parseInt($('.main_top_text').css('margin-top'))/1.5+'px');
}
		jQuery('.nav > li > a').css('padding','10px '+pd+'px');




		}else{
			jQuery('.main_top_title').css('top',parseInt($('.main_top_promo img').height())/2+'px');


		}



		jQuery( ".yt_frame" ).each(function( index ) {
			var a=jQuery( this ).parent('div').width();
			var fact=a/640;

		  jQuery( this ).width(jQuery( this ).parent('div').width()) ;
		  jQuery( this ).height(fact*360);
		});










}
function setupcontactform(){
	if(jQuery( "#contact-form" ).length>0){




		jQuery( "#contact-form .control-label" ).css('display','none');
		jQuery( "#contact-form .optional" ).css('display','none');



		/*jQuery( "#contact-form fieldset .control-group" ).each(function( index ) {

		  var id=jQuery(this).children('.controls').children('input').attr('id');
		  console.log(id);
		  if(id!='undefined'){

		  jQuery(this).children('.controls').children('input').attr('placeholder',jQuery(this).children('.control-label').children('label').attr('data-original-title').trim());


		  }

		});*/





		jQuery( "#jform_contact_phone" ).attr('placeholder',jQuery( "#jform_contact_phone-lbl" ).attr('data-original-title').trim());

		jQuery( "#jform_contact_name" ).attr('placeholder',jQuery( "#jform_contact_name-lbl" ).attr('data-original-title').trim()+'*');

		jQuery( "#jform_contact_email" ).attr('placeholder',jQuery( "#jform_contact_email-lbl" ).attr('data-original-title').trim()+'*');
		jQuery( "#jform_contact_emailmsg" ).attr('placeholder',jQuery( "#jform_contact_emailmsg-lbl" ).attr('data-original-title').trim()+'*');

		jQuery( "#jform_contact_message" ).attr('placeholder',jQuery( "#jform_contact_message-lbl" ).attr('data-original-title').trim()+'*');
		jQuery( "#jform_contact_message" ).attr('rows','5');

		//pontcontactform
		var cnt=jQuery( "#contact-form" ).detach();

		jQuery( ".contact-form" ).append(cnt);





	}
}

/*jQuery.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            jQuery(this).removeClass('animated ' + animationName);
        });
    }
});*/
