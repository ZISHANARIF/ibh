<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Home</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="publisher" href="" />
  <link rel="canonical" href="index.php" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "app_top.php" ?>
</head>

<body>
  <?php include "app_header.php" ?>

  <main>
    <!-- ===== Breadcrumb Hero (bc01) ===== -->
    <div class="img-breadcum">
      <div class="container">
        <img src="https://images.unsplash.com/photo-1725916631452-b411a5991fce?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGh5ZHJvbGljJTIwbWNoaW5lfGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=600" loading="lazy"  decoding="async" fetchpriority="low" title="About Us" alt="About Us" />
        <div class="sub-tt">N. T. Associates And Trading Co.</div>
        <div class="tt">N. T. Associates And Trading Co.</div>
      </div>
    </div>
    <div class="breadcum-sec">
      <div class="container">
        <ul>
          <li><a href="/index.php" title="Home">Home</a></li>
          <li>Write a review</li>
        </ul>
      </div>
    </div>

 <section class="review-wrapper leadsure">
        <div class="container">
            <div class="row review-card">
                <div class="col-lg-6 review-card__image-section">
                    <img src="https://media.istockphoto.com/id/1305335261/vector/customer-feedback-assessment-concept-online-rating-landing-page.jpg?s=612x612&w=0&k=20&c=eeCwSROCJQYTPWpHEcZizOmVJ8K-NuqcEYbongqpFOA=" loading="lazy"  decoding="async" fetchpriority="low" alt="Person selecting a five-star rating">
                </div>

                <div class="col-lg-6 review-card__form-section">
                    <div class="leadsuresubheading fs-4">Write Your Review</div>
                    <p class="leadsurepara">
                        Required fields are marked <span class=" fs-3">*</span>
                        
                    </p>

                    <form class="review-card__form" method="POST" onsubmit="handleSubmit(event)">
                       
                        
                           <div class="row">

                                    <div class="col-md-6 mb-3">

                                        <input type="text" class="form-control" placeholder="Full Name" name="name">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <input type="email" name="email" class="form-control " placeholder="Email id">

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <div class="phone-wrapper">
                                            <input type="hidden" name="countryCode" value="">
                                            <input type="hidden" name="countryCodeWithName" value="">

                                            <input type="tel" class="form-control  telePhone" name="mobile" placeholder="Mobile Number" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" minlength="9" maxlength="13" required="" autocomplete="off">
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <input type="text" name="location" class="form-control " placeholder="Your Location">

                                    </div>

                                      <div class="unique-star-rating">
                            <div class="unique-star" data-star="1"></div>
                            <div class="unique-star" data-star="2"></div>
                            <div class="unique-star" data-star="3"></div>
                            <div class="unique-star" data-star="4"></div>
                            <div class="unique-star" data-star="5"></div>
                            <input type="hidden" name="rating" id="rating-value">
                        </div>

                                    <div class="col-12 mb-3">

                                        <textarea name="message" class="form-control " rows="5" placeholder="Your Message"></textarea>

                                    </div>

                                    <div>

                                        <div class="form-group mb-0">

                                            <div class="g-recaptcha" data-sitekey="6LdGwugrAAAAAMpHXE-If7TSye8nJotpZKFrxsLe"></div>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <button name="submit_contact" type="submit" class="main-btn w-100 mt-3">Let's Connect</button>

                                    </div>

                                </div>

                       
                      

                       
                    </form>
                </div>
            </div>
        </div>
    </section>
    


  </main>



  <?php include "app_footer.php" ?>
  <?php include "app_bottom.php" ?>



</body>

</html>