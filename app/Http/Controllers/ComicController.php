<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comics = Comic::all();
        return view('admin.comics.create', compact('comics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {



        // $val_data = $request->validate([
        //     'title' => 'required|min:5|max:100',
        //     'description' => 'nullable',
        //     'price' => 'required|min:4|max:10',
        //     'series' => 'nullable|max:255',
        //     'sale_date' => 'nullable|max:255',
        //     'type' => 'nullable|max:',
        // ]);

        $val_data = $this->validation($request->all());
        $comic = Comic::create($val_data);

        // $new_comic = new Comic();
        // $new_comic->title = $request['title'];
        // $new_comic->description = $request['description'];
        // $new_comic->thumb = $request['thumb'];
        // $new_comic->price = $request['price'];
        // $new_comic->series = $request['series'];
        // $new_comic->sale_date = $request['sale_date'];
        // $new_comic->type = $request['type'];
        // $new_comic->save();

        return to_route('comics.index')->with('message', "$comic->title added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        // $data = [
        //     'title' => $request['title'],
        //     'description' => $request['description'],
        //     'thumb' => $request['thumb'],
        //     'price' => $request['price'],
        //     'series' => $request['series'],
        //     'sale_date' => $request['sale_date'],
        //     'type' => $request['type'],
        // ];

        $val_data = $request->validate([
            'title' => 'required|min:5|max:100',
            'description' => 'nullable',
            'price' => 'required|min:4|max:10',
            'series' => 'nullable|max:255',
            'sale_date' => 'nullable|max:255',
            'type' => 'nullable|max:',
        ]);

        $comic->update($val_data);
        return to_route('comics.index')->with('message', "$comic->title updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('message', "$comic->title deleted successfully");
    }


    private function validation($data)
    {
        // Validator::make($data, $rules, $message)
        $validator = Validator::make($data, [
            'title' => 'required|min:5|max:100',
            'description' => 'nullable',
            'price' => 'required|min:4|max:10',
            'series' => 'nullable|max:255',
            'sale_date' => 'nullable|max:255',
            'type' => 'nullable|max:',
        ], [
            'title.required' => 'Il titolo é obbligatorio',
            'title.min' => 'Il titolo deve essere almeno :min caratteri',
            'title.max' => 'Il titolo deve essere almeno :max caratteri',
            'price.required' => 'Il titolo é obbligatorio',
            'price.min' => 'Il titolo deve essere almeno :min caratteri',
            'price.max' => 'Il titolo deve essere almeno :max caratteri'

        ])->validate();

        return $validator;
    }
}
