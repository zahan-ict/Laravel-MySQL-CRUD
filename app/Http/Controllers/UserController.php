<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\posts;

class UserController extends Controller
{
    public function home()
    {
        $posts = posts::all();
        return view("home", ['posts' => $posts]);
    }

    public function insertform()
    {
        return view("insert");
    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $posts = new posts();
        $posts->name = $request->input('name');
        $posts->email = $request->input('email');
        $posts->message = $request->input('message');
        $posts->save();
        return redirect('/')->with('sms', 'Post is save successfully');
    }

    public function updateform($id)
    {
        $posts = posts::find($id);
        return view('update', ['posts' => $posts]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        );

        posts::where('id', $id)->update($data);

        return redirect('/')->with('sms', 'Update successfully');
    }

    public function delete($id)
    {
       posts::where('id',$id)->delete();
       return redirect('/')->with('sms', 'Deleted successfully');
    }
}
