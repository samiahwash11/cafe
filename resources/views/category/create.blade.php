@extends('product.layout')
@section('title')
    اضافه تصنف
@endsection
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <!-- Main content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="card-header header-bg">
                                <h3 class="card-title header-title "><i class="fas fa-server  ml-2"></i> اضافة تصنف
                                    جديد </h3>
                            </div>
                             @include('product.layout')
                            <form class="form-horizontal " action="{{ route('category.store') }}" method="POST"
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
                                                       placeholder="الاسم " name="name">
                                                <label for="ar-name" class="col-form-label"> اسم
                                                     </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                                            <div class="form-floating input-group">
                                                <span class="input-group-text" id="">
                                                    <i class="fa-solid fa-image"></i>
                                                </span>
                                                <input type="file" class="form-control" id="photo"
                                                       placeholder="الصورة" name="photo" accept="image/*"
                                                       >
                                                <label for="photo" class="col-form-label">الصورة</label>
                                            </div>
                                        </div>
                                        <button type="submit" form="structure_print"
                                                class="btn btn-sm  text-success mr-2 mx-0 hint--right" aria-label="حفظ">
                                            <i class="fa-solid fa-check"></i>
                                        </button>
                                </div>
                                <div class="card-footer">
                                    <button type="submit"
                                            class="btn btn-sm  text-success mr-2 mx-0 hint--right" aria-label="حفظ">
                                        <i class="fa-solid fa-check"></i>
                                        save
                                    </button>
                                </div>
                            </form>





























@endsection
