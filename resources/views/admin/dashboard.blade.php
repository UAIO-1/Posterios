@extends('layouts.adminLayouts')
@section('title', 'Admin Dashboard • Posterios')
<link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@include('admin.sidebar')

<div class="main">
    <canvas id="myChart" width="800" height="400" style="max-width: 800px;max-height: 400px"></canvas>
</div>

