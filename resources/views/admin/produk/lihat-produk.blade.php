@include('admin/template-admin/header')

@include('admin/template-admin/sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Form Basic</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" method="post" action="/dashboard/produk" enctype="multipart/form-data">

                                <div class="card-body">
                                    <h3 class="card-title">Detail Produk</h3><br>
                                    <div class="row">
                                        <div class="col-md-5 mb-3">
                                            <img src="/produk/{{$produk['gambar']}}" alt="" style="width: 100%;">
                                        </div>
                                        {{-- @foreach ($produk as $pro) --}}
                                        <div class="col-md-5">
                                            <div>
                                                <h4>{{$produk['nama']}}</h4>
                                                <b class="text-secondary">{{$produk['kategori']}}</b>
                                            </div>
                                            <div>
                                                <h2 class="mt-2 text-info fw-bold">{{$produk['harga']}}</h2>
                                                <p>Jumlah produk : {{$produk['jumlah']}} buah</p>
                                            </div>
                                            <div>
                                                <h5 class="text-success">Detail</h5>
                                                <p>
                                                    {!!$produk['detail']!!} 
                                                </p>
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>

                                    <br>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src={{asset("/assets/libs/jquery/dist/jquery.min.js")}}></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src={{asset("/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src={{asset("/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")}}></script>
    <script src={{asset("/assets/extra-libs/sparkline/sparkline.js")}}></script>
    <!--Wave Effects -->
    <script src={{asset("/js/waves.js")}}></script>
    <!--Menu sidebar -->
    <script src={{asset("/js/sidebarmenu.js")}}></script>
    <!--Custom JavaScript -->
    <script src={{asset("/js/custom.min.js")}}></script>
    <!-- This Page JS -->
    <script src={{asset("/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js")}}></script>
    <script src={{asset("/js/pages/mask/mask.init.js")}}></script>
    <script src={{asset("/assets/libs/select2/dist/js/select2.full.min.js")}}></script>
    <script src={{asset("/assets/libs/select2/dist/js/select2.min.js")}}></script>
    <script src={{asset("/assets/libs/jquery-asColor/dist/jquery-asColor.min.js")}}></script>
    <script src={{asset("/assets/libs/jquery-asGradient/dist/jquery-asGradient.js")}}></script>
    <script src={{asset("/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js")}}></script>
    <script src={{asset("/assets/libs/jquery-minicolors/jquery.minicolors.min.js")}}></script>
    <script src={{asset("/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}></script>
    <script src={{asset("/assets/libs/quill/dist/quill.min.js")}}></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function () {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function (value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>