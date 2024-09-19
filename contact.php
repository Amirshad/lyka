<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'links.php';?>
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <link rel="canonical" href="#">
    <title>Contact</title>
</head>

<body>
    <?php include 'header.php';?>
    <section class="location-content flex bg-main text-center tx-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Contact</h2>
                    <p class="wt-40">
                        <div class="path">
                            <a href="index.php">Home &nbsp;</a>
                            <span>/ Contact</span>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="inr-contact section-50 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Let's <span class="tx-main">Together</span></h1>
                    <p class="small-case w-50 mx-auto">We are happy to answer any questions you have or provide you with an estimate. just send a message in the form above.</p>
                </div>
                <div class="col-md-12">
                    <form id="contactform" action="send-mail" name="contactform" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" id="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" value="send" class="mbtn mt-10">Submit</button>
                                <div id="res-msg"></div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-location">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 nopad">
                    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.178510024317!2d55.27218771453021!3d25.19720183788476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2sin!4v1646990635110!5m2!1sen!2sin"
                        width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-6 bg-main flex text-center tx-white">
                    <div class="address">
                        <h2>Address</h2>
                        <ul class="nopad">
                            <li>Lorem Road</li>
                            <li>Lorem City Mall</li>
                            <li>Lorem ipsum content</li>
                            <li>Lorem ipsum - 1234</li>
                            <li>Mobile: 123456789, 123456789</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
    <?php include 'scripts.php';?>
</body>
</html>