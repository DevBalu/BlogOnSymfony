$(document).ready(function(){

	$("#navbar>a").not(':first').attr("class", "animated bounceIn");

	$("#nav-mob").click(function(){
		if( $("#navbar>a").is(":hidden") ) {
			$("#navbar>a").attr("style", "display: flex;");
		}
		else
		{
			$("#navbar>a").attr("style", "");
		}
	})

});
