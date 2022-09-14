@extends('web-side.setup.master')

@section('content')
    <section class="home-section">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ url('public/assets/images/home.jpeg') }}" class="img-fluid"
                        alt="First slide">
                </div>
            </div>
        </div>

        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ url('public/assets/images/carousel.png') }}" class="img-fluid"
                        alt="First slide">
                <div class="carousel-caption">
                  <a href="{{ url('contact') }}" class="btn btn-default join_btn">JOIN NOW</a>
                </div>   
              </div>
            </div>
          </div>
        


        <div class="container reveal fade-bottom">

            <div class="row text-center mt-5 mb-5">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ url('public/assets/images/MONEY MAKER LOGO .png') }}"
                                class="img-fluid" alt="First slide">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <h1 class="the">24/7</h1>
                    <p>The number of hours we are <br> open. Cash Games run all day, <br> every day. Different stakes <br>
                        mean we
                        have something
                        for <br> everyone.</p>
                </div>
                <div class="col-md-3 mt-5">
                    <h1 class="scroll-counter the" data-counter-time="1200">20</h1>
                    <p>The number of poker tables <br> available at the venue.</p>
                </div>
                <div class="col-md-3 mt-5">
                    <h1 class="scroll-counter the" data-counter-time="1200">16</h1>
                    <p>The number of staff taking care <br> of every single customer's requests.</p>
                </div>
                <div class="col-md-3 mt-5">
                    <h1 class="scroll-counter the" data-counter-time="1200">20</h1>
                    <p>The number of TVs we have to <br> cover your favourite sports and <br> entertainment events.</p>
                </div>
            </div>
        </div>

        <div class="mt-3 reveal fade-bottom" id="second-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="font-weight-bold mt-5 welcom">Welcome</h1>
                        <p class="mt-4 text-white">Providing a superior member experience is of the utmost importance to us.
                            Therefore, we have staffed the
                            club with fully trained dealers, friendly front desk attendants and professional security with
                            state of
                            the
                            art security cameras active at all times to ensure the comfort and safety of our members. Enjoy
                            complimentary water, soft drinks, and coffee.</p>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="text-white">
                            <span class="text-center month-year"></span>
                            <table class="date_table table table-bordered table-striped">
                                <tr class="text-white">
                                    <th>S</th>
                                    <th>M</th>
                                    <th>T</th>
                                    <th>W</th>
                                    <th>T</th>
                                    <th>F</th>
                                    <th>S</th>
                                </tr>
                                <tr>

                                </tr>
                            </table>
                            <span class="prev-month btn btn-white btn-sm">Previous</span>
                            <span class="next-month btn btn-white btn-sm float-right">next</span>
                        </div>
                        {{-- <div class="softcard">
                            <div class="calendar-bar">
                                <button class="prev soft-btn"><i class="fa fa-angle-left"></i></button>
                                <div class="current-month"></div>
                                <button class="next soft-btn"><i class="fa fa-angle-right"></i></button>
                            </div>
                            <div class="calendar">
                                <div class="weekdays-name">
                                    <div class="days-name">Sa</div>
                                    <div class="days-name">Su</div>
                                    <div class="days-name">Mo</div>
                                    <div class="days-name">Tu</div>
                                    <div class="days-name">We</div>
                                    <div class="days-name">Th</div>
                                    <div class="days-name">Fr</div>
                                </div>
                                <div class="calendar-days"></div>
                            </div>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container reveal fade-bottom">
            <div class="row mt-5 mb-5">
                <h2 class="text-center w-100">Whats Others Say</h2>
                <h2 class="text-center w-100 mt-4 the"><i class="fa fa-quote-left" aria-hidden="true"></i></h2>
                <p class="text-center w-100">"Amazing place to play poker, great tables and comfortable chairs."</p>
                <h2 class="text-center w-100">Lisa Driver</h2>
            </div>

            <div class="row mt-5 mb-5">
                <h2 class="text-center w-100">Stay Up-to-Speed on Events & Promos</h2>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="example@gmail.com"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">JOIN <i class="fa fa-angle-double-right ml-2"
                                    aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>


    </section>
@endsection

@section('scripts')
    <script>
        var start_date_dialog = osmanli_calendar
        $('.prev-month').click(function() {
            start_date_dialog.pre_month()
        });
        $('.next-month').click(function() {
            start_date_dialog.next_month()
        });

        start_date_dialog.init();
        start_date_dialog.ON_SELECT_FUNC = function() {
            $('.output').html(osmanli_calendar.SELECT_DATE);
        }
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script>
        try {
            fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
                method: 'HEAD',
                mode: 'no-cors'
            })).then(function(response) {
                return true;
            }).catch(function(e) {
                var carbonScript = document.createElement("script");
                carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                carbonScript.id = "_carbonads_js";
                document.getElementById("carbon-block").appendChild(carbonScript);
            });
        } catch (error) {
            console.log(error);
        }
    </script>
@endsection
