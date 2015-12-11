<!DOCTYPE html>
<html>
	<head>
		<title>WebPlace</title>
		<link rel="icon" type="image/png" href="../img/loja.png">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/head.css">
		<link rel="stylesheet" type="text/css" href="../css/foot.css">
		<link rel="stylesheet" type="text/css" href="../css/cadastroCliente.css">
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
								<a href="../index.html">Início</a>
							</li>
							<li>
								<!-- Link para pagina com produtos disponiveis -->
								<a href="produtos.html">Produtos</a>
							</li>
							<li>
								<!-- Link para realizar atendimento com um vendedor ou suporte-->
								<a href="atendimento.html">Atendimento</a>
							</li>
							<li>
								<!-- Link para usuario alterar informcoes da sua conta -->
								<a href="minhaConta.html">Minha Conta</a>
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
						<a href="../index.html">
							<img id="logo"src="../img/loja.png"/>
							<h6>WebPlace</h6>
						</a>
					</div>
					<div id="paginalogin">
						<p id="blink">;)</p>
						<p id="wellcome">Bem-Vindo, realize o seu:</p>
						<p id="plc">
							<!-- Link para pagina de login-->
							<a id="entre"href="login.html">login</a> 
							ou 
							<!--Link para pagina de cadastro-->
							<a id="cadastro"href="cadastro.html">Cadastro</a>.
						</p>
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
		<div id="cadastro">
			<form id="cadastroMeusDados" method="post"  action="enviar_cadastro.php">
				<h1>Meu Cadastro</h1>
				<fieldset>
					<legend>Meus Dados:</legend>
					<h5>Para ser cliente, é necessário preencher corretamente o formulário abaixo com os respectivos dados cadastrais. Os campos que possuem o "<span>*</span>" são de preenchimento obrigatório. </h5>
					<div id="cadastroMeusDadosNomes">
						<p>:Login <span>*</span></p><input type="text" name="login" id="login"><br>
						<p>:Nome Comleto <span>*</span></p><input type="text" name="nome" id="nome"><br>
						<p>:CPF <span>*</span></p><input type="number" name="cpf" id="cpf"><br>
						<p>:Data de Nascimento <span>*</span></p><input type="date" name="dataNascimento" id="dataNascimento"><br>
						<p>:Sexo <span>*</span></p><input type="char" name="sexo" id="sexo"><br>
						<p>:Telefone <span>*</span></p> <input type="number" name="telefone" id="telefone" ><br>
						<p>:E-mail <span>*</span></p><input type "text" name="email" id ="email"><br>
						<p>:Senha <span>*</span></p><input type="password" name="senha" id="senha"><br>
						<p>:Confirmação de Senha<span>*</span></p><input type="password" name="senha2" id="senha2">
					</div>
				</fieldset>
				<fieldset>
					<legend>Meu Endereço: </legend>
					<h5>Os campos que possuem <span>*</span> são de preenchimento obrigatório, pois são impressos na Nota Fiscal do pedido.</h5>
					<div id="cadastroMeuEndereco">
						<p>:CEP<span>*</span></p><input type="number" name ="cep">
							<p>:Identificação <span>*</span></p><input type="text" name="identificacao"><br>
						<p>:Endereço<span>*</span></p><input type="text" name ="endereco">
						<p>:Número<span>*</span></p><input type="number" name="numero">
						<p>:Bairro<span>*</span></p><input type="text" name="bairro">
						<p>:Cidade<span>*</span></p><input type="text" name="cidade">
						<p>:Estado<span>*</span></p><input type="text" name="estado">
						<p>:Complemento</p><input type="text" name="complemento">
					</div>
				</fieldset>
				<div id="botoes">
					<input name="enviar" id="enviar"type="submit" value="Enviar">
					<input name="limpar" id="cancelar"type="reset" value="Limpar">
				</div>
			</form>
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