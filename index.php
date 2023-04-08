    <?php
    get_header();
    ?>
    <img
        class="demo-bg"
        src="<?= get_template_directory_uri(); ?>/assets/bg.jpg"
        alt="background"
        >
    <main class="main">
        
        <div class="default-content">
            <h2>Saúde Mental</h2>
            <br>
            <div class="text-box">
                <p>Lorem ipsum dolor sit amet. Vel explicabo eligendi cum autem aliquamUt doloremque a libero pariatur qui alias reiciendis qui doloribus ipsum. Non perspiciatis laborum <strong>Qui illo qui quas neque qui omnis obcaecati</strong> aut quidem perferendis a omnis quae est suscipit earum. </p>
                <p>Lorem ipsum dolor sit amet. Vel explicabo eligendi cum autem aliquamUt doloremque a libero pariatur qui alias reiciendis qui doloribus ipsum. Non perspiciatis laborum <strong>Qui illo qui quas neque qui omnis obcaecati</strong> aut quidem perferendis a omnis quae est suscipit earum. </p>
            </div>
            <br><br>
        </div>
        <div class="posts">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                                         <h2><?php the_title(); ?></h2>
                                                                                <div class="img">
                                        <?php the_post_thumbnail(); ?>
                                        </div>
                                        <p><?php the_excerpt(); ?></p>
                                                                                <a href="<?php the_permalink(); ?>"><b>Leia mais</b></a>
                                                                                         <?php
                }
            }
            ?>
        </div>
    <footer>

    </footer>
    
    <?php
    get_footer();
    ?>