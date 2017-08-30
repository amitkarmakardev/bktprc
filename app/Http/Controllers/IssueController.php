<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IssueReceive;

class IssueController extends Controller
{
    public function showIssueReceive(){
        $ir_list = IssueReceive::issuedBooks();
        return view('issue-receive.issue-receive', compact('ir_list'));
    }

    public function issue(){
    }

    public function receive(){
    }
}
