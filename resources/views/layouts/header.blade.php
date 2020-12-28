<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ asset('public/img/icon.png') }}" />
    <title>OTOKABE POS SYSTEM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- <meta name="csrf-token" content="WrBseS0Pru4anE1fCnW8K1AeEdibXfoskghtnQv4"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap-toggle/css/bootstrap-toggle.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/bootstrap-datepicker.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/vendor/jquery-timepicker/jquery.timepicker.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/awesome-bootstrap-checkbox.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/bootstrap-select.min.css') }}" type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('public/vendor/font-awesome/css/font-awesome.min.css') }}" type="text/css">
    <!-- Drip icon font-->
    <link rel="stylesheet" href="{{ asset('public/vendor/dripicons/webfont.css') }}" type="text/css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('public/css/grasp_mobile_progress_circle-1.0.0.min.css') }}" type="text/css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}" type="text/css">
    <!-- virtual keybord stylesheet-->
    <link rel="stylesheet" href="{{ asset('public/vendor/keyboard/css/keyboard.css') }}" type="text/css">
    <!-- date range stylesheet-->
    <link rel="stylesheet" href="{{ asset('public/vendor/daterange/css/daterangepicker.min.css') }}" type="text/css">
    <!-- table sorter stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/datatable/dataTables.bootstrap4.min.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/css/style.default.css') }}" id="theme-stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

    <link href="{{ asset('public/vendor/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('public/vendor/datatable-select/datatables.select.min.css') }}" rel="stylesheet">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script><![endif]-->

    <script type="text/javascript" src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/jquery/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/jquery/jquery.timepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/popper.js/umd/popper.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/bootstrap/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/keyboard/js/jquery.keyboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/keyboard/js/jquery.keyboard.extension-autocomplete.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/jquery.cookie/jquery.cookie.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('public/vendor/chart.js/Chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/charts-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/front.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/daterange/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/daterange/js/knockout-3.4.2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/daterange/js/daterangepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/dropzone.js') }}"></script>

    <!-- table sorter js-->
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/buttons.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/buttons.colVis.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/sum().js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/dataTables.checkboxes.min.js') }}"></script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('public/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('public/vendor/datatable-select/datatables.select.js') }}"></script>
    <script src="{{ asset('public/vendor/datatable-select/datatables.select.min.js') }}"></script>
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('public/css/custom-default.css') }}" type="text/css" id="custom-style">
</head>

<body onload="myFunction()">
    <div id="loader"></div>
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <div class="side-navbar-wrapper">
            <!-- Sidebar Header -->
            <!-- Sidebar Navigation Menus-->
            <div class="main-menu">
                <ul id="side-main-menu" class="side-menu list-unstyled">
                    <li><a href="{{ route('dashboard.index') }}"> <i class="dripicons-meter"></i><span>Dashboard</span></a></li>
                    <li><a href="#product" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-list"></i><span>Master Data</span><span></a>
                        <ul id="product" class="collapse list-unstyled ">
                            <!-- <li id="category-list-menu"><a href="/master-kategori">Master Kategori</a></li> -->
                            <li id="product-list-menu"><a href="{{ ('master-product') }}">Master Product</a></li>
                            <!-- <li id="price-list-menu"><a href="/master-harga">Master Harga</a></li> -->
                            <li id="paket-list-menu"><a href="{{ ('master-paket') }}">Master Paket</a></li>
                            <li id="customer-list-menu"><a href="{{ ('master-customer') }}">Master Customer</a></li>
                            <!-- <li id="user-list-menu"><a href="/master-user">Master User</a></li> -->
                            <li id="montir-list-menu"><a href="{{ ('master-montir') }}">Master Montir</a></li>
                            <!-- <li id="montir-list-menu"><a href="/master-kategori-produk">Master Kategori</a></li> -->
                        </ul>
                    </li>
                    <!-- <li><a href="#purchase" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-card"></i><span>Purchase</span></a>
                        <ul id="purchase" class="collapse list-unstyled ">
                            <li id="purchase-list-menu"><a href="http://localhost/salepro-334/purchases">Purchase Order</a></li>
                            <li id="purchase-create-menu"><a href="http://localhost/salepro-334/purchases/create">Add Purchase</a></li>
                            <li id="purchase-import-menu"><a href="http://localhost/salepro-334/purchases/purchase_by_csv">Import Purchase By CSV</a></li>
                        </ul>
                    </li> -->
                    <li><a href="#sale" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-cart"></i><span>Sale</span></a>
                        <ul id="sale" class="collapse list-unstyled ">
                            <li><a href="{{('pos') }}">POS</a></li>
                            <li id="sale-list-menu"><a href="purchase-list">Purchase List</a></li>
                            <!--<li id="sale-create-menu"><a href="bill-send">Bill</a></li>-->
                            <li id="sale-stock-menu"><a href="sale-stock">Stok Produk</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#report" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-document-remove"></i><span>Reports</span></a>
                        <ul id="report" class="collapse list-unstyled ">
                            <li id="profit-loss-report-menu">
                                <form method="POST" action="http://localhost/salepro-334/report/profit_loss" accept-charset="UTF-8" id="profitLoss-report-form"><input name="_token" type="hidden" value="WrBseS0Pru4anE1fCnW8K1AeEdibXfoskghtnQv4">
                                    <input type="hidden" name="start_date" value="2020-09-01" />
                                    <input type="hidden" name="end_date" value="2020-09-05" />
                                    <a id="profitLoss-link" href="">Summary Report</a>
                                </form>
                            </li>
                            <li id="best-seller-report-menu">
                                <a href="http://localhost/salepro-334/report/best_seller">Best Seller</a>
                            </li>
                            <li id="product-report-menu">
                                <form method="POST" action="http://localhost/salepro-334/report/product_report" accept-charset="UTF-8" id="product-report-form"><input name="_token" type="hidden" value="WrBseS0Pru4anE1fCnW8K1AeEdibXfoskghtnQv4">
                                    <input type="hidden" name="start_date" value="1988-04-18" />
                                    <input type="hidden" name="end_date" value="2020-09-05" />
                                    <input type="hidden" name="warehouse_id" value="0" />
                                    <a id="report-link" href="">Product Report</a>
                                </form>
                            </li>
                            <li id="daily-sale-report-menu">
                                <a href="http://localhost/salepro-334/report/daily_sale/2020/09">Daily Sale</a>
                            </li>
                            <li id="monthly-sale-report-menu">
                                <a href="http://localhost/salepro-334/report/monthly_sale/2020">Monthly Sale</a>
                            </li>
                            <li id="daily-purchase-report-menu">
                                <a href="http://localhost/salepro-334/report/daily_purchase/2020/09">Daily Purchase</a>
                            </li>
                            <li id="monthly-purchase-report-menu">
                                <a href="http://localhost/salepro-334/report/monthly_purchase/2020">Monthly Purchase</a>
                            </li>
                            <li id="sale-report-menu">
                                <form method="POST" action="http://localhost/salepro-334/report/sale_report" accept-charset="UTF-8" id="sale-report-form"><input name="_token" type="hidden" value="WrBseS0Pru4anE1fCnW8K1AeEdibXfoskghtnQv4">
                                    <input type="hidden" name="start_date" value="1988-04-18" />
                                    <input type="hidden" name="end_date" value="2020-09-05" />
                                    <input type="hidden" name="warehouse_id" value="0" />
                                    <a id="sale-report-link" href="">Sale Report</a>
                                </form>
                            </li>
                            <li id="payment-report-menu">
                                <form method="POST" action="http://localhost/salepro-334/report/payment_report_by_date" accept-charset="UTF-8" id="payment-report-form"><input name="_token" type="hidden" value="WrBseS0Pru4anE1fCnW8K1AeEdibXfoskghtnQv4">
                                    <input type="hidden" name="start_date" value="1988-04-18" />
                                    <input type="hidden" name="end_date" value="2020-09-05" />
                                    <a id="payment-report-link" href="">Payment Report</a>
                                </form>
                            </li>
                            <li id="purchase-report-menu">
                                <form method="POST" action="http://localhost/salepro-334/report/purchase" accept-charset="UTF-8" id="purchase-report-form"><input name="_token" type="hidden" value="WrBseS0Pru4anE1fCnW8K1AeEdibXfoskghtnQv4">
                                    <input type="hidden" name="start_date" value="1988-04-18" />
                                    <input type="hidden" name="end_date" value="2020-09-05" />
                                    <input type="hidden" name="warehouse_id" value="0" />
                                    <a id="purchase-report-link" href="">Purchase Report</a>
                                </form>
                            </li>
                            <li id="warehouse-report-menu">
                                <a id="warehouse-report-link" href="">Warehouse Report</a>
                            </li>
                            <li id="warehouse-stock-report-menu">
                                <a href="http://localhost/salepro-334/report/warehouse_stock">Warehouse Stock Chart</a>
                            </li>
                            <li id="qtyAlert-report-menu">
                                <a href="http://localhost/salepro-334/report/product_quantity_alert">Product Quantity Alert</a>
                            </li>
                            <li id="user-report-menu">
                                <a id="user-report-link" href="">User Report</a>
                            </li>
                            <li id="customer-report-menu">
                                <a id="customer-report-link" href="">Customer Report</a>
                            </li>
                            <li id="supplier-report-menu">
                                <a id="supplier-report-link" href="">Supplier Report</a>
                            </li>
                            <li id="due-report-menu">
                                <form method="POST" action="http://localhost/salepro-334/report/due_report_by_date" accept-charset="UTF-8" id="due-report-form"><input name="_token" type="hidden" value="WrBseS0Pru4anE1fCnW8K1AeEdibXfoskghtnQv4">
                                    <input type="hidden" name="start_date" value="1988-04-18" />
                                    <input type="hidden" name="end_date" value="2020-09-05" />
                                    <a id="due-report-link" href="">Due Report</a>
                                </form>
                            </li>
                        </ul>
                    </li>-->

                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars"> </i></a>
                    <span class="brand-big"><img width="200px" src="{{ asset('public/img/logo.png') }}" width="50" /><a href="/dashboard">
                            <!-- <h1 class="d-inline">SalePro</h1> -->
                        </a></span>

                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <li class="nav-item"><a class="dropdown-item btn-pos btn-sm" href="/pos"><i class="dripicons-shopping-bag"></i><span> POS</span></a></li>
                        <li class="nav-item"><a id="btnFullscreen"><i class="dripicons-expand"></i></a></li>
                        <li class="nav-item">
                            <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-user"></i> <span>&nbsp;{{ Session::get('sess_name') }}&nbsp;</span> <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                                <li>
                                    <a href=""><i class=" dripicons-user"></i> Profile</a>
                                </li>
                                    <li>
                                        <a href="/mainpage"><i class="dripicons-menu"></i> Main Page</a>
                                    </li>
                                <li>
                                    <a href="{{ route('logout') }}"><i class="dripicons-power"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>