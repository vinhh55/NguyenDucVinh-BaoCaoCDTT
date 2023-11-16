@extends('layouts.admin')
@section('title','Thêm thương hiệu')
@section('content')
<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Add post</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Thêm thương hiệu</li>
                </ol>

              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-sm btn-danger">
                            <i class="fa fa-trash">Xóa</i>
                        </button>
                    </div>

                    <div class="col-md-6 text-right">
                      <button type="submit" class="btn bg-success">
                        <i class="fa-solid fa-save"></i> Lưu [Thêm] </button>
                      <a href="{{ route('post.index') }}" class="btn bg-success">
                        <i class="fa-solid fa-arrow-left"></i> Quay về danh sách </a>

                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        
                        <div class="mb-3">
                            <label for="title">Nội dung bài viết</label>
                            <input type="text" name="title" value="{{old('title')}}" id="title" class="form-control" placeholder="Nhập nội dung bài viết">
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('title')}}
                                </div>

                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="detail">Chi tiết bài viết</label>
                            <input type="text" name="detail" value="{{old('detail')}}" id="detail" class="form-control" placeholder="Nhập nội dung bài viết">
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('detail')}}
                                </div>

                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="type">Chi tiết bài viết</label>
                            <input type="text" name="type" value="{{old('type')}}" id="type" class="form-control" placeholder="Nhập nội dung bài viết">
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('type')}}
                                </div>

                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="metakey">Từ khóa tìm kiếm</label>
                            <textarea  name="metakey" id="metakey" class="form-control" placeholder="Từ khóa tìm kiếm">{{old('metakey')}}</textarea>
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('metakey')}}
                                </div>

                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="metadesc">Mô tả</label>
                            <textarea  name="metadesc" id="metadesc" class="form-control" placeholder="Mô tả">{{old('metadesc')}}</textarea>
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('metadesc')}}
                                </div>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-3">

                        <div class="mb-3">
                            <label for="topic_id">Mã bài viết</label>
                            <select name="topic_id" id="topic_id" class="form-control">
                                <option value="0">--Mã bài viết--</option>
                                {!! $http_topic_id !!}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image">Hình ảnh</label>
                            <input type="file" name="image" value="{{old('image')}}" id="image" class="form-control" placeholder="Thêm hình ảnh">

                        </div>
                        <div class="mb-3">
                            <label for="status">Trạng thái</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Xuất bản</option>
                                <option value="0">Chưa xuất bản</option>


                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->

        </section>
        <!-- /.content -->
      </div>
</form>


@endsection
