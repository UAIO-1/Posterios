@extends('layout')
@section('title', 'Posterios - Post Project')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/post.css') }}">

@include('navbar')

@if (!Auth::check())

@else

    <div class="container mt-lg-5">
        <h1><span class="badge bg-dark">Post</span></h1>
        <p> Start your project by fill the form on this page. <br>
            The form that has been provided has 2 parts that you must fill in and you don't have to. <br>
            Fill in the form that has been provided correctly and completely. <br>
        </p>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <div class="card rounded-0 border-0">
                    <form action={{url('/projectPost')}} method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="username" value="{{ Auth::user()->username }}">
                        <input type="hidden" name="gender" value="{{ Auth::user()->gender }}">
                        <h3 class="m-4 text-danger">Required</h3>
                        <div class="card-body m-2">
                            <div class="mb-3">
                                <label class="form-label">Title</label> <span class="text-danger">*<small class="text-muted">at least 6 - 20 characters</small></span>
                                <input type="text" name="project_title">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Category</label> <span class="text-danger">*</span>
                                <select name="project_category" class="ml-4">
                                    <option value="Science">Science</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Mathematics">Mathematics</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Link</label> <span class="text-danger"><small>*</small></span>
                                <input type="text" name="project_link">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Image / Thumbnail</label> <span class="text-danger">*</span>
                                <input class="form-control" type="file" name="project_image" accept="image/jpg, image/jpeg, image/png">
                            </div>

                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card rounded-0 border-0">
                    <h3 class="m-4 text-muted">Optional</h3>
                    <div class="card-body m-4">
                        <div class="mb-3">
                            <label>Description</label> <span class="text-muted"><small>*max. 1000 characters</small></span>
                            <textarea class="form-control" name="project_description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Video</label> <span class="text-muted">
                            <input class="form-control" type="file" name="project_video" accept="video/mp4">
                        </div>
                   </div>


                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-warning text-light w-25" value="Submit">
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endif
