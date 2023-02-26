@extends('backend.app')
@section('backend_content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add Post</h5>
                <small class="text-muted float-end btn btn-outline-light"><a href="{{ route('post.index') }}">All
                        Post</a></small>
            </div>
            <div class="card-body">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Post Title</label>
                        <input type="text" name="title" class="form-control" id="basic-default-fullname"
                            placeholder="man">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Post Discription</label>
                        <textarea name="content" id="basic-default-message" class="form-control"
                            placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Post Image</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Select Categories</label>
                        <select name="category_id" id="defaultSelect" class="form-select">
                            <option>Default select</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Post Status</label>
                        <div class="form-check">
                            <input class="form-check-input" name="status" value="published" type="checkbox"
                                id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck3"> Active </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Post Fetuerd</label>
                        <div class="form-check">
                            <input class="form-check-input" name="is_featured" value="1" type="checkbox"
                                id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck3">featured </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
