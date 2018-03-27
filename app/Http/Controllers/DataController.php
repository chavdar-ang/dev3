<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function eventList()
    {
    	$events = \App\Event::with('theme.likeCount', 'theme.isLiked', 'theme.company')->get();
    	return $events;
    }

    public function getCompany()
    {
    	$company = \App\Company::with('firstFiveFollowers')
    							->with('isFollowed')
				    			->where('id', request()->id)
				    			->first();
    	return $company;
    }

    public function getComments()
    {
    	$theme = \App\Theme::with('comments.user')->where('id', request()->id)->first();
    	return $theme->comments;
    }
}