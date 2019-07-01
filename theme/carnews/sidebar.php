<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar-wrap">
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Search</h4>
                            <div class="search-form">
                                <form action="<?php echo esc_url( home_url('/') ); ?>" method="get"> 
                                    <input class="search-field" placeholder="Search" value="" type="search" name="s">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Category</h4>
                            <ul>

                <!-- for show categoroy -->
                                <?php 
                                    $arg = array(
                                        'orderby' => 'slug',
                                        'parent'  => 0
                                    );

                                    $categories = get_categories( $arg );
                                    foreach ( $categories as $category ) {
                                        echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"> <i class="glyphicon glyphicon-asterisk"> '  . $category->name . '</i>' . '' . $category->description . '</a></li>';
                                     }
                                 ?>
                            </ul>
                        </div>

                        <!-- widgit section -->
                        <?php dynamic_sidebar('widget-home-top'); ?>
                        <!-- Archive section -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">ARCHIVES</h4>
                            <ul>
                                <?php 
                                    wp_get_archives( array('type' => 'monthly', 'limit' => '12', 'order' => 'ASC') );
                                 ?>
                            </ul>
                        </div>
                    <!-- recent post -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Development Category</h4>
                            <?php
                            $tecno = new WP_Query(array(
                                'post_type'     => 'post',
                                'posts_per_page' => 2,
                                'orderby'       => 'title',
                                'order'         => 'DESC',
                                'category_name' => 'development'
                            ));

                            if (have_posts()):while ($tecno->have_posts()): $tecno->the_post();?>

                            <div class="widget-news">
                                <a href="#"><?php the_post_thumbnail('myFeatucherImage', array('class' => 'myFeatucherImage')); ?></a>
                                <div class="news-text">
                                    <p><?php the_title(); ?></p>
                                    <a class="" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        <?php 
                                endwhile;
                            endif
                         ?>
                        </div>
                        <!-- recent post -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Programming Category</h4>
                            <?php
                            $tecno = new WP_Query(array(
                                'post_type'     => 'post',
                                'posts_per_page' => 2,
                                'orderby'       => 'title',
                                'order'         => 'DESC',
                                'category_name' => 'programming'
                            ));

                            if (have_posts()):while ($tecno->have_posts()): $tecno->the_post();?>

                            <div class="widget-news">
                                <a href="#"><?php the_post_thumbnail('myFeatucherImage', array('class' => 'myFeatucherImage')); ?></a>
                                <div class="news-text">
                                    <p><?php the_title(); ?></p>
                                    <a class="" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        <?php 
                                endwhile;
                            endif
                         ?>
                        </div>

                        <!-- recent post -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Random Post</h4>
                            <?php
                            $tecno = new WP_Query(array(
                                'post_type'     => 'post',
                                'posts_per_page' => 2,
                                'orderby'       => 'rand',
                                'order'         => 'DESC',
                                'category_name' => 'development' /* with category name show only this category post but with out cat name sow from whole blog */
                             ));

                            if (have_posts()):while ($tecno->have_posts()): $tecno->the_post();?>

                            <div class="widget-news">
                                <a href="#"><?php the_post_thumbnail('myFeatucherImage', array('class' => 'myFeatucherImage')); ?></a>
                                <div class="news-text">
                                    <p><?php the_title(); ?></p>
                                    <a class="" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        <?php 
                                endwhile;
                            endif
                         ?>
                        </div>

                <!-- Tag section  -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Tags</h4>
                            <ul class="tag-list">
                                <li><a class="active transition7s" href="#">HTML</a></li>
                                <li><a class="transition7s" href="#">CSS3</a></li>
                                <li><a class="transition7s" href="#">PHP</a></li>
                                <li><a class="transition7s" href="#">Wordpress</a></li>
                                <li><a class="transition7s" href="#">Joomla</a></li>
                            </ul>
                        </div>
                    </div>
                </div>