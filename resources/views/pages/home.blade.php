@extends('wellcome')
@section('content')

<div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <span class="dot"></span>
            <h1 class="primary__title">Latest Products</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="{{asset('public/fontend/images/headphone1.jpeg')}}" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$750</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="{{asset('public/fontend/images/headphone1.jpeg')}}" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$750</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="{{asset('public/fontend/images/headphone1.jpeg')}}" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>Apple iPhone 11</h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                        <svg>
                          <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-star-full')}}"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4>$750</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-eye')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-heart-o')}}"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-loop2')}}"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

              </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg>
                  <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-arrow-left2')}}"></use>
                </svg>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="{{asset('public/fontend/images/sprite.svg#icon-arrow-right2')}}"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>

@endsection