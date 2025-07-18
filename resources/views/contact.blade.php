@extends('layout.main')
@section('title', 'Contact Us')
@section('content')


<div class="container w-4 p-4" id="contact">
        <div class="row">
                <div class="col-md-12 d-block text-center mb-4">
                        <h1>Contact Us</h1>
                        <p>If you have any questions, feel free to reach out to us through the form below.</p>
                </div>
        </div>
        <div class="row d-block position-relative">
                <div class="col-md-6 offset-md-3">
                        <form method="POST">

                                <div class="form-group p-2">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group p-2">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="form-group p-2">
                                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                </div>
        </div>
</div>


@endsection