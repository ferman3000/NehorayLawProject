<?php get_header(); ?>

<section class="hero-blog">
    <div class="hero-content">
        <h1>Nehoray Law Blog</h1>
        <p>Expert legal insights, news, and case updates.</p>
    </div>
</section>

<div class="reviews-section">

    <div class="section-header-wrapper">
        <h2 class="section-title">Latest Articles</h2>
        <p class="section-subtitle">Staying informed helps you stay protected.</p>
    </div>

    <div class="blog-grid">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
                    
                    <div class="blog-card-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('medium_large');
                            } else {
                                // Fallback gris por si no hay foto
                                echo '<div style="background:#f0f0f0; height:100%; width:100%;"></div>';
                            }
                            ?>
                        </a>
                    </div>

                    <div class="blog-card-content">
                        <div class="blog-meta">
                            <?php echo get_the_date(); ?> | 
                            <?php 
                            // Preguntamos a la base de datos si hay un autor invitado
                            $guest_author = get_post_meta( get_the_ID(), 'autor_invitado', true );
                            
                            if ( ! empty( $guest_author ) ) {
                                // Si hay nombre escrito a mano, mostramos ese
                                echo esc_html( $guest_author );
                            } else {
                                // Si no, mostramos el usuario de WordPress (admin, bob, etc)
                                the_author(); 
                            }
                            ?>
                        </div>

                        <h2 class="blog-card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <div class="blog-excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>
                    </div>

                </article>

            <?php endwhile; 
        else :
            echo '<p>No articles found.</p>';
        endif; 
        ?>
    </div>
</div>

<?php get_footer(); ?>