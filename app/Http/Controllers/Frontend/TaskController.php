<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\TaskRepository;
use App\Http\Controllers\Controller;
class TaskController extends Controller
{


    protected $tasks;


    public function __construct(TaskRepository $tasks)
    {
      $this->middleware("auth");
      $this->tasks = $tasks;
      $this->
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //  $tasks = $request->user()->tasks()->get();
         return view('tasks.index',[
             'tasks' => $this->tasks->forUser($request->user()),
         ]);+
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
          'name'=>$request->name,
        ]);

        return redirect("/tasks");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Task $task)
    {
        //
         $this->authorize('destroy', $task);
         $task->delete();
         return redirect('/tasks');
    }
}
