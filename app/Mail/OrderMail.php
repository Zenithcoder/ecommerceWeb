<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Order;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     //where('delivered','0')->get();
     
   

    public function __construct()
    {
        //
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order= Order::all()->last();
    $address = 'get@sharwa.com';
    $address1 = 'francollimassociates@gmail.com';
    $address2 = 'info@deliziafds.com';
    $name = 'Delizia Shawarma Invoice';
    $subject = 'Invoice';

    return $this->view('mail.ordermail')
                ->from($address, $name)
                ->cc($address2, $name)
                ->bcc($address2, $name)
                ->replyTo($address2, $name)
                ->subject($subject)
                ->with('orders', $order);
    }
}
