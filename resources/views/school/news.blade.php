@extends('layouts.main')

@section('title','School - NEWS')

@section('content')
<!-- ======= Features Section ======= -->
<section class="features">
      <div class="container">

        <div class="section-title">
          <h2>News</h2>
          <p>
            This page News
          </p>
          </div>
        @foreach ($lists as $list)
        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset($list->img)}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>{{$list->title}}</h3>
            <p class="fst-italic">
              {{$list->desc}}
            </p>
          </div>
        </div>
        @endforeach
        <div class="pagination justify-content-center">
          {{ $lists->links() }}
        </div>
    
      </div>
</section><!-- End Features Section -->
@endsection