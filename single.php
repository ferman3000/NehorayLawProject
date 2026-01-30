<?php get_header(); ?>

<div class="single-container">
    <div class="single-wrapper">

        <main id="primary" class="site-main single-main">
            <?php
            while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title-large">', '</h1>' ); ?>
                        
                        <div class="blog-meta">
                            By <strong>
                            <?php 
                            $guest_author = get_post_meta( get_the_ID(), 'autor_invitado', true );
                            
                            if ( ! empty( $guest_author ) ) {
                                echo esc_html( $guest_author );
                            } else {
                                the_author(); 
                            }
                            ?>
                            </strong> | <?php echo get_the_date(); ?> 
                        </div>
                    </header>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="single-thumbnail">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                </article>

                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; 
            ?>
        </main>

        <aside id="secondary" class="widget-area single-sidebar">
            <?php get_sidebar(); ?>
        </aside>

    </div>
</div>

<?php get_footer(); ?>
