<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $cart;
    public $name;
    public $phone;
    public $email;
    public $order_code;
    public $address;
    public $date;
    public $discount;
    public function __construct($cart,$name,$phone,$email,$address,$discount,$order_code,$date)
    {
        $this->cart = $cart;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->order_code = $order_code;
        $this->address = $address;
        $this->date = $date;
        $this->discount = $discount;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        $formEmail = env('MAIL_FROM_ADDRESS');
        $formName = env('MAIL_FROM_NAME');
        return new Envelope(
            from: new Address($formEmail, $formName),
            subject: 'Payment Confirmation - Order '.$this->order_code,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.order',
            with: [
                'cart' => $this->cart,
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'address' => $this->address,
                'discount' => $this->discount,
                'order_code'=>$this->order_code,
                'date'=>$this->date,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
