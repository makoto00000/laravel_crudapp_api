<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return response()->json([
            'data' => $students
        ], 200);
    }

    public function store(Request $request) {
        $student = new Student();
        $student->name = $request->name;
        $student->save();
        return response()->json([
            'data' => $student
        ], 201);
    }

    public function edit($id) {
        $student = Student::find($id);
        return response()->json([
            'data' => $student
        ], 200);
    }

    // このように書いても良い。
    // $studentが存在しないとき404を返すので、そうではなく処理を追加したいならfindを使う。
    // public function edit(Student $student) {
    //     return response()->json([
    //         'data' => $student
    //     ], 200);
    // }

    public function update(Request $request, Student $student) {

        // Modelでfillableを設定していても以下のようにonlyで指定しておく。
        // 例えばfillableではnameとemailを許可していて、nameだけを更新したいときに、allにするとemailも更新できてしまう。
        $attributes = $request->only(['name']);
        $student->update($attributes);

        // 即更新
        // $student->update($request->all());

        // saveが必要
        // $student->fill($request->all());
        // $student->save();

        return response()->json([
            'data' => $student
        ], 200);
    }

    public function delete(Student $student) {
        $student->delete();
        $student->save();
        return response()->json([
            'data' => $student
        ], 200);
    }
}
