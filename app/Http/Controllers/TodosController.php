<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Todo;
class TodosController extends Controller
{

    /***
     * Index para mostrar todos los todos
     * store para guardar un todo
     * update parar actualizar un todo
     * destroy para eliminar un todo
     * edit para mostrar el formulario de edición
     *
     */

     public function store ( Request $request){

        $request->validate([
            'title' => 'required|min:5'
        
        ]);

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->category_id = $request->category_id;
        $todo->save();
        return redirect()->route('todos')->with('success', 'Tarea creada correctamente');


     }
     public function index ( ){

        $todos = Todo::all();
        $categories = Category::all();
        return view('todos.index', ['todos'=> $todos ,'categories'=>$categories]);
     }

     public function show ( $id ){
         $todo =Todo::find($id);
         return view('todos.show', ['todo'=>$todo]);
     }

     public function update (Request $request, $id ){
         $todo = Todo::find($id);
         $todo->title = $request->title;
         $todo->save();
         #dd($request);
         #return view('todos.index', ['success'=>'Tarea actualizada']);
        return redirect()->route('todos')->with('success','Tarea actualizada');

     }

     public function destroy( $id ){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todos')->with('success','La Tarea ha sido eliminada');
    }




}