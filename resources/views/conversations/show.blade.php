@extends('layouts.app')

@section('content')

<div class='container'>

    <P>
      <a href="/conversations"> Back </a>
    </P>

    <h1>{{ $conversation->title}}</h1>

    <p>Posted by {{$conversation->user->name}}</p>

    <div>
       {{$conversation->body}}
    </div>
    <hr>

</div>

 @include('conversations.replies')
@endsection
