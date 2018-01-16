<?php
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments">
  <?php if (have_comments()) : ?>
    <h2><?php printf(_nx('Reactie op &ldquo;%2$s&rdquo;', '%1$s reacties op &ldquo;%2$s&rdquo;', get_comments_number(), 'bericht reacties', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?></h2>

    <ol class="comment-list">
      <?php wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pagination">
          <?php if (get_previous_comments_link()) : ?>
            <li class="page-item"><?php previous_comments_link(__('&larr; Oudere reacties', 'sage')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="page-item"><?php next_comments_link(__('Nieuwere reacties &rarr;', 'sage')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; // have_comments() ?>

  <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-light">
      <?php _e('Reacties zijn uitgeschakeld.', 'sage'); ?>
    </div>
  <?php endif; ?>

  <?php comment_form(); ?>
</section>
