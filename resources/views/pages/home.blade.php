@extends('layouts.master')
@section('content')

<!-- services -->
<section class="section">
    <div class=container>
        <div class="services">
            <div class="col">
                <div class="icon bg-color-1 mb-2"> <span class="flaticon-shipped circled"></span></div>
                <div class="media-body">
                    <h3 class="heading">Free Shipping</h3>
                    <span>On order over $100</span>
                </div>
            </div>
            <div class="col">
                <div class="icon bg-color-2 mb-2"> <span class="flaticon-diet circled"></span></div>
                    <div class="media-body">
                        <h3 class="heading">Always Fresh</h3>
                        <span>Product well package</span>
                    </div>
            
            </div>
            <div class="col">
                <div class="icon bg-color-3 mb-2"> <span class="flaticon-award circled"></span></div>
                    <div class="media-body">
                        <h3 class="heading">Superior Quality</h3>
                        <span>Quality Products</span>
                    </div>
            
            </div>
            <div class="col">
                <div class="icon bg-color-4 mb-2"> <span class="flaticon-customer-service circled"></span></div>
                    <div class="media-body">
                        <h3 class="heading">Support</h3>
                        <span>24/7 Support</span>
                    </div>
            </div>
        </div> 
    </div>
</section>

<!-- categories -->
<section>
    <div class="container categories">
        <div class="categories">
            <div class="col cat">
                <div class="category-wrap mb-4"  style="background-image: url('{{ asset('images/category-1.jpg')}}')">
                    <div class="text bg-primary px-3 py-1">
                        <h2 class="mb-0"> <a href="">Fruits</a></h2>
                    </div>
                </div>
                <div class="category-wrap"  style="background-image: url('{{ asset('images/category-2.jpg')}}')">
                    <div class="text bg-primary px-3 py-1">
                        <h2 class="mb-0"> <a href="">Juices</a></h2>
                    </div>
                </div>
            </div>
            <div class="col cat">
                <div class="mid-cat"  style="background-image: url('{{ asset('images/category.jpg')}}')">
                    <div class="text-center">
                        <h2>Vegetables</h2>
                        <p>Protect the health of every home</p>
                        <p><a href="#" class="btn btn-primary">Shop now</a></p>
                    </div>
                </div>
            </div>
            <div class="col cat">
                <div class="category-wrap mb-4"  style="background-image: url('{{ asset('images/category-3.jpg')}}')">
                    <div class="text bg-primary px-3 py-1">
                        <h2 class="mb-0"> <a href="">Vegetables</a></h2>
                    </div>
                </div>
                <div class="category-wrap"  style="background-image: url('{{ asset('images/category-4.jpg')}}')">
                    <div class="text bg-primary px-3 py-1">
                        <h2 class="mb-0"> <a href="">Dried</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
