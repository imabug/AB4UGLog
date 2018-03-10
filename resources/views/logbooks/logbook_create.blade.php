<!-- resources/views/logbooks/logbook_create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Logbooks</div>
                <div class="panel-body">
                    <form class="" action="{{route('logbook.store')}}" method="post">
                        <div class="form-group">
                            @csrf
                        </div>
                        <div class="form-group">
                            <label for="logname">Create new logbook: </label>
                            <input class="form-control" type="text" id="logname" name="logname" size="30">
                        </div>
                        <div class="form-group">
                            <button class="form-control" type="SUBMIT">Create logbook</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
