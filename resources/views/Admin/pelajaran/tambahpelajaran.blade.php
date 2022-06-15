<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>CREATE PELAJARAN</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('colorlib-regform-4/colorlib-regform-4/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('colorlib-regform-4/colorlib-regform-4/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('colorlib-regform-4/colorlib-regform-4/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('colorlib-regform-4/colorlib-regform-4/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('colorlib-regform-4/colorlib-regform-4/css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" align="center">Form Create Class</h2>
                    <div class="p-t-15" align="center">
                    <form action="{{ route('tambah.pelajaran')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <label class="label">NAMA MATA PELAJARAN</label>
                            <input class="input--style-4 col-2" type="text" name="mata_pelajaran">
                            <br><br>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                            </form>
                            <br><br>
                            <a href="{{ route('pelajaran')}}">Back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('colorlib-regform-4/colorlib-regform-4/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('colorlib-regform-4/colorlib-regform-4/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('colorlib-regform-4/colorlib-regform-4/vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('colorlib-regform-4/colorlib-regform-4/vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('colorlib-regform-4/colorlib-regform-4/js/global.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->