@extends('layouts.main')

@section('title','School - NEEDED')

@section('content')
<!-- ======= Features Section ======= -->
<section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Files Download</h2>
          <p>
            Select files
          </p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('assets/img/features-1.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <a href="/download?file=kitob.pdf">
              <button type="button" class="btn btn-outline-primary btn-">Download</button>
            </a>
          </div>
        </div>
      </div>
</section><!-- End Features Section -->
@endsection