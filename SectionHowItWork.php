<?php
/**
 * @var array $args
 */
?><section class="hiw">
  <div class="container hiw__content">
    <h2><?php echo get_post_meta( get_the_ID(), 'hiw_title', true ); ?></h2>
    <div class="hiw__bullits">
      <div class="hiw__bullit-item hiw__bullit-first">
        <div class="hiw__bullit-item-numb">1</div>
        <div class="hiw__bullit-item-text">
          <p class="hiw__bullit-item-text-title"><?php echo get_post_meta( get_the_ID(), 'hiw_fp_title', true ); ?></p>
          <div class="hiw__bullit-item-text-subtitle"><?php echo get_post_meta( get_the_ID(), 'hiw_fp_subtitle', true ); ?></div>
        </div>
      </div>
      <div class="hiw__bullit-item hiw__bullit-second">
        <div class="hiw__bullit-item-text">
          <p class="hiw__bullit-item-text-title"><?php echo get_post_meta( get_the_ID(), 'hiw_sp_title', true ); ?></p>
          <div class="hiw__bullit-item-text-subtitle"><?php echo get_post_meta( get_the_ID(), 'hiw_sp_subtitle', true ); ?></div>
        </div>
        <div class="hiw__bullit-item-numb">2</div>
      </div>
      <div class="hiw__bullit-item hiw__bullit-third">
        <div class="hiw__bullit-item-numb">3</div>
        <div class="hiw__bullit-item-text">
          <p class="hiw__bullit-item-text-title"><?php echo get_post_meta( get_the_ID(), 'hiw_tp_title', true ); ?></p>
          <div class="hiw__bullit-item-text-subtitle"><?php echo get_post_meta( get_the_ID(), 'hiw_tp_subtitle', true ); ?></div>
        </div>
      </div>
      <div class="hiw__bullit-item hiw__bullit-fourth">
        <div class="hiw__bullit-item-text">
          <p class="hiw__bullit-item-text-title"><?php echo get_post_meta( get_the_ID(), 'hiw_frp_title', true ); ?></p>
          <div class="hiw__bullit-item-text-subtitle"><?php echo get_post_meta( get_the_ID(), 'hiw_frp_subtitle', true ); ?></div>
        </div>
        <div class="hiw__bullit-item-numb">4</div>
      </div>
      <div class="hiw__bullit-item hiw__bullit-fifth">
        <div class="hiw__bullit-item-numb">5</div>
        <div class="hiw__bullit-item-text">
          <p class="hiw__bullit-item-text-title"><?php echo get_post_meta( get_the_ID(), 'hiw_fvp_title', true ); ?></p>
          <div class="hiw__bullit-item-text-subtitle"><?php echo get_post_meta( get_the_ID(), 'hiw_fvp_subtitle', true ); ?></div>
        </div>
      </div>
    </div>
    <div class="hiw__bullits-mobile">
      <img src="/images/pages/page-home/bullits.svg" alt="mobile icon hiw" width="771" height="330">
    </div>
    <div class="hiw__btn">
      <div class="default-btn-hover-wrapp">
        <a href="<?php echo get_post_meta( get_the_ID(), 'hiw_button_url', true ); ?>">
          <?php echo get_post_meta( get_the_ID(), 'hiw_button_title', true ); ?>
        </a>
      </div>
    </div>
  </div>
</section>