<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['post_id' => 'required']);
        $like = new Like;
        $like->user_id = auth()->user()->id;
        $like->post_id = $request->post_id;
        $like->save();
    }



       public function destroy($id)
    {
        $like =  Like::find($id);
        if(count(collect($like)) > 0){
            $like->delete();
        }
    }
}
