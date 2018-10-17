@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption" style="padding-left: 30px">
                            <span class="caption-subject font-green-sharp bold">Attendance Show</span>
                        </div>
                        <div class="table-toolbar">
                            <div class="pull-right">
                                <a href="{{ url('/attendances') }}" class="btn btn-sm btn-primary">
                                    List
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="portlet-body">
                    <article>
                        <div class="row">
                            <div class="col-md-12" style="padding-left: 40px">
                        <a href="{{ url('/attendances') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        <a href="{{ url('/attendances/' . $attendance->id . '/edit') }}" title="Edit Attendance"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['attendances', $attendance->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Attendance',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>Student Name</th>
                                        <td> {{ $attendance->student->name }} </td>
                                    </tr>
                                    <tr>
                                        <th>Class Name</th>
                                        <td> {{ $attendance->class->name }} </td>
                                    </tr>
                                    <tr>
                                        <th>Subject Name</th>
                                        <td> {{ $attendance->subject->name }} </td>
                                    </tr>
                                    <tr>
                                        <th>Attendance</th>
                                        <td>
                                            @if($attendance->is_present)
                                                Attended
                                            @else
                                                Absent
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
