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

    public function edit($id){
        $primary_members = Member::where('type', 'primary')->get();
        $member = Member::find($id);
        return view('member.edit', compact('member', 'primary_members'));
    }

    public function update(MemberCreateRequest $request, $id){
        $member = Member::find($id);
        $member->update($request->all());
        return redirect()->to(url('member'));
    }
}
