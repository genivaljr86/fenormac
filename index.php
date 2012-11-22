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
                    <div id="video"></div>
	            </div>
	    		<div class="coluna info"></div>
                <div class="separator"></div>
	        </div>
    	</div>
	    <div id="afenor">
	    	<div class="centraliza">
	            <div class="conteudo"></div>
            </div>
	    </div>
        <div id="outras">
        	<div class="centraliza">
	            <div class="conteudo"></div>
            </div>
        </div>
        <div id="galeria">
        	<div class="centraliza">
        		<div class="conteudo"></div>
        	</div>
        </div>
        <div id="downloads">
        	<div class="centraliza">
        		<div class="conteudo"></div>
        	</div>
        </div>
        <div id="contato">
        	<div class="centraliza">
        		<div class="conteudo"></div>
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
  </body>
</html>

