@extends('layouts.app')

<title>Attendance Report</title>
@section('content')
    <div class="row wrapper border-bottom page-heading">
        <div class="col-sm-4">
            <h2>Attendance Report</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{!! url('/home') !!}">Home</a>
                </li>
                <li class="active">
                    <strong>Attendance Report</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="ibox float-e-margins">
            <div class="ibox-title city-custom">
                <h5>Filter</h5>
            </div>

            <div class="ibox-content form-horizontal">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group {{ $errors->has('class_id') ? 'has-error' : ''}}">
                            <label for="class_id" class="control-label"><span style="color:red">*</span>&nbsp;Class</label>
                            {!! Form::select('class_id', $classes, null, [
                                'class' => 'form-control select2',
                                'id' => 'class_id',
                                'placeholder' => __('Select')
                            ]) !!}
                            {!! $errors->first('class_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group {{ $errors->has('subject_id') ? 'has-error' : ''}}">
                            <label for="subject_id" class="control-label"><span style="color:red">*</span>&nbsp;Subject</label>
                            {!! Form::select('subject_id', $subjects, null, [
                                'class' => 'form-control select2',
                                'id' => 'subject_id',
                                'placeholder' => __('Select')
                            ]) !!}
                            {!! $errors->first('subject_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group {{ $errors->has('present_date') ? 'has-error' : ''}}">
                            <label for="present_date" class="control-label"><span style="color:red">*</span>&nbsp;Today Date</label>
                            {!! Form::text('present_date', date('Y-m-d'), [
                                'class' => 'form-control date',
                                'id' => 'present_date',
                                'required' => 'required'
                                ]) !!}
                            {!! $errors->first('present_date', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="action_button" style="float: right">
                    <a class="btn btn-primary" id="btn_filter">Search</a>
                </div>

                <div class="row"></div>

            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Attendance Report</h5>
                            <div class="ibox-tools">
                            </div>
                        </div>

                        <div class="ibox-content" id="content_list">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#btn_filter').click(function () {
                contents = $('#content_list');
                contents.empty();
                $.ajax({
                    type    : "get",
                    url     : "filtered_data",
                    data    : {
                        'class_id'      : $('#class_id').val(),
                        'subject_id'    : $('#subject_id').val(),
                        'present_date'  : $('#present_date').val(),
                    },
                    dataType: "html",
                    success : function (data) {
                        contents.html(data);

                    }
                }).fail(function (error_response) {
                    $('#error_span').text('Please Fill up all required field(s)');
                });
            });
        });
    </script>
@endsection
