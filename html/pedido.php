<?php
	include "config.php";
    
    session_start();

 $COD_PRODUTO=$_POST['COD_PRODUTO'];
 $valor_total=$_POST['valor_total'];
 $QTDE=$_POST['QTDE'];
 $data = date('Y/m/d');
 $usuario = $_SESSION['login'];
 $NOME = mysql_query("Select NOME From t_cliente where LOGIN='$usuario'");
 // $NOME = mysql_query("Select NOME From t_cliente Where NOME = '$usuario'");
$nome_t = mysql_fetch_assoc($NOME);

$CPF = mysql_query("Select CPF From t_cliente where LOGIN='$usuario'");
$cpf_t = mysql_fetch_assoc($CPF);



$data = date('Y/m/d');

 $pedido = mysql_query("INSERT into t_nf(VALOR_UNITARIO,QTDE,DATA_EMISSAO,COD_PRODUTO,login)VALUES('$valor_total','$QTDE','$data','$COD_PRODUTO','$usuario')"); 
 ?>  
 <html>
	<head>
		<meta charset="UTF-8"/>
	</head>
    <body>
		<div id="interface">    
			<header id="cabecalho">
			</header>
			<hr class="linha">
			<section id="corpo">
				<div id="meio">
								<div id="info_usuario">
									
									<div id="confirmacao"> 
                                    
                                    <?php
                                                                                        if($pedido){
                                                                                            echo "<span class='sucess'>Pedido Realizado com sucesso</span>";
                                                                                             echo "<meta http-equiv=refresh content='1;url=..\\index.php'>";
                                                                                            }else{
                                                                                            echo "Erro ao realizar o pedido";
                                                                                            }
                                                                                        ?>   
                                        
                                    </div>
									
								</div>
				</div>
			</section>
			<aside id="lateral">
				
			</aside>
			
        </div>
    </body>
</html>