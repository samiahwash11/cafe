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
                            <form class="form-horizontal " action="{{ route('product.store') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body ">
                                    <div class="row g-4 mt-1">
                                        <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                                            <div class="form-floating input-group">
                                                <span class="input-group-text" id="">
                                                    <i class="fa-solid fa-image"></i>
                                                </span>
                                                <select class="form-control" name="category_id" required>

                                                    <option value="">اختر التصنيف </option>
                                                    @foreach($product_categories as $product_category)
                                                    <option value="{{$product_category->id}}">{{$product_category->name}} </option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                                            <div class="form-floating input-group">
                                                <span class="input-group-text" id="">
                                                    <i class="fa-solid fa-building-columns"></i>
                                                </span>
                                                <input type="text" class="form-control" id="name"
                                                       placeholder="الاسم " name="name">
                                                <label for="ar-name" class="col-form-label"> اسم المنتج
                                                     </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                                            <div class="form-floating input-group">
                                                <span class="input-group-text" id="">
                                                    <i class="fa-solid fa-building-columns"></i>
                                                </span>
                                                <input type="text" class="form-control text-start" id="price"
                                                       placeholder="السعر " name="price">
                                                <label for="price" class="col-form-label">  السعر
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


                                </div> <!-- /.card-footer -->
                                    <div class="card-footer">
                                        <button type="submit"
                                                class="btn btn-sm  text-success mr-2 mx-0 hint--right" aria-label="حفظ">
                                            <i class="fa-solid fa-check"></i>
                                            save
                                        </button>
                                    </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header header-bg">
                                        <h3 class="card-title header-title ">
                                            <img src="{{ asset('public/images/sidebarIcons/application.png') }}" class="ms-2"
                                                 width="20" alt="" />
                                            تجميع الصنف
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    {{-- start card --}}
                                    <div class="row mt-2">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class=" ">
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <div id="example5_wrapper" class="dataTables_wrapper no-footer">
                                                            <table id="example5"
                                                                   class="table table-bordered table-striped dataTable dtr-inline"
                                                                   style="min-width: 845px" role="grid"
                                                                   aria-describedby="example5_info">
                                                                <thead>
                                                                <tr role="row">

                                                                    <th class="sorting sorting_asc" tabindex="0"
                                                                        aria-label="Rendering engine: activate to sort column descending">
                                                                        #
                                                                    </th>
                                                                    <th tabindex="0" aria-controls="example1"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="Browser: activate to sort column ascending">
                                                                        النوع
                                                                    </th>
                                                                    <th tabindex="0" aria-controls="example1"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="Browser: activate to sort column ascending">
                                                                        اسم الصنف
                                                                    </th>
                                                                    <th tabindex="0" aria-controls="example1"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="Browser: activate to sort column ascending">
                                                                        الكــــــود
                                                                    </th>
                                                                    <th tabindex="0" aria-controls="example1"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="Browser: activate to sort column ascending">
                                                                        سعر
                                                                    </th>
                                                                    <th tabindex="0" aria-controls="example1"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="Browser: activate to sort column ascending">
                                                                        الصورة
                                                                    </th>
                                                                    <th tabindex="0" aria-controls="example1"
                                                                        rowspan="1" colspan="1"
                                                                        aria-label="Engine version: activate to sort column ascending">
                                                                        عمليات
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($products as $assembling)
                                                                    <tr role="row" class="odd">
                                                                        <td class="dtr-control sorting_1" tabindex="0">
                                                                            {{ $loop->iteration }}</td>
                                                                        <td>{{ $assembling->category?->name }}</td>
                                                                        <td>
                                                                            {{ $assembling->name }}
                                                                        </td>
                                                                        <td class="text-center">
                                                                        <span
                                                                            style="color: blue;font-size: 15px;font-weight: 600">
                                                                            {{ $assembling->price ?? '----' }}
                                                                        </span>
                                                                        </td>
                                                                        <td>
                                                                        <span class="bg-success text-white p-2 rounded">
                                                                            {{ $assembling->price }}
                                                                        </span>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <button type="button"
                                                                                    class="btn btn-outline-success hint--right "
                                                                                    aria-label="  صوره الصنف"
                                                                                    data-toggle="modal"
                                                                                    data-target="#modalphoto{{ $assembling->id }}">
                                                                                <i class="fa-solid fa-file-image"></i>
                                                                            </button>
                                                                            {{-- modal  photo --}}
                                                                            <div class="modal fade"
                                                                                 id="modalphoto{{ $assembling->id }}"
                                                                                 tabindex="-1"
                                                                                 aria-labelledby="exampleModalLabel"
                                                                                 aria-hidden="true">
                                                                                <div
                                                                                    class="modal-dialog modal-dialog-centered">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="exampleModalLabel">
                                                                                                <img src="{{ asset('public/images/sidebarIcons/picture.png') }}"
                                                                                                     class="ms-2"
                                                                                                     width="20"
                                                                                                     alt="" />
                                                                                                صوره الصنف
                                                                                            </h5>
                                                                                            <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <img src="{{ asset('/public/category/images' . \Illuminate\Support\Facades\Storage::url($assembling->photo)) }}"
                                                                                                 class="w-100">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-center">
                                                                            <a type="button"
                                                                               class="btn btn-edite lordicon hint--right"
                                                                               aria-label="تعديل"
                                                                               href="#">
                                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                                            </a>
                                                                            <a type="button"
                                                                               class="btn  btn-outline-danger lordicon  hint--right"
                                                                               aria-label="حذف "
                                                                               href="#">
                                                                                <i class="fa-solid fa-trash"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> {{-- end card --}}
                            </div>
                        </div>
                        </div>
                        </div>





























@endsection
