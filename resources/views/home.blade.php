<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Logbooks</div>
                <div class="panel-body">
                    <form action="{{route('logbook.show')}}" method="post">
                        <div class="form-group">
                            @csrf
                        </div>
                        <div class="form-group">
                            <label for="logbook">Select logbook:</label>
                            <select class="form-control" name="logbook">
                                @foreach $logbooks as $logbook
                                <option value="{{$logbook}}">{{$logbook}}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
