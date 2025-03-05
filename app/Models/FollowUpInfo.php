<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FollowUpInfo extends Model
{
    protected $table = 'follow_up_infos';

    protected $fillable = [
        'enquiry_id',
        'status',
        'notes',
        'date',
        'next_follow_up',
        'document',
    ];

    /**
     * Get the related enquiry.
     */
    public function enquiry()
    {
        return $this->belongsTo(EnquiryInfo::class, 'enquiry_id');
    }

    public function scopeByEnquiry($query, $enquiryId)
    {
        return $query->where('enquiry_id', $enquiryId)->orderBy('created_at', 'desc');
    }
}
