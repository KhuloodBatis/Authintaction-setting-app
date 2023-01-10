@extends('layouts.app')

@section('content')

<style></style>


<div class='container'>
    <ul>

        @forelse ($notifications as $notification )
            <li>
                @if($notification->type === 'App\Notifications\PaymentReceived')

              we have recived a pyment of {{$notification->data['amount']}} from you
              @endif
            </li>
            @empty
            <li> You have no unread notifications at this time </li>
        @endforelse

    </ul>

</div>

@endsection
