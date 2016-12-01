<?php namespace OpenPolice\Models;
// generated from /resources/views/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPLinksComplaintDept extends Model
{
	protected $table 		= 'OP_LinksComplaintDept';
	protected $primaryKey 	= 'LnkComDeptID';
	public $timestamps 		= true;
	protected $fillable 	= 
	[	
		'LnkComDeptComplaintID', 
		'LnkComDeptDeptID', 
	];
}