<div class="contact-us-page inner-page">
    <div class="banner contact-banner">
        <img src="/images/banner.jpg" class="banner-bg img-fluid" alt="">
        <div class="service-content banner-content">
            <div class="banner-content-area align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <img src="/images/underline.png" class="underline-image">
                            <h2 class="ph-title aos-init aos-animate" data-aos="fade-left">Contact Us</h2>
                            <ul class="list-inline aos-init aos-animate" data-aos="fade-left">
                                <li class="list-inline-item highlight"><a href="/">Home</a></li>
                                <li class="list-inline-item break">  <iconify-icon icon="bxs:right-arrow" width="12px" height="12px"  style="color: #333"></iconify-icon> </li>
                                <li class="list-inline-item">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="contact-section">
		<div class="container">    
             <div class="row">
                <div class="col-lg-5 col-sm-12 col-xs-12">
                    <div class="information ">
                        <h5>Contact Us</h5>
                        <h3>Get In Touch With Us</h3>
                        <!-- <p class="gray">Please get in touch with us using the contact details below.</p> -->
                        
                        <div class="address mt-4 ">
                            <div class="contact-icon"><i class="fas fa-phone-volume" aria-hidden="true"></i></div>
                            <div class="info">
                                <h5>Hotline : </h5>
                                <span><a href="tel:09444461406 ">09 4444 61406  </a></span>
                            </div>
                        </div>
                        <div class="address mt-4 ">
                            <div class="contact-icon"><i class="fas fa-envelope-open"></i></div>
                            <div class="info">
                                <h5>Email :</h5>
                                <span><a href="mailto:sales@infinityenergymm.com">sales@infinityenergymm.com</a></span>
                            </div>
                        </div>
                        <div class="address mt-4 ">
                            <div class="contact-icon"><i class="fas fa-map-marked-alt" aria-hidden="true"></i></div>
                            <div class="info">
                                <h5>Location :</h5>
                                <span>A(36),No18&19 ,Bayintnaung Automotive Market,Mayangone Township,Yangon,Myanmar, 11062</span>
                            </div>
                        </div>
                    
                    </div>
                    <!-- <img src="/images/contact.png" class="img-responsive"> -->
                </div>	
                
                <div class="col-lg-7 col-sm-12 col-xs-12">
                    <div class="form-bg">
                        
                    <div class="form-section">
                    
                        <?php
                            $sitekey = '6Lf_EponAAAAAF7p682DQTd8ea7oroe2erkotqu5';
                            $secretkey = '6Lf_EponAAAAAD6TPuNv2GQJRnzORAHp7zeNIHfT';
                            if(isset($_POST['pgsubmitted'])) {
                            $yourname= $_POST['yourname'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $subject= $_POST['subject'];
                            $message = $_POST['message'];
                            $captcha = $_POST['g-recaptcha-response'];		
                            $date = date("j F, Y, g:i a");
                            $ip = $_SERVER['REMOTE_ADDR'];
                            
                            
                                if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){  

                                    // Google reCAPTCHA verification API Request  
                                $api_url = 'https://www.google.com/recaptcha/api/siteverify';  
                                $resq_data = array(  
                                    'secret' => $secretkey ,  
                                    'response' => $_POST['g-recaptcha-response'],  
                                    'remoteip' => $_SERVER['REMOTE_ADDR']  
                                );  
                            
                                $curlConfig = array(  
                                    CURLOPT_URL => $api_url,  
                                    CURLOPT_POST => true,  
                                    CURLOPT_RETURNTRANSFER => true,  
                                    CURLOPT_POSTFIELDS => $resq_data  
                                );  
                            
                                $ch = curl_init();  
                                curl_setopt_array($ch, $curlConfig);  
                                $response = curl_exec($ch);  
                                curl_close($ch); 
                                    
                                // Decode JSON data of API response in the array  
                                $responseData = json_decode($response);  
                            
                                // If the reCAPTCHA API response is valid execute the code to send emails
                                if($responseData->success){
                                        if( $yourname==NULL or $email==NULL or $phone ==NULL or $subject == NULL  or $message == NULL){
                                            echo '<div class="alert alert-danger">One or more required fields were left blank. Please fill them in and try again.</div>';
                                            form($yourname,$email,$phone,$subject,$message);
                                        }else{
                                            $headers[] =  'MIME-Version: 1.0' ;
                                            $headers[]= 'Content-type: text/html; charset=iso-8859-1';
                                            $headers[] ='From: info@netscriper.com';
            
                                            $body = 'Hello, <br><br>
                                            You have received the message at CompanyName                       
                                                                
                                            . <br><br>
                                            
                                            Name: '.$yourname.'<br/><br/>
                                            Email: '.$email.'<br><br>
                                            Phone: '.$phone.'<br><br>
                                            subject: '.$subject.'<br><br>
                                            Message: '.$message;
                                            
                                            mail("netscriper.dev@gmail.com", "CompanyName Website Message ", $body,implode("\r\n", $headers));
                                                                    
                                            echo '<div class="alert alert-success"><strong>Thank you very much for contacting us.</strong></div>';
                                        }
                                    }
                                    else{
                                        echo "<div class='alert alert-danger'>Recaptcha Verification Not Working!</div>";
                                }
                                }
                            }
                        ?>
                         <form class="form-horizontal" action="/contact-us/" method="post"  id="contact-form">
                                <div class="form-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <h4>Contact Form</h4>
                                        </div>
                                    </div>
                                                                
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-6 col-xs-12 pr-8">
                                            <div class="input-group xs-margin">
                                                <input class="form-control reservation-form-control" id="yourname" name="yourname" placeholder="Name" type="text" required value="<?php if(isset($yourname)){echo $yourname;} ?>" autocomplete="off">
                                            </div>                                      
                                        </div>	
                                        <div class="col-sm-6 col-md-6 col-xs-12 pl-8">
                                            <div class="input-group input-group-xs-view">
                                                <input class="form-control reservation-form-control" id="phone" name="phone" value="<?php if(isset($phone)){echo $phone;} ?>" placeholder="Phone" type="text" required autocomplete="off">
                                            </div>                                        
                                        </div>						
                                    </div>
                                    <div class="form-group row">                                    
                                        <div class="col-sm-6 col-md-6 col-xs-12  pr-8">
                                            <div class="input-group xs-margin">
                                                <input class="form-control reservation-form-control" id="email" name="email" placeholder="Email" type="email" value="<?php if(isset($email)){echo $email;} ?>" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-xs-12 pl-8">
                                            <div class="input-group input-group-xs-view">
                                                <input class="form-control reservation-form-control" id="yourname" name="subject" placeholder="Subject " type="text" required value="<?php if(isset($subject)){echo $subject;} ?>" autocomplete="off">
                                            </div>                                       
                                        </div>
                                    </div>                             
                                    <div class="form-group row">
                                        <div class="col-sm-12 col-md-12 col-xs-12">
                                            <div class="input-group">
                                                <textarea  rows="4" class="form-control reservation-form-control" name="message" id="request"  placeholder="Message "><?php if(isset($message)) {echo $message; } ?></textarea>
                                            </div>                                       
                                        </div>
                                    </div>
                                    <div class="form-group row margintop15" style="margin-top: 15px;">
                                        <div class="col-md-12 form-margin mb30">
                                            <input type="hidden" name="pgsubmitted" value="pgsubmitted" />
                                            <button class="g-recaptcha btn btn-submit butn"
                                                data-sitekey="6Le4_VspAAAAAK8LwtPRbNeHiQn1wImzMkUPhA35" data-callback='onSubmit'
                                                data-action='submit' data-aos="fade-right">Send </button>
                                        </div>			
                                    </div>				
                                </div>
                            </form>
                        </div>   
                    </div>             
                </div>			
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61091.53248112273!2d96.03133584863279!3d16.8649696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1952e38963ee3%3A0x53549f001b59d2c!2sInfinity%20Energy!5e0!3m2!1smy!2smm!4v1710387068019!5m2!1smy!2smm" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="social">
                        <h4>Follow Our Social Media</h4>
                        <div class="link">
                            <a href="https://www.tiktok.com/@infinityenergymachinery?_t=8kcVCEP877q&_r=1"  target="_blank"><iconify-icon icon="mage:tiktok-circle" width="40px" height="40px"  style="color: #01fd16"></iconify-icon></a>
                            <a href="viber://chat?number=09444461406"  target="_blank"><iconify-icon icon="basil:viber-solid" width="40px" height="40px"  style="color: #01fd16"></iconify-icon></a>
                            <a href="https://www.facebook.com/infinityenergymachinery/ "  target="_blank"><iconify-icon icon="mingcute:facebook-fill" width="40px" height="40px"  style="color: #01fd16"></iconify-icon></a>
                            <a href="https://youtube.com/@infinityenergymachinery?si=RdmzAShxdJ5Cp4AJ "  target="_blank"><iconify-icon icon="ph:youtube-logo-fill" width="40px" height="40px"  style="color: #01fd16"></iconify-icon></a>
                        </div>
                    </div>
                </div>
            </div> -->
		</div>
	</div>
</div>
<script>
	function onSubmit(token) {
		var form=document.getElementById("contact-form");
		if(form.checkValidity()){
			form.submit();
		}
		else{
			grecaptcha.reset();
			form.reportValidity();
		}
		document.getElementById("contact-form").reset();
	}
</script>