@extends('layouts.app')
@section('main-content')
<div class="col-md-10 m-auto">
    <div class="add-stu-button text-right">
        <button class="btn btn-success" id="addModal">Add new student</button>
    </div>
    
    <br>
    <div class="alert alert-success success-message d-none"></div>
    <br>
    <table  class="table table-bordered" id= "table" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Dept</th>
                <th>Shift</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($students as $key=>$student)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->dept }}</td>
                <td>{{ $student->shift }}</td>
                <td>
                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger action-btn" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                        
                    </form>
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-primary">
                        Edit
                    </a>
                </td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
    
    {{-- {{ $students->links() }} --}}
    @include('ajax');
    @include('partial.add-modal')
</div>
@endsection