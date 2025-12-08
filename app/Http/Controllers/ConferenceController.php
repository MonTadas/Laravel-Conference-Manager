<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequest;
use App\Models\Conference;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
class ConferenceController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(StoreConferenceRequest $request) {

    }

    public function show(Conference $conference)
    {
        //
    }


    public function edit(Conference $conference)
    {
        //
    }

    public function update(UpdateConferenceRequest $request, Conference $conference)
    {
        //
    }

    public function destroy(Request $request, Conference $conference)
    {

    }
}
