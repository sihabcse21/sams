
<div class="form-group {{ $errors->has('class_id') ? 'has-error' : ''}}">
    <label for="class_id" class="control-label"><span style="color:red">*</span>&nbsp;Class</label>
    {!! Form::select('class_id', $classes, null, [
        'class' => 'form-control select2',
        'required' => 'required',
        'placeholder' => __('Select')
    ]) !!}
    {!! $errors->first('class_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('subject_id') ? 'has-error' : ''}}">
    <label for="subject_id" class="control-label"><span style="color:red">*</span>&nbsp;Subject</label>
    {!! Form::select('subject_id', $subjects, null, [
        'class' => 'form-control select2',
        'required' => 'required',
        'placeholder' => __('Select')
    ]) !!}
    {!! $errors->first('subject_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('student_id') ? 'has-error' : ''}}">
    <label for="student_id" class="control-label"><span style="color:red">*</span>&nbsp;Student</label>
    {!! Form::select('student_id', $students, null, [
        'class' => 'form-control select2',
        'required' => 'required',
        'placeholder' => __('Select')
    ]) !!}
    {!! $errors->first('student_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('present_date') ? 'has-error' : ''}}">
    <label for="present_date" class="control-label"><span style="color:red">*</span>&nbsp;Today Date</label>
    {!! Form::text('present_date', date('Y-m-d'), [
        'class' => 'form-control date',
        'id' => 'present_date',
        'required' => 'required'
        ]) !!}
    {!! $errors->first('present_date', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('is_present') ? 'has-error' : ''}}">
    <label for="is_present" class="control-label"><span style="color:red">*</span>&nbsp;Is Attend</label>
    {!! Form::checkbox('is_present', null, [
        'class' => 'form-control',
        'id' => 'is_present',
        'required' => 'required'
        ]) !!}
    {!! $errors->first('is_present', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-md btn-success']) !!}
</div>

<script>
    $(document).ready(function () {
        $('#present_date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
