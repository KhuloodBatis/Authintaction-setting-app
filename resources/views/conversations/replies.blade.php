
<style>
    .btn-reply{

    }
</style>
@foreach ($conversation->replies as $reply )

<div class='container'>

    <header>
        <p class="m-0"><strong>{{$reply->user->name}} said..</strong></p>
            @if ( $reply->isBest())
            <span style="color:#20c997">Best reply!!</span>
            @endif

    </header>

{{$reply->body}}

@can('update',$conversation)
 <form action="/best-replies/{{$reply->id}}" method="POST">
    @csrf
              <button type="submit" href="/" style="
              width: 90px;
              padding: 10px 0;
              margin: 10px 10px;
              border-radius: 5px;
              border: none;
              background: #20c997;
              font-size: 14px;
              font-weight: 300;
              color: #fff;">Best Reply</button>
 </form>

@endcan

@continue($loop->last)
<hr>

</div>
@endforeach
