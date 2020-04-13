<body>
	<header><a href="https://kaiseiblog.me/">kaiseiblog</a></header>
	<div id="headerFiexdBlock"></div>
	<div class="container-fluid">
		<section class="container">
			<div class="row">
				<main class="col-md-8">
				<?php 
					include_once(getRoot().getRequestURL()."c.php");
				?>
				</main>
				<?php 
					include_once(getRoot()."/src/parts/sub.php"); 
				?>
			</div>
		</section>
	</div>
	<footer>c 2020 <a href="/">大田海聖 CMS </a></footer>
</body>
