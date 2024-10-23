<?php
/**
 * Title: About Section
 * Slug: love-nature/about-section
 * Categories: love-nature, about-section
 *
 * PHP version 7.4
 *
 * @category Love_Nature
 * @package  Love_Nature
 * @author   Prashant Deshmukh <prashant24deshmukh@gmail.com>
 * @license  GNU General Public License v3
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
<main id="about" class="wp-block-group" style="padding-top:50px;padding-right:30px;padding-bottom:50px;padding-left:30px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}}},"textColor":"custom-primary","fontFamily":"dm-sans"} -->
<p class="has-custom-primary-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:12px;font-style:normal;font-weight:400"><?php esc_html_e("ABOUT US", 'love-nature'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"40px","lineHeight":"1.1","letterSpacing":"-2px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}}},"textColor":"custom-primary"} -->
<h4 class="wp-block-heading has-custom-primary-color has-text-color has-link-color" style="font-size:40px;font-style:normal;font-weight:400;letter-spacing:-2px;line-height:1.1"><?php esc_html_e('We are a leading provider of your industry solutions, offering key benefits to businesses like yours.', 'love-nature'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}},"typography":{"fontSize":"16px","lineHeight":"1.3"}},"textColor":"custom-primary","fontFamily":"dm-sans"} -->
<p class="has-custom-primary-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:16px;line-height:1.3"><?php esc_html_e('Upon initial interaction, website visitors lack familiarity with your brand. Establishing trust and recognition is crucial to guide them towards engaging with your content, subscribing to your newsletter, or ultimately making a purchase.', 'love-nature'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-primary","style":{"border":{"radius":"10px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}},"typography":{"fontSize":"15px"}},"borderColor":"custom-background","className":"is-style-outline","fontFamily":"dm-sans"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-dm-sans-font-family" style="font-size:15px"><a class="wp-block-button__link has-custom-primary-color has-text-color has-link-color has-border-color has-custom-background-border-color wp-element-button" style="border-width:1px;border-radius:10px"><?php esc_html_e("Find Out More", 'love-nature'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":329,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/nature-about.png')); ?>" alt="" class="wp-image-329"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->