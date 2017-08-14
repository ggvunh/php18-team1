@extends('layouts.admin.master')
@section('header')
	<h3>
	  Results With Keyword "<strong class="text-primary"> {{ $tukhoa }} </strong>"
	</h3>
@stop
@section('content')
  <section class="content padtop">
	  <div class="row">
	  	<div class="col-md-12 padleft paddtop">
		  	<div id="tabs">
			  <ul>
			    <li><a href="#tabs-1">Search with Book</a></li>
			    <li><a href="#tabs-2">Search with Topic</a></li>
			    <li><a href="#tabs-3">Search with Author</a></li>
			    <li><a href="#tabs-4">Search with Publish Company</a></li>
			  </ul>
			  <div id="tabs-1" class="height">
			    <div class="col-md-12">
				    @foreach ($books as $book)
				        <div class="row borderlist">
				          <div class="col-sm-7">
				            <p class="h5">{{$book->name}}</p>
				          </div>
				          <div class="col-sm-3">
				            <p class="h5">{{$book->author->name}}</p>
				          </div>
				          <div class="col-sm-2">
				            <a href="{{url('/bookedit/'.$book->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{url('/bookdelete/'.$book->id)}}" class="glyphicon glyphicon-trash">Delete</a>
				          </div>
				        </div>
				    @endforeach
		   		</div>
			  </div>
			  <div id="tabs-2" class="height">
			    <div class="col-md-12">
			      @foreach ($topics as $topic)
			        <div class="row borderlist">
			          <div class="col-sm-7">
			            <p class="h5">{{$topic->name}}</p>
			          </div>
			          <div class="col-sm-3">
			          </div>
			          <div class="col-sm-2">
			            <a href="{{url('/topicedit/'.$topic->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{url('/topicdelete/'.$topic->id)}}" class="glyphicon glyphicon-trash">Delete</a>
			          </div>
			        </div>
			      @endforeach
			    </div>
			  </div>
			  <div id="tabs-3" class="height">
			    <div class="col-md-12">
			      @foreach ($authors as $author)
			        <div class="row borderlist">
			          <div class="col-sm-2">
			            <p class="h5">{{$author->name}}</p>
			          </div>
			          <div class="col-sm-3">
			            <p class="h5">{{$author->email}}</p>
			          </div>
			          <div class="col-sm-2">
			            <p class="h5">0{{$author->phone}}</p>
			          </div>
			          <div class="col-sm-3">
			            <p class="h5">{{$author->address}}</p>
			          </div>
			          <div class="col-sm-2">
			            <a href="{{url('/authoredit/'.$author->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{url('/authordelete/'.$author->id)}}" class="glyphicon glyphicon-trash">Delete</a>
			          </div>
			        </div>
			      @endforeach
	   	 		</div>
			  </div>
			  <div id="tabs-4" class="height">
			    <div class="col-md-12">
			      @foreach ($publishcompanies as $publishcompany)
			        <div class="row borderlist">
			          <div class="col-sm-2">
			            <p class="h5">{{$publishcompany->name}}</p>
			          </div>
			          <div class="col-sm-3">
			            <p class="h5">{{$publishcompany->email}}</p>
			          </div>
			          <div class="col-sm-2">
			            <p class="h5">0{{$publishcompany->phone}}</p>
			          </div>
			          <div class="col-sm-3">
			            <p class="h5">{{$publishcompany->address}}</p>
			          </div>
			          <div class="col-sm-2">
			            <a href="{{url('/editpublishcompany/'.$publishcompany->id)}}" class="glyphicon glyphicon-edit">Edit</a>&nbsp&nbsp&nbsp&nbsp<a href="{{url('/publishcompanydelete/'. $publishcompany->id)}}" class="glyphicon glyphicon-trash">Delete</a>
			          </div>
			        </div>
			      @endforeach
			    </div>
			  </div>
			</div>
		</div>
	</div>
  </section>		
@stop
