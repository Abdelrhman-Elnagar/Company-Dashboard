@php
    $active = 'company';
@endphp
@extends('layouts.admin.app')

@section('content_admin')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">صفحة الادمن</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">الشركات</a></li>
                            <li class="breadcrumb-item active">صفحة الادمن</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        {{-- table --}}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">الشركات</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{ route('companies.create') }}" type="button" class="btn btn-block btn-primary mb-3">اضافة شركة</a>
                <a href="{{ route('companies.create') }}" type="button" class="btn btn-block btn-success mb-3">تصدير باكسل</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الشركة</th>
                            <th>المالك</th>
                            <th>البريد الالكترونى</th>
                            <th>كلمة المرور</th>
                            <th>انتهاء الاشتراك</th>
                            <th>تفعيل</th>
                            <th>اجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ 1 }}</td>
                            <td>سيراميكا كليوباترا</td>
                            <td>منصور السعيد</td>
                            <td>manager@example.com</td>
                            <td>password</td>
                            <td>5/5/2030</td>
                            <td>
                                <div class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
                                    <label for="todoCheck2"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-row gap-2">
                                    <button type="button" class="btn btn-outline-warning btn-sm flex-fill">تعديل</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm flex-fill">حذف</button>
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- /.card-body -->

            {{-- pagination --}}
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>

        </div>



@endsection
