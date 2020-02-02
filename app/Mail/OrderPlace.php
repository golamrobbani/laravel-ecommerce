<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

use App\Order;
use App\OrderItem;

class OrderPlace extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $pdf = base64_encode(Storage::get('public/pdf/invoice.pdf'));

        return $this->markdown('emails.orders.place')->with(['order' => $this->order, 'msg' => 'Order Conformation from echosafe water'])->attachData(base64_decode($pdf), "Invoice.pdf", [
            'mime' => 'application/pdf',
        ]);
    }
}
