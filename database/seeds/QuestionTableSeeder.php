<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// protected $fillable=['quizz_id','description','estimateAns_One','estimateAns_Two','estimateAns_Three','estimateAns_Four','answer'];
        Question::create([
        	'quizz_id'=>1,
        	'description'=>' Which class indicates a dropdown menu',
        	'estimateAns_One'=>'.dropdown-list',
        	'estimateAns_Two'=>'.select',
        	'estimateAns_Three'=>'.dropdown',
        	'estimateAns_Four'=>'none of them',
        	'answer'=>'3'
        ]);

        Question::create([
        	'quizz_id'=>1,
        	'description'=>' A standard navigation tab is created with:',
        	'estimateAns_One'=>'<ul class=”navigation-tabs”>',
        	'estimateAns_Two'=>'<ul class=”nav tabs”>',
        	'estimateAns_Three'=>'<ul class=”navnav-tabs”>',
        	'estimateAns_Four'=>'<ul class=”navnav-navbar”>
A',
        	'answer'=>'2'
        ]);

        Question::create([
        	'quizz_id'=>1,
        	'description'=>' Which plugin is used to cycle through elements, like a slideshow?',
        	'estimateAns_One'=>'orbit',
        	'estimateAns_Two'=>'slideshow',
        	'estimateAns_Three'=>'scrollspy',
        	'estimateAns_Four'=>'carousel',
        	'answer'=>'4'
        ]);
    }
}
