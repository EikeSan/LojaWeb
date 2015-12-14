
<?php
include "config.php";
    
    session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>WebPlace</title>
		<link rel="icon" type="image/png" href="../img/loja.png">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/head.css">
		<link rel="stylesheet" type="text/css" href="../css/foot.css">
		<link rel="stylesheet" type="text/css" href="../css/montagem.css">
	</head>
	<body>
		<div id="body">
			<div id="header">
				<div id="headertop">
					<!-- Barra de navegacao-->
					<div id="navbar">
						<ul>
							<li>
								<!-- Link para voltar a pagina inicial -->
								<a href="../index.php">Início</a>
							</li>
							<li>
								<!-- Link para pagina com produtos disponiveis -->
								<a href="produtos.php">Produtos</a>
							</li>
							<li>
								<!-- Link para realizar atendimento com um vendedor ou suporte-->
								<a href="atendimento.php">Atendimento</a>
							</li>
							<li>
								<!-- Link para usuario alterar informcoes da sua conta -->
								<a href="minhaConta.php">Minha Conta</a>
							</li>
							<li>
								<!-- Link para uma pagina informativa sobre a empresa-->
								<a href="sobrenos.html">Sobre Nós</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="headercenter">
					<div id="headerlogo">
						<a href="../index.php">
							<img id="logo"src="../img/loja.png"/>
							<h6>WebPlace</h6>
						</a>
					</div>
					<div id="paginalogin">
						<?php
						 if(!isset($_SESSION['login'])){ ?>

							<p id="blink">;)</p><span id="paginaLoginMsg">
							<p id="wellcome">Bem-Vindo, realize o seu:</p>
							<p id="plc">					
							<a id="entre"href="login.html">login</a> 
							ou 
							<a id="cadastro"href="cadastro.php">Cadastro</a>.
							</p></span>
						<?php }
						else{
						$nome = $_SESSION['login'];
               		    $nome = ucfirst(strtolower($nome));
						echo "<label class='conecc'><br>Usuario:</label>" . "<label id='nome_conec' class='nome_conec'>" . $nome . "</label>"; 
						echo "<a href='logout.php'><label class='desconect'><br>Desconectar</label></a>";
						}
						
						?>
					</div>
					<div id="busca">
						<form action="">
							<input id="busca2" name="busca"type="search" placeholder="Buscar">
							<input id="lupa"type="image" src="../img/lupa.png">	
						</form>
					</div>
					<div id="sloganc">
						<p id="slogan">Praticidade e Comodidade em um só lugar!</p>
					</div>
					<!-- Implementação de um carrionho de compras se for necessário -->
					<div id="carrinho">
						<!-- A ancora deve redirecionar para a pagina do carrinho (carrinho.html)-->
						<a href="meuCarrinho.html">
							<img src="../img/carrinho.png">
							<!-- ao adicionar um item no carrinho a imagem dele deve ser alterada pela imagem abaixo:
							<img src="img/carrinhoi2.png">-->
							<p id="mycar">Meu Carrinho</p>
							<p id="numerocar">00<p>
							<p id="itemcar">Item</p>
						</a>						
					</div>
				</div>
			</div>
		<div id="montagem">
			<form id="monta" action="">
				<fieldset>
					<legend>Computadores:</legend>
					<div id="produtos">
						<fieldset>
							<legend>STRIKE</legend>
							<div id="divesq">
							<input id="imagemcheck"type="image" src="../img/produtos/gabinete1.png">
						</div>
							 <div id ="divdir">
							 	<ul>
							<li><h4>i3 1212</h4></li>
							<li><h4>placa de video Geforce gtx 150000</h4></li>
							<li><h4>memoria :35GB DDR8</h4></li>
							<li><h4>Gabinete strike modelo:21</h4></li>
							<li><h4>Fonte corsair 650watts</h4></li>
							<li><H3>Valor=R$3500,00</H3></li>
							</ul>		
							<?php 		
							if(!isset($_SESSION['login'])){	?>
								<a href="login.html">
									<img src="../img/botao.png"/>
							 <?php }
						else{ ?>

							<form id="pedido" method="post"  action="pedido.php" name="Strike">
							<input id="enviar"type="submit" value="COMPRAR">
							
						<?php }?>

						</div>
						</fieldset>

						<fieldset>
							<legend>PHANTOM</legend>
							<div id="divesq">
							<input id="imagemcheck"type="image" src="../img/produtos/gabinete2.png">
						</div>
							 <div id ="divdir">
							 	<ul>
							<li><h4>i10 1212</h4></li>
							<li><h4>placa de video Geforce gtx 150000TI</h4></li>
							<li><h4>memoria :35GB DDR8</h4></li>
							<li><h4>Gabinete strike modelo:69</h4></li>
							<li><h4>Fonte corsair 750watts</h4></li>
							<li><h3>Valor:um pouco mais caro</h3></li>
							</ul>
							<input type="submit" value="COMPRAR">
						</div>
						</fieldset>
						<fieldset>
							<p>Se você nao gostou das opções dadas, você pode montar o computador ideal clicando <a href="../html/montagem.html">aqui</a></p>
						</fieldset>
					</div>
					</fieldset>
			
			</form>
		</div>
	</body>
	<footer>
		<!-- Rodapé da página com formas de pagamento -->
			<!-- Rodapé da página com formas de pagamento -->
		<div id="footer">
			<div id="pay">
				<p>Formas de pagamento</p>
			</div>
			<div id="paymod">
				<img id="master"src="../img/master.png">
				<img id="visa"src="../img/visa.png">
				<img id="gold"src="../img/gold.png">
				<img id="payboleto"src="../img/boleto.png">
			</div>
			<div id="paytype">
				<p id="cards">Catões</p>
				<p id="others">Outros</p>
				<p id="boleto">Boleto</p>
			</div>
		</div>
		<style type="text/css">
		<!--
			#footer{
				bottom: -50%;
			}
		-->
		</style>
	</footer>
</html>