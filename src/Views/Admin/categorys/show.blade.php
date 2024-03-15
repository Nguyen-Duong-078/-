@extends('layouts.mater')

@section('title')
    Danh Mục - {{ $category['name'] }}
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Sategorys /</span><span> Show Category</span>
        </h4>

        <div class="app-ecommerce">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- Add Product -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Show Category</h4>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        {{-- <button type="reset" class="btn btn-outline-secondary">Loại Bỏ</button> --}}
                        {{-- <button type="submit" class="btn btn-primary">Cập Nhật Người Dùng</button> --}}
                    </div>
                </div>

                <div class="row">

                    <!-- First column-->
                    <div class="col-12 col-lg-8">
                        <!-- Product Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-tile mb-0">Thông tin danh mục</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" class="form-control" id="ecommerce-product-name"
                                        placeholder="Tên người dùng" value="{{ $category['name'] }}" name="name"
                                        aria-label="Tên người dùng" required autofocus disabled>
                                    <label for="ecommerce-product-name">Tên danh mục</label>
                                </div>

                            </div>
                        </div>
                        <!-- /Product Information -->
                        <!-- Inventory -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Inventory</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Navigation -->
                                    <div class="col-12 col-md-4 mx-auto card-separator">
                                        <div class="d-flex justify-content-between flex-column mb-3 mb-md-0 pe-md-3">
                                            <ul class="nav nav-align-left nav-pills flex-column">
                                                <li class="nav-item">
                                                    <button class="nav-link active" data-bs-toggle="tab"
                                                        data-bs-target="#restock">
                                                        <i class="mdi mdi-cube-outline me-2"></i>
                                                        <span class="align-middle">Restock</span>
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#shipping">
                                                        <i class="mdi mdi-car-estate me-2"></i>
                                                        <span class="align-middle">Shipping</span>
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#global-delivery">
                                                        <i class="mdi mdi-web me-2"></i>
                                                        <span class="align-middle">Global
                                                            Delivery</span>
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#attributes">
                                                        <i class="mdi mdi-link-variant me-2"></i>
                                                        <span class="align-middle">Attributes</span>
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#advanced">
                                                        <i class="mdi mdi-lock me-2"></i>
                                                        <span class="align-middle">Advanced</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Navigation -->
                                    <!-- Options -->
                                    <div class="col-12 col-md-8 pt-4 pt-md-0">
                                        <div class="tab-content p-0 pe-xl-0 ps-md-3">
                                            <!-- Restock Tab -->
                                            <div class="tab-pane fade show active" id="restock" role="tabpanel">
                                                <h6 class="text-body">Options</h6>
                                                <div class="row mb-3 g-3">
                                                    <div class="col-12 col-sm-8 col-lg-12 col-xxl-8">
                                                        <div class="form-floating form-floating-outline">
                                                            <input type="number" class="form-control"
                                                                id="ecommerce-product-stock" placeholder="Quantity"
                                                                name="quantity" aria-label="Quantity">
                                                            <label for="ecommerce-product-stock">Add to
                                                                Stock</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-4 d-grid col-lg-6 col-xxl-4">
                                                        <button class="btn btn-primary btn-lg"><i
                                                                class='mdi mdi-check me-2'></i>Confirm</button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-heading mb-2">Product in stock now:
                                                        <span class="ps-1">54</span>
                                                    </p>
                                                    <p class="text-heading mb-2">Product in transit:
                                                        <span class="ps-1">390</span>
                                                    </p>
                                                    <p class="text-heading mb-2">Last time restocked:
                                                        <span class="ps-1">24th June, 2023</span>
                                                    </p>
                                                    <p class="text-heading mb-2">Total stock over
                                                        lifetime:
                                                        <span class="ps-1">2430</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Shipping Tab -->
                                            <div class="tab-pane fade" id="shipping" role="tabpanel">
                                                <h6 class="text-body">Shipping Type</h6>
                                                <div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="radio" name="shippingType"
                                                            id="seller">
                                                        <label class="form-check-label" for="seller">
                                                            <span class="h6">Fulfilled by
                                                                Seller</span><br>
                                                            <small class="text-muted">You'll be
                                                                responsible
                                                                for product delivery.<br>
                                                                Any damage or delay during shipping may
                                                                cost
                                                                you a Damage fee.</small>
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-5">
                                                        <input class="form-check-input" type="radio"
                                                            name="shippingType" id="companyName" checked>
                                                        <label class="form-check-label" for="companyName">
                                                            <span class="h6">Fulfilled by Company
                                                                name
                                                                &nbsp;<span
                                                                    class="badge rounded-pill badge-warning bg-label-warning fs-tiny py-1">RECOMMENDED</span></span><br>
                                                            <small class="text-muted">Your product, Our
                                                                responsibility.<br>
                                                                For a measly fee, we will handle the
                                                                delivery process for you.</small>
                                                        </label>
                                                    </div>
                                                    <p class="mb-0">See our <a href="javascript:void(0);">Delivery terms
                                                            and
                                                            conditions</a> for details</p>
                                                </div>
                                            </div>
                                            <!-- Global Delivery Tab -->
                                            <div class="tab-pane fade" id="global-delivery" role="tabpanel">
                                                <h6 class="text-body">Global Delivery</h6>
                                                <!-- Worldwide delivery -->
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="globalDel"
                                                        id="worldwide">
                                                    <label class="form-check-label" for="worldwide">
                                                        <span class="h6">Worldwide
                                                            delivery</span><br>
                                                        <small class="text-muted">Only available with
                                                            Shipping method:
                                                            <a href="javascript:void(0);">Fulfilled by
                                                                Company name</a></small>
                                                    </label>
                                                </div>
                                                <!-- Global delivery -->
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="globalDel"
                                                        checked>
                                                    <label class="form-check-label w-75 pe-5 mb-2" for="country-selected">
                                                        <span class="h6">Selected Countries</span>
                                                    </label>
                                                    <div class="form-floating form-floating-outline">
                                                        <input type="text" class="form-control"
                                                            placeholder="Type Country name" id="country-selected">
                                                        <label for="ecommerce-product-name">Countries</label>
                                                    </div>
                                                </div>
                                                <!-- Local delivery -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="globalDel"
                                                        id="local">
                                                    <label class="form-check-label" for="local">
                                                        <span class="h6">Local delivery</span><br>
                                                        <small class="text-muted">Deliver to your
                                                            country
                                                            of residence :
                                                            <a href="javascript:void(0);">Change
                                                                profile
                                                                address</a></small>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Attributes Tab -->
                                            <div class="tab-pane fade" id="attributes" role="tabpanel">
                                                <h6 class="text-body">Attributes</h6>
                                                <div>
                                                    <!-- Fragile Product -->
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" value="fragile"
                                                            id="fragile">
                                                        <label class="form-check-label" for="fragile">
                                                            <span class="h6">Fragile Product</span>
                                                        </label>
                                                    </div>
                                                    <!-- Biodegradable -->
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="biodegradable" id="biodegradable">
                                                        <label class="form-check-label" for="biodegradable">
                                                            <span class="h6">Biodegradable</span>
                                                        </label>
                                                    </div>
                                                    <!-- Frozen Product -->
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="frozen"
                                                            value="frozen" checked>
                                                        <label class="form-check-label w-75 pe-5 mb-2" for="frozen">
                                                            <span class="h6">Frozen Product</span>
                                                        </label>
                                                        <div class="form-floating form-floating-outline">
                                                            <input type="number" class="form-control"
                                                                placeholder="In Celsius" id="temp">
                                                            <label for="temp">Max. allowed
                                                                Temperature</label>
                                                        </div>
                                                    </div>
                                                    <!-- Exp Date -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="expDate"
                                                            id="expDate" checked>
                                                        <label class="form-check-label w-75 pe-5 mb-2" for="expDate">
                                                            <span class="h6">Expiry Date of
                                                                Product</span>
                                                        </label>
                                                        <div class="form-floating form-floating-outline">
                                                            <input type="date" class="product-date form-control"
                                                                id="flatpickr-date" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Attributes Tab -->
                                            <!-- Advanced Tab -->
                                            <div class="tab-pane fade" id="advanced" role="tabpanel">
                                                <h6 class="text-body">Advanced</h6>
                                                <div class="row">
                                                    <!-- Product Id Type -->
                                                    <div class="col">
                                                        <h6 class="mb-2">Product ID Type</h6>
                                                        <div class="form-floating form-floating-outline">
                                                            <select id="product-id" class="select2 form-select"
                                                                data-placeholder="ISBN" data-allow-clear="true">
                                                                <option value="">ISBN</option>
                                                                <option value="ISBN">ISBN</option>
                                                                <option value="UPC">UPC</option>
                                                                <option value="EAN">EAN</option>
                                                                <option value="JAN">JAN</option>
                                                            </select>
                                                            <label for="product-id">Id</label>
                                                        </div>
                                                    </div>
                                                    <!-- Product Id -->
                                                    <div class="col">
                                                        <h6 class="mb-2">Product ID</h6>
                                                        <div class="form-floating form-floating-outline">
                                                            <input type="number" id="product-id-1" class="form-control"
                                                                placeholder="ISBN Number" />
                                                            <label for="product-id-1">Id Number</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- /Advanced Tab -->

                                        </div>
                                    </div>
                                    <!-- /Options-->
                                </div>
                            </div>
                        </div>
                        <!-- /Inventory -->
                    </div>
                    <!-- /Second column -->
                </div>
        </div>
        </form>
    </div>
@endsection
