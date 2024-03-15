@extends('layouts.mater');

@section('title')
    Danh sách Post
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Posts /</span><span> List</span>
        </h4>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Danh sách Posts</h5>
                <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                    <div class="col-md-4 product_status"></div>
                    <div class="col-md-4 product_category"></div>
                    <div class="col-md-4 product_stock"></div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header d-flex border-top rounded-0 flex-wrap py-md-2 justify-content-between ">
                        <div class="me-5 ms-n2">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                <label><input type="search" class="form-control" placeholder="Tìm Kiếm"
                                        aria-controls="DataTables_Table_0"></label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">
                            <div
                                class="dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0 gap-3 pt-0">
                                <div class="dt-buttons d-flex flex-wrap">
                                    <button class="dt-button add-new btn btn-primary waves-effect waves-light"
                                        tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                        <span>

                                            <a href="categorys/create" class="menu-link" style="color: rgb(255, 255, 255)">
                                                <i class="mdi mdi-plus me-0 me-sm-1"></i>Thêm Posts
                                            </a>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-products table dataTable no-footer dtr-column mx-auto" id="DataTables_Table_0"
                        aria-describedby="DataTables_Table_0_info">
                        <thead class="table-light">
                            <tr>
                                <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                    style="width: 19.45px; display: none;" aria-label="">
                                </th>
                                <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1"
                                    colspan="1" style="width: 19.45px;" data-col="1" aria-label=""><input
                                        type="checkbox" class="form-check-input">
                                </th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 11px;" aria-sort="ascending"
                                    aria-label="product: activate to sort column descending">ID
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 200px;"
                                    aria-label="category: activate to sort column ascending">Title
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 130.917px;"
                                    aria-label="category: activate to sort column ascending">Excerpt
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 50px;"
                                    aria-label="category: activate to sort column ascending">Image
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 10px;"
                                    aria-label="category: activate to sort column ascending">Category
                                </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 300px;"
                                    aria-label="stock">Control
                                </th>

                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td> {{ $post['p_id'] }} </td>
                                    <td> {{ $post['p_title'] }} </td>
                                    <td>
                                        <textarea class="form-control">{{ $post['p_excerpt'] }} </textarea>
                                    </td>
                                    <td><img src="{{ $post['p_image'] }}" alt="" width="70px" height="50px">
                                    </td>
                                    </td>
                                    <td> {{ $post['c_name'] }} </td>
                                    <td>
                                        <a href="/admin/posts/{{ $post['p_id'] }}/update" class="btn btn-warning">
                                            Update
                                        </a>
                                        <a href="/admin/posts/{{ $post['p_id'] }}/show" class="btn btn-info">
                                            Show
                                        </a>
                                        <a onclick="return confirm('Bạn có chắc muốn xóa không?')"
                                            href="/admin/posts/{{ $post['p_id'] }}/delete" class="btn btn-danger">
                                            Delete
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </thead>
                        <tbody>
                            <tr class="odd">

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
