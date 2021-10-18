@extends('template')
@section('body')

        <div class="hero">
            <div class="container hero_container">
                <div class="hero_title">
                    Welcome World
                </div>
                <div class="hero_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis tempore quo, minus 
                </div>
            </div>
        </div>
        <div class="services">
            <div class="text-center py-5">
                <h3 class="heading">Our Services</h3>
            </div>
           <div class="container pb-5">
            <div class="row gy-5">
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card_img" style="background-image: url({{ asset('images/burger.png') }})">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card_img" style="background-image: url({{ asset('images/chef.png') }})">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card_img" style="background-image: url({{ asset('images/eating.png') }})">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            </div>
           </div>
        </div>
        <div class="client">
           <h3 class="heading text-center pb-5">Our Client</h3>
           <div class="clients">
                <div class="container icon_client_bar gy-5">
                    <i class="fa-brands fa-adn icon_client py-3"></i>
                    <i class="fa-brands fa-asymmetrik icon_client py-3"></i>
                    <i class="fa-brands fa-apple icon_client py-3"></i>
                    <i class="fa-brands fa-aws icon_client py-3"></i>
                    <i class="fa-solid fa-b icon_client py-3"></i>
                    <i class="fa-solid fa-atom icon_client py-3"></i>
                    <i class="fa-brands fa-avianex icon_client py-3"></i>
                    <i class="fa-brands fa-audible icon_client py-3"></i>
                </div>

           </div>
        </div>
        <div class="contact_us py-5">
            <div class="container">
                <div class="contact_form">
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
@endsection