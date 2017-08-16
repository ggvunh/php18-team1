 @extends('layouts.admin.master')
  @section('header')
    <div class="dashboard">
      <h4>
        REPORT DASHBOARD
      </h4>
    </div>  
  @stop
  @section('content')
    <div class="container">
     <div class="row padtop">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ count($order) }}</h3>

              <p>Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ url('/listorders') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ count($user) }}</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ url('/listusers') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ count($book) }}</h3>

              <p>Books</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ url('/listbooks') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ count($author) }}</h3>

              <p>Authors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ url('/listauthors') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

         <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ count($topic) }}</h3>

              <p>Topics</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ url('/listtopics') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

         <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ count($publish) }}</h3>

              <p>Publish Company</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ url('/listpublishcompanies') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div>  
      <!-- Main row -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          @foreach($comments as $comment)
            <div class="form-group">
              <div class="col-xs-2">
                <label class="labelpd ion ion-person-add h4"><a href="#"><strong>  {{ $comment->user->name }}</strong></a></label>
              </div>  
              <div class="dialogbox col-xs-9">
                <div class="body">
                  <span class="tip tip-left"></span>
                  <div class="message">
                    <span>{{ $comment->content }}</span><br>
                    <span> Sent date:  {{ $comment->created_at }}</span>
                    <a href="{{url('/books/'.$comment->book_id)}}"><span>Reply comment</span></a>
                  </div>
                </div>
              </div>   
            </div>
          @endforeach
        </div>
      </div>
    </div>
  @stop
