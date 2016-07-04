function modalClose() {
	$('.modalOverlay').hide();
	$('.modal').empty().hide();
}
function modalHide() {
	$('.modal').animate({opacity:0},200,function() {
		modalClose();
	});
}
function getBodyScrollTop() {
  return self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
}
function getModal(content,timeout,callback) {
	var scroll = getBodyScrollTop() - 200;
	$('.modal').html('<div class="modalClose" onclick="modalHide()"></div><div class="text">'+content+'</div>').removeAttr('style').show();
	$('.modal').css({width:$('.modal .content').width(),marginTop:scroll});
	$('.modalOverlay').attr('onclick','modalClose()').show();
	$('.modal').css({marginLeft:-$('.modal').width() / 2});
	if (timeout != undefined) {
		setTimeout(function() {
			modalHide();
		},timeout);
	}
	if (callback) callback();
}
function getLoader() {
	$('.loaderOverlay').show();
	$('.modalLoader').show();
	setTimeout(function() { checkLoader(); },15000);
}
function checkLoader() {
	if ($(".modalLoader").is(":visible")) {
		$('.modalLoader').hide();
		$('.modalError').html('Возникла ошибка при загрузке данных').show();
		setTimeout(function() { $('.modalError').fadeOut();$('.loaderOverlay').fadeOut(); },1000);
	}
}
function removeLoader() {
	$('.loaderOverlay').hide();
	$('.modalLoader').hide();
}
$(document).ready(function() {
	$('body').append('\
		<div class="modalOverlay" onclick="modalHide()"></div>\
		<div class="modal"></div>\
		<div class="loaderOverlay"></div>\
		<div class="modalLoader"></div>\
	');
});