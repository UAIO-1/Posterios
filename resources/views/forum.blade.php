@extends('layout')
@section('title', 'Posterios - Forum')
<link rel="shortcut icon" href="{{ asset('image/icon-logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('css/forum.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

@if (!Auth::check())



@else

    <div class="header">
        @include('navbar')
        <div class="text-center text-light mt-lg-4">
            <h1 class="display-2"><u>Posterios Forum Discussion</u></h1>
            <p class="mt-4">Forum diskusi disediakan dalam beberapa kategori yang memudahkan Anda untuk memilih project sesuai dengan keinginan Anda.</p>
            <a href="#">Create Forum</a>
        </div>
    </div>

        <div class="filter">
            <form action="" method="GET" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <select name="" id="main">
                            <option value="">Select Category</option>
                            <option value="Sains">Sains</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Teknik Rekayasa">Teknik Rekayasa</option>
                            <option value="Seni">Seni</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="" id="sub">
                            <option value="">Select One</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>


@endif

<script>
    $(document).ready(function() {

        $("#main").change(function() {
            var val = $(this).val();
            if (val == "Sains") {
                $("#sub").html("<option value='Fisika'>Fisika</option><option value='Kimia'>Kimia</option><option value='Biologi'>Biologi</option>");
            } else if (val == "Teknologi") {
                $("#sub").html("<option value='User Interface'>Design / User Interface</option><option value='Game'>Game</option>");
            } else if (val == "Teknik Rekayasa") {
                $("#sub").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
            } else if (val == "Seni") {
                $("#sub").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
            }
        });

    });
</script>
