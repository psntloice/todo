<?php


namespace App\Http\Controllers;
use App\Http\Resources\TodoResource;

use App\Models\Todo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    // Method to get all todos    
     public function index()
    {
        //return auth()->user();
        $todos = TodoResource::collection(Todo::all());
        return response()->json(['todos' => $todos]);
    }

    // Method to get a specific todo by ID    
    public function show($id)
    {
       // $todo = Todo::find($id);
       $todo = Todo::where('id', $id)->first();
        if (!$todo) {
            return response()->json(['message' => 'Todo not found'], 404);
        }
        return response()->json(['todo' => $todo]);
    }

    // Method to create a new todo    
    public function store(Request $request)
    //public function store(StoreTodoRequest $request)
    {
        //return $request;
      /*  $validator = Validator::make($request->all(), [
            'title' => 'required',
            //'description' => 'nullable', //TO CHANGE HERE
            'completed' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 400);
        }

        $todo = Todo::create($request->all());
        return response()->json(['todo' => $todo], 201);
        */
        
        //added
        // Validate the request data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);
//with request all
// Create a new Todo instance and set attributes from the request
$todo = new Todo($request->all());

// Set the user_id based on the currently authenticated user
$todo->user_id = auth()->user()->id;

// Save the Todo to the database
$todo->save();

// Optionally, you can also associate the todo with the user using the relationship method
// auth()->user()->todos()->save($todo);

// Return a response, redirect, or whatever is appropriate for your application


    }

    // Method to update a todo by ID    
    public function update(Request $request, $id)
    {
        //$todo = Todo::find($id);
        //$users = User::where('name', 'John')->get();
        $todo = Todo::where('id', $id)->first();
        if (!$todo) {
            return response()->json(['message' => 'Todo not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'nullable',
            'completed' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 400);
        }

        $todo->update($request->all());
        return response()->json(['todo' => $todo]);
    }

    // Method to delete a todo by ID   
    public function destroy($id)
    {
        //$todo = Todo::find($id);
        $todo = Todo::where('id', $id)->first();
        if (!$todo) {
            return response()->json(['message' => 'Todo not found'], 404);
        }

        $todo->delete();
        return response()->json(['message' => 'Todo deleted']);
    }
}