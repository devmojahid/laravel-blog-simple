@extends('backend.app')
@section('backend_content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Update Category</h5>
                <small class="text-muted float-end btn btn-outline-light"><a href="{{ route('category.index') }}">Update
                        Category</a></small>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update',$category->slug) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Category Title</label>
                        <input type="text" name="title" class="form-control" id="basic-default-fullname"
                            placeholder="man" value="{{ $category->title }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Category Discription</label>
                        <textarea name="description" id="basic-default-message" class="form-control"
                            placeholder="Hi, Do you have a moment to talk Joe?">{{ $category->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Category Image</label>
                        <input class="form-control" value="{{ $category->image }}" name="image" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Category Status</label>
                        <div class="form-check">
                            <input class="form-check-input" @if ($category->status == 'active') checked @endif name="status" value="active" type="checkbox" id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck3"> Active </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
