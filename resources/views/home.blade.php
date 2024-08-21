@extends('layouts.app')

@section('content')
    
    {{-------------- Home --------------}}
    <section class="home">
        <div class="container">
            <div class="home__inner">
                <div class="home__content">
                    <p class="home__heading">
                        Order Healthy & Fresh Food Any Time
                    </p>
                    <p class="section-desc home__desc">
                        Italian food makes people think of big family dinners. 
                        So you may want to position your restaurant as a place to 
                        bring the whole family.
                    </p>
                </div>
                <div>
                    <img class="home__img" src="{{ asset('images/home.png') }}" alt="Home Image">
                </div>
            </div>
        </div>
    </section>

    {{-------------- Popular --------------}}
    <section class="popular">
        <div class="container">
            <div class="popular__inner">
                <p class="section-heading popular__heading">
                    Popular Restaurant
                </p>
                <div class="popular__list">
                    <div class="popular-item">
                        <a href="#!">
                            <img src="{{ asset('icons/popular_1.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="popular-item">
                        <a href="#!">
                            <img src="{{ asset('icons/popular_2.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="popular-item">
                        <a href="#!">
                            <img src="{{ asset('icons/popular_3.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="popular-item">
                        <a href="#!">
                            <img src="{{ asset('icons/popular_4.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="popular-item">
                        <a href="#!">
                            <img src="{{ asset('icons/popular_5.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="popular-item">
                        <a href="#!">
                            <img src="{{ asset('icons/popular_6.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="popular-item">
                        <a href="#!">
                            <img src="{{ asset('icons/popular_7.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-------------- Review --------------}}
    <section class="review">
        <div class="container">
            <div class="review__inner">
                <div class="review__media">
                    <img src="{{ asset('images/review.png') }}" alt="">
                    <img class="review__icon-1" src="{{ asset('icons/review_1.svg') }}" alt="">
                    <img class="review__icon-2" src="{{ asset('icons/review_2.svg') }}" alt="">
                </div>
                <div class="review__content">
                    <p class="section-heading review__heading">
                        Panpie, Burgers, And Best Pizzas in Town
                    </p>
                    <p class="section-desc review__desc">
                        Piorem ipsum dolor sit amet consectetur adipiscing 
                        eliturabitur venenatis, nisl in bib endum commodo, 
                        sapien justo cursus are urna, quis porta mauris elit 
                        finibus nulla.
                    </p>
                    <a href="#!" class="section-desc review__more">Know more</a>
                </div>
            </div>
        </div>
    </section>

    {{-------------- Dish --------------}}
    <section class="dish">
        <div class="container">
            <div class="dish__inner">
                <div class="dish__content">
                    <p class="section-heading dish__heading">
                        Chicken King Burger
                    </p>
                    <p class="section-desc dish__desc">
                        Order at Burger King Bangladesh near you with foodpanda 
                        <br>✓ Delivery to your home or office    
                        <br>✓ Safe & easy payment options.
                    </p>
                    <a href="#!" class="section-desc dish__more">Order Now</a>
                </div>
                <div class="dish__media">
                    <img class="dish__img" src="{{ asset('images/dish.png') }}" alt="">
                    <img class="dish__icon-1" src="{{ asset('icons/dish_1.svg') }}" alt="">
                    <img class="dish__icon-2" src="{{ asset('icons/dish_2.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-------------- Quality --------------}}
    <section class="quality">
        <div class="container">
            <div class="quality__row">
                <div class="quality-item">
                    <p class="quality__number">241</p>
                    <p class="quality__title">Ingredients</p>
                </div>
                <div class="quality-item">
                    <p class="quality__number">708</p>
                    <p class="quality__title">Clients Daily</p>
                </div>
                <div class="quality-item">
                    <p class="quality__number">18</p>
                    <p class="quality__title">Years of Experience</p>
                </div>
                <div class="quality-item">
                    <p class="quality__number">90</p>
                    <p class="quality__title">Fresh & Halal</p>
                </div>
            </div>
        </div>
    </section>

    {{-------------- Order --------------}}
    <section class="order">
        <div class="container">
            <p class="section-desc order__desc">
                Fresh From WowWraps
            </p>
            <p class="section-heading order__heading">
                We Offer People Best Way To Eat Best Food
            </p>
            <div class="order__row">
                <p class="order__name order__name--active">All</p>
                <p class="order__name">Donuts</p>
                <p class="order__name">Pizza</p>
                <p class="order__name">Drinks</p>
                <p class="order__name">Sandwich</p>
            </div>

            <div class="order__list">

                {{-- Item 1 --}}
                @foreach ($foods as $food)
                    
                <div class="order-item">
                    <div class="order-item__img-wrap">
                        <img 
                            src="{{ asset('images/order_1.png') }}" 
                            alt="" 
                            class="order-item__thumb"
                        >
                    </div>
                    <p class="section-title order-item__title">
                        {{ $food->name }}
                        {{-- Schezwan Noodles --}}
                    </p>
                    <p class="section-desc order-item__desc">
                        {{ $food->description }}
                        {{-- Fresh toasted sourdough bread 
                        with olive oil and pomegranate. --}}
                    </p>
                    <div class="order-item__row">
                        <p class="section-title order-item__price">
                            ${{ $food->price }}
                            {{-- $49 --}}
                        </p>
                        <div class="order-item__wrap">
                            <a href="#!" class="section-desc order-item__order">
                                Order Now
                            </a>
                            <svg 
                                class="order-item__icon"
                                width="21" 
                                height="10" 
                                viewBox="0 0 21 10" 
                                fill="none" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                @endforeach

                {{-- Item 2 --}}
                <div class="order-item">
                    <div class="order-item__img-wrap">
                        <img 
                            src="{{ asset('images/order_2.png') }}" 
                            alt="" 
                            class="order-item__thumb"
                        >
                    </div>
                    <p class="section-title order-item__title">
                        Crispy chicken breasts
                    </p>
                    <p class="section-desc order-item__desc">
                        Fresh toasted sourdough bread 
                        with olive oil and pomegranate.
                    </p>
                    <div class="order-item__row">
                        <p class="section-title order-item__price">
                            $54
                        </p>
                        <div class="order-item__wrap">
                            <a href="#!" class="section-desc order-item__order">
                                Order Now
                            </a>
                            <svg 
                                class="order-item__icon"
                                width="21" 
                                height="10" 
                                viewBox="0 0 21 10" 
                                fill="none" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="order-item">
                    <div class="order-item__img-wrap">
                        <img 
                            src="{{ asset('images/order_3.png') }}" 
                            alt="" 
                            class="order-item__thumb"
                        >
                    </div>
                    <p class="section-title order-item__title">
                        New Lubina Marinada
                    </p>
                    <p class="section-desc order-item__desc">
                        Fresh toasted sourdough bread 
                        with olive oil and pomegranate.
                    </p>
                    <div class="order-item__row">
                        <p class="section-title order-item__price">
                            $59
                        </p>
                        <div class="order-item__wrap">
                            <a href="#!" class="section-desc order-item__order">
                                Order Now
                            </a>
                            <svg 
                                class="order-item__icon"
                                width="21" 
                                height="10" 
                                viewBox="0 0 21 10" 
                                fill="none" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Item 4 --}}
                <div class="order-item">
                    <div class="order-item__img-wrap">
                        <img 
                            src="{{ asset('images/order_1.png') }}" 
                            alt="" 
                            class="order-item__thumb"
                        >
                    </div>
                    <p class="section-title order-item__title">
                        Schezwan Noodles
                    </p>
                    <p class="section-desc order-item__desc">
                        Fresh toasted sourdough bread 
                        with olive oil and pomegranate.
                    </p>
                    <div class="order-item__row">
                        <p class="section-title order-item__price">
                            $49
                        </p>
                        <div class="order-item__wrap">
                            <a href="#!" class="section-desc order-item__order">
                                Order Now
                            </a>
                            <svg 
                                class="order-item__icon"
                                width="21" 
                                height="10" 
                                viewBox="0 0 21 10" 
                                fill="none" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Item 5 --}}
                <div class="order-item">
                    <div class="order-item__img-wrap">
                        <img 
                            src="{{ asset('images/order_2.png') }}" 
                            alt="" 
                            class="order-item__thumb"
                        >
                    </div>
                    <p class="section-title order-item__title">
                        Crispy chicken breasts
                    </p>
                    <p class="section-desc order-item__desc">
                        Fresh toasted sourdough bread 
                        with olive oil and pomegranate.
                    </p>
                    <div class="order-item__row">
                        <p class="section-title order-item__price">
                            $54
                        </p>
                        <div class="order-item__wrap">
                            <a href="#!" class="section-desc order-item__order">
                                Order Now
                            </a>
                            <svg 
                                class="order-item__icon"
                                width="21" 
                                height="10" 
                                viewBox="0 0 21 10" 
                                fill="none" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Item 6 --}}
                <div class="order-item">
                    <div class="order-item__img-wrap">
                        <img 
                            src="{{ asset('images/order_3.png') }}" 
                            alt="" 
                            class="order-item__thumb"
                        >
                    </div>
                    <p class="section-title order-item__title">
                        New Lubina Marinada
                    </p>
                    <p class="section-desc order-item__desc">
                        Fresh toasted sourdough bread 
                        with olive oil and pomegranate.
                    </p>
                    <div class="order-item__row">
                        <p class="section-title order-item__price">
                            $59
                        </p>
                        <div class="order-item__wrap">
                            <a href="#!" class="section-desc order-item__order">
                                Order Now
                            </a>
                            <svg 
                                class="order-item__icon"
                                width="21" 
                                height="10" 
                                viewBox="0 0 21 10" 
                                fill="none" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-------------- Discover --------------}}
    <section class="discover">
        <div class="container">
            <div class="discover__inner">
                <div class="discover__content">
                    <p class="section-heading discover__heading">
                        Michelin Lunch, Dinner Or Both?

                    </p>
                    <p class="section-desc discover__desc">
                        It’s the story of an everlasting love affair, Dieter 
                        Delicioz and the Atlantic Ocean. Our proximity to the abundant 
                        riches of the sea and Portugal’s excellent produce has provided 
                        a constant source of inspiration for Chef L'delicio. Discover Menu
                    </p>
                    <a href="#!" class="section-desc discover__more">Discover Menu</a>
                </div>
                <div class="discover__media">
                    <img src="{{ asset('images/discover.png') }}" alt="">
                    <img class="discover__icon" src="{{ asset('icons/flower.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-------------- See --------------}}
    <section class="see">
        <div class="container">
            <div class="see__inner">
                <div class="see__media">
                    <p class="section-heading see__discount">
                        25%<br>&nbsp;Off
                    </p>
                    <img class="see__img" src="{{ asset('images/see_1.png') }}" alt="">
                    <img class="see__icon" src="{{ asset('images/see_2.png') }}" alt="">
                </div>
                <div class="see__content">
                    <p class="section-heading see__heading">
                        We Have Excellent Of Quality Pizza
                    </p>
                    <p class="section-desc see__desc">
                        Craving for a bite of quality pizza? Make sure the pizza you 
                        order possesses these factors that make an awesome slice. 
                        Fresh Ingredients.
                    </p>
                    <a href="#!" class="section-desc see__more">See all menu</a>
                    <img class="see__icon-1" src="{{ asset('icons/flower.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-------------- Offer --------------}}
    <section class="offer">
        <div class="container">
            <div class="offer__inner">
                <div class="offer__row">
                    <p class="section-heading offer__heading">
                        Our Daily Offers
                    </p>
                    <div class="offer__link-wrap">
                        <a class="section-desc offer__link" href="#!">Explore All Offers</a>
                        <svg 
                            class="order__icon" 
                            width="21" height="10" 
                            viewBox="0 0 21 10" 
                            fill="none" 
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                                stroke="currentColor" 
                                stroke-linecap="round" 
                                stroke-linejoin="round">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="offer__list">
                    {{-- Item 1 --}}
                    <div class="offer-item">
                        <div class="offer-item__wrap">
                            <p class="offer-item__title">
                                <strong class="offer-item__title-decor">30%</strong> 
                                Discount Offer
                            </p>
                            <p class="section-desc offer-item__desc">
                                We love food, lots of different and food, just like you.
                            </p>
                            <button class="btn offer-item__btn">Order Now</button>
                        </div>
                    </div>

                    {{-- Item 2 --}}
                    <div class="offer-item">
                        <div class="offer-item__wrap">
                            <p class="offer-item__title">
                                <strong class="offer-item__title-decor">30%</strong> 
                                Discount Offer
                            </p>
                            <p class="section-desc offer-item__desc">
                                We love food, lots of different and food, just like you.
                            </p>
                            <button class="btn offer-item__btn">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-------------- Delivery --------------}}
    <section class="delivery">
        <div class="container">
            <div class="delivery__inner">
                <div class="delivery__content">
                    <p class="section-heading delivery__heading">
                        Get Free Delivery!
                    </p>
                    <p class="section-desc delivery__desc">
                        As well known and we are very busy all 
                        days beforeso we can guarantee your seat.
                    </p>
                    <button class="btn delivery__btn">
                        Call: +123666604
                    </button>
                </div>
                <div class="delivery__img">
                    <img src="{{ asset('images/delivery.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-------------- Blog --------------}}
    <section class="blog">
        <div class="container">
            <p class="section-desc blog__desc">
                News and Blogs
            </p>
            <p class="section-heading blog__heading">
                What’s Happening Your Near City & Town
            </p>
            <div class="blog__list">

                {{-- Item 1 --}}
                <div class="blog-item">
                    <div class="blog-item__img-wrap">
                        <img 
                            src="{{ asset('images/blog_1.png') }}" 
                            alt="" 
                            class="blog-item__thumb"
                        >
                    </div>
                    <p class="section-title blog-item__title">
                        New restaurant in town that Looking think that
                    </p>
                    <p class="section-desc blog-item__desc">
                        August 6, 2022 • By Admin
                    </p>
                    <div class="blog-item__row">
                        <div class="blog-item__wrap">
                            <a href="#!" class="section-desc blog-item__read">
                                Read Now
                            </a>
                            <svg 
                                class="blog-item__icon"
                                width="21" 
                                height="10" 
                                viewBox="0 0 21 10" 
                                fill="none" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="blog-item">
                    <div class="blog-item__img-wrap">
                        <img 
                            src="{{ asset('images/blog_2.png') }}" 
                            alt="" 
                            class="blog-item__thumb"
                        >
                    </div>
                    <p class="section-title blog-item__title">
                        Summer drink with raspberries, lime and ice
                    </p>
                    <p class="section-desc blog-item__desc">
                        August 6, 2022 • By Admin
                    </p>
                    <div class="blog-item__row">
                        <div class="blog-item__wrap">
                            <a href="#!" class="section-desc blog-item__read">
                                Read Now
                            </a>
                            <svg 
                                class="blog-item__icon"
                                width="21" 
                                height="10" 
                                viewBox="0 0 21 10" 
                                fill="none" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="blog-item">
                    <div class="blog-item__img-wrap">
                        <img 
                            src="{{ asset('images/blog_3.png') }}" 
                            alt="" 
                            class="blog-item__thumb"
                        >
                    </div>
                    <p class="section-title blog-item__title">
                        New restaurant in town that Looking think that
                    </p>
                    <p class="section-desc blog-item__desc">
                        August 6, 2022 • By Admin
                    </p>
                    <div class="blog-item__row">
                        <div class="blog-item__wrap">
                            <a href="#!" class="section-desc blog-item__read">
                                Read Now
                            </a>
                            <svg 
                                class="blog-item__icon"
                                width="21" 
                                height="10" 
                                viewBox="0 0 21 10" 
                                fill="none" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                                    stroke="currentColor" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__link-wrap">
                <a class="section-desc blog__link" href="#!">Explore All Blogs</a>
                <svg class="blog__icon" 
                    width="21" height="10" 
                    viewBox="0 0 21 10" fill="none" 
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                        stroke="currentColor" 
                        stroke-linecap="round" 
                        stroke-linejoin="round">
                    </path>
                </svg>
            </div>
        </div>
    </section>

    {{-------------- Subscribe --------------}}
    <section class="sub">
        <div class="container">
            <div class="sub__inner">
                <p class="section-heading sub__heading">
                    Subscribe Newsletter & Get letest news
                </p>
                <p class="section-desc sub__desc">
                    Get insider access to news around the innovations, 
                    unique cooking techniques, culinary concepts, insights, and more
                </p>
                <div class="sub__input-wrap">
                    <input 
                        class="section-desc sub__input" 
                        type="email" 
                        name="email" 
                        placeholder="Enter your email address"
                        autocomplete="off"
                    >
                    <svg 
                        class="sub__icon" 
                        width="21" height="10" 
                        viewBox="0 0 21 10" fill="none" 
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 5H20M20 5C18.5606 4.78667 15.6818 3.688 15.6818 1M20 5C18.5606 5.21333 15.6818 6.312 15.6818 9" 
                            stroke="currentColor" 
                            stroke-linecap="round" 
                            stroke-linejoin="round">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

@endsection