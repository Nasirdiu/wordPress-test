<?php
/*
*The main template file......header file calling
*/

get_header(); ?>

<h1>This is a archive page</h1>
    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php
/*
*The main template file......footer file calling
*/

get_footer(); ?>