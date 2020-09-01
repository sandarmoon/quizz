<?php

use Illuminate\Database\Seeder;
use App\Quizz;

class QuizzTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // protected $fillable=['title','total_mark'];
    	Quizz::create([
    		'title'=>'Bootstrap Basic',
    		'total_mark'=>30
    	]);

    	Quizz::create([
    		'title'=>'Jquery Basic',
    		'total_mark'=>30
    	]);

    	Quizz::create([
    		'title'=>'Php Basic',
    		'total_mark'=>30
    	]);

    	Quizz::create([
    		'title'=>'Css Basic',
    		'total_mark'=>30
    	]);
    }
}
