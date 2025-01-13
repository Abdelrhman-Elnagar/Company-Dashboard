@php
    $active = 'company';
@endphp

@extends ('layouts.admin.app')

@section('content_admin')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة شركة</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('companies.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>الشركة</label>
                            <input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}">
                        </div>
                        @error('company_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>البريد الالكترونى</label>
                            <input type="email" name="company_email" class="form-control" value="{{ old('company_email') }}">
                        </div>
                        @error('company_email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>المالك</label>
                            <input type="text" name="owner_name" class="form-control" value="{{ old('owner_name') }}">
                        </div>
                        @error('owner_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>مدة الاشتراك</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" name="company_subscribe" class="form-control datepicker" value="{{ old('company_subscribe') }}">
                            </div>
                            @error('company_subscribe')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>حالة الشركة</label>
                            <select class="form-control" name="company_status">
                                <option value="تفعيل" {{ old('company_status') == 'تفعيل' ? 'selected' : '' }}>تفعيل</option>
                                <option value="تعطيل" {{ old('company_status') == 'تعطيل' ? 'selected' : '' }}>تعطيل</option>
                            </select>
                        </div>
                        @error('company_status')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>كلمة السر</label>
                            <input type="password" name="company_password" class="form-control">
                        </div>
                        @error('company_password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-3">حفظ</button>
                <a action="{{ url()->previous() }}" type="button" class="btn btn-secondary btn-block mb-3">الغاء</a>
            </form>
        </div>
    </div>


    {{-- <script>
        $(document).ready(function () {
            $('#reservation').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                }
            });
        });
    </script> --}}

@endsection
