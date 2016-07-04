$(document).ready(function() {
	var nenE = 0;
	$('.product').each(function () {
		var nenI = 0;
		$(this).find('.image').attr('id','nenSlider_'+nenE);
		$(this).find('.nav').attr('rel','nenSlider_'+nenE);
		$('#nenSlider_'+nenE+' div').each(function() {
			$(this).attr('id','nenSlide_'+nenE+'_'+nenI);
			nenI++;
		});
		$('#nenSlide_'+nenE+'_0').addClass('active');
		$(this).children('.color').children('p').html($('#nenSlide_'+nenE+'_0 img').attr('alt'));
		$(this).children('.price').html($('#nenSlide_'+nenE+'_0 img').attr('price')+' рублей');
		nenE++;
	});
	$('.navigation a').click(function() {
		nenSliderGo('',this,$(this).attr('href'));
		return false;
	});
	$('.nav div').click(function() {
		if ($(this).hasClass('left')) var act = 'left';
		else if ($(this).hasClass('right')) var act = 'right';
		if (act != undefined) nenSliderGo(act,this);
		return false;
	});
});
function nenSliderGo(act,el,newId) {
	if (newId != undefined) {
		var oldId = Number($(el).parent('div').children('.active').attr('href'));
		if (newId == oldId) { return false;}
		if (newId > oldId) act = 'right';
		else act = 'left';
	}
	if ($(el).parent('div').hasClass('navigation')) var parent = $(el).parent('div').parent('div').attr('id');
	else var parent = $(el).parent('div').attr('rel');
	var pId = parent.replace('nenSlider_','');
	var all = $('#'+parent+' div').length - 1;
	var wid = $('#'+parent).width();
	if (all == 0) return false;
	if (act == 'right') {
		if (newId == undefined) {
			var id = Number($('#'+parent+' .active').attr('id').replace('nenSlide_'+pId+'_',''));
			if (id == all) var newId = 0;
			else var newId = id + 1;
		}
		else {
			var id = oldId;
		}
		if ($('#nenSlider_'+pId).parent('div').hasClass('billboard')) { $('#nenSlider_'+pId+' .slide:not(.active)').css({left:0,opacity:0}) ; var ann = {opacity:0};  var ann2 = {opacity:1}; }
		else { $('#nenSlide_'+pId+'_'+newId).css({left:wid}) ; var ann = {left:-wid}; var ann2 = {left:0} }
		$('#nenSlide_'+pId+'_'+id).animate(ann,350);
		$('#nenSlide_'+pId+'_'+newId).animate(ann2,350,function() {
			$('#nenSlider_'+pId+' .active').removeClass('active');
			$('#nenSlide_'+pId+'_'+newId).addClass('active');
			if ($('#'+parent+' .navigation').length > 0) $('#'+parent+' .navigation a[href='+newId+']').addClass('active');
		});
	}
	else if (act == 'left') {
		if (newId == undefined) {
			var id = Number($('#'+parent+' .active').attr('id').replace('nenSlide_'+pId+'_',''));
			if (id == 0) var newId = all;
			else var newId = id - 1;
		}
		else {
			var id = oldId;
		}
		if ($('#nenSlider_'+pId).parent('div').hasClass('billboard')) { $('#nenSlider_'+pId+' .slide:not(.active)').css({left:0,opacity:0}) ; var ann = {opacity:0};  var ann2 = {opacity:1}; }
		else { $('#nenSlide_'+pId+'_'+newId).css({left:-wid}) ; var ann = {left:wid}; var ann2 = {left:0} }
		$('#nenSlide_'+pId+'_'+id).animate(ann,350);
		$('#nenSlide_'+pId+'_'+newId).animate(ann2,350,function() {
			$('#nenSlider_'+pId+' .active').removeClass('active');
			$('#nenSlide_'+pId+'_'+newId).addClass('active');
			if ($('#'+parent+' .navigation').length > 0) $('#'+parent+' .navigation a[href='+newId+']').addClass('active');
		});
	}
	var e = $('#nenSlider_'+pId).siblings('.color').children('p');
	var de = $('#nenSlider_'+pId).siblings('.price');
	de.animate({opacity:0},150);
	e.animate({opacity:0},150,function() {
		e.html($('#nenSlide_'+pId+'_'+newId+' img').attr('alt')).animate({opacity:1},150);
		de.html($('#nenSlide_'+pId+'_'+newId+' img').attr('price')+' рублей').animate({opacity:1},150);
	});
}