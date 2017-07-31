@extends('layouts.front-end.master')

@section('content')
    <div class="container">
      <div id="content" class="space-top-none">
        <div class="main-content">
          <div class="space60">&nbsp;</div>
          <div class="row">
            <div class="col-sm-12">
              <div class="beta-products-list">
                <h4>New Book</h4>
                <div class="beta-products-details">
                  <!-- <p class="pull-left">438 styles found</p> -->
                  <div class="clearfix"></div>
                </div>
                  <div class="row">
                    @foreach( $books as $book )
                      <div class="col-sm-3">
                        <div class="single-item">
                          <div class="single-item-header">
                            <a href="{{ url('/books/' . $book->id) }}"><img src="{{ $book->image }}" alt="" width = "200" height = "320"></a>
                          </div>
                          <div class="single-item-body">
                            <p class="single-item-title">{{ $book->name }}</p>
                            <p class="single-item-price">
                              <span>{{ number_format($book->price) }} VND</span>
                            </p>
                          </div>
                          <div class="single-item-caption">
                            <a class="add-to-cart pull-left" onclick="addCart({{ $book->id }})" name = "kick"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="{{ url('/books/' . $book->id) }}">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
              </div> <!-- .beta-products-list -->

              <div class="space50">&nbsp;</div>
            </div>
          </div> <!-- end section with sidebar and main content -->
        </div> <!-- .main-content -->
      </div> <!-- #content -->
    </div> <!-- .container -->
@stop
