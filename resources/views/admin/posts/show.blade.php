@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2">{{ $post->title }}</h1>
                    <a href="{{route ('admin.post.edit', $post->id) }}" class="text-success">
                        <i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ route('admin.post.delete', $post->id) }}"
                          method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fas fa-trash text-danger" role="button"></i>
                        </button>
                    </form>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{ $post->title }}</li>
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
<!--                <div class="col-1">-->
<!--                    <a href="{{ route('admin.category.create') }}" class="btn btn-block btn-primary">Add</a>-->
<!--                </div>-->
            </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $post->id }}</td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td>{{ $post->title }}</td>
                                </tr>
                                <tr>
                                    <td>Url</td>
                                    <td>{{ $post->url }}</td>
                                </tr>

                                </tbody>
                            </table>



                        </div>
                        </div>
                    <div>
                        <h5>Content</h5>
                    </div>
                    {!! $post->content !!}
                    </div>
                </div>

            </div>
            <!-- /.row -->
    <!-- /.content -->
<!-- /.content-wrapper -->
@endsection
