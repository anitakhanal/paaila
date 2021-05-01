@extends('layouts.admin')
@section('content')

        <section class="contact-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-left">
                                <div class="ot-heading">
                                    <span>// contact details</span>
                                    <h2 class="main-heading">Contact us</h2>
                                </div>
                                <div class="space-5"></div>
                                <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                                <div class="contact-info box-style1">
                                    <i class="flaticon-world-globe"></i>                    
                                    <div class="info-text">
                                        <h6>Our Address:</h6>
                                        <p>411 University St, Seattle, USA</p>
                                    </div>
                                </div>
                                <div class="contact-info box-style1">
                                    <i class="flaticon-envelope"></i>
                                    <div class="info-text">
                                        <h6>Our Mailbox:</h6>
                                        <p>engitech@mail.net</p>
                                    </div>
                                </div>
                                <div class="contact-info box-style1">
                                    <i class="flaticon-phone-1"></i>
                                    <div class="info-text">
                                        <h6>Our Phone:</h6>
                                        <p>+1 -800-456-478-23</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="contact.php" method="post" class="wpcf7">
                                <div class="main-form">
                                    <h2>Ready to Get Started?</h2>
                                    <p class="font14">Your email address will not be published. Required fields are marked *</p>
                                    <p>
                                        <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required>
                                    </p>
                                    <p>
                                        <input type="email" name="email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Email *" required>
                                    </p>
                                    <p>
                                        <textarea name="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required></textarea>
                                    </p>
                                    <p><button type="submit" class="octf-btn octf-btn-light">Send Message</button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <div class="no-padding">
                <div class="map p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.195249896738!2d85.31950141443379!3d27.680359633285622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb183582d1d5e1%3A0xb34c629008ebb176!2sPaaila%20Technology%20Pvt.%20Ltd.!5e0!3m2!1sne!2snp!4v1619792984455!5m2!1sne!2snp" width="600" height="491" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                </div>
            </div>
        </div>
    

    @endsection
</body>
</html>
                                       
                                       

