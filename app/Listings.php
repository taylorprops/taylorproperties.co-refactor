<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    //
    protected $fillable=[
    	'ListingSourceRecordKey',
    	'ListingId',
    	'FullStreetAddress',
    	'City',
    	'StateOrProvince',
    	'PostalCode',
    	'ListPictureURL',
    	'ListPrice',
    	'BedroomsTotal',
    	'BathroomsFull',
    	'BathroomsHalf',
    	'LivingArea',
    	'MLSListDate',
    	'PublicRemarks',
    	'ListAgentMlsId'
    ];
}
