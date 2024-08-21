@extends('layouts.app')

@section('content')

    {{-------------- Menu 1 --------------}}
    <section class="menu">
        <div class="container">
            <p class="section-heading menu__heading">
                Breakfast
            </p>
            <img src="{{ asset('icons/menu.svg') }}" alt="" class="menu__icon">

            <div class="menu__list">

                <div class="menu__arrow-wrap">
                    <img src="{{ asset('icons/right_arrow.svg') }}" alt="" class="menu__arrow">
                </div>
                <div class="menu__arrow-wrap">
                    <img src="{{ asset('icons/right_arrow.svg') }}" alt="" class="menu__arrow">
                </div>
                
                @foreach ($foods as $food)
                    {{-- Item 1 --}}
                    <div class="menu-item">
                        <div class="menu-item__img-wrap">
                            <a href="/menus/{{ $food->id }}">
                                <img src="{{ asset('images/' . $food->img_path) }}" alt="" class="menu-item__img">
                            </a>
                        </div>
                        <div class="menu-item__body">
                            <a href="/menus/{{ $food->id }}" class="section-title menu-item__title">
                                {{ $food->name }}
                            </a>
                            <p class="section-desc menu-item__desc">
                                {{ $food->description }}
                            </p>
                            <div class="menu-item__separate"></div>
                            <div class="menu-item__row">
                                <a href="/menus/{{ $food->id }}" class="section-desc menu-item__link">
                                    Order Now
                                </a>
                                <p class="section-title menu-item__price">
                                    {{ $food->price }} <u>đ</u>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                

                {{-- Item 2 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/menu_2.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            Egg Frittata Muffins. PIN IT
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/menu_3.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            Egg Frittata Muffins. PIN IT
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-------------- Quote --------------}}
    <section class="quote">
        <div class="container">
            <div class="quote__inner">
                <p class="section-heading quote__heading">
                    Food is not just eating energy
                </p>
                <p class="section-title quote__title">
                    It’s an experience.
                </p>
                <button class="btn quote__btn">
                    Order Now
                </button>
            </div>
        </div>
    </section>

    {{-------------- Menu 2 --------------}}
    <section class="menu menu-2">
        <div class="container">
            <img src="{{ asset('icons/review_2.svg') }}" alt="" class="menu__icon-desc">
            <img src="{{ asset('icons/dish_2.svg') }}" alt="" class="menu__icon-desc">

            <p class="section-heading menu__heading">
                Lunch
            </p>
            <img src="{{ asset('icons/menu.svg') }}" alt="" class="menu__icon">

            <div class="menu__list">

                <div class="menu__arrow-wrap">
                    <img src="{{ asset('icons/right_arrow.svg') }}" alt="" class="menu__arrow">
                </div>
                <div class="menu__arrow-wrap">
                    <img src="{{ asset('icons/right_arrow.svg') }}" alt="" class="menu__arrow">
                </div>
                
                {{-- Item 1 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/menu_4.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            Crispy chicken breasts
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/order_1.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            Schezwan Noodles
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/menu_5.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            New Lubina Marinada
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-------------- Menu 3 --------------}}
    <section class="menu menu-3">
        <div class="container">

            <p class="section-heading menu__heading">
                Dinner
            </p>
            <img src="{{ asset('icons/menu.svg') }}" alt="" class="menu__icon">

            <div class="menu__list">

                <div class="menu__arrow-wrap">
                    <img src="{{ asset('icons/right_arrow.svg') }}" alt="" class="menu__arrow">
                </div>
                <div class="menu__arrow-wrap">
                    <img src="{{ asset('icons/right_arrow.svg') }}" alt="" class="menu__arrow">
                </div>
                
                {{-- Item 1 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/menu_6.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            Crispy chicken breasts
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/menu_7.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            Schezwan Noodles
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/menu_8.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            New Lubina Marinada
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-------------- Menu 4 --------------}}
    <section class="menu menu-4">
        <div class="container">
            <p class="section-heading menu__heading">
                Starters
            </p>
            <img src="{{ asset('icons/menu.svg') }}" alt="" class="menu__icon">

            <div class="menu__list">

                <div class="menu__arrow-wrap">
                    <img src="{{ asset('icons/right_arrow.svg') }}" alt="" class="menu__arrow">
                </div>
                <div class="menu__arrow-wrap">
                    <img src="{{ asset('icons/right_arrow.svg') }}" alt="" class="menu__arrow">
                </div>
                
                {{-- Item 1 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/order_3.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            Crispy chicken breasts
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/menu_8.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            Schezwan Noodles
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="menu-item">
                    <div class="menu-item__img-wrap">
                        <img src="{{ asset('images/menu_5.png') }}" alt="" class="menu-item__img">
                    </div>
                    <div class="menu-item__body">
                        <a href="#!" class="section-title menu-item__title">
                            New Lubina Marinada
                        </a>
                        <p class="section-desc menu-item__desc">
                            Fresh toasted sourdough bread with olive oil and pomegranate.
                        </p>
                        <div class="menu-item__separate"></div>
                        <div class="menu-item__row">
                            <a href="#!" class="section-desc menu-item__link">
                                Order Now
                            </a>
                            <p class="section-title menu-item__price">
                                $24
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection