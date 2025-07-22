<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event; 

class EventController extends Controller
{
    public function index()
    {
        if(request('search')) {
            $events = Event::where([
                ['title', 'like', '%'.request('search').'%']
            ])->get();
        } else {
            $events = Event::all();
        }
        return view('welcome',['events' => $events, 'search' => request('search')]);
    }
    public function create()
    {
        return view('events.create');
    }
    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;
        $event->date = $request->date;

        // upload image
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        } else {
            return redirect('/event/create')->with('msg', 'Imagem inválida!');
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);    
    }
    public function contact()
    {
        return view('contact');
    }
    public function products()
    {
        return view('products'); 
    }
}