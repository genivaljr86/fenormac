$(document).ready(function(){
	/*---------------GALERIA-------------------*/
	var pg = 1;
    $.ajax({
        url : "galeria.php",
		type: "GET",
		data:pg,
        dataType : "json",
        success : function(data){
            var html = "";
            for($i=0; $i < data.length; $i++){
                html += '<a href="'+data[$i].links +'" rel="prettyPhoto" title="'+data[$i].desc+'"><img src="'+data[$i].links +'"></a>';
            }
            $('#galeria .imagens').html(html);
			$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:" ",deeplinking: false});
        }
    });//termina o ajax
	var pg = 1;
	$('#galeria .paginacao a').click(function(){
		var valor=$(this).attr('class');
		if(valor =="proximo"){
			pg++;
			}
		else{
			pg--;
			}
		$.ajax({
	        url : "galeria.php",
			type: "GET",
			data:pg,
	        dataType : "json",
	        success : function(data){
	            var html = "";
	            for($i=0; $i < data.length; $i++){
	                html += '<a href="'+data[$i].links +'" rel="prettyPhoto" title="'+data[$i].desc+'"><img src="'+data[$i].links +'"></a>';
	            }
	            $('#galeria .imagens').html(html);
				$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:" ",deeplinking: false});
	        }
		
			});
		return false;
		});
});