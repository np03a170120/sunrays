<?php include 'header.php'?>
<!-- breadcrumb -->
<section class="inner-breadcrumb" style="background-image: url(images/dummy.jpg);">
    <div class="container">
        <div class="sec-title">
            <h3>Contact Us</h3>
        </div>
        <div class="ib-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">About Us</a></li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- contact form -->
<section class="contact-section sec-padding">
    <div class="container ma-wrapper">
        <div class="cs-title">
            <h4>Contact Form</h4>
        </div>
        <div class="student-detail-form">
            <div class="form">
                <form id="contact_form" action="https://missiontoglobal.com/contact-us" method="post">
                    <input type="hidden" name="_token" value="BsyHaoTZB380ZpBlANqU8A82fIQLfE7kCG6Lnk72">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="full_name"
                                    aria-describedby="emailHelp" placeholder="*Enter your full name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp"
                                    placeholder="*Enter your email address">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="interger" class="form-control" id="" name="number"
                                    aria-describedby="emailHelp" placeholder="*Enter your phone number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">*write your message for us</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="messages"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="learn-more">
                                <a href="#">
                                    learn more
                                </a>
                            </div>
                        </div>
                        <ul class="contact">
                            <li>
                                <a href="#">
                                    <img src="./images/call-icon.png" alt=""><span>(01) - 12736521</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./images/email-icon.png" alt=""><span>company@email.com</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./images/location-icon.png" alt=""><span>Maitidevi, kathmandu</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.463334084711!2d85.33301761506196!3d27.702977182793852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199f75f08da5%3A0x641a4463533be28c!2sUltrabyte%20International%20Pvt.%20Ltd%20%7C%20IT%20Company%20in%20Nepal!5e0!3m2!1sen!2snp!4v1645441325602!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
<?php include 'footer.php'?>