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
                            <a href="#" onclick="show_hide()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-question-fill"  viewBox="0 0 16 16">
                                    <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="p-3">
                            <form action={{url('/projectPost')}} method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                <input type="hidden" name="gender" value="{{ Auth::user()->gender }}">

                                        <div class="mb-3">
                                            <label class="form-label">Title</label> <span class="text-danger">*</span>
                                            <input type="text" name="project_title" class="form-control">
                                        </div>

                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label">Category</label> <span class="text-danger">*</span>
                                                    <select class="ml-4 form-select" id="main" name="project_category">
                                                        <option selected disabled>Select Category</option>
                                                        <option value="Teknologi">Teknologi</option>
                                                        <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                                                        <option value="Seni">Seni</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label">Sub Category</label> <span class="text-danger">*</span>
                                                    <select name="project_subcategory" class="ml-4 form-select" id="sub">
                                                        <option selected disabled>Select Sub Category</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">Link</label> <span class="text-danger">*</span>
                                            <input type="text" name="project_link" class="form-control" placeholder="https://www.yourproject.com/">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Image</label> <span class="text-danger">*</span>
                                            <input class="form-control" type="file" name="project_image" accept="image/jpg, image/jpeg, image/png">
                                        </div>


                                        <div class="mb-3">
                                            <label>Description</label>
                                            <textarea class="form-control" name="project_description" rows="5"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Video</label> <span class="text-muted">
                                            <input class="form-control" type="file" name="project_video" accept=".mp4,.mkv">
                                        </div>

                                        <div class="mb-3 text-center">
                                            <input type="submit" value="Publish" class="btn text-light" style="background-color: #259df3">
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col2">
                    <div class="card card-for-step bg-transparent text-muted border-0" id="how" onload="hide()">

                        <h4 class="text-light container">How to Publish?</h4>

                        <div class="card card-step mb-3" id="step1">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="step-num">01</h3>
                                </div>
                                <div class="col-md-8">
                                    <p>Fill in the title</p>
                                </div>
                            </div>
                        </div>

                        <div class="card card-step mb-3" id="step2">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="step-num">02</h3>
                                </div>
                                <div class="col-md-8">
                                    <p>Select category</p>
                                </div>
                            </div>
                        </div>

                        <div class="card card-step mb-3" id="step3">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="step-num">03</h3>
                                </div>
                                <div class="col-md-8">
                                    <p>Fill in the link column with a valid link</p>
                                </div>
                            </div>
                        </div>

                        <div class="card card-step mb-3" id="step4">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="step-num">04</h3>
                                </div>
                                <div class="col-md-8">
                                    <p>Choose image file</p>
                                </div>
                            </div>
                        </div>

                        <div class="card card-step mb-3" id="step5">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="step-num">*</h3>
                                </div>
                                <div class="col-md-8">
                                    <p>Description and video are optional</p>
                                </div>
                            </div>
                        </div>

                        <div class="card card-step mb-3" id="step6">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="step-num">*</h3>
                                </div>
                                <div class="col-md-8">
                                    <p>You can update your project after publishing</p>
                                </div>
                            </div>
                        </div>

                    </div>
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
