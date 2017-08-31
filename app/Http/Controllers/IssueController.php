<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\IssueReceive;
use App\Http\Requests\BookIssueRequest;

class IssueController extends Controller
{
    public function showIssueReceive(){
        $ir_list = IssueReceive::issuedBooks();
        return view('issue-receive.issue-receive', compact('ir_list'));
    }

    public function issue(BookIssueRequest $request){
        $last_issue = IssueReceive::where('book_id', $request->get('book_id'))->latest()->first();

        if($last_issue == null || $last_issue->received_at != null){
            $ir = IssueReceive::create($request->all());            
            $request->session()->flash('status', 'Book '.$ir->book_id.' issued successfully!');
        }
        else{
            $request->session()->flash('error', 'Book already issued!');            
        }
        return redirect()->back();
    }

    public function receive($id, Request $request){
        $ir = IssueReceive::find($id);
        $ir->received_at = \Carbon\Carbon::now();
        $ir->save();
        $request->session()->flash('status', 'Book '.$ir->book_id.' received!');
        return redirect()->back();
    }
}
