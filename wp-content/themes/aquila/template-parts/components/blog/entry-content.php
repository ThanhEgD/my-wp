<?php
    /*
     * Template for entry content
     *
     * To be used inside WordPress the loop
     *
     * @package Aquila
     * */
?>

<div class="entry-content">
    <?php
        if (is_single()){
            the_content(
                sprintf(
                    wp_kses(
                        __('Contitnue reading %s <span class="meta-nav">&rarr;</span>', 'aquila'),
                        [
                            'span' => [
                                'class' => []
                            ]
                        ]
                    ),
                    the_title('<span class="screen-reader-text">', '</span>', false)
                )
            );
            wp_link_pages([
                'before' => '<div class="page-link">'.esc_html('Pages:', 'aquila'),
                'after' => '</div>',
            ]);
        }else{
            aquila_the_excerpt(200);
            echo aquila_excerpt_more();
        }
    ?>
</div>
