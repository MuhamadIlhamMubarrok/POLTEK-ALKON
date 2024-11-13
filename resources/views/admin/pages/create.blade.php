@extends('dashboard.app')

@section('title', 'Tambah Data Halaman')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pages') }}">Page</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Page</li>
            </ol>
        </nav>
        <div class="row">
            <div class="stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Page</h4>

                        @if ($errors->any())
                            <div id="error-alert" class="alert alert-danger">
                                <strong>Terjadi Kesalahan!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('pages.store') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="security" value="{{ md5($token . $secret_key) }}">

                            <div class="form-group">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control mb-3" name="judul" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Ringkasan</label>
                                <input type="text" class="form-control mb-3" name="short">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Isi Halaman</label>
                                <textarea class="form-control mb-3" name="isi" id="editor" rows="5" required></textarea>
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-label">Link</label>
                                <input type="url" class="form-control mb-3" name="link">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
