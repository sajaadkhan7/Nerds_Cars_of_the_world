<!doctype html>
<html lang="en">

<head>
    <title>Cars Of The World:Contact Us</title>
    <style>
        /* Style inputs */
        .contactus [type=text],
        input[type=email],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }



        /* Style the container/contact section */
        .contactus {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }

        /* Create two columns that float next to eachother */
        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .address-wrap {
            /* background: #fff; */
            background-color: #f2f2f2;
            box-shadow: 0px 3px 10px 0px rgba(38, 59, 94, 0.1);
            -webkit-box-flex: 1;
            margin-left: 3%;
            flex: 1 1 40%;
            margin-top: 25px;
        }

    </style>
    <?php require('requires/contactusSubmit.php'); ?>

    <?php require('requires/head.php');  ?>

    <!-- contact us -->
    <div class="container-fluid">
        <iframe data-aos='zoom-out-down' data-aos-delay="50" data-aos-duration="1000"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2899.3985197818934!2d-80.40614968512944!3d43.38959917745511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b8a78cad8e0c7%3A0xff890e93ef71682!2sA-Wing%20%2F%20B-Wing%2C%20299%20Doon%20Valley%20Dr%2C%20Kitchener%2C%20ON%20N2P%202N6!5e0!3m2!1sen!2sca!4v1608723992035!5m2!1sen!2sca"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
    <div class="container-fluid">

        <div class="container">
            <div data-aos='zoom-out-down' data-aos-delay="50" data-aos-duration="1000" style="text-align:center">
                <div style="padding-top: 60px;">

                    <h2 class="fw-bolder">Contact Us</h2>
                    <p>Drop a message or visit us if you have any queries.</p>
                </div>
            </div>
            <div style="padding-top: 60px; padding-bottom: 70px" class="row">

                <div data-aos='fade-right' data-aos-delay="0" data-aos-duration="1000"
                    class="column col-md-8  p-5 contactus">
                    <form id="contactus_form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div><label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your name.." required>
                            <span class="error" id="nameerror"><?php echo $nameErr;?></span> </div>

                        <div> <label for="Email">Email</label>
                            <input type="email" id="Email" onkeyup="emailvalid()" name="email" placeholder="Email..."
                                required>
                            <span class="error" id="emailerror"><?php echo $emailErr;?></span> </div>

                        <div> <label for="message">Message</label>
                            <textarea id="message" name="message" required placeholder="Write something.."
                                style="height:50px"></textarea>
                            <span class="error" id="messageerror"><?php echo $messageErr;?></span> </div>
                        <div style="padding-top: 10px;">
                            <button class="btn btncolor mt-auto" value="Submit">submit</button>
                        </div>
                        <!-- <input type="submit" onclick="validation()" class="btn btncolor mt-auto" value="Submit"> -->
                    </form>
                </div>
                <div data-aos='fade-left' data-aos-delay="0" data-aos-duration="1000" class="col-md-4"
                    style="padding-top: 40px; padding-bottom: 50px">
                    <div class="row">

                        <div class="address-wrap  p-5 ">
                            <h4>What is your story? Get in touch with us.</h4>
                            <br>
                            <p>We are always here to help you out and find the best car for you, Feel free to contact
                                us.
                                your query is our one of the goals.
                            </p>
                            <br>
                            <div class="address-btm list-group">
                                <div class="location-wrapp list-group-item list-group-item-action">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span> 299 Doon Valley Dr</span>
                                </div>

                                <div class="email-wrapp list-group-item list-group-item-action">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="mailto:sajaadkhan7@gmail.com">&nbsp;Carsoftheworld@gmail.com</a>
                                </div>

                                <div class="mob-wrapp list-group-item list-group-item-action">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <a href="tel:+1 (519) 781-3138"> +1 (519) 781-3138</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us -->

      
    <?php require('requires/footer.php'); ?>
    </body>

</html>