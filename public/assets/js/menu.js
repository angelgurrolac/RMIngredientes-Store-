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

});

