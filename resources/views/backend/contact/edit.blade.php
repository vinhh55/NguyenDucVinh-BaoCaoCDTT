@extends('layouts.admin')
@section('title','Thêm thương hiệu')
@section('content')
<form action="{{route('contact.update',['contact'=>$contact->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Add contact</h1>
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
                      <a href="{{ route('contact.index') }}" class="btn bg-success">
                        <i class="fa-solid fa-arrow-left"></i> Quay về danh sách </a>

                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label for="name">Tên liên hệ</label>
                            <input type="text" name="name" value="{{old('name',$contact->name)}}" id="name" class="form-control" placeholder="Nhập tên danh mục">
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('name')}}
                                </div>

                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="metakey">Từ khóa tìm kiếm</label>
                            <textarea type="text" name="metakey" id="metakey" class="form-control" placeholder="Từ khóa tìm kiếm">{{old('metakey',$contact->metakey)}}</textarea>
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('metakey')}}
                                </div>

                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="metadesc">Mô tả</label>
                            <textarea type="text" name="metadesc" id="metadesc" class="form-control" placeholder="Mô tả">{{old('metadesc',$contact->metadesc)}}</textarea>
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('metadesc')}}
                                </div>

                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <textarea type="text" name="email" id="email" class="form-control" placeholder="Chi tiết">{{old('email',$contact->email)}}</textarea>
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('email')}}
                                </div>

                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="phone">Số điện thoại</label>
                            <textarea type="text" name="phone" id="phone" class="form-control" placeholder="5$">{{old('phone',$contact->phone)}}</textarea>
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('phone')}}
                                </div>

                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <textarea type="text" name="title" id="title" class="form-control" placeholder="5$">{{old('title',$contact->title)}}</textarea>
                            @if ($errors->any())
                            <div class="text-danger">
                                {{$errors->first('title')}}
                            </div>

                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="content">Nội dung phản hồi</label>
                            <textarea type="text"  name="content" id="content" class="form-control" placeholder="5$">{{old('content',$contact->content)}}</textarea>
                            @if ($errors->any())
                            <div class="text-danger">
                                {{$errors->first('content')}}
                            </div>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="user_id">Mã người dùng</label>
                            <select name="user_id" id="user_id" required class="form-control">
                                <option value="{{old('content',$contact->user_id)}}">--chon mã--</option>
                                {{!!$html_user_id!!}}
                            </select>
                            @if ($errors->has('user_id'))
                                <div class="text-danger">
                                    {{$errors->first('user_id')}}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="sort_order">Vị trí sắp xếp</label>
                            <select name="sort_order" id="sort_order" class="form-control">
                                <option value="{{old('content',$contact->sort_order)}}">--Vị trí sắp xếp--</option>
                                {!! $html_sort_order !!}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="replay_id">Tên liên hệ</label>
                            <input type="text" name="replay_id" value="{{old('replay_id',$contact->replay_id)}}" id="replay_id" class="form-control" placeholder="Nhập tên danh mục">
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('replay_id')}}
                                </div>

                            @endif
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
