@extends('web-side.setup.master')

@section('content')
    <section class="house-section">
        <div class="mt-3" id="second-row1">
            <div class="mt-3" id="second-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h1 class="font-weight-bold fade-left-about mt-5 welcom" style="font-size: 52px;">CONTACT US</h1>
                            <p class="fade-left-about">451 Jordan Drive Suite J Paducah KY</p>
                            <p class="mt-4 fade-left-about">info@mysite.com</p>
                            <p class="mt-4 fade-left-about">270-415-5768</p>
                        </div>
                        <div class="col-md-6">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <form action="{{ url('contact-mail') }}" method="POST">
                                @csrf
                                <h3 class="font-weight-bold text-center">GET IN TOUCH NOW</h3>
                                <div class="row mt-5">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name"
                                                class="form-control input" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email" placeholder="Email"
                                                class="form-control input" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone"
                                                class="form-control input" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="address" placeholder="Address"
                                                class="form-control input" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Type Your message here..." cols="30" rows="5"
                                                class="form-control input" required></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-default btn-submit w-100">Submit</button>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-3 container">
                <iframe id="ifram"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13606.3879470073!2d74.3470055!3d31.507759649999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1662210671035!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </section>
@endsection
