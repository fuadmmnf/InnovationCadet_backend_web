<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContact extends Model
{
    use HasFactory;

    protected $table = 'site_contacts';
    protected $fillable = [
        'email',
        'phone',
        'address',
        'facebook',
        'instagram',
        'youtube',
        'whatsapp',
        'twitter',
    ];
}
