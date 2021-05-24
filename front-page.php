<?php
get_header();
?>

    <div class="content-heading-background">
        <div class="info">
            <div class="info-content">
                
                    <h2 class="info-content-heading">A reputation built on a strong foundation of satisfied customers.</h2>
                    <p>With over 20 years of home construction experience, I have built a business based on honesty and integrity.  My customers get straight-forward answers to their questions and up-front cost estimates with no surprises.
                        If you are considering building a new home, contact me at <a href=mailto:davelevyconstruction@gmail.com>davelevyconstruction@gmail.com</a> and I'll work with you to get the job done right. </p>
            </div>
            <div class="testimonial-container">
                <div class="testimonial">
                    <i class="fas fa-quote-left quote-left"></i>
                    <p>Dave Levy Construction is the way home building is meant to be; professional, experienced and trustworthy.  A fantastic remodeling job on a tired old cabin.  What an amazing transformation!  Thank you Dave!</p>
                    <i class="fas fa-quote-right quote-right"></i>
                </div>
                <div class="testimonial">
                    <i class="fas fa-quote-left quote-left"></i>
                    <p>Dave and his crew were great to work with!  There was clear communication from the start of our project to the completion.  He was always prompt with his responses and we were able to make important decisions in a timely manner.  He also made us feel like we mattered, and were valued customers.  He tailored the building schedule and details to our desires, making this lake home project the one we had always pictured in our dreams. We are so very pleased!</p>
                    <i class="fas fa-quote-right quote-right"></i>
                </div>
                <div class="testimonial">
                    <i class="fas fa-quote-left quote-left"></i>
                    <p>It was great working with Dave.  He was easy to communicate with and was straight up with his approach to our project.  The price he quoted for his part of the project is the price we paid.  He hires great people and the craftsmanship is excellent.</p>
                    <i class="fas fa-quote-right quote-right"></i>
                </div>
                

            </div>
        </div>
        <section class='heading-container'>
            <h1 class="project-heading-text">OUR PROJECTS</h1>
        </section>
        
    </div>
    
    <div class="project-content-container">
        

            <!--Beginning of WordPress Loop Code-->

            <!--Search for "Posts", Category -->

                <?php
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'project'
                );

                $project_loop = new WP_Query( $args );

                while ( $project_loop->have_posts() ) : $project_loop->the_post();

                $featuredImage = get_field('featured_image');
                $description = get_field('description');

                $carouselImage = array();

                for ($counter=1; $counter<21; $counter++) :
                    $loopImage = get_field('gallery_image_'.$counter);
                    
                    if (!empty($loopImage)) :
                        array_push($carouselImage, esc_url($loopImage['url']));
                    else :
                        break;
                    endif;   
                endfor;
                
                 
                
                ?>
        <div class="project-content">
            <div class="image-background" style='background: url(<?php echo esc_url($featuredImage['url']); ?>) no-repeat center; background-size: cover;'>
                <div class="clip">
                    <h1 class="project-title"><?php the_title(); ?></h1>
                    <p class="project-text"><?php echo $description; ?></p>
                </div>
                <div class="button-side">
                    <!--Modal Button-->
                        <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#lightboxModal-<?php the_ID(); ?>" style="font-weight: 700; border:solid 2px white;">
                            Gallery
                        </button>

                    <!-- Modal -->
                        <div class="modal fade" id="lightboxModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content" id="modalGray">
                                    <div class="modal-header" style="font-family:Teko, sans-serif; font-size: 2em; color: white;">
                                        <h5 class="modal-title" id="exampleModalLabel" style='font-size:1em;'><?php the_title(); ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <!--Add Carousel Here-->    
                                    <div class="modal-body">
                                    <!--Carousel-->
                                    <div class="carousel slide" id='projectCarousel-<?php the_ID(); ?>' data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php
                                            $i = 0;
                                            foreach ($carouselImage as $url) { 
                                                if ($i == 0) {
                                                    echo "<div class='carousel-item active'>";
                                                } else {
                                                    echo "<div class='carousel-item'>";
                                                } 
                                                $i++;?>
                    
                                                    <img src='<?php echo $url ?>' class="d-block w-100" alt="...">
                                                </div>
                                            <?php } ?>    
                                        
                                        </div>
                                        <a class="carousel-control-prev" href="#projectCarousel-<?php the_ID(); ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#projectCarousel-<?php the_ID(); ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    </div>
                                    <!--End Carousel-->

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--End of Modal-->
                </div>
            </div>
        </div>    
            <?php endwhile; ?>
            <!--End of WordPress Loop code-->

           
    </div>
    
    <?php  get_footer(); ?>