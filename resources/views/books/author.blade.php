@extends('layouts.front-end.master')

@section('content')
    <div class="container">
      <div id="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-8">
                <div class="single-item-body">
                  <p class="single-item-price">{{ $author->name }}</p>
                  <div class="space20">&nbsp;</div>
                  <p class="single-item-title">
                    <span>Email : {{ $author->email }}</span>
                  </p>
                  <p class="single-item-title">
                    <span>Phone : {{ $author->phone }}</span>
                  </p>
                  <p class="single-item-title">
                    <span>Địa chỉ : {{ $author->address }}</span>
                  </p>
                </div>
                <div class="clearfix"></div>
                <div class="single-item-desc">
                    <p>Tiểu sử : {{ $author->story }}</p>
                </div>
              </div>
            </div>
          </div>
            <div class="space50">&nbsp;</div>
            <div class="beta-products-list">
              <h4>Related Book</h4>
              <div class="space20">&nbsp;</div>
                <div class="row">
                  @foreach($books as $bo)
                    @if ($bo->author->id == $author->id)
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
                            <a class="beta-btn primary" href="{{ url('/books/' . $bo->id) }}">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    @endif
                  @endforeach
                </div>
            </div> <!-- .beta-products-list -->
          </div>
        </div>
      </div> <!-- #content -->
    </div> <!-- .container -->
@stop
