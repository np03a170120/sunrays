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

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>