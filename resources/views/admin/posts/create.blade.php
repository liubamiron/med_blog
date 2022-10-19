@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add posts</h1>
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
                        <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group w-25">
                            <input type="text" class="form-control" name="title" placeholder="post title"
                            value="{{old('title')}}">
                        @error('title')
                            <div class="text-danger">It's necessary to be a title</div>
                                 @enderror
                        </div>


                        <div class="form-group w-50">
                            <textarea id="summernote" name="content">
                                {{old('content')}}
                            </textarea>
                            @error('content')
                            <div class="text-danger">It's necessary to be a post</div>
                                 @enderror
                        </div>
                        <div class="form-group w-50">
                            <label for="exampleInputFile">Add preview</label>
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
                          <div class="form-group w-50">
                            <label for="exampleInputFile">Add image</label>
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
                                        {{ $category->id == old('category_id') ? ' selected' : '' }}
                                >{{$category->title}}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
