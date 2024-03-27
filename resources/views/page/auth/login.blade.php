<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login dan Register</title>
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/sweetalert2/sweetalert2.min.css') }}">
    {{-- cdn toaster.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- CDN toastr.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body>
    <div class="container">

        <div class="form-container">
            <div class="form-header">
                <center>
                    <img src="{{ asset('image/logo/P2.png') }}" height="160px" width="160px" alt="logo aplikasi">
                </center>
                <h2>Masuk</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="form-content">
                <form action="/PostLogin" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                    <input type="password" name="password" placeholder="Kata Sandi" value="{{ old('password') }}">
                    <button type="submit">Masuk</button><br><br>
                    <a href="/" class="btn-back">back</a>
                </form>
            </div>
            <div class="form-footer">
                <p>Belum punya akun? <a href="#" class="register-button">Daftar di sini</a></p>
            </div>
        </div>
        <div class="form-container hidden">
            <div class="form-header">
                <h2>Daftar</h2>
            </div>
            <div class="form-content">
                <form action="/register/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="input-text" name="nama" placeholder="Nama Lengkap"><br>
                    <input type="text" class="input-text" name="username" placeholder="Username"><br>
                    <input type="password" class="select-option" name="password" placeholder="Kata Sandi"><br>
                    <select name="level">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select><br>
                    <textarea name="alamat" class="input-area" id="" cols="30" rows="10"></textarea><br>
                    <input type="text" class="input-text" name="no_telp" placeholder="Nomor Telepon"><br>
                    <input type="file" class="input-text" name="foto"><br>
                    <button type="submit" class="btn-submit">Daftar</button>
                </form>
            </div>
            <div class="form-footer">
                <p>Sudah punya akun? <a href="#" class="login-button">Masuk di sini</a></p>
            </div>
        </div>
    </div>
    <script src="{{ asset('login.js') }}"></script>
    <script>
        const loginButton = document.querySelector(".login-button");
        const formContainer = document.querySelector(".form-container");

        loginButton.addEventListener("click", () => {
            formContainer.classList.remove("hidden");
        });
    </script>
    <script src="{{ asset('template/vendors/sweetalert2/sweetalert2.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Maaf',
                text: '{{ session('error') }}',
            });
        </script>
    @endif
</body>

</html>
