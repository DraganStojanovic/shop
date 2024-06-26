@extends('master')
@section('title', 'Contact')

@section( 'content' )
    <div class="container pt-3">
        <div class="row text-center">
            <h1>Contact Page</h1>
        </div>
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold text-body-emphasis">Contact us</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Please contact us through the form we've provided to make it easier for you to reach us, and we'll respond to you as soon as possible.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a class="btn btn-primary btn-lg px-4" href="{{ url('/shop') }}" role="button">Get back to
                        Shop</a>
                    <a class="btn btn-info btn-lg px-4" href="{{ url('/about-page') }}" role="button">About Us</a>
                </div>
            </div>
        </div>

        <!-- Wrapper container -->
        <div class="container py-4 pb-5">
            <!-- Bootstrap 5 starter form -->
            <form method="POST" action="{{ route('contact.send-contact') }}" id="contactForm" enctype="multipart/form-data">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Email address input -->
                <div class="col-md-6 offset-md-3 p-3">
                    <label class="form-label" for="email">Email Address</label>
                    <input class="form-control" id="email" name="email" placeholder="Email Address"/>
                </div>
                <!-- Name input -->
                <div class="col-md-6 offset-md-3 p-3">
                    <label class="form-label" for="subject">Your Subject</label>
                    <input class="form-control" id="subject" name="subject" type="text" placeholder="Your Subject"/>
                </div>
                <!-- Message input -->
                <div class="col-md-6 offset-md-3 p-3">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" placeholder="Message" style="height: 10rem;"></textarea>
                </div>

                <!-- Form submit button -->
                <div class="col-md-6 offset-md-3 d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container-fluid px-0 pt-5">
        <div class="row col-12 g-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2838.2456886591676!2d20.184314076019966!3d44.65333177107229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a1463f770ac03%3A0xeadc1683a5c2076e!2zVm9qdm9kZSBNacWhacSHYQ!5e0!3m2!1sen!2srs!4v1687976386392!5m2!1sen!2srs"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@stop
