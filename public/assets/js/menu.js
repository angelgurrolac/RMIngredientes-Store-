$(document).ready(function(){
	// seccion de conocenos
	$("#conocenos").hover(function(){
		$("#hr-conocenos").removeClass("menutext");
		$("#hr-conocenos").addClass("menutext2");
	}, function(){
		$("#hr-conocenos").addClass("menutext");
		$("#hr-conocenos").removeClass("menutext2");
	});
	// seccion de productos
	$("#productos").hover(function(){
		$("#hr-productos").removeClass("menutext");
		$("#hr-productos").addClass("menutext2");
	}, function(){
		$("#hr-productos").addClass("menutext");
		$("#hr-productos").removeClass("menutext2");
	});
	// seccion de demostraciones
	$("#demostraciones").hover(function(){
		$("#hr-demostraciones").removeClass("menutext");
		$("#hr-demostraciones").addClass("menutext2");
	}, function(){
		$("#hr-demostraciones").addClass("menutext");
		$("#hr-demostraciones").removeClass("menutext2");
	});
	// seccion de contacto
	$("#contacto").hover(function(){
		$("#hr-contacto").removeClass("menutext");
		$("#hr-contacto").addClass("menutext2");
	}, function(){
		$("#hr-contacto").addClass("menutext");
		$("#hr-contacto").removeClass("menutext2");
	});




		// seccion de hovers de productos 
		// maiz
	$("#maiz").hover(function(){
		$("#texto-maiz").removeClass("texto-productos");
		$("#texto-maiz").addClass("texto-productos-hover");
	}, function(){
		$("#texto-maiz").addClass("texto-productos");
		$("#texto-maiz").removeClass("texto-productos-hover");
	});
	// harina
	$("#harina").hover(function(){
		$("#texto-harina").removeClass("texto-productos");
		$("#texto-harina").addClass("texto-productos-hover");
	}, function(){
		$("#texto-harina").addClass("texto-productos");
		$("#texto-harina").removeClass("texto-productos-hover");
	});
	// panificadoras
	$("#panificadoras").hover(function(){
		$("#texto-panificadoras").removeClass("texto-productos");
		$("#texto-panificadoras").addClass("texto-productos-hover");
	}, function(){
		$("#texto-panificadoras").addClass("texto-productos");
		$("#texto-panificadoras").removeClass("texto-productos-hover");
	});
	// especial
	$("#especial").hover(function(){
		$("#texto-especial").removeClass("texto-productos");
		$("#texto-especial").addClass("texto-productos-hover");
	}, function(){
		$("#texto-especial").addClass("texto-productos");
		$("#texto-especial").removeClass("texto-productos-hover");
	});




	// funcionalidad de videos
	$("#video1").click(function(){
		$(".video").html("<iframe style='border-radius: 2%' width='60%' height='315' src='https://www.youtube-nocookie.com/embed/InBee79J62E?autoplay=1' frameborder='0' allowfullscreen></iframe>");
		$("#titulo-video").text("Tortillas de Maíz");
		$("#descripcion-video").text("Utilizamos tres de nuestros productos: Mejorador Pailero, Blancoplus y Diprogel. Logrando una tortilla de mejor calidad.");
	});

	$("#video2").click(function(){
		$(".video").html("<iframe style='border-radius: 2%' width='60%' height='315' src='https://www.youtube-nocookie.com/embed/bQ18EVmbddM?autoplay=1' frameborder='0' allowfullscreen></iframe>");
		$("#titulo-video").text("Tortillas de Harina");
		$("#descripcion-video").text("Utilizamos: Blancoplus, Conserplus, Magico y Suaviplus. Así logramos una tortilla de harina más suave, resistente, durable y con mejor sabor.");
	});


});

