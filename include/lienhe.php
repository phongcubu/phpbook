<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    //Load Composer's autoloader
    require 'vendor/autoload.php';;
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        // preparing mail content
        $messagecontent ="Họ và Tên : ". $name . "<br>Email : " . $email. "<br>Tiêu đề :" . $subject. "<br>Nội Dung :" . $message;
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.googlemail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'pspbookk@gmail.com';                     //SMTP username
            $mail->Password   = 'phongsonphuong123';                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('from@example.com', 'Customer');
            $mail->addAddress('pspbookk@gmail.com', 'BOOK PSP');     //Add a recipient
           
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Phản Hồi Khách Hàng";
            $mail->Body    = $messagecontent;
            
            $mail->send();
            echo "<script>alert('Cảm ơn quý khách đã phản hồi ! ')</script>";
          
        } catch (\Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
   
?>
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Liên Hệ Với Chúng Tôi</h2>
                    <div id="gmap" class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.518703923747!2d105.81917361476303!3d21.01192158600752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7dbe998e37%3A0x11cbb19d65fb8af6!2zMTIyIFRow6FpIEjDoCwgVHJ1bmcgTGnhu4d0LCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpIDEwMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1630201219859!5m2!1svi!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Gửi Phản Hồi</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" action="" class="contact-form row" name="contact-form" method="POST">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Họ và Tên">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Tiêu đề">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nội dung"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi đi">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Thông Tin liên lạc </h2>
                        <address>
	    					<p><i class="fa fa-institution fa-2x" style="color: aquamarine;"> </i><span style="font-weight:900;font-size: 30px;"> PSP-BOOK</span></p>
							<p><i class="fa fa-map-marker fa-1x" > </i> : 122 Thái Hà, Trung Liệt, Đống Đa, Hà Nội </p>
							
							<p><i class="fa fa-phone" ></i> : 0814.515.062</p>
							<p><i class="fa fa-envelope-open" ></i > : pspbook@gmail.com</p>
	    				</address>
                        <div class="social-networks">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNh%25C3%25A0-s%25C3%25A1ch-Ph%25C6%25B0%25C6%25A1ng-Mai-100276445110239&tabs=timeline&width=300&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="300" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/#contact-page-->
