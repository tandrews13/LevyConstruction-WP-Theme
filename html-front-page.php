<?php
get_header();
?>

    <nav class= "navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dave Levy LOGO</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="mailto:davelevyconstruction@gmail.com" class="nav-link">davelevyconstruction@gmail.com</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">(218) 999-9999</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-heading-background">
        <div class="info">
            <div class="info-content"><i class="fas fa-hammer"></i><span class="info-text">Quality workmanship - Over 30 years of experience</span></div>
            <div class="info-content"><i class="fas fa-home"></i><span class="info-text">We handle your home project from start to finish</span></div>
        </div>
        <h1 class="project-heading-text">OUR PROJECTS</h1>
        
    </div>
    
    <div class="project-content-container">
        <div class="project-content">
            <div class="image-background">
                <div class="clip">
                    <h1 class="project-title">BIG BASS LAKE HOME</h1>
                    <p class="project-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, saepe. Nihil dolorem necessitatibus dolore nesciunt odit eligendi laudantium, maxime recusandae nam, quod debitis corporis nostrum. Maiores repellendus non corrupti sequi?</p>
                </div>
                <div class="button-side">
                    <!--Modal Button-->
                        <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#lightboxModal" style="font-weight: 700; border:solid 2px white;">
                            Gallery
                        </button>

                    <!-- Modal -->
                        <div class="modal fade" id="lightboxModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content" id="modalGray">
                                    <div class="modal-header" style="font-family:Teko, sans-serif; font-size: 2em; color: white;">
                                        <h5 class="modal-title" id="exampleModalLabel" style='font-size:1em;'>Bass Lake Home</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <!--Add Carousel Here-->    
                                    <div class="modal-body">
                                    <!--Carousel-->
                                    <div class="carousel slide" id='projectCarousel' data-ride="carousel">
                                        <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../images/bass lake.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../images/sucker-bay.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="..." class="d-block w-100" alt="...">
                                        </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
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
        <div class="project-content">
            <div class="image-background-2">
                <div class="clip">
                    <h1 class="project-title">SUCKER BAY HOME</h1>
                    <p class="project-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, saepe. Nihil dolorem necessitatibus dolore nesciunt odit eligendi laudantium, maxime recusandae nam, quod debitis corporis nostrum. Maiores repellendus non corrupti sequi?</p>
                </div>
                <div class="button-side">
                    <a href="#" role="button" class="btn btn-dark btn-lg" style="font-weight: 700; border:solid 2px white;">Gallery</a>
                </div>
            </div>
        </div>
    </div>
    <div class='fixed-bottom footer'><a href='mailto:davelevyconstruction@gmail.com'>davelevyconstruction@gmail.com</a></div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>