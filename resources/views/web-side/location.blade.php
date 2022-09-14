@extends('web-side.setup.master')

@section('content')

<section class="house-section">
  <div class="mt-3" id="second-row1">
    <div class="container">
      <div class="row text-center">
        <h1 class="house fade-left-about text-center w-100">Location</h1>
      </div>
    </div>
  </div>

  <div class="container mt-5">

    <div class="row container">
      <iframe id="ifram"
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13606.3879470073!2d74.3470055!3d31.507759649999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1662210671035!5m2!1sen!2s"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="row container">

      <ul class="house_ul mt-4 list-unstyled">
        <li>We are located at: 451 Jordan Drive, Suite J, Paducah KY</li>
        <li>Phone number: 270-415-5768</li>
      </ul>

      <ul class="house_ul mt-4 list-unstyled">
        <li>Paducah, Kentucky is located in far western Kentucky halfway between Nashville and St. Louis on I-24. We
          are close to these major cities:
        </li>
      </ul>

      <ul class="house_ul mt-4 list-unstyled">
        <li>140 miles Northwest of Nashville, Tennessee.</li>
        <li>140 miles Northwest of Nashville, Tennessee.</li>
        <li>140 miles Northwest of Nashville, Tennessee.</li>
        <li>140 miles Northwest of Nashville, Tennessee.</li>
      </ul>

      <p class="mt-4">
        Paducah is home to Barkley Regional Airport (PAH) with direct daily flights on United Airlines to and from
        Chicago O'Hare International Airport. With over 200 United destinations around the world, you can get to
        Paducah with one stop from practically anywhere in the world.
      </p>

    </div>
  </div>

</section>

@endsection
