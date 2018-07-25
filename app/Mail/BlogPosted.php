<?php

namespace App\Mail;

use App\Models\Blog;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BlogPosted extends Mailable
{
    use Queueable, SerializesModels;
    public $blog;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // mensett dari siapa dan tampilan gimana
        // untuk dari bisa di setting melalui env
        return $this->from('dari@admin.com')->view('emails.blog');
    }
}
