$(document).ready(function(){
	$(".buy_href").click(function(){
		setPrice(($(this).data('type')).toString());
	});
	$(".buy_default").click(function(){
		$('#chosen').val($(this).data('1'));
		setPrice('1');
	});
	$("#chosen").change(function(){
		setPrice(($(this).val()).toString());
	});
	$("#sizer").change(function(){
		setPrice2(($(this).val()).toString());
	});
});

function setPrice(chosen){
	switch(chosen) {
		case '1':
		$('#imgShow').html('<img src="../img/blackmask.jpg" alt="Черный цвет" class="dm-img">');
		$('#nameShow').text('Черный цвет');
		$('#priceShow').text($('#price1').val()+ ' грн');
		$('[name=price]').val($('#price1').val());
		$('#chosen').val('1');
		$('#sizer').val('для взрослых');
		break;
		case '2':
		$('#imgShow').html('<img src="../img/bluemask.jpg" alt="Синий цвет" class="dm-img">');
		$('#nameShow').text('Синий цвет');
		$('#priceShow').text($('#price2').val()+ ' грн');
		$('[name=price]').val($('#price2').val());
		$('#chosen').val('2');
		$('#sizer').val('для взрослых');
		break;
		case '3':
		$('#imgShow').html('<img src="../img/blackmask.jpg" alt="Черный цвет" class="dm-img">');
		$('#nameShow').text('Черный цвет');
		$('#priceShow').text($('#price3').val()+ ' грн');
		$('[name=price]').val($('#price3').val());
		$('#chosen').val('1');
		$('#sizer').val('для детей');
		break;
		case '4':
		$('#imgShow').html('<img src="../img/bluemask.jpg" alt="Синий цвет" class="dm-img">');
		$('#nameShow').text('Синий цвет');
		$('#priceShow').text($('#price4').val()+ ' грн');
		$('[name=price]').val($('#price4').val());
		$('#chosen').val('2');
		$('#sizer').val('для детей');
		break;
	}
	return false;
}

function setPrice2(sizer){
	switch(sizer) {
		case 'для детей':
		$('#priceShow').text($('#price3').val()+ ' грн');
		$('[name=price]').val($('#price3').val());
		break;
		case 'для взрослых':
		$('#priceShow').text($('#price1').val()+ ' грн');
		$('[name=price]').val($('#price1').val());
		break;
	}
	return false;
}