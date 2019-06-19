<h3>Notice board</h3>
<ul>
    <?php 
        
        $notice = new WP_Query(array(
            'post_type' => 'notice_board'
        ));
    
    ?>
    
    <?php while ($notice->have_posts()): $notice->the_post(); ?>
    
    <li><a href="#"><span class="glyphicon glyphicon-ok"></span> <?php the_title(); ?></a></li>
    
    <?php endwhile; ?>
</ul>

