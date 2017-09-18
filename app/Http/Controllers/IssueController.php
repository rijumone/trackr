<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
use App\User;

class IssueController extends Controller
{
    public function createIssue(){
    	return view('issue.create-issue');
    }
    
    public function index(Issue $issue){
    	$issues = $issue->get();
    	return view('issue.index')->with('issues',$issues);
    }
    
    public function createIssueSubmit(Request $request){
		
		$request->user()->issues()->create([
    			'assignee' => $request->assignee,
    			'title' => $request->title,
    			'description' => $request->description,
    			'tentative_date' => $request->tentative_date,
    		]);

    	return view('issue.index');
    }
}
