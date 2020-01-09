<div class="tab_product_wrapper">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="shop_active" >
            <div class="row">
                @foreach($cake_category as $sp)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single__product">
                            <div class="single_product__inner">
                                <span class="new_badge">new</span>
                                <!-- <span class="discount_price">-5%</span> -->
                                <div class="product_img">
                                    <a href="#">
                                        <img src="{{ asset('upload/user', $sp->image) }}" alt="">
                                    </a>
                                </div>
                                <div class="product__content text-center">
                                    <div class="produc_desc_info">
                                        <div class="product_title">
                                            <h4><a href="product-details.html">{{$sp->tensanpham}}</a></h4>
                                        </div>
                                        <div class="product_price">
                                            <p>{{number_format($sp->price)}}$</p>
                                        </div>
                                    </div>
                                    <div class="product__hover">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                            <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>

                                            <li><a href="http://localhost/cuahangtienloi/public/chitietsanpham/{{$sp->id}}"><i class="ion-clipboard"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="featured_active" role="tabpanel">
            <div class="tab_product_bottom_wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-5">
                        <div class="single_product__inner inner_shop">
                            <span class="new_badge">new</span>
                            <span class="discount_price">-5%</span>
                            <div class="product_img">
                                <a href="#">
                                    <img src="assets/img/product/207.jpg" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-7">
                        <div class="product__content text-left">
                            <div class="produc_desc_info">
                                <div class="product_title title_shop">
                                    <h4><a href="product-details.html">Cheese Butter Burger</a></h4>
                                </div>
                                <div class="product_price price_shop">
                                    <p class="regular_price">$65.51</p>
                                    <p>$75.66</p>
                                </div>
                                <div class="product_content_shop">
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                            </div>
                            <div class="product__hover hover_shop">
                                <div class="product_addto_cart">
                                    <button type="submit">ADD TO CART</button>
                                </div>
                                <div class="product_cart_icone">
                                    <ul>
                                        <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                        <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>

                                        <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
