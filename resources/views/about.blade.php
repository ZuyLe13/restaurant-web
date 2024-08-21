@extends('layouts.app')

@section('content')
    {{-------------- About --------------}}
    <section class="about">
        <div class="container">
            <div class="about__list">
                <div class="about__content">
                    <p class="section-heading about__heading">
                        We are a mexican restaurant makes delicious.
                    </p>
                    <p class="section-desc about__desc">
                        Hi! Our Restaurant has been present for over 20 years in the market.
                        We make the most of all our customers. Hi! Our Restaurant has been 
                        present for over 20 years in the market. We make the most of all our 
                        customers. Hi! Our Restaurant has been present for over 20 years in 
                        the market. We make the most of all our customers.
                    </p>
                </div>
                <img src="{{ asset('images/about_1.png') }}" alt="" class="about__img">
                <img src="{{ asset('images/about_2.png') }}" alt="" class="about__img">
                <div class="about__content">
                    <p class="section-heading about__heading">
                        The story of our first restaurant branch
                    </p>
                    <p class="section-desc about__desc">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque corrupti quos dolores et quas 
                        molestias excepturi sint occaecati cupiditate non provident.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-------------- Vision --------------}}
    <section class="vision">
        <div class="container">
            <div class="section-heading vision__heading">
                Our Vision &  Mission
            </div>
            <div class="section-desc vision__desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat aliquam amet, 
                cursus tellus non consequat laoreet eget ornare. Tellus vulputate tellus a, 
                lobortis et nisl. Quisque vulputate eget et, aliquet libero, porttitor luctus placerat. 
            </div>
            <div class="vision__inner">
                <div class="vision__list">

                    {{-- Item 1 --}}
                    <div class="vision-item">
                        <img src="{{ asset('images/vision_2.png') }}" alt="" class="vision-item__img">
                        <div class="vision-item__content">
                            <div class="section-title vision-item__title">
                                Delicious Cuisine
                            </div>
                            <div class="section-desc vision-item__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit trat aliquam amet.
                            </div>
                        </div>
                    </div>

                    {{-- Item 2 --}}
                    <div class="vision-item">
                        <img src="{{ asset('images/vision_3.png') }}" alt="" class="vision-item__img">
                        <div class="vision-item__content">
                            <div class="section-title vision-item__title">
                                Fast Delivery
                            </div>
                            <div class="section-desc vision-item__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit trat aliquam amet.
                            </div>
                        </div>
                    </div>

                    {{-- Item 3 --}}
                    <div class="vision-item">
                        <img src="{{ asset('images/vision_4.png') }}" alt="" class="vision-item__img">
                        <div class="vision-item__content">
                            <div class="section-title vision-item__title">
                                Professional Chef
                            </div>
                            <div class="section-desc vision-item__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit trat aliquam amet.
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('images/vision_1.png') }}" alt="" class="vision__img">
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