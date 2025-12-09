<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConferenceRequest;
use App\Models\Conference;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ConferenceController extends Controller
{
    /**
     * Summary of index
     *
     * @return View
     */
    public function index()
    {
        return view('events.index', ['conferences'=>Conference::all()]);
    }

    /**
     * Summary of create
     *
     * @return View
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Summary of store
     * @param StoreConferenceRequest $request
     * @return RedirectResponse
     */
    public function store(StoreConferenceRequest $request) {
        $validated = $request->validated();
        $conference = Conference::create($validated);

        $request->session()->flash("status", "Event created successfully!");
        return redirect()->route("events.show", compact('conference'));
    }
    /**
     * Summary of storeImage
     * @param Request $request
     * @return JsonResponse
     */
    public function storeImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('images', 'public');

            return response()->json(['location' => Storage::url($path)]);
        }

        dd($request->all(), $request->files->all());

        return response()->json(['location' => 'No file uploaded'], 400);
    }

    /**
     * Summary of show
     * @param Conference $conference
     * @return View
     */
    public function show(Conference $conference)
    {
        return view("events.show", compact('conference'));
    }

    /**
     * Summary of edit
     * @param Conference $conference
     * @return View
     */
    public function edit(Conference $conference)
    {
        return view("events.edit", compact('conference'));
    }

    /**
     * Summary of update
     * @param StoreConferenceRequest $request
     * @param Conference $conference
     * @return RedirectResponse
     */
    public function update(StoreConferenceRequest $request, Conference $conference)
    {
        $conference->update($request->validated());
        return redirect()->route("events.show", compact('conference'));
    }

    /**
     * Summary of destroy
     * @param Request $request
     * @param Conference $conference
     * @return RedirectResponse
     */
    public function destroy(Request $request, Conference $conference)
    {
        $conference->destroy($conference->id);
        $request->session()->flash("status", "Conference successfully deleted.");

        return redirect()->route("events.index");
    }
}
