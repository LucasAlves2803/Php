<header>
	<h1 align="center"> Reiju Vinsmoke </h1>
</header>
<figure>
	<img src="site_php/imagens/reiju.png">
</figure>
<nav>
	<ul id="foto">
		<li> <img src="site_php/imagens/cam.png" id="cam">
			<ul id="itens_menu">
				<li> <a href="upload_foto.php"> Upload de foto </a> </li> <!-- O arquivo abre porque ele está na base do servidor -->
				<li> <a href="remover_foto.php"> Remover foto </a></li>  <!-- Caso estivesse em outra pasta para funcionar seria -->
			</ul>															<!-- necessário indicar o caminho -->
		</li>
	</ul>
</nav>
<section id="menu_perfil">
		<a href="index1.php?page=1"> Sobre </a> <!-- page é uma variável passado pelo operador interrogação (?) -->
		<a href="index1.php?page=2"> Atividades </a>
</section>