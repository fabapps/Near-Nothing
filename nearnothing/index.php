<?php get_header(); ?>

  <div id="main">
    <div id="content">
    
    	<?php if (!is_single() && !is_page() && !is_front_page()) : ?><h1><?php wp_title(' ', true, 'right'); ?></h1><?php endif; ?>
        
        <?php /* begin the loop */ if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
        
			<?php if (is_page()) : /* show page contents */ ?>
            
                <div class="pagecontent" id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content('Read more &gt;'); ?> 
                    <p><?php wp_link_pages('next_or_number=number&pagelink=page %'); ?></p>
                    <p><?php edit_post_link('Edit', '[ ', ' ]'); ?></p>  
                </div>
                <?php comments_template(); ?>
            
            <?php elseif (is_search()) : /* show search results */ ?>
            
                <div class="searchresults">
                <div class="post" id="post-<?php the_ID(); ?>">
                    <div class="postcontents">
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?> <a href="<?php the_permalink() ?>"><?php the_permalink() ?></a>   
                    </div>
                </div>
                </div>
            
            <?php else : /* show post contents */ ?>

                <div class="post" id="post-<?php the_ID(); ?>">
                    <div class="postcontents">
                        
                        <?php if (!is_single()) : ?>
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <?php else : ?>
                            <h1><?php the_title(); ?></h1>
                        <?php endif; ?>
                        
                        <?php the_content('Read more &gt;'); ?> 
                        <p><?php wp_link_pages('next_or_number=number&pagelink=page %'); ?></p>    
                    </div>
                    <div class="postmeta">
                        <p>
                        <?php the_tags('Tags: ', ', ', ' | '); ?> <?php the_category(', ') ?> | <a href="<?php the_permalink() ?>">Permalink</a> |  <?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?> | <?php edit_post_link('Edit', ' ', ' | '); ?> Posted <?php the_date() ?> by  <?php the_author_link(); ?> </p>
                    </div>
                    <?php if(is_single) comments_template(); ?>
                </div>
            <?php endif; /* end if page or post */ ?>
        
        <?php endwhile;/* end the main loop */ ?>
        
        
        <?php /* post navigation */ ?>
        <?php if (is_single()) : ?>
            <div class="postnavigation">
                <?php previous_post_link('%link | ', '<span>&lt;</span> Previous post') ?>
                <?php next_post_link('%link', 'Next post <span>&gt;</span>') ?>
            </div>
        <?php endif; ?>
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
            <div class="postnavigation">
                <?php next_posts_link('Older posts <span>&gt;</span>') ?>  
                <?php previous_posts_link('<span>&lt;</span> Newer posts') ?>
            </div>
        <?php endif; ?>
        
        <?php else : /* show page not found message */ ?>
        
        <div class="pagecontent pagenotfound">
        
            <h1>Page not found</h1>
            
            <p>Sorry, the page you are looking for is not available. It may have moved, or you may have followed a bad link. Please 
            <a href="<?php bloginfo('url') ?>">visit our homepage</a> to find what you're looking for.</p>
        
        </div>
        
        <?php endif; /* end if have_posts */ ?>      
    
    
    </div><!-- / end content -->
    
    
<?php /* sidebar */ get_sidebar(); ?>
    
  </div><!-- / end main -->

<?php /* footer */ get_footer(); ?>