@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Auth-Setting</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body class="antialiased">

        <h1> My Site</h1>
          @can('edit_form')
              <li>
                <a href="#">
                   Edit Forum
                </a>
              </li>
          @endcan

          @can('view_reports')
          <li>
            <a href="/reports">
              View Reports
            </a>
          </li>
      @endcan
    </body>

 @endsection
