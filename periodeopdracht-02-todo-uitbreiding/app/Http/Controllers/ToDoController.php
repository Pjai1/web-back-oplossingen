<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class ToDoController extends Controller
{
	protected $tasks;

	//Constructor
    public function __construct(TaskRepository $tasks)
    {
    	$this->middleware('auth');

    	$this->tasks = $tasks;
    }

    //display Todos
    public function index(Request $request)
	{
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
	}

	//create new Todo
	public function store(Request $request)
	{
	    $this->validate($request, [
	        'name' => 'required|max:255',
	    ]);

	    $request->user()->toDos()->create([
        'name' => $request->name,
	    ]);

	    $name = $request->name;

	    //return redirect('/tasks');
	    return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
            'message' => sprintf('ToDo %s has been added',$name),
        ]);
	}

	//delete Todo
	public function destroy(Request $request, Todo $task)
	{
	    $this->authorize('destroy', $task);
		
	    $name = $task->name;

		$task->delete();

		//return redirect('/tasks');
		return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
            'message' => sprintf('ToDo %s has been deleted',$name),
        ]);
	}

	public function toggleDone(Request $request, Todo $task)
	{
		$name = $task->name;

		$task->done = $task->done === 0 ? 1 : 0;

		$task->save();

		if($task->done==0)
		{
			return redirect('/tasks');
		}
		
		//return redirect('/tasks');
		return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
            'message' => sprintf('ToDo %s has been completed',$name),
        ]);
	}
}
