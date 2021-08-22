@extends('layouts.main')

@section('title', 'School - CONTACT US')

@section('content')
<!-- ====== forma ====== -->

<!-- ======= Features Section ======= -->
<section class="features">
      <div class="container">
        <div class="section-title">
          <h2>Contact us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('assets/img/features-1.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Formani to'ldiring va "Yubotish" tugmasini bosing</h3>
            <p class="fst-italic">
              <form method="POST" action="{{route('admin.store')}}">
                @csrf
                <div class="form-group p-1">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="nemaHelp" placeholder="Enter name" autocomplete="off" name="name">
                </div>
                <div class="form-group p-1">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group p-1">
                  <label for="text">Text</label>
                  <input type="text" class="form-control" id="text" placeholder="Enter text" name="text">
                </div>
                <button type="submit" class="btn btn-primary m-1">Submit</button>
              </form>
            </p>
          </div>
        </div>
      </div>
</section><!-- End Features Section -->
@endsection