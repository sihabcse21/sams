<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\SchClass;
use App\Student;
use App\Subject;
use Illuminate\Http\Request;
use Auth;
use DB;

class AttendancesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances = Attendance::all();

        return view('attendances.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes  = SchClass::options();
        $subjects = Subject::options();
        $students = Student::options();

        return view('attendances.create', compact('classes', 'subjects', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$requestData = $request->all();
        //Attendance::create($requestData);

        DB::transaction(function () use ($request) {
            if ($request->input('is_present')) {
                $request->request->add(['is_present' => 1]);
            } else {
                $request->request->add(['is_present' => 0]);
            }
            $request->request->add(['created_by' => Auth::id()]);
            $request->request->add(['updated_by' => Auth::id()]);
            Attendance::create($request->all());
        });

        return redirect('attendances');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        return view('attendances.show', compact('attendance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        $classes  = SchClass::options();
        $subjects = Subject::options();
        $students = Student::options();

        return view('attendances.edit', compact('attendance','classes', 'subjects', 'students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //$requestData = $request->all();
        //$attendance->update($requestData);

        DB::transaction(function () use ($request, $attendance) {
            if ($request->input('is_present')) {
                $request->request->add(['is_present' => 1]);
            } else {
                $request->request->add(['is_present' => 0]);
            }
            $request->request->add(['updated_by' => Auth::id()]);
            $attendance->update($request->all());
        });

        return redirect('attendances');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Attendance::destroy($id);

        return redirect('attendances');
    }

    /*Attendance Report Date, Class and Subject Wise*/
    public function AttendanceReport(){
        $classes  = SchClass::options();
        $subjects = Subject::options();

        return view('reports.report_filter', compact('classes', 'subjects'));
    }

    public function AttendanceReportData(Request $request){
        $class_id   = $request->input('class_id');
        $subject_id = $request->input('subject_id');
        $present_date = $request->input('present_date');
        $data  = Attendance::all()->where('class_id', $class_id)->where('subject_id', $subject_id)->where('present_date', $present_date);

        return view('reports.filtered_data', compact('data'));
    }

}
