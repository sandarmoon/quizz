<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resultdetail extends Model
{

	use SoftDeletes;
     protected $fillable=['result_id','question_id','chosen_ans','status'];
}
