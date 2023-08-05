<?php

/**
 * Title: Banner/Hero Layout Text Centered
 * Slug: fotawp/banner-layout-text-centered
 * Categories: fotawp
 */
$fotawp_images = array(
    FOTAWP_URL . 'assets/images/pattern_img_3.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"var:preset|spacing|80","right":"var:preset|spacing|70","left":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.2}},"textColor":"heading-color","fontSize":"xxx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-xxx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.2">Meet the Tech Partner for Your Business Growth</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.7}},"textColor":"foreground"} -->
        <p class="has-text-align-center has-foreground-color has-text-color" style="line-height:1.7">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">Schedule an Appointment</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":186,"dimRatio":0,"minHeight":600,"isDark":false,"className":"is-style-fotawp-cover-round-style"} -->
    <div class="wp-block-cover is-light is-style-fotawp-cover-round-style" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-186" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"> </p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->