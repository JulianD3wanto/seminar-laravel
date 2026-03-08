<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpeakerApplication extends Model
{
    protected $table = 'speaker_applications';

    protected $fillable = [
        'nama','email','whatsapp','perusahaan','website','sosmed','pengalaman',
        'pernah','keterangan_webinar','status',
        'recaptcha_score','recaptcha_action','recaptcha_hostname'
    ];
}
