@extends('layout/app')

@section('content')
    <div class="home-hero">
        <div class="home-text">
            <h1>Fashionista E-commerce</h1>
            <h6>Slogan text</h6>
            <button>View Collection</button>
        </div>
    </div>
    <div class="home-products">
        <div class="popular-products">
            <h5>Popular Products</h5>
            <div class="img-container">
                <figure>
                    <img src="https://lorempixel.com/200/200/" alt="product image">
                    <figcaption>
                        <p>Product name<br>$10.99</p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="https://lorempixel.com/200/200/" alt="product image">
                    <figcaption>
                        <p>Product name<br>$10.99</p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="https://lorempixel.com/200/200/" alt="product image">
                    <figcaption>
                        <p>Product name<br>$10.99</p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="https://lorempixel.com/200/200/" alt="product image">
                    <figcaption>
                        <p>Product name<br>$10.99</p>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="categories">
            <div class="category-grid">
                Icons
            </div>
        </div>
    </div>
    <div class="home-blog">
        <h4>Latest Blog Posts</h4>
        <div class="blog-item">
            <h5>Blog title</h5>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        <div class="blog-item">
            <h5>Blog title</h5>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>


    </div>
@endsection
