<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)
    {

        // authorize that the current user has permission to set the best reply
        //for the conversation
        $this->authorize('update-conversation', $reply->conversation);
        //then set is
        $reply->conversation->best_reply_id = $reply->id;
        //to aupdate the best_reply_id culomn in conversations table

        $reply->conversation->save();
        //redirect back to the conversation page

        return back();
    }
}
