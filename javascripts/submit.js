$(function(){
	$("#btn50, #btn100, #btn200, #btn300, #btn500").on('click',function(){
		var valor = $(this).attr('id').replace('btn', '');
		$("#formDonar input[name=PrecioItem]").attr('value', valor);
		$("#formDonar").submit();
	});

	$("#selectRifa").on('change', function(){
		var precioRifas = getPrecioRifas();
		var p = 'El monto a pagar es de <strong>$' + precioRifas + '</strong>.';
		$("#pRifaValor").html(p);
	});
	$("#btnRifa").on('click', function(){
		var precioRifas = getPrecioRifas();
		$("#formRifa input[name=PrecioItem]").attr('value', precioRifas);
		$("#formRifa").submit();	
	});
});

function getPrecioRifas(){
	return $("#selectRifa option:selected").val().split(' ')[0] * 40;
}	