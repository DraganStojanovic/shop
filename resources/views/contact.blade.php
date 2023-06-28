@extends('master')
@section('title', 'Contact Page')

    @section( 'content' )
        <div class="container pt-3">
            <div class="row text-center">
                <h1>Contact Page</h1>
            </div>
                <!-- Wrapper container -->
                <div class="container py-4">

                    <!-- Bootstrap 5 starter form -->
                    <form id="contactForm">

                        <!-- Name input -->
                        <div class="col-md-6 offset-md-3">
                            <label class="form-label" for="your-subject">Your Subject</label>
                            <input class="form-control" id="your-subject" name="subject" type="text" placeholder="Your Subject" />
                        </div>

                        <!-- Email address input -->
                        <div class="col-md-6 offset-md-3">
                            <label class="form-label" for="emailAddress">Email Address</label>
                            <input class="form-control" id="emailAddress" name="email" placeholder="Email Address" />
                        </div>

                        <!-- Message input -->
                        <div class="col-md-6 offset-md-3">
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

        <div class="container-fluid px-0">
            <div class="row col-12 g-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2838.2456886591676!2d20.184314076019966!3d44.65333177107229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a1463f770ac03%3A0xeadc1683a5c2076e!2zVm9qdm9kZSBNacWhacSHYQ!5e0!3m2!1sen!2srs!4v1687976386392!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    @stop
