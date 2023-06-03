@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="aler alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Edit Colors
                    <a href="{{ url('admin/colors/create') }}" class="btn btn-danger float-end">
                        BACK
                    </a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/colors/'.$color->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Color Name</label>
                    <input type="text" name="name" value="{{ $color->name }}" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Color Code</label>
                    <input type="text" name="code" value="{{ $color->code }}" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Status</label><br/>
                    <input type="checkbox" name="status" {{ $color->status ? 'checked':'' }} style="width:30px; height:30px;" /> Checked= Hidden, Uncheck= Visible
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection