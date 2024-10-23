<?php
/**
 * Title: Blog Section
 * Slug: love-nature/blog-section
 * Categories: love-nature, blog-section
 *
 * PHP version 7.4
 *
 * @category Love_Nature
 * @package  Love_Nature
 * @author   Prashant Deshmukh <prashant24deshmukh@gmail.com>
 * @license  GNU General Public License v3
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"30px","bottom":"0px"}}},"backgroundColor":"custom-secondary","layout":{"type":"constrained"}} -->
<main id="blog" class="wp-block-group has-custom-secondary-background-color has-background" style="padding-top:30px;padding-bottom:0px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px","letterSpacing":"-2px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-black"}}}},"textColor":"custom-black","fontFamily":"dm-sans"} -->
<h2 class="wp-block-heading has-text-align-center has-custom-black-color has-text-color has-link-color has-dm-sans-font-family" style="font-size:40px;letter-spacing:-2px">Blog</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"tagName":"main","layout":{"type":"constrained","contentSize":"1000px"}} -->
<main class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"},"fontFamily":"inter"} -->
<main class="wp-block-group has-inter-font-family" style="margin-top:0;margin-bottom:0;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-featured-image {"isLink":true,"align":"left"} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}}},"textColor":"custom-primary","fontFamily":"dm-sans"} /-->

<!-- wp:post-title {"style":{"typography":{"fontSize":"20px","textDecoration":"none"}},"fontFamily":"dm-sans"} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}}},"textColor":"custom-primary","fontFamily":"dm-sans"} /--></main>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></main>
<!-- /wp:group -->