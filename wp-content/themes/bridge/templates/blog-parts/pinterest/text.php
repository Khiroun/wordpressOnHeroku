<div class="post_text">
    <div class="post_text_inner">
        <div class="post_info">
            <span itemprop="dateCreated" class="time entry_date updated"><?php the_time('d F, Y'); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></span>
            <?php esc_html_e('in','bridge'); ?> <?php the_category(', '); ?>
            <?php if($blog_hide_comments != "yes"){ ?>
                / <a itemprop="url" class="post_comments" href="<?php comments_link(); ?>" target="_self"><?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?></a>
            <?php } ?>
        </div>
        <h5 itemprop="name" class="entry_title"><a itemprop="url" href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
    </div>
</div>