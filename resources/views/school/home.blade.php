@extends('layouts.main')

@section('title', 'School - HOME')

@section('content')
<!-- ======= Courses Section ======= -->
<section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bi-book"></i></div>
              <h4 class="title"><a href="">Directions or navigation</a></h4>
              <p class="description">In navigation, the course of a watercraft or aircraft is the cardinal direction in which the craft is to be steered.</p>
            </div>
          </div>
         
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Education</a></h4>
              <p class="description">
                In higher education in various countries, such as Canada, Nigeria and the United States.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bi-basket2"></i></div>
              <h4 class="title"><a href="">Food</a></h4>
              <p class="description">
                In dining, a course is a specific set of food items that are served together during a meal, all at the same time.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bi-lightbulb"></i></div>
              <h4 class="title"><a href="">Sports</a></h4>
              <p class="description">
              Show jumping, also known as "stadium jumping", is a part of a group of English riding equestrian events that also includes dressage.
              </p>
            </div>
          </div>

        </div>

      </div>
</section><!-- End courses Section -->

<!-- ======= About school Section ======= -->
<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="{{asset('assets/img/school-no1.jpg')}}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-home"></i></div>
              <h4 class="title"><a href="">About school</a></h4>
              <p class="description">
                Information school can also refer, in a more restricted sense, to the members of the iSchools organization (formerly the "iSchools Project"), as governed by the iCaucus.
              </p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-bookmark"></i></div>
              <h4 class="title"><a href="">About teachers</a></h4>
              <p class="description">
              A teacher (also called a schoolteacher or formally, an educator) is a person who helps students to acquire knowledge, competence or virtue. Informally the role of teacher may be taken on by anyone (e.g. when showing a colleague how to perform a specific task).</p>
            </div>
          </div>
        </div>

      </div>
</section><!-- About school haqida malumot Section -->

<!-- ======= About ticher Section ======= -->
<section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Teachers</h2>
          <p>
            Informally the role of teacher may be taken on by anyone (e.g. when showing a colleague how to perform a specific task). In some countries, teaching young people of school age may be carried out in an informal setting, such as within the family (homeschooling), rather than in a formal setting such as a school or college. Some other professions may involve a significant amount of teaching (e.g. youth worker, pastor).
          </p>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('assets/img/top-ticherno1.jpg')}}" class="img-fluid" alt="">
            </div>
          <div class="col-md-7 pt-4">
              <h3>Peter Tabichi</h3>
            <p class="fst-italic">
              Peter Mokaya Tabichi, OFM (born 1982) is a Kenyan science teacher and Franciscan friar at Keriko Mixed Day Secondary School in Pwani, Nakuru County. He is the winner of the 2019 Global Teacher Prize. Tabichi was cited as one of the Top 100 most influential Africans by New African magazine in 2019.[1]
            </p>
          </div>
        </div>
        
        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{asset('assets/img/top-ticher-2.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Maggie MacDonnell</h3>
            <p class="fst-italic">
              Maggie MacDonnell is a Canadian educator and development practitioner who became the third recipient of the teaching prize award Global Teacher Prize, a $1 million award from Varkey Foundation.
            </p>
          </div>
        </div>
      </div>
</section><!-- About ticher Section -->
@endsection