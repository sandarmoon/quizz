<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Question extends Model
{

	use SoftDeletes;
    protected $fillable=['quizz_id','description','estimateAns_One','estimateAns_Two','estimateAns_Three','estimateAns_Four','answer'];
}
