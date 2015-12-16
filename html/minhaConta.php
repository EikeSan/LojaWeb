
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
		<link rel="stylesheet" type="text/css" href="../css/minhaConta.css">
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
								<a href="sobrenos.php">Sobre Nós</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="headercenter">
					<div id="headerlogo">
						<a href="../index.html">
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
			<div id="minhaConta">
					<h1>Minha Conta</h1>
					<div id="minhaContaCaixa">

						<div id="minhaContaCaixaInfo">
							<img id="minhaContaCaixaInfoImg" src="../img/user.png">
							<div id="minhaContaCaixaInfoTxt">
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
						$login = $_SESSION['login'];
											$pedidos= mysql_query("Select NOME From t_cliente where login='$login'");
								while ($exibir = mysql_fetch_assoc($pedidos) ) { // Obtém os dados da linha atual e avança para o próximo registro
  									echo "Nome completo: ".$exibir["NOME"];
								}
							}
						
						?>

							</div>
						</div>

						<!-- Editar Dados -->

						<div id="minhaContaCaixaEditar">
							<h2>Editar Dados</h2>
							<nav>
								<ul>
									<li>
										<p>
											<img src="../img/editar.png">
											<a href="">Editar Endereço</a>
										</p>
									</li>
									<li>
										<p>
											<img src="../img/editar.png">
											<a href="">Editar Dados Pessoais</a>
										</p>
									</li>
								</ul>
							</nav>
						</div>			

						<!-- Meus Pedidos -->

						<div id="minhaContaCaixaPedidos" >
							<h2>Meus Pedidos</h2>
								<nav>
								<ul>
									<li>
										<p>Pedidos realizados</p>
										<?php
										 if(!isset($_SESSION['login'])){ 
										 	echo"Usuario nao logado Por favor fazer login";
										 }else{
											$login = $_SESSION['login'];
											$pedidos= mysql_query("Select ALL COD_NF, VALOR_UNITARIO From t_nf where login='$login'");
								while ($exibir = mysql_fetch_assoc($pedidos) ) { // Obtém os dados da linha atual e avança para o próximo registro
  									echo "Codigo da nota fiscal ".$exibir["COD_NF"] . "Valor total:  R$ " . $exibir["VALOR_UNITARIO"]."<br>";
								}
							}
								?>
										</a>
									</li>
									<li>
										<a href="">
											<p>Pedidos cancelados</p>
										</a>
									</li>

								</ul>
							</nav>
						</div>
						
	</body>
	<footer>
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
		</div>
	</footer>	
</html>