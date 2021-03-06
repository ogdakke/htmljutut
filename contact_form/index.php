<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Danielew</title>
        <link rel="shortcut icon" href="../nc_assets/kuvat/logo/dew.svg" type="image/svg">
        <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <nav class="navbar" id="navbar-id" title="navbar">
        <ul class="navbar-nav" title="List of navigation items">
            <li class="nav-item" title="Home">
                <a href="../index.html/#header1" class="nav-link">
                    Home
                    <span class="link-text">Home</span>
                </a>
            </li>

            <li class="nav-item" title="About">
                <a href="../index.html/#box1" class="nav-link" >
                    About
                    <span class="link-text">About</span>
                </a>
            </li>

            <li class="nav-item" title="Portfolio">
                <a href="../index.html/#box3" class="nav-link">
                    Portfolio
                    <span class="link-text">Portfolio</span>
                </a>
            </li>

            <li class="nav-item" title="Contact">
                <a href="../index.html/#contact_box" class="nav-link">
                    Contact
                    <span class="link-text">Contact</span>
                </a>
            </li>
            
            <li class="nav-item" title="DEW Logo">
                <a href="#" class="nav-logo">
                    <img src="../nc_assets/kuvat/logo/Asset_2.svg" alt="logo" id="nav_logo">
                    <span class="link-text">Home</span>
                </a>
            </li>      
        </ul>
    </nav>
<main>
    <section class="form">
        <aside>
            <h2 id="h2-form" >contact form</h2>
        </aside>
        <div class="form-container">
            <h2 id="h2-form">Send me an email about anything.</h2>
            <div class="form-wrapper">
                <form method="POST" action="index.php" class="contact-form" style="opacity: 1;">
                    <div class="form-name-lastname">
                        <label for="name" class="text-muted">First Name*</label>
                            <input type="text" class="form-input" name="name" placeholder="First Name" required="">
                        <label for="lastname" class="text-muted">Last Name</label>
                            <input type="text" class="form-input" name="lastname" placeholder="Last Name">
                    </div>
                    <label for="email" class="text-muted">Email</label>
                        <input type="email" class="form-input" name="email" placeholder="Your@email.here" required="">
                    <label for="" class="text-muted"></label>
                        <textarea name="message" id="" cols="30" rows="6" maxlength="600" placeholder="Write your message here"></textarea>
                    <input class="button" name="sendflag" type="submit" value="send">
                    <div class="php-hope" >
    <?php
            $mail_to_send_to = "dakkephone@gmail.com";
            $from_email = "daniel.wargh@danielew.com";
            $sendflag = $_REQUEST['sendflag'];    
            $name=$_REQUEST['name'];
            $lastname=$_REQUEST['lastname'];
            if ( $sendflag == "send" )
                {
                $subject= "Message subject";
                $email = $_REQUEST['email'] ;
                $message= "\r\n" . "Name: $name $lastname" . "\r\n"; //get recipient name in contact form
                $message = $message.$_REQUEST['message'] . "\r\n" ;//add message from the contact form to existing message(name of the client)
                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email"  ;
                $a = mail( $mail_to_send_to, $subject, $message, $headers );
                if ($a)
                {
                        

                        $toimii = 'Your message has been delivered.';
                        echo "<p style='color:white;'>" . $toimii . "</p>";
                } else {
                        $eitoimi = "Your message wasn't sent. Please check your email address.";
                        echo "<p style='color:white;'>" . $eitoimi . "</p>";
                }
            
        }
    ?>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="footer-page">
        <div class="footer-container">
            <footer id="footer1">
                <div class="footer-logo-box" >
                    <img src="nc_assets/kuvat/logo/Asset_2.svg" alt="logo" id="footer_logo" title="logo">
                    <div class="footer-text">
                        <p class="text-muted" title="address">01610 Vantaa, Finland</p>
                        <p class="text-muted" title="copyright">&COPY Daniel Wargh 2021</p>
                    </div>
                </div>
            </footer>
            <footer id="footer2">
                <ul class="socials">
                    <li> 
                        <a class="link-social" href="https://twitter.com/">Twitter</a>
                    </li>
                    <li>
                        <a class="link-social" href="https://www.linkedin.com/">Linkedin</a>
                    </li>
                    <li>
                        <a class="link-social" href="https://www.youtube.com/">Youtube</a>
                    </li>
                </ul>
            </footer>
            <footer id="footer3">
                <div class="contact-box-upper">
                    <div class="button-wrapper">
                        <input href="" class="button" id="newsletter-button" type="submit" name="sendflag" value="send" />
                    </div>
                </div>
                <div class="contact-box-lower">
                    <div class="newsletter-wrapper">
                        <form action="" class="newsletter" style="opacity: 1;">
                            <div class="email-form">
                                <label for="EMAIL" class="text-muted">Enter your email to maybe someday get something there.</label>
                                <input type="email" name="EMAIL" class="form-input" placeholder="your@email.here">
                                
                            </div>
                        </form>
                    </div>
                </div>
            </footer>  
        </div>
</section>
    <!-- script for hiding navbar while scrolling down -->
    <script >
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar-id").style.bottom = "0";
            } else {
                document.getElementById("navbar-id").style.bottom = "-5rem";
            }
            prevScrollpos = currentScrollPos;
        } 
    </script>
</main>
    
</body>
</html>