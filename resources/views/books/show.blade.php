@extends('layouts.front-end.master')

@section('content')
<div class="container">
  <div id="content">
    <div class="row">
      <div class="col-sm-9">

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
                <span>Chủ Đề : <a href="{{ url('/books/topics/' . $book->topic->name) }}">{{ $book->topic->name }}</a></span>
              </p>
              <p class="single-item-title">
                <span>Tác Giả : <a href="{{ url('/books/authors/' . $book->author->name) }}">{{ $book->author->name }}</a></span>
              </p>
            </div>

            <div class="clearfix"></div>
            <div class="space20">&nbsp;</div>

            <div class="single-item-desc">
                <p>{{ $book->detail }}</p>
            </div>
            <div class="space20">&nbsp;</div>

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
        <div class="space50">&nbsp;</div>
        <div class="beta-products-list">
          <h4>Related Book</h4>

            @foreach($books as $book)
              <div class="row">
                <div class="col-sm-4">
                  <div class="single-item">
                    <div class="single-item-header">
                      <a href="{{ url('/books/' . $book->id) }}"><img src="{{ $book->image }}" alt=""></a>
                    </div>
                    <div class="single-item-body">
                      <p class="single-item-title">{{ $book->name }}</p>
                      <p class="single-item-price">
                        <span>Giá : {{ $book->price }}</span>
                      </p>
                    </div>
                    <div class="single-item-caption">
                      <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                      <a class="beta-btn primary" href="{{ url('/books/' . $book->id) }}">Details <i class="fa fa-chevron-right"></i></a>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div> <!-- .beta-products-list -->
      </div>
      <div class="col-sm-3 aside">
        <div class="widget">
          <h3 class="widget-title">Best Sellers</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- best sellers widget -->
        <div class="widget">
          <h3 class="widget-title">New Products</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <div class="media beta-sales-item">
                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
                <div class="media-body">
                  Sample Woman Top
                  <span class="beta-sales-price">$34.55</span>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- best sellers widget -->
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->
@stop
