// JavaScript Document

var Slide = {


	init :function(){
	
		$("#img_change2").attr("onclick","Slide.change_img(2,4,1)");
		$("#img_change3").attr("onclick","Slide.change_img(3,2,1)");
		$("#img_change4").attr("onclick","Slide.change_img(4,3,1)");
		$("#img_change5").attr("onclick","Slide.change_img(5,2,1)");
	
	},
	
	change_img : function(div, cant, cons){
	
	a = $("#img_change"+div).find("img");
	name = a.attr("src");
	name = name.replace("resources/img/temporal/", "");
	name = name.replace(".img", "");
	name = name.split("-");
	name = "resources/img/temporal/"+name[0];
	
	if(cons == cant){
	ini = 1;
	$("#img_change"+div).attr("onclick","Slide.change_img("+div+","+cant+","+ini+")");
	img_data = $("#img_change"+div).find("img");
	img_data.attr("src",name+"-"+ini+".jpg");
	}else{
	ini = cons+1;
	$("#img_change"+div).attr("onclick","Slide.change_img("+div+","+cant+","+ini+")");
	img_data = $("#img_change"+div).find("img");
	img_data.attr("src",name+"-"+ini+".jpg");
	}
	
	}

};
