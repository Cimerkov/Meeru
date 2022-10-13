<?php include('navbar.php')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="container pt-5 pb-3">

<h2 class="text-center mb-2 pt-5 text-uppercase fst-italic">Contact us</h2>

<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row">

    
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="" method="">

           
            <div class="row">

                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control"required>
                        <label for="name" class="">Your name</label>
                    </div>
                </div>
               

               
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control"required>
                        <label for="email" class="">Your email</label>
                    </div>
                </div>
                

            </div>
            

           
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Subject</label>
                    </div>
                </div>
            </div>
            

           
               <div class="row">

          
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                    </div>

                </div>
            </div>
        

        </form>

        <div class="text-center text-md-left">
            <a class="btn btn-primary text-white">Send</a>
        </div>
        <div class="status"></div>
    </div>
    

 
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Meeru Island, North Male' Atoll, Maldives</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+960 664-3157</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>reservations@meeru.com</p>
            </li>
        </ul>
    </div>
    

</div>
</div>
</body>
</html>
