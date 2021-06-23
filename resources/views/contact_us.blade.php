<x-app-layout>  
<!-- This example requires Tailwind CSS v2.0+ -->
<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Contact Us Page</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        
                    <li class="breadcrumb-item active" aria-current="page">Contact US</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="contact-form" class="contact-form">

                    <div id="contactform-error-msg"></div>

                    <form method="post" action="#" name="contactform" id="contactform">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Name:</label>
                                <input type="text" name="full_name" class="form-control" id="Name" placeholder="Enter full name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="abc@xyz.com" required>
                            </div>
                            <div class="form-group col-lg-6 col-left-padding">
                                <label>Phone Number:</label>
                                <input type="text" name="phone" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required>
                            </div>
                            <div class="textarea col-lg-12">
                                <label>Message:</label>
                                <textarea name="comments" placeholder="Enter a message" required></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment-btn">
                                     <input type="submit" class="btn-blue btn-red" id="submit" value="Send Message">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-about footer-margin">
                    <div class="about-logo">
                        <img src="images/logo.png" alt="Image">
                    </div>
                    <h4>Travel With Us</h4>
                    <p>We Are offering best deail on all type of booking be with us </p>
                    <div class="contact-location">
                        <ul>
                            <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> Comsats Abbottabad</li>
                            <li><i class="flaticon-phone-call"></i> (92)-335-6789</li>                                        
                            <li><i class="flaticon-mail"></i> travelyourway@gmail.com</li>
                        </ul>
                    </div>
                    <div class="footer-social-links">
                        <ul>
                            <li class="social-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-icon"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="social-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-icon"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>

</x-app-layout>