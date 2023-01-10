<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PymentsController extends Controller
{
    public function create()
    {
        return view('pyments.create');
    }

    public function store()
    {
        // request()->user()->notify(new PaymentReceived(900));
        Notification::send(request()->user(), new PaymentReceived(900));
    }
}
