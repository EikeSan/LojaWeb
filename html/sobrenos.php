
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
		<link rel="stylesheet" type="text/css" href="../css/sobrenos.css">
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
			<div id="sobreNos">
				<h1>Sobre Nós</h1>
				<div id="sobreNosCaixa">
					<h2 class="blabla">
						Empresa com tradição e com o compromisso de oferecer aos nossos consumidores as melhores peças e os melhores preços e um sistema que facilita a procura e a montagem de computadores sem a parte ruim da compra de peças avulças, barateando o custo do produto final sem perder a qualidade.
						<br>
					</h2>
					<h4 class="blabla">
						WebPlace<br>
						website: http://webplace.xyz/<br>
						github:https://github.com/EikeSan/LojaWeb<br>
						email: contato@webplace.xyz<br>
						----------------------------desenvolvido por:-----------------------------------------------<br>
						<br>
						->Diogo Figueredo Bento		email:diogofb93@hotmail.com	<br>
						->Eike Duarte Santiago		email:eikesantz@hotmail.com<br>
						->João Pedro Ramos Pradines	email:pradinesjpr@gmail.com<br>
						<br>
						----------------------Informações para o usuario-------------------------------------<br>
						Para instalar-> extraia a pasta no servidor xampp. c:\xampp\htdocs\<br>
						Para acessar -> inserir a url localhost ou o ip 127.0.0.1<br>
						Ao acessar(ou clicar no index.html) a url do webplace e clicar em "sobre nos" o usuario ira ter uma breve introduçao do que é o webplace.<br>
						Na pagina inicial o usuario vai se deparar com um banner indicando para Montar seu computador.<br>
						<br>
						-----------------------informações para funcionario---------------------------------<br>
						Por enquanto para cadastrar um novo funcionario o gerente deve entrar pela url:http://webplace.xyz/html/cadastroFuncionario.html ou acessar 
						a pastar html e clicar em cadastrofuncionario.html<br>
					</h4>
					<ol class="blabla">
						<h2>MAPA</h2>
						<li>
							<a href="../index.html">Inicio</a>
						</li>
						<li>
							<a href="produtos.html">Produtos</a>
							<ul>
								<li>
									<a href="montagem.html">Montagem</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="atendimento.html">Atendimento</a>
							<ul>
								<li>
									<a href="duvf.html">Duvidas Frequentes</a>
									<ul>
										<li>
											<a href="const.html">Atraso na entrega do pedido</a>
										</li>
										<li>
											<a href="const.html">Cancelar Pedido</a>
										</li>
										<li>
											<a href="const.html">Garantia</a>
										</li>
										<li>
											<a href="const.html">Promoções</a>
										</li>
										<li>
											<a href="const.html">Montagem Ideal</a>
										</li>
										<li>
											<a href="const.html">Outros</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="aemail.html">Atendimento por e-mail</a>
								</li>
								<li>
									<a href="const.html">Aconpanhar Pedido</a>
								</li>
							</ul>
						<li>
							<a href="minhaConta.html">Minha Conta</a>
							<ul>
								<li>
									<a href="const.html">Editar Endereço</a>
								</li>
								<li>
									<a href="const.html">Editar Dados Pessoais</a>
								</li>
								<li>
									<a href="const.html">Pedidos em andamento</a>
								</li>
								<li>
									<a href="const.html">Pedidos cancelados</a>
								</li>
								<li>
									<a href="const.html">Pedidos finalizados</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="login.html">Login</a>
						</li>
						<li>
							<a href="cadastro.html">Cadastro</a>
						</li>
						<li>
							<a href="cadastroFuncionario.html">Cadastro Funcionario</a>
						</li>
						<li>
							<a href="meuCarrionho.html">Meu Carrinho</a>
						</li>
						<li>
							<a href="sobrenos.html">Sobre Nós</a>
						</li>
					</ol>
				</div>
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
	<style type="text/css">
		#body{
			height: 150%;
		}
		#footer{
		bottom: -30%;
		}
	</style>
</html>