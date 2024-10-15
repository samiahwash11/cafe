@extends('product.layout')
@section('title')
    اضافه صنف
@endsection
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <!-- Main content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header header-bg">
                                <h3 class="card-title header-title "><i class="fas fa-server  ml-2"></i> اضافة صنف
                                    جديد </h3>
                            </div>
                             @include('product.layout')
                            <form class="form-horizontal " action="{{ route('admin.blog.store') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body ">
                                    <div class="row g-4 mt-1">
                                        <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                                            <div class="form-floating input-group">
                                                <span class="input-group-text" id="">
                                                    <i class="fa-solid fa-building-columns"></i>
                                                </span>
                                                <input type="text" class="form-control" id="name"
                                                       placeholder="الاسم " name="name_ar">
                                                <label for="ar-name" class="col-form-label"> اسم المنتج
                                                     </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                                            <div class="form-floating input-group">
                                                <span class="input-group-text" id="">
                                                    <i class="fa-solid fa-building-columns"></i>
                                                </span>
                                                <input type="text" class="form-control text-start" id="name"
                                                       placeholder="الاسم " name="name_en">
                                                <label for="ar-name" class="col-form-label">  السعر
                                                     </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                                            <div class="form-floating input-group">
                                                <span class="input-group-text" id="">
                                                    <i class="fa-solid fa-image"></i>
                                                </span>
                                                <input type="file" class="form-control" id="file"
                                                       placeholder="الصورة" name="photo" accept="image/*"
                                                       onchange="showPhoto(this)" required>
                                                <label for="site" class="col-form-label">الصورة</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                                            <div class="form-floating input-group">
                                                <span class="input-group-text" id="">
                                                    <i class="fa-solid fa-image"></i>
                                                </span>
                                                <select class="form-control" name="tag_id" required>

                                                    <option value="">اختر التصنيف </option>
                                                </select>
                                                <label for="site" class="col-form-label"> التصنيفات ( tags)</label>
                                            </div>
                                        </div>

                                </div> <!-- /.card-footer -->
                            </form>





























@endsection
