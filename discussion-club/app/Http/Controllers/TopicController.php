<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TopicController extends Controller
{
    //
    public function list(){
        $categories= Topic::orderBy('topic_id','desc')->paginate(5);
        // dd($categories->toArray());
        return view('admin.category.list',compact('categories'));
    }
    //direct create topic page
    public function createPage(){
        return view('admin.category.create');
    }

    //create new topic
    public function create(Request $request){
        $this->categoryValidateCheck($request);
        $data=$this->requestTopicData($request);
        // dd($data);
        Topic::create($data);
        return redirect()->route('admin#listPage');
    }

    //delete topic
    public function delete($id){
        Topic::where('topic_id',$id)->delete();
        return back()->with(['deleteSuccess'=>'Topic Deleted!']);
    }

    //validate check
    private function categoryValidateCheck($request){
        Validator::make($request->all(),[
            'categoryName'=>'required|unique:topics,name'
        ])->validate();
    }//add comma with exprission you want

    //request data
    private function requestTopicData($request){
        return [
            'name'=>$request->categoryName
        ];
    }
}
