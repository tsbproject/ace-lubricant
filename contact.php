<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ace Lubricants</title>
    <meta name="description" content="high-quality vehicles and industrial lubricants manufacturer in Nigeria">
    <link rel="icon" type="image/x-icon" href="/images/ace-favicon.png">

    
    <!--------------------Bootstrap CSS---------------------->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!----------------------------------Custom CSS------------------------------->
     <link rel="stylesheet" href="css/icon-font.css"> 
     <link rel="stylesheet" href="css/main.css">  
     <link rel="stylesheet" href="css/styles.css">

     <!----------------Boostrap Icons--------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!--------Google Fonts------------------->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

    <!------------------- FONT AWESONE ICONS CDN----------------------------------->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity=
     "sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>



<body>
  <?php require 'header.php';?>
    
    <main>

      <section class="top-banner">
        <div id="about-banner" class="top-banner__contact  p-4 text-white">
            <div class="container-fluid">
                 <div class="row">
                      <div class="col-sm-12 col-12 col-md-12">
                        <div class="page-title" >
                          <h1 id="top-banner__text" class="top-banner__text"> Contact us </h1>
      
                        </div>
      
                      </div> 
                  </div>
            </div>
        </div> 
    </section>   

    <div class="form-header text-center">
      <h2 class="form-title heading-secondary u-margin-top-medium u u-margin-bottom-medium">stay connected with us </h2>
    </div>

    <section class="contact-details p-2 u-center-text">
      <div class="container">
        <div class="row g-5">
          
          <div class="col-sm-4">
            <div class="contact-info border">
              <span><i class="icon-basic-geolocalize-01 contact-info__icon"></i></span><br>
              <h3 class="contact-info__header heading-secondary"> Company Address</h3>
              <p class="contact-info__text paragraph"> House 22, Alice Ayetoro street,
                Greenland Estate, Asese, 
               off Lagos - Ibadan Expressway, 
               Owode 110115, Ogun State</p>
            </div>
          </div>
         
          <div class="col-sm-4 ">
            <div class="contact-info border">
              <span><i class="bi bi-telephone contact-info__icon"></i></span><br>
            <h3 class="contact-info__header heading-secondary"> Telephone</h3>
            <p class="contact-info__text paragraph"> (+234) 903-611-7638<br> (+234) 703-061-9794</p>
          </div>
        </div>
          
          <div class="col-sm-4 ">
            <div class="contact-info border">
            <span><i class="icon-basic-mail-open-text contact-info__icon"></i></span><br>
            <h3 class="contact-info__header heading-secondary">Email Address</h3>
            <p class="contact-info__text paragraph"> info@acelubricant.com <br> crescentintegproject@gmail.com</p>
          </div>
        </div>
        
       </div>
      </div>
    
    </section>

    <section class="contact-form u-margin-top-medium">
      <div class="container-fluid">
        <div class="row">
          <div class="contact">
            <div class="contact__form">
                <form method="post" action="submit_form.php" class="form">
                    <div class="u-margin-bottom-medium">
                        <h2 class="heading-secondary">
                            Do you have any question about ace lubricants?
                        </h2>
                    </div>

                    <?php if (isset($_SESSION['email_message'])): ?>
                    <div id="success-message" class=" success-msg alert alert-<?php echo $_SESSION['email_message_type']; ?> mt-3">
                        <?php 
                        echo $_SESSION['email_message']; 
                        unset($_SESSION['email_message']);
                        unset($_SESSION['email_message_type']);
                        ?>
                    </div>
                <?php endif; ?>
                    
                <div class="form__group">
                        <input type="text" class="form__input" placeholder="Full name" id="full_name" name="full_name" required>
                        <label for="full_name" class="form__label"> Full Name</label>
                    </div>
    
    
                    <div class="form__group">
                        <input type="email" class="form__input" placeholder="Email" id="email" name="email" required>
                        <label for="email" class="form__label"> Email Address</label>
                    </div>
    
    
                    
                    <div class="form__group">
                      <input type="phone" class="form__input" placeholder="Phone" id="phone" name="phone" required>
                      <label for="phone" class="form__label"> Telephone</label>
                    </div>
    
                    <div class="form__group">
                      <textarea class="form__textarea" placeholder="write your message here" id="message" name="message" rows="5" required></textarea>
                      <label for="message" class="form__label"> Your Message</label>
                  </div>
    
    
                  <div class="form-group" style="display: none;">
                <label for="website">Website</label>
                <input type="text" class="form-control" id="website" name="website">
                  </div>
                 <div class="g-recaptcha" data-sitekey="6Le7qx0qAAAAANprlofGZX6dbwlVtvgh75TrRxa0"></div>
                        
                       
                
                    <div class="form__group ">
                        <button class="btn btn--green form__submit ">Submit &rAarr;</button>
                    </div>
    
                </form>

               
    
              </div>
            </div>
          </div>
      </div>
    </section>

  </main>  

  

 

<!-- Scroll Up Button -->
<button id="scrollUpBtn" class="btn btn-primary">
  <i class="bi bi-arrow-up"></i> <!-- Bootstrap Icons -->
</button>

<?php require 'footer.php';?>



 




      

 
  

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>   
   <script src="js/script.js"></script>
</body>
</html>
