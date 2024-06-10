<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Manage Account</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('lime/theme/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lime/theme/assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">

    <link
        href="{{ asset('lime/theme/assets/plugins/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css') }}"
        rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('lime/theme/assets/css/lime.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lime/theme/assets/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    @include('layouts.sidebar')

    @include('layouts.header')

    <div class="lime-container">
        <div class="lime-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-separator-1">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Account</li>
                                </ol>
                            </nav>
                            <h3>Form Pengaturan Akun</h3>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl">
                                        <div class="card">
                                            <div class="card-body">
                                                @if (session('success'))
                                                    <div class="alert alert-success alert-dismissible fade show"
                                                        role="alert">
                                                        <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        {{ session('success') }}
                                                    </div>
                                                @endif
                                                @if ($errors->any())
                                                    <div class="alert alert-danger alert-dismissible fade show"
                                                        role="alert">
                                                        <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <form action="{{ route('editAccount') }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                                                        <label for="exampleInputEmail1">Username</label>
                                                        <input type="form" name="username" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" value="{{ auth()->user()->username }}">
                                                        @error('username')
                                                            <small>{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                    
                                                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                                                        <label for="exampleInputEmail1">Password</label>
                                                        <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="Hanya isi bila ingin mengganti password">
                                                        @error('password')
                                                            <small>{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                    
                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                    </div>
                                                </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('dashboard.index') }}"> <- Kembali</a>

        </div>

    </div>
    <!-- Javascripts -->
    <script src="{{ asset('lime/theme/assets/plugins/jquery/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/js/lime.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/plugins/plupload/js/plupload.full.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/plugins/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js') }}">
    </script>
    <script src="{{ asset('lime/theme/assets/js/pages/plupload.js') }}"></script>
</body>

</html>
