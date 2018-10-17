@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6" style="padding-left: 30px">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-green-sharp bold">Attendance</span>
                </div>
                <div class="table-toolbar">
                    <div class="pull-right">
                        <a href="{{ url('/attendances/create') }}" class="btn btn-sm btn-primary">
                            Add New
                        </a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <article>
                    <div id="reload">
                        <table class="table table-bordered" id="example">
                            <thead>
                                <tr role="row">
                                    <th>Serial No</th>
                                    <th>Student Name</th>
                                    <th>Class Name</th>
                                    <th>Subject Name</th>
                                    <th>Attendance</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attendances as $item)
                                    <tr class="item{{$item->id}}">
                                    <td class="text-center">{{ $loop->iteration or $item->id }}</td>
                                    <td>{{ $item->student->name }}</td>
                                    <td>{{ $item->class->name }}</td>
                                    <td>{{ $item->subject->name }}</td>
                                    <td>
                                        @if($item->is_present)
                                            Attended
                                        @else
                                            Absent
                                        @endif
                                    </td>
                                    <td>{{ $item->present_date }}</td>
                                    <td>
                                        <a href="{{ url('/attendances/' . $item->id) }}" title="View Attendance"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> View</button></a>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="{{ url('/attendances/' . $item->id . '/edit') }}" title="Edit Attendance"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        {!! Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['/attendances', $item->id],
                                            'style' => 'display:inline',
                                            'accept-charset'=>'UTF-8'
                                        ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => 'Delete Attendance',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
