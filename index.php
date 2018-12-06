<?php get_header(); ?>

<!-- <?php if ( have_posts() ) { ?>
 <?php while ( have_posts() ) {
the_post(); ?>

  <?php the_title(); ?>
  <?php the_content(); ?>

 <?php }; ?>
<?php }; ?> -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <div class="caption-text col-md-6 col-md-offset-3">
    <h1>COMIENZA UNA NUEVA VIDA Y ÚNETE AL MUNDO TECNOLÓGICO</h1>
    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</P>
  </div>
  <div class="caption-btn col-md-4 col-md-offset-4">
    <button type="button" class="btn btn-one">
       <p>Comienza Acá!</p>
    </button>
    <button type="button" class="btn btn-two">
       <p>Más Info</p>
    </button>
  </div>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_bloginfo('template_url') ?>/img/bg.jpg" alt="..." class="img-responsive">
    </div>
    <div class="item">
      <img src="<?php echo get_bloginfo('template_url') ?>/img/bg2.jpg" alt="..." class="img-responsive">
    </div>
      <div class="item">
        <img src="<?php echo get_bloginfo('template_url') ?>/img/bg3.jpg" alt="..." class="img-responsive">
    </div>
  </div>


  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container section-2 col-md-6 col-md-offset-3">
  <h2>EL BOOTCAMP MÁS GRANDE DE LATINOAMÉRICA</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <img src="<?php echo get_bloginfo('template_url') ?>/img/team.png" alt="" class="img-responsive img-team">
</div>
<div class="row">
<div class="jumbotron col-md-12">
<h2>SOLICITA INFORMACIÓN E INSCRÍBETE</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</div>

<?php get_footer(); ?>
