<?php 
$relatedFaqs = get_field('related_faqs');

if( $relatedFaqs ): ?>

	<section class="relatedFaqs clearfix">
   	<h3>Related FAQs</h3>

    <?php foreach( $relatedFaqs as $post): ?>
        <?php setup_postdata($post); ?>

        <a class="faqItem" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?>
		</a>

    <?php endforeach; ?>

	</section> <!-- end relatedFaqs section -->

    <?php wp_reset_postdata(); ?>
<?php endif; ?>