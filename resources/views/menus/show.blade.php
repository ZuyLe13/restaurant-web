@extends('layouts.app')

@section('content')

    {{-------------- Product detail --------------}}
    <section class="product">
        <div class="container">
            <div class="product__inner">
                <img src="{{ asset('images/' . $foods->img_path) }}" alt="" class="product__img">
                <div class="product__content">
                    <p class="section-heading product__heading">
                        {{ $foods->name }}
                    </p>
                    <div class="product__rate">
                        <div class="product__rate-wrap">
                            <img src="{{ asset('icons/star.svg') }}" alt="" class="product__rate-star">
                            <img src="{{ asset('icons/star.svg') }}" alt="" class="product__rate-star">
                            <img src="{{ asset('icons/star.svg') }}" alt="" class="product__rate-star">
                            <img src="{{ asset('icons/star.svg') }}" alt="" class="product__rate-star">
                            <img src="{{ asset('icons/star.svg') }}" alt="" class="product__rate-star">
                        </div>
                        <p class="product__rate-quanlity">( 1 customer review )</p>
                    </div>
                    <div class="section-title product__price">
                        {{ $foods->price }} <u>đ</u>
                    </div>
                    <div class="section-desc product__desc">
                        {{ $foods->description }}
                    </div>
                    <div class="product__row">
                        <div class="product__number-wrap">
                            <button class="product__number-active">
                                <svg 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    width="12" 
                                    height="2" 
                                    viewBox="0 0 12 2" 
                                    fill="none">
                                        <path d="M1 1L11 1" 
                                            stroke="white" 
                                            stroke-linecap="round" 
                                            stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <input class="product__number-input" type="text" name="" value="1">
                            <button class="product__number-active">
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                    width="12" height="12" 
                                    viewBox="0 0 12 12" 
                                    fill="none">
                                        <path d="M1 6L11 6M6 1L6 11" 
                                            stroke="white" 
                                            stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <button class="btn product__btn">
                            ADD TO CARD
                        </button>
                    </div>
                    <div class="product__info">
                        <p class="product__cate">
                            <strong class="product__info-decor">CATEGORY: </strong> {{ $foods->category->name }}
                        </p>
                        <p class="product__tag">
                            <strong class="product__info-decor">TAGS: </strong> Sweets, Ghevar 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>   

@endsection