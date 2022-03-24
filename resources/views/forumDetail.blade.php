@extends('layout')
@section('title', 'Posterios - Forum Discussion')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/forumDetail.css') }}">

@include('navbar')

@if (!Auth::check())

@else

    <div class="container mt-lg-4">
        @foreach ($forums as $f)
            <div class="card card-quest">
                <div class="card-header bg-transparent">
                    <div class="row row-cols-auto">
                        <div class="col">
                            @if ($users->image == null)
                                <img src="{{ asset('image/icon-logo.png') }}" alt="user image" class="user-image">
                            @else
                                <img src="{{ asset('storage/'.$users->image) }}" alt="user image" class="user-image">
                            @endif
                        </div>
                        <div class="col">
                            <h6>{{ $f->username }}</h6>
                            <small class="text-muted">{{ $f->forum_category }} • Asked {{ Carbon\Carbon::parse($f->created_at)->diffForHumans()}} • Modified {{ Carbon\Carbon::parse($f->updated_at)->diffForHumans()}}</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $f->forum_title }}</h4>
                    <p class="card-text text-muted">{{ $f->forum_message }}</p>
                </div>
                @if ($f->forum_image == null)

                @else
                    <img src="{{ asset('storage/'.$f->forum_image) }}" class="card-img-bottom" alt="image">
                @endif
                <div class="mt-lg-4">
                    <div class="p-3 d-flex justify-content-end">
                        <a href="#" class="reply-but" data-bs-toggle="modal" data-bs-target="#createReply">Reply</a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="createReply" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                            <h5 class="modal-title" id="createReply">Reply Forum</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="container" method="post" action={{url('/postReplyForum')}} enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="username" value="{{ Auth::user()->username }}">

                                    <div class="mb-3">
                                        <label class="text-muted">Reply Message</label> <span class="text-danger">*</span>
                                        <textarea name="forum_message" class="form-control" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="d-flex justify-content-end mt-lg-4">
                                        <button type="button" class="btn text-muted" data-bs-dismiss="modal">Close</button>
                                        <input class="ml-2 reply-modal-but" type="submit" value="Reply">
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="mt-xl-5">
            <h3>Answer</h3>
        </div>
        <div class="card mt-lg-2">

        </div>

    </div>

@endif
