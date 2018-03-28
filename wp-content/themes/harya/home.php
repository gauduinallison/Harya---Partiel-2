<?php /* Template Name: Harÿa | Meubles modulaires */ ?>

<?php get_header(); ?>

<section id="slider" class="grid-container full">
  <div class="grid-x">
    <div class="cell large-6 text-slider">
      <h1><?php the_field('titre_slider'); ?></h1>
      <p><?php the_field('paragraphe_slider'); ?></p>
      <a href="<?php the_field('lien_btn_slider'); ?>"><?php the_field('label_btn_slider'); ?></a>
    </div>
    <div class="cell large-12 text-right img_slider">
      <?php the_post_thumbnail(); ?>
    </div>
  </div>
</section>

<section id="presentation" class="grid-container">
    <div class="grid-x">
      <div class="cell large-12">
        <h4><?php the_field('surtitre_gamme'); ?></h4>
        <h3><?php the_field('titre_gamme'); ?></h3>
        <div class="grid-container full">
          <div class="grid-x">
            <div class="cell large-6">
              <div class="grid-container full">
                <div class="grid-x align-middle">
                  <div class="cell large-2">
                    <img src="<?php the_field('modularite_icon'); ?>" alt="">
                  </div>
                  <div class="cell large-10">
                    <h5><?php the_field('modularite_titre'); ?></h5>
                    <p><?php the_field('modularite_paragraphe'); ?></p>
                  </div>
                  <div class="cell large-2">
                    <img src="<?php the_field('ecologie_icon'); ?>" alt="">
                  </div>
                  <div class="cell large-10">
                    <h5><?php the_field('ecologie_titre'); ?></h5>
                    <p><?php the_field('ecologie_paragraphe'); ?></p>
                  </div>
                  <div class="cell large-2">
                    <img src="<?php the_field('esthetic_icon'); ?>" alt="">
                  </div>
                  <div class="cell large-10">
                    <h5><?php the_field('esthetic_titre'); ?></h5>
                    <p><?php the_field('esthetic_paragraphe'); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="cell large-6 paragraphe_general">
              <p><?php the_field('paragraphe_general'); ?></p>
              <a href="<?php the_field('lien_presentation'); ?>"><?php the_field('label_presentation'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="separateur_1">
  <div class="grid-container full">
    <div class="grid-x">
      <div class="cell large-12 taille">
      </div>
    </div>
  </div>
</section>

<section id="personnalisation">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell large-12">
        <h4><?php the_field('surtitre_perso'); ?></h4>
        <h3><?php the_field('titre_perso'); ?></h3>
        <a href="<?php the_field('lien_perso'); ?>"><?php the_field('label_perso'); ?></a>
      </div>
      <div class="cell large-12 text-center">
        <img src="<?php the_field('image_outil'); ?>" alt="">
      </div>
    </div>
  </div>
</section>

<section id="lookbook">
  <div class="grid-container full">
    <div class="grid-x">
      <div class="cell large-12">
        <img src="<?php the_field('img_lookbook'); ?>" alt="">
      </div>
      <div class="cell large-5 lookbook_txt">
        <div class="grid-container full">
          <div class="grid-x">
            <div class="cell large-12 align-middle">
              <h3><?php the_field('titre_lookbook'); ?></h3>
              <p><?php the_field('paragraphe_lookbook'); ?></p>
              <a href="<?php the_field('lien_lookbook'); ?>"><?php the_field('label_lookbook'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell large-12">
        <h4><?php the_field('surtitre_contact'); ?></h4>
        <h3><?php the_field('titre_contact'); ?></h3>
      </div>
      <div class="cell large-12 form">
         <?php echo do_shortcode('[contact-form-7 id="61" title="Formulaire de contact 1"]'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
