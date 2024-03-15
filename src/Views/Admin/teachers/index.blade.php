@extends('layouts.master')

@section('title')
    Giáo Viên | Danh sách giáo viên
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Giáo Viên /</span><span> Danh sách giáo viên</span>
        </h4>
        <div class="alert alert-danger text-uppercase" role="alert">
            <strong> Danh sách giáo viên</strong>
        </div>
        <div class="card">
            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header d-flex border-top rounded-0 flex-wrap py-md-2 justify-content-between ">
                        <div class="me-5 ms-n2">
                            <form action="javascript:void(0);" method="post">
                                <div class="dataTables_filter">
                                    <label>
                                        <input type="search" class="form-control" name="name" id="search"
                                            placeholder="Tìm Kiếm">
                                    </label>
                                    <button type="submit" name="listok" id="search" class="btn btn-info ms-3">Tìm
                                        kiếm</button>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">
                            <div
                                class="dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0 gap-3 pt-0">
                                <div class="dt-buttons d-flex flex-wrap">
                                    <button class="dt-button add-new btn btn-primary waves-effect waves-light"
                                        type="button">
                                        <span>
                                            <a href="teacher/create" class="menu-link" style="color: rgb(255, 255, 255)">
                                                <i class="mdi mdi-plus me-0 me-sm-1"></i>Thêm Giáo Viên
                                            </a>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-products table dataTable no-footer dtr-column mx-auto" id="DataTables_Table_0">
                        <thead class="table-light">
                            <tr>
                                <th class="sorting sorting_asc" rowspan="1" colspan="1" style="width: 6px;">
                                    ID
                                </th>
                                <th class="sorting" rowspan="1" colspan="1" style="width: 150px;">
                                    Name
                                </th>
                                <th class="sorting" rowspan="1" colspan="1" style="width: 130.917px;">
                                    Email
                                </th>
                                <th class="sorting" rowspan="1" colspan="1" style="width: 100px;">
                                    Teacher
                                </th>
                                <th class="sorting" rowspan="1" colspan="1" style="width: 100px;">
                                    Địa Chỉ
                                </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 200px;">Control
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td> {{ $teacher['p_id'] }} </td>
                                    <td> {{ $teacher['p_name'] }} </td>
                                    <td> {{ $teacher['p_email'] }} </td>
                                    <td> {{ $teacher['c_teaching'] }} </td>
                                    <td> {{ $teacher['p_address'] }} </td>
                                    <td>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Cập nhật thông tin giáo viên"
                                            href="/admin/teacher/{{ $teacher['p_id'] }}/update" class="btn btn-warning">
                                            <span class="mdi mdi-pencil"></span>
                                        </a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Xem thông tin giáo viên"
                                            href="/admin/teacher/{{ $teacher['p_id'] }}/show" class="btn btn-info">
                                            <span class="mdi mdi-eye"></span>
                                        </a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Xóa giáo viên"
                                            href="javascript:void(0);" class="btn btn-danger"
                                            onclick="confirmDelete('{{ $teacher['p_id'] }}')">
                                            <span class="mdi mdi-delete-circle"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
