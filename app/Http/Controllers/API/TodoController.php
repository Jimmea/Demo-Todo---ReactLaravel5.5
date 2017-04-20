<?php
Namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Todo;

class TodoController extends Controller
{
    public function all() { // fetch all todos
        return Todo::orderBy('id', 'DESC')->get();
    }

    public function destroy(Request $request) 
    {
        $id = $request->input('id');
        
        Todo::where('id', '=', $id)->delete();

        return response()->json(['success' => true]); // keeping things simple, no checking
    }

    public function store(Request $request) 
    {        
        $todo = new Todo;
        $todo->body = $request->input('body');
        if($todo->save()) 
        {
            return response()->json(['success' => true, 'todo' => $todo]);
        }
    }

    public function done(Request $request) 
    {
        $id = $request->input('id');
       
        $todo = Todo::find($id);
        $todo->done = true;
        $todo->save();

        if($todo->save()) {
            return response()->json(['success' => true]);
        }
    }

    public function unDone(Request $request) 
    {
        $id = $request->input('id');
       
        $todo = Todo::where('id', '=', $id)->first();

        $todo->done = false;
        $todo->save();

        if($todo->save()) {
            return response()->json(['success' => true]);
        }
    }
}