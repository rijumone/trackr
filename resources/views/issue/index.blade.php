@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            @if ($issues->count())
            <div class="panel-heading">All issues</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
					    <thead>
					      <tr>
					        <th>Issue</th>
					        <th>Title</th>
					        <th>Description</th>
					      </tr>
					    </thead>
					    <tbody>
					    @foreach ($issues as $issue)
					      <tr>
					        <td>{{ $issue->id }}</td>
					        <td>{{ $issue->title }}</td>
					        <td>{{ str_limit($issue->description,200) }}</td>
					      </tr>
					    @endforeach
					    </tbody>
					  </table>
            </div>
            @else
            	No issues yet
            @endif
        </div>
    </div>
</div>
</div>
@endsection