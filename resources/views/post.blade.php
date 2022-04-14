@extends('layout')
@section('title', 'Posterios - Post Project')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/post.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset('js/post.js') }}"></script>

@if (!Auth::check())

@else

    <div>
        @include('navbar')
            <div class="row">
                <div class="col-sm-9">
                    <div class="card card2 border-0 rounded-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="p-3" style="color: #259df3">Publish Now!</h2>
                        </div>
                        <div class="p-3">
                            <form action={{url('/projectPost')}} method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                <input type="hidden" name="gender" value="{{ Auth::user()->gender }}">

                                        <div class="mb-3">
                                            <label class="form-label">Judul Proyek</label><span class="text-danger">*</span>
                                            <input type="text" name="project_title" value="{{ old('project_title') }}" class="form-control" placeholder="Modern Banner Design">
                                        </div>

                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label">Kategori</label><span class="text-danger">*</span>
                                                    <select class="ml-4 form-select" id="main" name="project_category">
                                                        <option selected disabled>Pilih Kategori</option>
                                                        <option value="Teknologi">Teknologi</option>
                                                        <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                                                        <option value="Seni">Seni</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label">Sub Kategori</label><span class="text-danger">*</span>
                                                    <select name="project_subcategory" class="ml-4 form-select" id="sub">
                                                        <option selected disabled>Pilih Sub Kategori</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Gambar Proyek</label><span class="text-danger">*</span>
                                            <input class="form-control" type="file" name="project_image" accept="image/jpg, image/jpeg, image/png">
                                        </div>

                                        <hr>

                                        <div class="mb-3">
                                            <label class="form-label">Tautan Proyek</label>
                                            <input type="text" value="{{ old('project_link') }}" name="project_link" class="form-control" placeholder="https://www.scratch.mit.edu/ or https://drive.google.com/">
                                        </div>

                                        <div class="mb-3">
                                            <label>Deskirpsi Proyek</label>
                                            <textarea value="{{ old('project_description') }}" class="form-control" name="project_description" rows="5"></textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">File Video</label> <span class="text-muted">
                                                    <input class="form-control" type="file" name="project_video" accept=".mp4,.mkv">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Tautan Video</label> <span class="text-muted">
                                                    <input class="form-control" value="{{ old('project_video_link') }}" type="text" name="project_video_link" placeholder="https://www.youtube.com/">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3 text-center">
                                            <input type="submit" value="Submit" class="btn text-light" style="background-color: #259df3">
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-2 col2">
                    <div class="card container p-3">
                        <img src="{{ asset('image/howtopublish-icon.png') }}" alt="how?" style="border-radius: 50%">
                        <h4 class="text-center mt-2">How to Publish?</h4>
                        <div class="text-center">
                            <p>1. Isi Kolom Judul Proyek.</p>
                            <p>2. Pilih Kategori dan Sub Kategori Proyek.</p>
                            <p>3. Upload Gambar Proyek.</p>
                        </div>
                    </div>


    </div>



@endif

<script>
    $(document).ready(function() {

        $("#main").change(function() {
            var val = $(this).val();
            if (val == "Teknologi") {
                $("#sub").html("<option value='Digital Desain'>Digital Desain</option><option value='Programming'>Programming</option>");
            } else if (val == "Teknik Rekayasa") {
                $("#sub").html("<option value='Komputer dan Jaringan'>Komputer dan Jaringan</option>");
            } else if (val == "Seni") {
                $("#sub").html("<option value='Seni Musik'>Seni Musik</option><option value='Seni Lukis'>Seni Lukis</option><option value='Seni Tari'>Seni Tari</option>");
            }
        });

    });
</script>
