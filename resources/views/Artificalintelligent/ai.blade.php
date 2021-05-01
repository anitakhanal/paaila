@extends('layouts.admin')
@section('content')
<div class="container my-5">
    <div>
        <p class="text-center">Helping your business levarge the power of AI with our intelligent solutions </p>
        <h2 class="text-center"> Artificial Intelligence Services </h2>
    </div>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width: 20rem;">
                    <img src="images/card.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"> <b>Nepali Text to Speech </b></h5>
                        <p class="card-text">Nepali Text to Speech is a service which enables you to convert a Nepali text into Nepali speech.</p>
                        <a href="#" class="">Learn More</a>
                      
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width: 20rem;">
                    <img src="images/card.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"> <b>Query-An AI Chatbot </b></h5>
                        <p class="card-text">An automatic query answering system for your business to stay in touch your valuable customers effortlessly.</p>
                        <a href="#" class="">Learn More</a>
                      
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width: 20rem;">
                    <img src="images/card.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"> <b>Nepali Text to Speech </b></h5>
                        <p class="card-text">Speech Recognition helps you understand what a person is saying.</p> <br>
                        <a href="#" class="">Learn More</a>
                      
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

    <div class="services my-5">
        <h2 class="text-center py-5">Know more about our Artificial Intelligence Services
             </h2>
        <p class="text-center sub-title"> Shoot any queries </p>
        <form action="" method="post">
            <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="your name">
            </div>
            <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="your email">
            </div>
            <div class="form-group">
            <textarea class="form-control" rows="3"  placeholder="your queres here" name="message" style="width: 30rem;">  Your queries here</textarea>
            <input type="submit" name="submit" class="submit" value="submit">
        </div>
        </form>
    </div>

@endsection