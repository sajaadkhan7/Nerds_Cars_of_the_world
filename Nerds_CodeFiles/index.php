<!doctype html>
<html lang="en">
<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/modals/">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .text-slider-items,
        .typed-cursor {
            display: none;
        }

        @media (min-width: 576px) {
            .txtsize {
                font-size: 1rem;
            }
        }
    </style>
    <title>Cars Of The World:Homepage</title>

    <?php require('requires/head.php'); ?>
    <!-- your content here... -->
    <header id="overlay" style="position: relative;">
        <img data-aos='zoom-out-down' data-aos-delay="150" data-aos-duration="1000"
            src="assets/images/banner-image-2021.jpg" style="width:100%;" alt="book store cover image">
        <div class="row" id="overlay-text">
            <div class="col-sm-12 my-auto" style="margin-left: -50px">
                <div class="banner_content text-white">
                    <h1 class="fw-md-bolder" data-aos='zoom-in-down' data-aos-delay="550" data-aos-duration="1000"
                        style="letter-spacing: normal;">Rent the car of your choice.</h1>
                    <p class="text-slider-items">Choose from various brands that suits you the best. </p>
                    <p class="text-slider"></p>
                    <a data-aos='zoom-out-down' data-aos-delay="750" data-aos-duration="1000" href="#cars"
                        class="btn btncolor mt-auto text-white text-uppercase"><b> Find Car</b><span
                            class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </header>
       <!-- Section-->
    <?php include('requires/homepage_main.php');?>

    <?php require('requires/footer.php'); ?>
    <?php require('requires/loginModal.php'); ?>
    </body>

</html>