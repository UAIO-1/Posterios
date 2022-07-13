@extends('layout')
@section('title', 'Posterios - Create An Account')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<div class="text-center mt-lg-4 text-light">
    <div class="d-flex justify-content-center">
        <img src="{{ asset('image/logo-posterios-white.png') }}" alt="logo">
    </div>
    <div class="mt-lg-4">
        <h4>Explore Many Projects & Discuss With Many People</h4>
    </div>
</div>

<div class="container" style="margin-top: 50px">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active mb-3 text-light" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Student</button>
          <button class="nav-link text-light" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Teacher</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="card card-student border-0 rounded-0">
                    <div class="card-header bg-primary">
                        <div class="text-center text-light">
                            <h1>Sign Up As Student</h1>
                            <small>Already have an account? <a href="/" style="color: #fff">Sign In</a></small>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action={{ route('register') }} enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="role" value="Student">

                            <div class="row row-cols-2">

                                <div class="col">
                                    <div class="form-group mb-lg-4">
                                        <label for="name" class="col-form-label text-md-right">{{ __('Nama Lengkap') }} <span class="text-danger">*</span></label> <span class="text-muted"><small><em>6 - 20 characters.</em></small></span>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-lg-4">
                                        <label for="email" class="col-form-label text-md-right">{{ __('Alamat E-Mail') }} <span class="text-danger">*</span></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-lg-4">
                                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }} <span class="text-danger">*</span></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-lg-4">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Ulangi Password') }} <span class="text-danger">*</span></label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-lg-4">
                                        <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }} <span class="text-danger">*</span></label>
                                        <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror"  name="dob" value="{{ old('dob') }}" required>
                                        @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-lg-4">
                                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }} <span class="text-danger">*</span></label>
                                        <div class="row row-cols-auto">
                                            <div class="col">
                                                <label>
                                                    <input class="card-input-element" type="radio" name="gender" value="Male">
                                                    <div class="card card-default card-input">
                                                        <p class="text-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                                                            </svg>
                                                            Laki - Laki
                                                        </p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label>
                                                    <input class="card-input-element" type="radio" name="gender" value="Female">
                                                    <div class="card card-default card-input">
                                                        <p class="text-danger">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                                                            </svg>
                                                            Perempuan
                                                        </p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-lg-4">
                                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Kelas') }} <span class="text-danger">*</span></label>
                                        <div class="row row-cols-auto">
                                            <div class="col">
                                                <label>
                                                    <input class="card-input-element" type="radio" name="grade" value="10">
                                                    <div class="card card-default-kelas card-input-kelas">
                                                        <p>
                                                            10
                                                        </p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label>
                                                    <input class="card-input-element" type="radio" name="grade" value="11">
                                                    <div class="card card-default-kelas card-input-kelas">
                                                        <p>
                                                            11
                                                        </p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label>
                                                    <input class="card-input-element" type="radio" name="grade" value="12">
                                                    <div class="card card-default-kelas card-input-kelas">
                                                        <p>
                                                            12
                                                        </p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        @error('kelas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-lg-4">
                                        <label for="sekolah" class="col-form-label text-md-right">{{ __('Nama Sekolah') }}</label>
                                        <input id="sekolah" type="text" class="form-control @error('sekolah') is-invalid @enderror" name="sekolah" value="{{ old('sekolah') }}" required>
                                        @error('sekolah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label col-form-label">Foto Selfie <span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" name="image_selfie" id="formFile" accept=".png,.jpg,.jpeg">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label col-form-label">Foto Kartu Pelajar <span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" name="image_card" id="formFile" accept=".png,.jpg,.jpeg">
                                    </div>
                                </div>

                            </div>

                            <div class="mt-lg-4">
                                <input type="submit" class="btn btn-primary w-100" style="border-radius: 50px" value="Submit">
                            </div>


                        </form>

                    </div>
                </div>
            </div>




            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="card">
                    <div class="card card-student border-0 rounded-0">
                        <div class="card-header bg-primary">
                            <div class="text-center text-light">
                                <h1>Sign Up As Teacher</h1>
                                <small>Already have an account? <a href="/" style="color: #fff">Sign In</a></small>
                            </div>
                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="role" value="Teacher">

                                <div class="row row-cols-2">

                                    <div class="col">
                                        <div class="form-group mb-lg-4">
                                            <label for="name" class="col-form-label text-md-right">{{ __('Nama Lengkap') }} <span class="text-danger">*</span></label> <span class="text-muted"><small><em>6 - 20 characters.</em></small></span>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-lg-4">
                                            <label for="email" class="col-form-label text-md-right">{{ __('Alamat E-Mail') }} <span class="text-danger">*</span></label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-lg-4">
                                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }} <span class="text-danger">*</span></label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-lg-4">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Ulangi Password') }} <span class="text-danger">*</span></label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-lg-4">
                                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }} <span class="text-danger">*</span></label>
                                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror"  name="dob" value="{{ old('dob') }}" required>
                                            @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-lg-4">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
                                            <div class="row row-cols-auto">
                                                <div class="col">
                                                    <label>
                                                        <input class="card-input-element" type="radio" name="gender" value="Male">
                                                        <div class="card card-default card-input">
                                                            <p class="text-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                                                                </svg>
                                                                Laki - Laki
                                                            </p>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <label>
                                                        <input class="card-input-element" type="radio" name="gender" value="Female">
                                                        <div class="card card-default card-input">
                                                            <p class="text-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                                                                </svg>
                                                                Perempuan
                                                            </p>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-lg-4">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Mengajar di Kelas') }}</label>
                                            <div class="row row-cols-auto">
                                                <div class="col">
                                                    <label>
                                                        <input class="card-input-element" type="radio" name="grade" value="10">
                                                        <div class="card card-default-kelas card-input-kelas">
                                                            <p>
                                                                10
                                                            </p>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <label>
                                                        <input class="card-input-element" type="radio" name="grade" value="11">
                                                        <div class="card card-default-kelas card-input-kelas">
                                                            <p>
                                                                11
                                                            </p>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <label>
                                                        <input class="card-input-element" type="radio" name="grade" value="12">
                                                        <div class="card card-default-kelas card-input-kelas">
                                                            <p>
                                                                12
                                                            </p>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            @error('kelas')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-lg-4">
                                            <label for="sekolah" class="col-form-label text-md-right">{{ __('Nama Sekolah') }} <span class="text-danger">*</span></label>
                                            <input id="sekolah" type="text" class="form-control @error('sekolah') is-invalid @enderror" name="sekolah" value="{{ old('sekolah') }}" required>
                                            @error('sekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label col-form-label">Foto Selfie <span class="text-danger">*</span></label>
                                            <input class="form-control" type="file" name="image_selfie" id="formFile" accept=".png,.jpg,.jpeg">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label col-form-label">Foto Kartu Tanda Guru / ID Card <span class="text-danger">*</span></label>
                                            <input class="form-control" type="file" name="image_card" id="formFile" accept=".png,.jpg,.jpeg">
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-lg-4">
                                    <input type="submit" class="btn btn-primary w-100" style="border-radius: 50px" value="Submit">
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>




