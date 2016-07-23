<?php get_header("home"); ?>
<body>
	<h1 class="page-heading max-width"><?php bloginfo(name); ?></h1>
	<div class="grid max-width">
		<div class="block grid--item-9">
			<div class="block__title">
				Bloque principal
			</div>
			<div class="block__body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat accusamus 
					officia nostrum minus qui eius consequuntur magni rerum reiciendis provident 
					fuga voluptatem sapiente suscipit, velit culpa autem omnis tempore harum?</p>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<?php get_footer(); ?>
</body>	
</html>