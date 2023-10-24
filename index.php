<?php //Template Name: Produtos ?>
<?php get_header(); ?>

<section class="carrossel">
      <div class="container">
        <img src="<?php echo get_theme_root_uri(); ?>/pulse-brasil/imagens/imagem-slider.jpg">
      </div><!--imagens-carrossel-->
</section><!--carrossel-->

<section class="produtos">
    <h1>Pordutos</h1>
    <div class="cor-opcoes-produtos"><p>Cor</p></div>
    <div class="preco-margem-pordutos">
        <p>Preco</p>
        <input type="text">
        <input type="text">
    </div>
</section>
<section class="produtos-comprar-loja"></section>

<?php get_footer(); ?>