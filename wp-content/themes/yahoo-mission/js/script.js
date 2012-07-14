/* ==|=======================================================
   Author: Claudio Jr. Melo da Silva <claudio.junior@w3tools.com.br> e Miriam Dias dos Santos <miriam.dias@w3tools.com.br>
   ========================================================================== */
$(function(){
	var inputs = $('.login-username input, .login-password input');
	inputs.on('focus', function(){
		inputs.val('').off().parents('.erro').removeClass('erro');
	});
	$('.copy').on('click', function(e){
		e.preventDefault();
	})
	$('.copy').zclip({
        path : $('base').attr('href')+'/wp-content/themes/yahoo-mission/swf/ZeroClipboard.swf',
        copy : function(){ return $(this).prev().is('input') ? $(this).prev().val() : $(this).prev().text();}
    });
});

/* Twitter */
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

/* Tumblr */
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.tumblr.com/v1/share.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","tumblr-js");

/* G+ */
(function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();

/* Facebook */
(function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));