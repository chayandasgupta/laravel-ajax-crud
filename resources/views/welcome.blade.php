@extends('layouts.app')
@section('main-content')
<div class="col-md-8 m-auto text-center">
 <h1 class="mb-5"><span class="text-danger">Laravel 8</span> Ajax CRUD Operation</h1>
 <a href="{{ route('student.index') }}">
     <button class="btn btn-info border-0">Student</button>
 </a>
</div>
@endsection