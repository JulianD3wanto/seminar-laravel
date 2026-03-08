<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class CertificateUploaded extends Notification
{
    use Queueable;

    protected $eventId;
    protected $eventName;
    protected $certificateUrl;

    public function __construct($eventId, $eventName, $certificateUrl)
    {
        $this->eventId = $eventId;
        $this->eventName = $eventName;  
        $this->certificateUrl = $certificateUrl;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'type' => 'certificate_uploaded',
            'event_id' => $this->eventId,
            'event_name' => $this->eventName,
            'certificate_url' => $this->certificateUrl,
            'message' => 'Sertifikat untuk event "' . $this->eventName . '" sudah tersedia.',
        ];
    }
}
