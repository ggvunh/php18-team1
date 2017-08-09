@extends('layouts.front-end.master')

@section('content')
    <div class="container">
      <div id="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-4">
                <img src="{{ $book->image }}" alt="">
              </div>
              <div class="col-sm-8">
                <div class="single-item-body">
                  <p class="single-item-title">{{ $book->name }}</p>
                  <p class="single-item-price">
                    <span>Giá : {{ $book->price }}</span>
                  </p>
                  <p class="single-item-title">
                    <span>Ngôn Ngữ : {{ $book->language }}</span>
                  </p>
                  <p class="single-item-title">
                    <span>Chủ Đề : <a href="{{ url('/books/topics/' . $book->topic->id) }}">{{ $book->topic->name }}</a></span>
                  </p>
                  <p class="single-item-title">
                    <span>Tác Giả : <a href="{{ url('/books/authors/' . $book->author->id) }}">{{ $book->author->name }}</a></span>
                  </p>
                </div>

                <div class="clearfix"></div>
                <div class="space20">&nbsp;</div>

                <div class="single-item-desc">
                    <p>{{ str_limit($book->detail, $limit = 120, $end = '...') }}</p>
                </div>
                <div class="space20">&nbsp;</div>
                  <div class="single-item">
                    <div class="single-item-caption">
                      <a class="add-to-cart pull-left" href="{{ url('/books/cart') }}"><i class="fa fa-shopping-cart"></i></a>
                      <a class="beta-btn primary" href="{{ url('/books/' . $book->id) }}">Add Cart <i class="fa fa-chevron-right"></i></a>
                      <div class="clearfix"></div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="space40">&nbsp;</div>
            <div class="woocommerce-tabs">
              <ul class="tabs">
                <li><a href="#tab-description">Description</a></li>
              </ul>

              <div class="panel" id="tab-description">
                  <p>{{ $book->detail }}</p>
              </div>
            </div>
            <div class="space40">&nbsp;</div>
            <div class="beta-products-list">
              <h4>Related Book</h4>
                <div class="row">
                  @foreach($books as $bo)
                    @if ($bo->topic->id == $book->topic->id)
                      <div class="col-sm-3">
                        <div class="single-item">
                          <div class="single-item-header">
                            <a href="{{ url('/books/' . $bo->id) }}"><img src="{{ $bo->image }}" alt="" width = "200" height = "320"></a>
                          </div>
                          <div class="single-item-body">
                            <p class="single-item-title">{{ $bo->name }}</p>
                            <p class="single-item-price">
                              <span>Giá : {{ $bo->price }}</span>
                            </p>
                          </div>
                          <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="{{ url('/books/' . $book->id) }}">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    @endif
                  @endforeach
                </div>
            </div> <!-- .beta-products-list-->
          </div>
        </div>
      </div> <!-- #content -->
    </div> <!-- .container -->
@stop
