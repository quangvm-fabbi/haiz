@extends('pages.layouts.master')
@section('content')

    <div class="table_primary_block pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="product-flags">
                        <div class="products_tab_button">
                            <ul class="nav product_navactive" role="tablist">
                                @foreach($image as $img)
                                    <li  class="product_button_one">
                                        <a class="nav-link active"  data-toggle="tab" href="#tabone" role="tab" aria-controls="imgeone" aria-selected="false"><img height="100px" src="/upload/user/{{ $img->image }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="product__details_content">
                        <div class="demo_product">
                            <h2>{{$cake->name}}</h2>
                        </div>
                        <div class="product_comments_block">
                            <div class="comments_note clearfix">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="comments_advices">
                                <ul>
                                    <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                            Read reviews (<span>1</span>)</a></li>
                                    <li><a href="#"><i class="fa fa-pencil"></i>Read reviews </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="current_price">
                            <span>{{$cake->price}}Đ</span>
                        </div>
                        <div class="product_information">
                            <div id="product_description_short">
                                <p>{{$cake->price_sale}}</p>
                            </div>
                            <div class="product_variants">
                                <div class="product_variant_list">
                                    <div class="product_variants_item variants_product">
                                        <span class="control_label">Size</span>
                                        <select name="group[1]" id="group_1">
                                            <option value="1">S</option>
                                            <option value="2" selected="selected">M</option>
                                            <option value="3">L</option>
                                        </select>
                                    </div>
                                    <div class="product_variants_item">
                                        <span class="control_label">Color</span>
                                        <ul>
                                            <li>

                                                <input id="balck" checked="checked" class="input_color" name="color1"  type="radio">
                                                <label for="balck" class="colo_btn"></label>
                                            </li>
                                            <li>

                                                <input id="red" class="input_color" name="color1"  type="radio">
                                                <label for="red" class="colo_btn"></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="quickview_plus_minus">
                                    <span class="control_label">Quantity</span>
                                    <div class="quickview_plus_minus_inner">
                                        <div class="cart-plus-minus">
                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                        </div>
                                        <div class="add_button">
                                            <button type="submit"><a href="">Add to cart</a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-availability">
                                                <span id="availability">
                                                    <i class="zmdi zmdi-check"></i>
                                                     In stock
                                                </span>
                                </div>
                                <div class="social-sharing">
                                    <span>Share</span>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="block-reassurance">
                                    <ul>
                                        <li>
                                            <img src="assets/img/cart/cart1.png" alt="">
                                            <span>Security policy (edit with Customer reassurance module)</span>
                                        </li>
                                        <li>
                                            <img src="assets/img/cart/cart2.png" alt="">
                                            <span>Delivery policy (edit with Customer reassurance module)</span>
                                        </li>
                                        <li>
                                            <img src="assets/img/cart/cart3.png" alt="">
                                            <span>Return policy (edit with Customer reassurance module)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- primary block end -->

    <!-- product page tab -->

    <div class="product_page_tab ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_tab_button">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li>
                                <a class=" tav_past active" id="home-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                            </li>
                            <li>
                                <a class=" tav_past"  id="profile-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Information</a>
                            </li>
                            <li>
                                <a class=" tav_past"  id="contact-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Description" role="tabpanel" >
                            <div class="product-description">
                                <p>{{ $cake->content }}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="details" role="tabpanel">
                            <div class="product-details">
                                <div class="product-manufacturer">
                                    <a href="#"><img src="assets/img/cart/11.jpg" alt=""></a>
                                </div>
                                <div class="product-reference">
                                    <label class="label">Reference </label>
                                    <span>demo_10</span>
                                </div>
                                <div class="product-quantities">
                                    <label class="label">In stock</label>
                                    <span>321 Items</span>
                                </div>
                                <div class="product-out-of-stock">
                                    <section class="product-features">
                                        <h3>Data sheet</h3>
                                        <dl class="data-sheet">
                                            <dt class="name">Compositions</dt>
                                            <dd class="value">Viscose</dd>
                                            <dt class="name">Styles</dt>
                                            <dd class="value">Dressy</dd>
                                            <dt class="name">Properties</dt>
                                            <dd class="value">Short Dress</dd>
                                        </dl>
                                    </section>
                                </div>
                            </div>
                        </div>
{{--                        <div class="tab-pane fade" id="Reviews" role="tabpanel">--}}
{{--                            <div class="product_comments_block_tab">--}}
{{--                                <div class="comment_clearfix">--}}
{{--                                    <div class="comment_author">--}}
{{--                                        <span>Grade </span>--}}
{{--                                        <div class="star_content clearfix">--}}
{{--                                            <ul>--}}
{{--                                                <li><i class="fa fa-star"></i></li>--}}
{{--                                                <li><i class="fa fa-star"></i></li>--}}
{{--                                                <li><i class="fa fa-star"></i></li>--}}
{{--                                                <li><i class="fa fa-star"></i></li>--}}
{{--                                                <li><i class="fa fa-star"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    @foreach($sanpham->comment as $cm)--}}
{{--                                        <div class="comment_details">--}}
{{--                                            <h4>{{$cm->user->name}}</h4>.. <em>{{$cm->created_at}}</em>--}}
{{--                                            <p>{{$cm->noidung}}</p>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                    @if(Auth::check())--}}
{{--                                        <div class="reply_form_container">--}}
{{--                                            <div class="reply_form_title">Viết Bình Luận</div>--}}
{{--                                            <form action="comment/{{$sanpham->id}}" id="reply_form" class="reply_form" method="POST" enctype="multipart/form-data">--}}
{{--                                                <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
{{--                                                <textarea class="reply_input reply_textarea" name="noidung" placeholder="Bình Luận"></textarea>--}}
{{--                                                <button class="reply_button trans_200"> Gửi</button>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
