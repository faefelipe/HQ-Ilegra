<?php get_header();?>    
    <section class="list-show">

        <h2 class="center-md">
            Listagem de HQS Marvel
        </h2>
        <div id="comics" class="row">
            
        </div>    
    </section>
    <section class="list-posts">
        <h2 class="center-md">
            Listagem de HQS DC Comics
        </h2>
        <div class="row">
        <?php 
            $args = array( 'post_type' => 'dccomics', 'posts_per_page' => -1);
            $the_query = new WP_Query( $args );             
            while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <div class='single-comic col-md-4 center-md'>
                <?php 
                the_post_thumbnail();
                the_title('<h3>', '</h3>');
                echo '<div class="entry-content">';
                the_content();
                echo '</div>';
                ?>
            </div>  
        <?php 
            endwhile;
        ?>
        </div>
        
    </section>
    
<?php get_footer();?>
