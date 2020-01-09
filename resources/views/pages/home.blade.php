@extends('pages.layouts.master')
@section('content')
    <div class="shipping_area_two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="shipping_list d-flex justify-content-between">
                        <div class="single_shipping_box d-flex">
                            <div class="shipping_icon">
                                <img src="assets/img/ship/1.png" alt="shipping icon">
                            </div>
                            <div class="shipping_content">
                                <h6>Free Shipping On Order Over $120</h6>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                        <div class="single_shipping_box one d-flex">
                            <div class="shipping_icon">
                                <img src="assets/img/ship/2.png" alt="shipping icon">
                            </div>
                            <div class="shipping_content">
                                <h6>Money Return</h6>
                                <p>Back guarantee under 7 days</p>
                            </div>
                        </div>
                        <div class="single_shipping_box two d-flex">
                            <div class="shipping_icon">
                                <img src="assets/img/ship/3.png" alt="shipping icon">
                            </div>
                            <div class="shipping_content">
                                <h6>Member Discount</h6>
                                <p>Support online 24 hours a day</p>
                            </div>
                        </div>
                        <div class="single_shipping_box d-flex">
                            <div class="shipping_icon">
                                <img src="assets/img/ship/4.png" alt="shipping icon">
                            </div>
                            <div class="shipping_content">
                                <h6>Online Support 24/7</h6>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features_product features_two pt-90 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title space_2 text-center">
                        <h3> Featured products </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="features_product_active owl-carousel">
                    <div class="col-lg-2">
                        <div class="single__product">
                            <div class="single_product__inner">
                                @foreach($cakes as $ca)
                                    <span class="new_badge">new</span>
                                    <div class="product_img">
                                        <a href="#">
                                            <img src="{{ asset('upload/user/'. $ca->images->first()->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product__content text-center">
                                        <div class="produc_desc_info">
                                            <div class="product_title">
                                                <h4><a href="product-details.html">{{ $ca->name }}</a></h4>
                                            </div>
                                            <div class="product_price">
                                                <p>{{ number_format($ca->price) }}</p>
                                            </div>
                                        </div>
                                        <div class="product__hover">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                <li><a class="cart-fore" href="" data-toggle="modal"
                                                       data-target="#my_modal" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                                <li><a href="{{ route('cakeDetail', $ca->id) }}"><i class="ion-clipboard"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
