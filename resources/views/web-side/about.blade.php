@extends('web-side.setup.master')

@section('content')

    <section class="about-section">

        <div class="container">
            <div class="row">
                <div class="col-md-6" id="about">
                    <h1 class="the1 text-center">About us</h1>
                    <p class="mt-4 the2">
                        At Moneymaker’s Social, you’ll love our welcoming atmosphere and southern charm. With over 25 TVs,
                        20 poker
                        tables, dart boards, a pool table, and foosball we have something for everyone. Our chairs are the
                        most
                        comfortable you will find and our staff goes out of our way to make you feel welcome. If you are
                        coming to
                        play some cards or just to watch the Wildcats with some friends we want to see you at Moneymaker’s.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('public/assets/images/c26a4c_999469eff7f54b6db8fa82f7754d8179_mv2.png') }}"
                        class="img-fluid about_img" alt="">
                </div>
            </div>
        </div>

    </section>
@endsection
