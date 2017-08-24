<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberCreateRequest;
use App\Member;

class MemberController extends Controller
{

    public function index(){
        $member_list = Member::all();
        return view('member.index', compact('member_list'));
    }

    public function create(){
        $primary_members = Member::where('type', 'primary')->get();
        return view('member.create', compact('primary_members'));
    }

    public function save(MemberCreateRequest $request){
        $member = Member::create($request->all());
        return redirect()->back();
    }
}
