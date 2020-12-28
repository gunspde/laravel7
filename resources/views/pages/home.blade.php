 <!--เรียกใช้งาน template -->
@extends('layouts.master_template')
@section('title')Home @endsection
@section('content')
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('assets/images/slide1.jpg')}}" class="img-fluid" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slide2.jpg')}}" class="img-fluid" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slide3.jpg')}}" class="img-fluid" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

ิิ<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x"></i>
            <h1>Home</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nulla voluptates tempora praesentium sed, quae dolorum illo dicta quo. Porro esse ipsam nulla doloremque veritatis ipsa et dicta fuga ex!</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-address-card fa-3x"></i>
            <h1>About as</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquid, quas voluptatibus provident quod pariatur! Reprehenderit assumenda eius neque repellat voluptate sapiente, vel excepturi laborum alias, temporibus accusantium animi. Rerum.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-taxi fa-3x"></i>
            <h1>service</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quod distinctio quos omnis ipsum blanditiis quo tempore nulla, expedita facere. Sed architecto saepe temporibus distinctio, veritatis dolorem sapiente. Animi, dolorem?</p>
        </div>
    </div>
</div>



@endsection

