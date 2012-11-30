<?php include("header.php") ?>
    <title><?php echo $core_nome; ?></title>
  </head>
  <body>
    <div id="header">
    	<div class="centraliza">
		<?php include("menu.php");  ?>
            <div id="redes">
            	<a href=""><img src="images/face_off.png" alt="" class="botao"></a>
                <a href=""><img src="images/tt_off.png" alt="" class="botao"></a>
            </div>
        </div>
    </div>
    <div id="content">
    	<div id="espaco"></div>
    	<div id="home">
	        <div class="centraliza">
	    		<div class="coluna">
	            	<img src="<?php servidor(); ?>images/logo.png" alt="" id="logo"> <br>
                    <div id="video">
                    	<iframe width="373" height="280" src="http://www.youtube.com/embed/gHUEWG_TEiQ" frameborder="0" allowfullscreen></iframe>
                    </div>
	            </div>
	    		<div class="coluna info">
                	<div id="twitter">
                    	<div id="twits"></div>
                    </div>
                	<div id="face">
                    	<script type="text/javascript" src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/en_US"></script>
					<script type="text/javascript">FB.init("");</script>
                    <fb:fan profile_id="480710831980230" stream="0" connections="10" width="170px" height="280px" header="0" logobar="0"   css="http://testelw.engenharia.ws/stylesheets/fb_fn.css?2"></fb:fan>
                    </div>
                </div>
                <div class="separator"></div>
	        </div>
    	</div>
	    <div id="afenor">
	    	<div class="centraliza">
	            <div class="conteudo">
                	<div class="txt">
                    	<p>O maior encontro de negócios da Região Norte, dirigido à revendedores de materiais para construção, acabamento, revestimento e iluminação. Arquitetos, urbanistas, decoradores, designers, engenheiros, construtores e universitários.</p>
						<p>Agregar valores para crescer mais; Encontrar novos e tradicionais clientes; Excelente oportunidade de negócios; Vitrine para ação promocional e merchandising; Lançamentos de produtos e serviços para construção.
</p>
						<p>Segundo o IBGE a Região Norte apresenta um dos maiores índices de crescimento econômico nos últimos anos comparado a outras regiões do país. Produto do crescimento industrial e comercial influenciando diretamente na renda per capita da população. Venha conhecer de perto este desenvolvimento.</p>
						<p>Agregar valores para crescer mais; Encontrar novos e tradicionais clientes; Excelente oportunidade de negócios; Vitrine para ação promocional e merchandising; Lançamentos de produtos e serviços para construção</p>
                    </div>
                    <div class="imagens">
                    	<a href="images/afenor/1.jpg" rel="prettyPhoto"><img src="images/afenor/1.jpg" alt=""></a><br>
                        <a href="images/afenor/2.jpg" rel="prettyPhoto"><img src="images/afenor/2.jpg" alt=""></a><br>
                        <a href="images/afenor/3.jpg" rel="prettyPhoto"><img src="images/afenor/3.jpg" alt=""></a>
                    </div>
                    <div class="separator"></div>
                </div>
            </div>
	    </div>
        <div id="outras">
        	<div class="centraliza">
	            <div class="conteudo">
                	<div class="txt">
                    	Lorem ipsum dolor sit amet, vestibulum provident, sed et senectus fermentum imperdiet. Consectetuer arcu suspendisse nibh urna. Amet non aenean nulla amet, elementum nunc placerat, massa sit posuere tincidunt quis, ipsum dui, urna vitae. Felis nulla enim. Egestas integer vestibulum pellentesque sed, cum nullam sem turpis ante, in diam, fusce orci id wisi eget quam. Phasellus lacinia pellentesque.
                    </div>
                    <div class="menu">
                    	<img src="images/outras/2012/cartaz.jpg" alt="" >
                        <a href="images/outras/2011/1.jpg" rel="prettyPhoto[2011]"><img src="<?php servidor(); ?>images/outras/2011/cartaz.jpg" alt="" id="i2011"></a>
                    	<a href="images/outras/2009/1.jpg" rel="prettyPhoto[2009]"><img src="<?php servidor(); ?>images/outras/2009/cartaz.jpg" alt="" id="i2009"></a>
                        <img src="images/outras/2007/cartaz.jpg" alt="" id="i2007">
                    	<img src="images/outras/2005/cartaz.jpg" alt="" id="i2005">
                    </div>
                   	<div class="fotos">
                    	<a href="images/outras/2009/2.jpg" rel="prettyPhoto[2009]"></a>
                    	<a href="images/outras/2009/3.jpg" rel="prettyPhoto[2009]"></a>
                        <a href="images/outras/2009/4.jpg" rel="prettyPhoto[2009]"></a>
                        
                        <a href="images/outras/2011/2.jpg" rel="prettyPhoto[2011]"></a>
                    	<a href="images/outras/2011/3.jpg" rel="prettyPhoto[2011]"></a>
                        <a href="images/outras/2011/4.jpg" rel="prettyPhoto[2011]"></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="galeria">
        	<div class="centraliza">
        		<div class="conteudo">
                    
                
                </div>
        	</div>
        </div>
        <div id="downloads">
        	<div class="centraliza">
        		<div class="conteudo">
                	<div id="itens" class="centraliza">
                    	<a href="docs/PLANTA-FENORMAC-2013.xls"><img src="images/downloads/bt_off.jpg" alt="" class="botao i1"></a><br>
                    	<a href="docs/Autorizacao-FENORMAC-2013.doc"><img src="images/downloads/bt_off.jpg" alt="" class="botao i2"></a><br>
                    	<a href=""><img src="images/downloads/bt_off.jpg" alt="" class="botao i3"></a>
                    </div>
                </div>
        	</div>
        </div>
        <div id="contato">
        	<div class="centraliza">
        		<div class="conteudo">
                	<div class="txt">
                    	Lorem ipsum dolor sit amet, vestibulum provident, sed et senectus fermentum imperdiet. 
                    </div>
                    <form action="" class="centraliza">
                    	<label for="nome"><img src="<?php servidor(); ?>images/contato/nome.png" alt=""></label>
                    	<br>
                    	<input type="text" name="nome" id="nome">
                    	<br>
                    	<label for="email"><img src="<?php servidor(); ?>images/contato/email.png" alt=""></label>
                    	<br>
                    	<input type="text" name="email" id="email">
                    	<br>
                    	<label for="tel"><img src="<?php servidor(); ?>images/contato/tel.png" alt=""></label>
                    	<br>
                    	<input type="text" name="tel" id="tel">
                    	<br>
                        <label for="mens"><img src="<?php servidor(); ?>images/contato/mens.png" alt=""></label>
                        <br>
                        <textarea name="mens" id="mens" cols="30" rows="10"></textarea><br><br>
                        <input type="image" src="<?php servidor(); ?>images/contato/bt_off.png" alt="" id="cont_bt" class="botao">
                    </form>
                </div>
        	</div>
        </div>
    </div>
    <div id="footer">
    	<div class="centraliza">
        	<div id="creditos">
	            SINDIMACO <br>
	            Av. Tavares Bastos, 154 - Souza - Belém - Pará  CEP: <br>
	            66.613-140 Fone/Fax: (91) 3242-1215 / 3224-5619
            </div>
        	
        </div>
    </div>
    <?php include("contato_msg.php"); ?>
    <script type="text/javascript">
    /*-------------- Pop Up Imagens ------------------*/
	$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:" ",deeplinking: false});
	</script>
  </body>
</html>

