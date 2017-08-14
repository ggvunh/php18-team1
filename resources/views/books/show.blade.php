@extends('layouts.front-end.master')

@section('content')
    <div class="container">
      <div id="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-4">
                <img src="upload/{{ $book->image }}" alt="" width="90%">
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
                    <span>Chủ Đề : <a href="{{ url('/books/topics/'.$book->topic->id) }}">{{ $book->topic->name }}</a></span>
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
                      <a class="add-to-cart pull-left" onclick="addCart({{ $book->id }})"><i class="fa fa-shopping-cart"></i></a>
                      <a class="beta-btn primary" onclick="addCart({{ $book->id }})">Add Cart <i class="fa fa-chevron-right"></i></a>
                      <div class="clearfix"></div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="space40">&nbsp;</div>
            <div class="woocommerce-tabs">
              <ul class="tabs">
                <li><a href="#tab-description">Description</a></li>
                <li><a href="#tab-comment">Comment</a></li>
              </ul>

              <div class="panel" id="tab-description">
                  <p>{{ $book->detail }}</p>
              </div>
              <div class="panel" id="tab-comment">
                <!-- <form class="form-horizontal" method="post" role="form">
                  <div class="form-group">
                    <label for="comment">Comment</label>
                      <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn btn-primary" name="comment">Send</button>
                  </div>
                </form> -->
                    <form class="form-group" method="post" action="{{ url('/books/' . $book->id) }}" id="comment" role="comment">
                        {{ csrf_field() }}
                        <label for="comment">Comment</label>
                        <textarea id="comment" name="comment" class="form-control" rows="5" required></textarea>
                        <div class="space10">&nbsp;</div>
                        <input class="btn btn-primary pull-right" type="submit" name="submit" value="Send">
                    </form>
                  <div class="space40">&nbsp;</div>
                  @foreach($comments as $comment)
                    @if($comment->book_id == $book->id)
                      <div class="form-group">
                          <label for="comment">{{ $comment->user->name }}</label></br>
                          <span>{{ $comment->content }}</span></br>
                          <span>{{ $comment->created_at }}</span>
                      </div>
                    @endif
                  @endforeach
              </div>
            </div>
            <div class="space40">&nbsp;</div>
            <div class="beta-products-list">
              <h4>Related Book</h4>
                <div class="row">
                  @foreach($books as $bo)
                    @if ($bo->author->id == $book->author->id)
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
                    @endif
                  @endforeach
                </div>
            </div> <!-- .beta-products-list-->
          </div>
        </div>
      </div> <!-- #content -->
    </div> <!-- .container -->
@stop
