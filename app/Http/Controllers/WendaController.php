<?php

namespace App\Http\Controllers;

use App\Wenda;
use App\Tag;

use App\Http\Requests\WendaRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Auth;

class WendaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $wendas = Wenda::latest('created_at')->get();

        return view('wendas.index', compact('wendas'));
    }

    public function show($id)
    {
        $wenda = Wenda::findOrFail($id);

        return view('wendas.show', compact('wenda'));
    }

    public function create()
    {
        $tags=Tag::lists('name','id');
        return view('wendas.create',compact('tags'));
    }

    public function store(WendaRequest $request)
    {
        $wenda=Auth::user()->wendas()->create($request->all());

        $wenda->tags()->attach($request->input('tag_list'));

        flash('恭喜您提交成功!');


        return redirect('wendas');
    }

    public function edit($id)
    {
        $tags=Tag::lists('name','id');

        $wenda = Wenda::findOrFail($id);

        return view('wendas.edit', compact('wenda','tags'));
    }

    public function update($id,WendaRequest $request)
    {
        $wendas=Wenda::findOrFail($id);
        $wendas->update($request->all());
        $wendas->tags()->sync($request->input('tag_list'));

        flash('恭喜您更新成功!');


        return redirect('wendas');
    }


}
