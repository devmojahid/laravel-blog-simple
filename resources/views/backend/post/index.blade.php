@extends("backend.app")
@section("backend_content")
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">All posts</h5>
        <small class="text-muted float-end btn btn-outline-light"><a href="{{ route("post.create") }}">Add post</a></small>
      </div>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>SI.</th>
            <th>Title</th>
            <th>Image</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($posts as $post)
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $post->id }}</strong></td>
            <td>{{ $post->title }}</td>
            <td><img width="50px" height="50px" src="{{ asset('storage/'.$post->image) }}" alt=""></td>

            <td><span class="badge bg-label-primary me-1">{{ $post->status }}</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu" style="">
                  <a class="dropdown-item" href="{{ route('post.edit',$post->slug) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="{{ route('post.delete',$post->slug) }}"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>

  @endsection
