<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::where("status", '=', "waiting")->get();
        return view("task.index")->with("tasks", $tasks);
    }
    public function index2()
    {
        $tasks = Task::where("status", '=', "approve")->get();
        return view("task.indexapprove")->with("tasks", $tasks);
    }

    public function create()
    {
        return view("task.create");

    }

    public function store(Request $request)
    {
        $request->validate([
            "fullNameAr" => "required",
            "fullNameEn" => "required",
            "notionalId" => "required",
            "workStation" => "required",
            "email" => "required|unique:tasks,email|email",
            "phone" => "required|min:11|max:12",
            "whatsAppNumber" => "required|min:11|max:12",
            "educationdegree" => "required",
            "mejor" => "required",
            "mejor2" => "required",
            "joinDate" => "required",
            "reashrchType" => "required",
            "GPA" => "required|numeric",
            "reasarchNameAr" => "required",
            "reasarchNameEn" => "required",
            "superNameAr" => "required",
            "orgSuperName" => "required",
            "superAssestNameEn" => "required",
            "orgnizationName" => "required",
            "numberOfApprove" => "required|numeric",
        ]);
        $task = new Task();
        $task->fullNameAr = $request->fullNameAr;
        $task->fullNameEn = $request->fullNameEn;
        $task->notionalId = $request->notionalId;
        $task->workStation = $request->workStation;
        $task->email = $request->email;
        $task->phone = $request->phone;
        $task->whatsAppNumber = $request->whatsAppNumber;
        $task->educationdegree = $request->educationdegree;
        $task->mejor = $request->mejor;
        $task->mejor2 = $request->mejor2;
        $task->joinDate = $request->joinDate;
        $task->reashrchType = $request->reashrchType;
        $task->GPA = $request->GPA;
        $task->reasarchNameAr = $request->reasarchNameAr;
        $task->reasarchNameEn = $request->reasarchNameEn;
        $task->superNameAr = $request->superNameAr;
        $task->orgSuperName = $request->orgSuperName;
        $task->superAssestNameEn = $request->superAssestNameEn;
        $task->orgnizationName = $request->orgnizationName;
        $task->numberOfApprove = $request->numberOfApprove;

        $task->save();
        return redirect()->back()->with("Done", "تم ارسال بياناتك بنجاح");
    }

    public function show($id)
    {
        $item = Task::find($id);
        return view("task.show")->with("item", $item);

    }

    public function approve($id)
    {
        $item = Task::find($id);
        $item->status= "approve";
        $item->save();
        return redirect()->back()->with("Done", "تم الموافقه علي الطلب");
    }
    public function refuse($id)
    {
        $item = Task::find($id);
        $item->status= "waiting";
        $item->save();
        return redirect()->back()->with("Done", "تم رفض الطلب");
    }


}
