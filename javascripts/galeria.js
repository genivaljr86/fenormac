$(document).ready(function(){
	/*---------------GALERIA-------------------*/
	var pg=1;
	var popup=function(){
			$('#galeria .paginacao span').click(function(){
				var valor=$(this).attr('class');
				if(valor =="proximo"){
					pg++;
					}
				else{
					pg--;
					}
					$('#galeria .conteudo').load("galeria.php?pg="+pg,function(){
						$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:" ",deeplinking: false});
						$('.botao').not(".current").hover(
							function(){
								var end= $(this).attr('src');
								var hov = end.replace('_off.','_on.');
								$(this).attr('src', hov);
								},
							function(){
								var end= $(this).attr('src');
								var hov = end.replace('_on.','_off.');
								$(this).attr('src', hov);
								}		  
						);
						setTimeout(popup,100);
						});
				return false;
				});
			};
			
	$('#galeria .conteudo').load("galeria.php?pg=1",function(){
		$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:" ",deeplinking: false});
		$('#galeria .paginacao span').click(function(){
			var valor=$(this).attr('class');
			if(valor =="proximo"){
				pg++;
				}
			else{
				pg--;
				}
				$('#galeria .conteudo').load("galeria.php?pg="+pg,function(){
					$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:" ",deeplinking: false});
					$('.botao').not(".current").hover(
							function(){
								var end= $(this).attr('src');
								var hov = end.replace('_off.','_on.');
								$(this).attr('src', hov);
								},
							function(){
								var end= $(this).attr('src');
								var hov = end.replace('_on.','_off.');
								$(this).attr('src', hov);
								}		  
						);
					setTimeout(popup,100);
					});
			return false;
			});
		});
	
	
	/*var pg = 1;
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
		});*/
});