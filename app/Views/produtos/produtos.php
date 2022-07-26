<div class="container-fluid p-0">
	<div class="row">
	<img src="<?=base_url()?>/content/imagens/top_contato.jpg" class="w-100" alt="">
	</div>
</div>
<div class="container clearfix mb-5">
		<h1 class="display-4 text-center text-warning">Nossos Produtos</h1>
			<div class="row">
				<div class="col-md-12">
			<!-- Inicio da pagina -->

				<div class="card-columns text-center mt-5" id="ajaxPagination">
					<!-- inicia os cards-->
					<?php foreach($produtos as $produto):?>
						<div class="card mb-5">
							<img src="<?=base_url();?>content/imagens/cervejas/<?=$produto['imagem']?>" class="card-img-top img-fluid">
							<a data-toggle="modal" data-target=".bd-example-modal-lg" href="produtos/exibe/<?=$produto['id']?>" class="btn btn-success btn-block card-footer">Ver Mais</a>
						</div>
						<!-- finaliza os cards-->
						<?php endforeach;?>
					</div>

			<!--Fim da pagina-->
		</div>
	</div>
</div>
