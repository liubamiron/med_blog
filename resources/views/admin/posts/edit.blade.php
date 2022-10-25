@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-12">
                        <form action="{{route('admin.post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group w-25">
                            <input type="text" class="form-control" name="title" placeholder="post title"
                            value="{{ $post->title }}"
                            >
                            @error('title')
                            <div class="text-danger">It's necessary to be a title</div>
                            @enderror
                        </div>

                            <div class="form-group w-50">
                            <textarea id="summernote" name="content">
                                {{$post->content}}
                            </textarea>
                                @error('content')
                                <div class="text-danger">It's necessary to be a post</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Add preview</label>
                                <div class="w-25 mb-3">
                                    <img src="{{ url('storage/' .$post->preview_image) }}" alt="preview_image" class="w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label">Choose image</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">It's necessary to be an image</div>
                                @enderror
                            </div>
                            <div class="form-group w-50 mb-3">
                                <label for="exampleInputFile">Add image</label>
                                <div class="w-30">
                                    <img src="{{ url('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label">Choose image</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">It's necessary to be an image</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Select the category</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                            {{ $category->id == $post->category_id ? ' selected' : '' }}
                                        >{{$category->title}}</option>
                                    @endforeach

                                </select>

                            </div>

                        <input type="submit" class="btn btn-primary" value="Save">
                    </form>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
