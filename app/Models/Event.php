<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title',
        'bo_title',
        'slug',
        'client',
        'date',
        'date_title',
        'thumbnail',
        'cover',
        'excerpt',
        'content',
        'is_active',
        'is_visible_event_fe',
        'is_visible_event_bo',
        'is_closed_registration',
        'has_abstracts',
        'abstract_limit',
        'is_closed_abstract_submission',
        'registration_sender_email',
        'registration_sender_name',
        'registration_email_subject',
        'registration_reply_to_email',
        'registration_cc_email',
        'registration_bcc_email',
        'abstract_email_subject',
        'confirmation_email_subject',
        'has_confirmation_mail',
        'has_attachment_badge',
        'attachment_badge_name',
        'accent_color',
        'mailer'];
}
