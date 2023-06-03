@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="aler alert-success p-5">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Edit Sliders
                        <a href="{{ url('admin/sliders/') }}" class="btn btn-danger float-end">
                            BACK
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/sliders/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $slider->title }}" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-control" rows="3">{{ $slider->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" />
                            <img src="{{ asset("$slider->image") }}" style="width:50px; height:50px;" alt="Slider">
                        </div>
                        <div class="mb-3">
                            <label>Status</label><br />
                            <input type="checkbox" name="status" {{ $slider->status == '1' ? 'checked':'' }} style="width:30px; height:30px;" /> 
                            Checked= Hidden,
                            Uncheck= Visible
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
