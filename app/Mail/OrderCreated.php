<?php

namespace App\Mail;

use App\Order;
use App\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Session;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;
public $order;
public $cart;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order,$cart)
    {
        $this ->order=$order;
        $this ->cart=$cart;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('emails.ordercreated')->with(['order'=>$this->order])->with(['cart'=>$this->cart]);

    }
}
