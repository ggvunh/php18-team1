@extends('layouts.front-end.master')

@section('content')
    <div class="container">
      <div id="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-8">
                <div class="single-item-body">
                  <p class="single-item-price">{{ $publish->name }}</p>
                  <div class="space20">&nbsp;</div>
                  <p class="single-item-title">
                    <span>Email : {{ $publish->email }}</span>
                  </p>
                  <p class="single-item-title">
                    <span>Phone : {{ $publish->phone }}</span>
                  </p>
                  <p class="single-item-title">
                    <span>Địa chỉ : {{ $publish->address }}</span>
                  </p>
                </div>
                <div class="clearfix"></div>
                <div class="single-item-desc">
                    <p>Tiểu sử : {{ $publish->story }}</p>
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
                      <div class="col-sm-3">
                        <div class="space20">&nbsp;</div>
                        <div class="single-item">
                          <div class="single-item-header">
                            <a href="{{ url('/books/' . $bo->id) }}"><img src="upload/{{ $bo->image }}" alt="" width = "200" height = "320"></a>
                          </div>
                          <div class="single-item-body">
                            <p class="single-item-title">{{ $bo->name }}</p>
                            <p class="single-item-price">
                              <span>Giá : {{ $bo->price }}</span>
                            </p>
                          </div>
                          <div class="single-item-caption">
                            <a class="add-to-cart pull-left" onclick="addCart({{ $bo->id }})"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="{{ url('/books/' . $bo->id) }}">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                  @endforeach
                </div>
            </div> <!-- .beta-products-list -->
          </div>
        </div>
      </div> <!-- #content -->
    </div> <!-- .container -->
@stop
