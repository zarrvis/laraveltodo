<?php

namespace App\Http\Controllers;

use App\Todo;
use Session;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
      $todos = Todo::latest()->paginate(3);
      //xx$todos = Todo::orderBy('created','desc')->get();
      return view('todo')->with('todos', $todos);
      //xxreturn view('todo',['todos'=>$todos]);
    }

    public function view($id){
      $views = Todo::find($id);
      return view('view')->with('views', $views);
    }

    public function store(Request $request){
      // dd($request->all());

      $this->validate($request, [
        'todo' => 'required'
      ]);

      // Todo::create([
      //   'todo' => $request->todo
      // ]);

      $todo = new Todo;
      $todo->todo = $request->todo;
      $todo->save();

      Session::flash('success','Todo was added');

      return redirect()->back();
    }

    public function delete($id){
      Todo::destroy($id);

      Session::flash('success','Todo was deleted.');

      return redirect()->back();
    }

    public function update($id){
      //$todo = Todo::find($id);

      return view('update')->with('todo', Todo::find($id));
    }

    public function save(Request $request,$id){
      $todo = Todo::find($id);
      $todo->todo = $request->todo;
      $todo->save();

      Session::flash('success','Todo was updated');

      return redirect()->route('todos');
    }
}
