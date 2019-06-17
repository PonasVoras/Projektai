<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;
use App\Mail\notification;
use Carbon\Carbon;

class TodoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$todos = Todo::where('owner_id', auth()->id())->get();
        //$todos = Todo::whereDay('date', '12')->get();
        $todos = auth()->user()->todo;
        return view('home', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formcreate');
    }

    /**
     *
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Todo $todo)
    {
        $validated = request()->validate([
            'title' => ['required', 'min:3'],
            'description'=> ['required','min:3'],
            'date'=> ['required'],
            'location'=> ['required','min:3'],
            'from'=> ['required', 'max:3'],
            'to'=> ['required', 'max:3'],
            'notify'=> ['required'],
            'label'=>['required', 'min:3'],
            'owner_id'=>['required']
        ]);

        $todo = $todo::create($validated);

//        Mail::to($todo->owner->email)->send(
  //          new notification($todo)
    //    );
        //Panuadoti, jei geresnio metodo nerasiu


        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //show reikia, kad prasiplestu laukelis ir informacija parodytu
        return view('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('formedit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo, $id)
    {
        $todo = Todo::findOrFail($id);

        $todo->update(request([
            'title',
            'description',
            'date',
            'location',
            'from',
            'to',
            'notify',
            'label']));
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo, $id)
    {
        //destroys with buttons in home
        //dd('hello');
        Todo::findOrFail($id)->delete();
        return redirect('/home');
    }
}
