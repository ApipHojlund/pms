<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/i.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('template/css/style1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>
</head>

<body>
    @if (Session::has('delete'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.error("{{ Session::get('delete') }}");
        </script>
    @endif
    <div class="container" id="container">
        <div class="form-container sign-in">
            {{-- <div class="scrollbar" id="style-1">
                <div class="force-overflow"> --}}
            <form action="/register/store" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <img src="{{ asset('/assets/img/') }}" alt="main_logo">
                <h1>Register</h1>
                <span>Enter Your Data</span>
                <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama"
                    placeholder="Nama">
                @error('nama')
                    <div class="invalidate-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat"
                    placeholder="Alamat">
                @error('alamat')
                    <div class="invalidate-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                    placeholder="Username">
                @error('username')
                    <div class="invalidate-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                    placeholder="Password">
                @error('password')
                    <div class="invalidate-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <input class="form-control @error('no_telp') is-invalid @enderror" type="number" name="no_telp"
                    placeholder="Nomor Telpon">
                @error('no_telp')
                    <div class="invalidate-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    {{-- <label for="" class="form-label">Masukan Foto</label> --}}
                    <input required type="file" class="form-control" name="foto" id="" placeholder=""
                        aria-describedby="fileHelpId" />
                </div>
                <select required class="form-control" name="level" id="">
                    <option selected disabled>-Select one-</option>
                    {{-- <option value="admin">Admin</option> --}}
                    <option value="petugas">Petugas</option>
                    <option value="customer">Customer</option>
                </select>
                <button class="btn mt-3" type="submit">Register</button>
                <a href="/" class="hidden" id="login">Back</a>
            </form>
            {{-- </div>
            </div> --}}
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Hello, User!</h1>
                    <p>Register with your personal details to use all of site features</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/plugins/script.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
