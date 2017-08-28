<?php
/**
 *  O rodapé do nosso tema.
 *
 * Esse template contém a tag <footer> e fecha a tag <div id="content" class="site-content">
 *
 * @package Felipe
 */

?>

		</div>
	</div>
	<footer class="site-footer" role="contentinfo">
		<div class="container-fluid site-container">
			<div class="row">

				<div class="col-xs-12 col-md-12 center-md">
					<div class="site-info">
						<p><?php printf( esc_html__( 'Desenvolvido por %1$s.', 'Felipe' ), 'Felipe Almeida' ); ?></p>
						<p>faefelipe25@gmail.com</p>																		
					</div>
				</div>

			</div>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
