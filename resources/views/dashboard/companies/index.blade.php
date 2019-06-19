@extends('dashboard.metronic')
@section('title', ' جدول المستخدمين')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection
<!-- END CSS -->
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('admin')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('companies.index')}}">الشركات</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> الشركات </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">جدول الشركات</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_company"> أضافة شركة
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="companies-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>الأسم</th>
                        <th>Name</th>
                        <th>العمليات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->ar_name}}</td>
                        <td>{{$company->en_name}}</td>
                        <td>
                            <form action="{{route('companies.destroy', $company->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('companies.edit', $company->id)}}"
                                    class="btn dark btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit"> تعديل </i>
                                </a>
                                <button type="submit" class="btn red btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit">حذف</i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END TABLE -->
    </div>
</div>
<!-- END DATATABLE -->

<!-- BEGIN ADD_company MODEL -->
<div class="modal fade in" id="add_company">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">أضافة مستخدم</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('companies.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>الأسم</label>
                        <input type="text" name="ar_name" class="form-control" placeholder="الأسم" required>


                        <label>الملف الشخصي</label>
                        <textarea name="ar_profile" class="form-control ck_editor" >{{old('ar_profile')}}</textarea>
                        
                        <label>Name</label>
                        <input type="text" name="en_name" class="form-control" placeholder="Name" required>

                        <label>Profile</label>
                        <textarea name="en_profile" class="form-control ck_editor" >{{old('en_profile')}}</textarea>
                        
                        <div class="col-md-3"> 
                            <label>Happy & Customers</label>
                            <input name = "happy_co" type = 'number' class ="form-control" placeholder = "" ></div>
                        <div class="col-md-3">
                             <label>Project Successful</label>
                             <input name = "project_succ" type = 'number' class ="form-control" placeholder = "" ></div>
                        <div class="col-md-3">
                             <label>Years of Experienced</label>
                             <input name = "years" type = 'number' class ="form-control" placeholder = "" ></div>
                        <div class="col-md-3">
                            <label>Professional Expert</label>
                             <input name ="professional" type = 'number' class ="form-control" placeholder = "" ></div>

                    </div>
                    <div class="margin-top-10">
                        <button type="submit" class="btn btn-outline sbold green">أضافة</button>
                        <button type="button" class="btn btn-outline sbold red" data-dismiss="modal">أغلاق</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- BEGIN ADD_company MODEL -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/js/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#companies-table').DataTable();
    });

</script>
@endsection
<!-- END SCRIPTS -->
