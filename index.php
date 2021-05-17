<?php include('security.php'); ?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<style type="text/css">

  .icofont-navigation-menu:before {
    content: "\efa2";
    color: white;

}

#header.header-scrolled, #header.header-inner-pages {
    background: black;
}

#header .logo a {
    color: #fff;
}

.nav-menu a {
    display: block;
    position: relative;
    color: #fff;
    transition: 0.3s;
    font-size: 15px;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
}

</style>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Welcome To Uttarakhand</h1>
        </div>
      </div>

      <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4 col-6">
          <div class="icon-box">
            <h2 id="StateConfirmed" ></h2>
            <h3><a href="">Confirmed Cases</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
          <div class="icon-box">
           <h2 id="StateActive"></h2>
            <h3><a href="">Active Cases</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
          <div class="icon-box">
            <h2 id="StateRecovered"></h2>
            <h3><a href="">Recovered Cases</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <h2 id="StateDeath"></h2>
            <h3><a href="">Death Cases</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="img/uttrakhand/map.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>About</h3>
            <p class="font-italic">
              Uttarakhand was formed on 9th November 2000 as the 27th State of India, when it was carved out of northern Uttar Pradesh. Located at the foothills of the Himalayan mountain ranges, it is largely a hilly State, having international boundaries with China (Tibet) in the north and Nepal in the east. On its north-west lies Himachal Pradesh, while on the south is Uttar Pradesh. It is rich in natural resources especially water and forests with many glaciers, rivers, dense forests and snow-clad mountain peaks. Char-dhams, the four most sacred and revered Hindu temples of Badrinath,Kedarnath, Gangotri and Yamunotri are nestled in the mighty mountains.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i><strong>Population:</strong> 100.86 lakh</li>
              <li><i class="ri-check-double-line"></i><strong>Capital:</strong> Dehradun</li>
              <li><i class="ri-check-double-line"></i><strong>Area:</strong> 53,483 sq.km</li>
              <li><i class="ri-check-double-line"></i><strong>Districts:</strong>  13</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
<!--     <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel clients-carousel">
          <img src="assets/img/clients/client-1.png" alt="">
          <img src="assets/img/clients/client-2.png" alt="">
          <img src="assets/img/clients/client-3.png" alt="">
          <img src="assets/img/clients/client-4.png" alt="">
          <img src="assets/img/clients/client-5.png" alt="">
          <img src="assets/img/clients/client-6.png" alt="">
          <img src="assets/img/clients/client-7.png" alt="">
          <img src="assets/img/clients/client-8.png" alt="">
        </div>

      </div>
    </section> --><!-- End Clients Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Government Services</h2>
          <p>Check our Government Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-desktop"></i></div>
              <h4><a href="https://www.utconline.uk.gov.in/">UTC Online</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="https://www.corbettonline.uk.gov.in/">Corbett Tiger Reserve Online Booking</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-money"></i></div>
              <h4><a href="https://badrinath-kedarnath.gov.in/">Shri Badarinath & Shri Kedarnath Temple Online Booking</a></h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Coronavirus</h3>
          <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.<br><br>
The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</p>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <br><br><br>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

         <div class="section-title">
          <h2>Coronavirus Symptoms</h2>
          <p>Check the symptoms</p>
        </div>

        <div class="row">
          <div class="image col-lg-6" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <img src="img/icons/cold.png">
              <h4>Fever</h4>
              <p>A fever is a body temperature that is higher than normal. A normal temperature can vary from person to person,but it is usually around 98.6F. </p>
            </div>
             <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <img src="img/icons/education.png">
              <h4>Tiredness</h4>
              <p>Feeling overtired, with low energy and a strong desire to sleep that interferes with normal daily activities.</p>
            </div>
             <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <img src="img/icons/avatar.png">
              <h4>Dry Cough</h4>
              <p>A sudden, forceful hacking sound to release air and clear an irritation in the throat or airway.</p>
            </div>
             <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <img src="img/icons//healthcare-and-medical (2).png">
              <h4>Aches and Pains</h4>
              <p>Muscle pain is most often related to tension, overuse, or muscle injury from exercise or hard physical work.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <img src="img/icons/discharge.png">
              <h4>Nasal Congestion</h4>
              <p>Nasal passages swollen with excess fluid and mucus, may be triggered by infection, tobacco smoke or perfume.</p>
            </div>
             <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <img src="img/icons/discharge (5).png">
              <h4>Runny Nose</h4>
              <p>Excess drainage, ranging from a clear fluid to thick mucus, from the nose and nasal passages.</p>
            </div>
             <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <img src="img/icons/medical.png">
              <h4>Sore Throat</h4>
              <p>Pain or irritation in the throat that can occur with or without swallowing, often accompanies infections, such as a cold or flu.</p>
            </div>
             <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <img src="img/icons/healthcare-and-medical (1).png">
              <h4>Diarrhoea</h4>
              <p>Loose, watery bowel movements that may occur frequently and with a sense of urgency.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title text-center" >Our Services</h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Health Care</li>
              <li data-filter=".filter-card">Disaster Management</li>
              <li data-filter=".filter-web">Education & Skillng</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/uttrakhand/hospital.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Public Health Care Center</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/home/medical.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Medical</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/home/blood.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Blood Bank</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/donate.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Donations</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

             <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/volunteer.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Volunteers</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/uttrakhand/logo.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Government Services</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/mask.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Movement Pass</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>
          
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="img/home/hr.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>HR Recruitment</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="img/home/courses.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Online Vocational Training Courses</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/home/msme.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>MSME Products</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/courses.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Essential Workers</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/donation.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Food Supply</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>To Flatten The Curve & Break the Chain</h2>
          <p>STAY HOME, STAY SAFE</p>
        </div>

        <div class="row">

          <div class="col-lg-3">
            <div class="member" data-aos="fade-up">
              <div class="member-info">
                <h4> WASH HANDS OFTEN</h4>
                
              </div>
            </div>
            <div class="member" data-aos="fade-up" style="height: 100px;">
              <div class="member-info">
                <h4> COVER YOUR COUGH</h4>
              </div>
            </div>
          </div> 
          <div class="col-lg-3"> 
              <div class="member" data-aos="fade-up"> 
              <div class="member-info">
                <h4>KEEP A SAFE DISTANCE</h4>
               
              </div>
            </div>
             <div class="member" data-aos="fade-up" >
              <div class="member-info">
                <h4>SICK? CALL THE HELPLINE</h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <img src="img/home/banner.png" class="img-fluid">
          </div>  

        </div>

      </div>
    </section><!-- End Team Section -->


  </main><!-- End #main -->


<script type="text/javascript">
  
$.ajax({
    url:"https://api.covid19india.org/v2/state_district_wise.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {

     //console.log(covid_data);
     var newArray = covid_data.filter(function (el) {

      return el.state === 'Uttarakhand';

    });

    //console.log(newArray);

    Array.prototype.sum = function (prop) {
    var total = 0
    for ( var i = 0, _len = this.length; i < _len; i++ ) {
        total += this[i][prop]
    }
    return total
    }

    var StateConfirmed = newArray[0].districtData.sum("confirmed");
    document.getElementById("StateConfirmed").innerHTML = StateConfirmed;

    var StateActive = newArray[0].districtData.sum("active");
    document.getElementById("StateActive").innerHTML = StateActive;

    var StateDeath = newArray[0].districtData.sum("deceased");
    document.getElementById("StateDeath").innerHTML = StateDeath;

    var StateRecovered = newArray[0].districtData.sum("recovered");
    document.getElementById("StateRecovered").innerHTML = StateRecovered;

    // var MainStateConfirmed = newArray[0].districtData.sum("confirmed");
    // document.getElementById("MainStateConfirmed").innerHTML = "Covid19 Cases - " + (MainStateConfirmed) ;
}

});


</script>

<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>