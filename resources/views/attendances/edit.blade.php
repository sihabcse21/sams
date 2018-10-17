@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="portlet light">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption" style="padding-left: 30px">
                        <span class="caption-subject font-green-sharp bold">Attendance Edit</span>
                    </div>
                    <div class="table-toolbar">
                        <div class="pull-right">
                            <a href="{{ url('attendances') }}" class="btn btn-sm btn-primary">
                                List
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="portlet-body">
                <article>
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="row">
                        <div class="col-md-12" style="padding-left: 40px">
                             {!! Form::model($attendance, [
                                 'method' => 'PATCH',
                                 'url' => ['attendances', $attendance->id],
                                 'files' => true
                             ]) !!}

                             @include ('attendances.form', ['submitButtonText' => 'Update'])

                             {!! Form::close() !!}
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
@endsection
