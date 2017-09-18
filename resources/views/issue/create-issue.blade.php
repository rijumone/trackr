@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Create issue</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('create-issue-submit') }}" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="assignee">Assignee:</label>
                        <input type="text" class="form-control" id="assignee" name="assignee">
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description:</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tentative_date">Tentative Date:</label>
                        <input type="date" class="form-control" id="tentative_date" name="tentative_date">
                    </div>
                    <!-- <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div> -->
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
