<?php get_header(); ?>
<?php
  $slug = get_post_field('post_name', get_post());
?>
<main class="<? echo $slug; ?>">
  <section class="payoff">
    <?php if($slug == 'contact') { ?>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2446.4538296281844!2d5.278496151341513!3d52.18062297965204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c641c1c1b8b54d%3A0x4d13c185d931b4cb!2sZwaluwenweg+16%2C+3762+VC+Soest!5e0!3m2!1snl!2snl!4v1476731805464" width="100%" height="375" frameborder="0" style="pointer-events:none;border:0" allowfullscreen></iframe>
    <?php } else if(is_singular() && in_category('portfolio')) { ?>
      <div class="portfolio-picture-items inner-payoff" data-featherlight-gallery data-featherlight-filter="a">
        <?php echo get_portfolio_item('extra_afbeelding_1'); ?>
        <?php echo get_portfolio_item('extra_afbeelding_2'); ?>
        <?php echo get_portfolio_item('extra_afbeelding_3'); ?>
        <?php echo get_portfolio_item('extra_afbeelding_4'); ?>
        <?php echo get_portfolio_item('extra_afbeelding_5'); ?>
        <?php echo get_portfolio_item('extra_afbeelding_6'); ?>
      </div>
    <?php } else if(is_front_page()) {
      $quote_image = get_field('uitgelicht_afbeelding');
    ?>
    <div class="inner-payoff">
      <div class="quote">
        <img src="<?php if(isset($quote_image, $quote_image['url'])) {
          echo $quote_image['url'];
        } else {
          echo bloginfo('stylesheet_directory')."/images/quote.png";
        } ?>" />
      </div>
      <?php if(!isset($quote_image)) { ?>
        <quote>Do something worth remembering</quote>
      <?php } ?>
    </div>
    <?php } ?>
  </section>

  <section class="main-content<?php if (is_singular()) { echo " is_singular"; } else { echo " is_overview"; } ?>">
    <div class="inner-content">
    <?php while (have_posts()) : the_post(); ?>
      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h1 class="entry-title">
          <a title="<?php printf(esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>"
             href="<?php the_permalink(); ?>" rel="bookmark">
            <?php the_title(); ?>
          </a>
        </h1>
        <div class="entry-content">
          <?php
          $entry_id = get_the_ID();
          $entry_image = get_field('uitgelicht_afbeelding', $entry_id);
          if (!is_singular() && $entry_image) { ?>
          <div class="entry-image">
            <a title="<?php printf(esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>"
               href="<?php the_permalink(); ?>" rel="bookmark">
            <?php echo show_portfolio_thumbnail($entry_id); ?>
            </a>
          </div>
          <?php } ?>
          <div class="entry-text">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </section>

  <?php if (is_front_page()) { ?>
  <section class="recent-werk">
    <div class="inner-werk">
      <h1>Recent werk</h1>
      <ul>
      <?php
        $catObj = get_category_by_slug('portfolio');
        $id = $catObj->term_id;
        $args = array('numberposts' => '3',
                      'category' => $id,
                      'orderby' => 'post_date',
                      'order' => 'DESC');
        $recent_posts = wp_get_recent_posts($args);
        foreach($recent_posts as $recent) {
          echo "<li>"
            . "<a href=\"".get_permalink($recent["ID"])."\">"
            . show_portfolio_thumbnail($recent["ID"])
            . "</a>"
            . "</li>";
        }
      ?>
      </ul>
    </div>
  </section>
  <?php } ?>
</main>

<?php get_footer(); ?>
