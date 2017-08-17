@extends('layouts.main')

@section('title')
	You Have Successfully Subscribed!
@endsection

@section('content')

	<div class="content">
         <div class="alert alert-success"> Congrats <strong>{{ $subscriber }}</strong> you have officialy subscribed!</div>
	</div>

@endsection