@extends('layouts.main')

@section('title','School - PROFILE')

@section('content')
<!-- ======= Features Section ======= -->
<section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Profile</h2>
          <p>
              This page Profile
          </p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('assets/img/features-1.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <div>
            <a class="btn" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </div>
            </a>
          </div>
        </div>
      </div>
</section><!-- End Features Section -->
@endsection