<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnquiryInfo extends Model
{
    protected $table = 'enquiry_infos';

    protected $fillable = [
        'leadid',
        'leadtype',
        'prefix',
        'name',
        'mobile',
        'phone',
        'email',
        'date',
        'category',
        'city',
        'area',
        'brancharea',
        'dncmobile',
        'dncphone',
        'company',
        'pincode',
        'time',
        'branchpin',
        'parentid',
        'status',
        'platform',  //add extra field
    ];

    public function followUps()
    {
        return $this->hasMany(FollowUpInfo::class, 'enquiry_id');
    }


    public function latestFollowUp()
    {
        return $this->hasOne(FollowUpInfo::class, 'enquiry_id')->latest('created_at');
    }

}
