<div class="subhead">
    <?php
    // show the post author if 'author_signature_post' is set and is yes|true
    if ((isset($custom_fields['author_signature_post'])) && (($custom_fields['author_signature_post'] == 'yes') || ($custom_fields['author_signature_post'] == 'true'))) { 
    ?>
    <span class="postauthortop author vcard">
    <i class="icon-user"></i> <?php echo __('by', 'virtue');?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author"><?php echo get_the_author() ?></a> |</span>
  
    <?php } /* endif author_signature_post */ ?> 
  
    <?php $post_category = get_the_category($post->ID); if ( $post_category==true ) { ?>  
    <span class="postedintop"><i class="icon-folder-open"></i> <?php _e('posted in:', 'virtue'); ?> <?php the_category(', ') ?></span> <?php }?>
    
    <?php
    // show the comment counts if 'comments_count_post' is set and is yes|true
    $custom_fields = get_post_custom($post->ID);
    if ((isset($custom_fields['comments_count_post'])) && (($custom_fields['comments_count_post'] == 'yes') || ($custom_fields['comments_count_post'] == 'true'))) { 
    ?>
      <span class="kad-hidepostedin">|</span>
      <span class="postcommentscount">
      <i class="icon-comments-alt"></i> <?php comments_number( '0', '1', '%' ); ?>
      </span>
    <?php } /* endif comments_count_post */ ?>
</div>