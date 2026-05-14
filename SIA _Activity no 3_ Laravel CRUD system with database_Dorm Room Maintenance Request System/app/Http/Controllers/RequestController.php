<?php

namespace App\Http\Controllers; // ✅ FIXED

use App\Models\Request; // ✅ IMPORT MODEL
use Illuminate\Http\Request as HttpRequest; // ✅ RENAME HTTP REQUEST

class RequestController extends Controller
{

    // INDEX
    public function index()
    {
        $requests = Request::all();
        return view('requests.index', compact('requests'));
    }

    // CREATE FORM
    public function create()
    {
        return view('requests.create');
    }

    // STORE DATA
    public function store(HttpRequest $req)
    {
        Request::create($req->all());
        return redirect('/requests');
    }

    // SHOW SINGLE
    public function show($id)
    {
        $request = Request::findOrFail($id);
        return view('requests.show', compact('request'));
    }

    // EDIT FORM
    public function edit($id)
    {
        $request = Request::findOrFail($id);
        return view('requests.edit', compact('request'));
    }

    // UPDATE
    public function update(HttpRequest $req, $id)
    {
        $request = Request::findOrFail($id);
        $request->update($req->all());
        return redirect('/requests');
    }

    // DELETE
    public function destroy($id)
    {
        $request = Request::findOrFail($id);
        $request->delete();
        return redirect('/requests');
    }
}