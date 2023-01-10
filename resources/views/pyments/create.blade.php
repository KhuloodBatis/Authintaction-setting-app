@extends('layouts.app')

@section('content')


    <form action="/pyments"
                  method="POST">
                  @csrf

              <button type="submit" href="/" style="    width: 90px;
              padding: 10px 0;
              margin: 10px 100px;
              border-radius: 5px;
              border: none;
              background: #1c87c9;
              font-size: 14px;
              font-weight: 600;
              color: #fff;">Submit</button>

    </form>

@endsection
