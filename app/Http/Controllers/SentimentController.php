<?php

namespace App\Http\Controllers;

use Antoineaugusti\LaravelSentimentAnalysis\SentimentAnalysis;
use PHPInsight\Sentiment;

class SentimentController extends Controller
{
    public function index(){
        $text = 'the code is from github and i think it is not unique but it is very good';
        $sentiment = new Sentiment();
        $category = $sentiment->categorise($text);
        $result = $sentiment->score($text);
        dd($category);
    }
}
