<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./slick.css"/>
    <link rel="stylesheet" type="text/css" href="./slick-theme.css"/>
    <title>Alfaleus</title>
</head>
<?php include 'db_connect.php'; ?>
<body>
    <nav>
        <div class="header-title">
            <img src="./public/AlfaleusLogoWhite (1).png" class="alfaleus-logo" alt="logo"/>
            <h3 class="nav-header">Alfaleus Technology</h3>
        </div>
        <ul class="nav-list">
            <li><a href="index.php">Home</a><div class="hover-line"></div></li>
            <li><a href="team.php">Team</a><div class="hover-line"></div></li>
            <li><a href="#Contact">Contact</a><div class="hover-line"></div></li>
        </ul>
        <img src="./public/menu (1).svg" class="hidden-hamburger"/>
    </nav>
    <div class="nav-menu">
            <ul class="list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="#Contact">Contact</a></li>
        </ul>
    </div>
    <div class="intro-container-new">
        <div class="intro_text text-anim">
            <h2>285 million people worldwide have visual impairment  </h2>
            <h2>64 million affect from Glaucoma </h2>
            <h2>Upto 90% goes undiagnosed till advance stages</h2>
        </div>
        <img src="./public/half-face-min.png" class="globe_img" />
    </div>
    <div class="description-screen">
        <div class="description-header">
            <h2>Glaucoma can be prevented, if detected at its early stages</h2>
            <h3>Meet CFA a revolutionary portable perimetry device that makes Glaucoma detection easier than ever.</h3>
        </div>
        <div class="feature-screen">
            <div class="feature-box fb1">
                <img src="./public/briefcase.svg"/>
                <h3>Portable</h3>
                <p>The device is portable to conduct perimetry in Virtual Reality. Vision centers, camps, Field tests are no more a hurdle!</p>
            </div>
            <div class="feature-box fb2">
                <img src="./public/like.svg"/>
                <h3>Comfortable</h3>
                <p>The device is a boon to cervical collar and neuro patients | Eye patches and dark rooms are no longer required.</p>
            </div>
            <div class="feature-box fb3">
                <img src="./public/dropbox-logo.svg"/>
                <h3>Compact</h3>
                <p>The device employs the most efficient design allowing it to occupy the least space possible.</p>
            </div>
            <div class="feature-box fb4">
                    <img src="./public/money.svg"/>
                <h3>Cost Effective</h3>
                <p>The total cost of the device has been reduced to a much greater extent as compared to the existing traditional one.</p>
            </div>
        </div>
    </div>
    <div class="image-pane">
        <div class="text-pane">
            <h2>Glaucoma diagnosis simplified</h2>
            <div class="text-container">
            <p>Vision is a right we were born with, but some people slowly begin losing their vision due to Glaucoma. Currently used detection methods are inconvenient.The C3FA is a revolutionary virtual reality based device that is comfortable, compact and cost-effective indicating that it can be used by doctors to treat patients anywhere, anytime at the patients own comfort making detecting Glaucoma easier than ever before!</p>
            </div>
            <button>Download Device specifications</button>
        </div>
        <div class="image-container">
            <img src="./public/vrbox.jpg" class="vrbox_img"/>
        </div>
    </div>
    <div class="parallaxtrial">
        <h2>Want to know more about CFA?<br>Request a demo now</h2>
        <form>
        <input placeholder="Email Address" id="subscriber"/>
        <button class="subscribe">Subscribe Now</button>
        </form>
        <div class="thank-you">
            <h2>Thank You for subscribing!</h2>
        </div>
    </div>
    <div class="testimonials">
        <h1>Testimonials</h1>
        <div class="main-quote">
            <div class="main-quote-text">
            <h3>
                    "Initial use of C3 Field Analyser shows promising results. This portable device would revolutionise Perimetry if it lives upto the promise"
            </h3>
                <p>DR. Chandrima Paul</p>
                <p>Director</p>
                <p>BB Eye Foundation Hospitals, West Bengal</p>
            </div>
            <img src="./public/main-quote.jpg" />
        </div>
        <div class="quote-space">
            <div class="quote-box">
                <div class="img-pane">
                    <img src="./public/left-quote.svg"/>
                    <img src="./public/right-quote.svg"/>
                </div>
                <img src="./public/ezgif.com-webp-to-jpg (12).jpg" class="img1"/>
                <div class="quote-description">
                        <p>"Will definitely recommend C3FA for Glaucoma detection as a patient as well as an operator"</p>
                        <p class="doc-name">Dr. Swati Upadhyaya, Aravind Eye Hospital, Pondicherry</p>
                    </div>
            </div>
            <div class="quote-box">
                    <div class="img-pane">
                            <img src="./public/left-quote.svg"/>
                            <img src="./public/right-quote.svg"/>
                        </div>
                    <img src="./public/ezgif.com-webp-to-jpg (11).jpg" class="img2"/>
                    <div class="quote-description">
                        <p>"Patients prefer C3 Field Analyser since it provides more comfort and takes lesser time to complete visual field test"</p>
                        <p class="doc-name">Dr. R. Venkatesh, Aravind Eye Hospital, Pondicherry</p>
                    </div>
            </div>
            <div class="quote-box">
                    <div class="img-pane">
                            <img src="./public/left-quote.svg"/>
                            <img src="./public/right-quote.svg"/>
                        </div>
                        <img src="./public/ezgif.com-webp-to-jpg (20).jpg" class="img3"/>
                        <div class="quote-description">
                                <p>"A game changer in the field of Glaucoma testing"</p>
                                <p class="doc-name">Dr. Subashini Kaliaperumal, Department of Ophthalmology, JIPMER, Pondicherry</p>
                        </div>
            </div>
        </div>
    </div>
    <div class="slideshow">
      <img src="./public/play-button.svg" class="prev-img" />
    <div class="siema">
        <div>
            <img src="./public/slideshow (1).JPG" class="slideshow-img"/>
            </div>
            <div>
                <img src="./public/slideshow (2).JPG" class="slideshow-img" />
                </div>
                <div>
                    <img src="./public/slideshow (3).JPG" class="slideshow-img" />
                    </div>
                    <div>
           <img src="./public/slideshow (4).JPG" class="slideshow-img" />
               </div>
             <div>
              <img src="./public/slideshow (5).JPG" class="slideshow-img" />
                    </div>
            <div>
             <img src="./public/slideshow (6).JPG" class="slideshow-img" />
                </div>        
    </div>
    <img src="./public/play-button.svg" class="next-img" />
    <div class="button-pane">
        <img src="./public/play-button.svg" class="prev-img" />
        <img src="./public//play-button.svg" class="next-img" />
    </div>
    </div>
    <div class="contact-form" id="Contact">
        <form class="form-area">
            <h1>Contact Us</h1>
            <h3 class="warning">Please fill in the required fields</h3>
            <h3 class="success">Thank You. We will reach back to you soon!</h3>
            <div class="name-initials">
                <input placeholder="First Name" name="first_name" id="first_name"/>
                <input placeholder="Second Name" name="last_name" id="last_name"/>
            </div>
            <div class="name-initials">
                <input placeholder="Email" name="e-mail" id="e-mail"/>
                <input placeholder="Phone" name="phone" id="phone"/>
            </div>
            <textarea class="msg-pane" placeholder="Type your message here"></textarea>
            <button class="contact-submit">Submit</button>
        </form>
        <div class="contact-details">
            <ul class="number-container">
                <li>For Sales Enquiries
                    <ul>
                        <li>Email : <a href="mailto:sales@alfaleus.com">sales@alfaleus.com</a></li>
                        <li>Mobile : <a>7676759999</a></li>
                    </ul>
                </li>
                <li>For General Enquiries
                    <ul>
                        <li>Email : <a href="mailto:info@alfaleus.com">info@alfaleus.com</a></li>
                        <li>Mobile : <a>7639117333</a></li>
                    </ul>
                </li>
            </ul>
            <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.016737530129!2d79.15694825524602!3d12.97078070102958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad4780b1a9eb25%3A0x97d52b9b6436cbbb!2sAlfaleus+Technology+Private+Limited!5e0!3m2!1sen!2sin!4v1549835694657" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <script src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./slick.min.js"></script>
    <script src="index.js"></script>
</body>
</html>