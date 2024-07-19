@extends('adminlayout.master')
@section('title', 'Slider Düzenle')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Yönetim Paneli</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sayfa Düzenle</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card m-auto">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Sayfa Düzenle</h6>
                    <form class="forms-sample" id="sayfaDuzenle" method="POST"
                          action="{{route('sayfa-update', $sayfa->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="baslik" class="form-label">Sayfa Başlık</label>
                                    <input type="text" class="form-control" id="baslik" name="baslik" autocomplete="off"
                                           placeholder="Sayfa Başlık" value="{{ old('baslik', $sayfa->baslik) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="foto_yol" class="form-label">Foto</label>
                                    <input type="file" class="form-control" id="foto_yol" name="foto_yol" autocomplete="off"
                                           placeholder="Foto" value="{{ old('foto_yol', $sayfa->link) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="icerik" class="form-label">İçerik</label>
                                    <textarea class="form-control" name="icerik" id="tinymceExample" rows="10">{{ old('icerik', $sayfa->icerik) }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check form-check-info">
                                    <input type="checkbox" class="form-check-input" id="anasayfa" name="anasayfa" value="1" {{ $sayfa->anasayfa ? 'checked' : '' }}>
                                    <label class="form-check label" for="anasayfa">Aktif</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Sayfa Düzenle</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('plugin-styles')
    <script src="{{ asset('adminassets/assets/plugins/tinymce/tinymce.min.js') }}"></script>
@endpush
@push('custom-scripts')
    <script src="{{ asset('adminassets/assets/js/tinymce.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function () {
            $('#sayfaDuzenle').on('submit', function (e) {
                e.preventDefault();

                let formData = new FormData(this);

                if (!$('#anasayfa').is(':checked')) {
                    formData.append('anasayfa', '0');
                }
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Başarılı',
                                text: response.message,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "{{ route('sayfalar.index') }}";
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Hata',
                                text: response.message,
                            });
                        }
                    },
                    error: function (response) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Hata',
                            text: 'Bir hata oluştu.',
                        });
                    }
                });
            });
        });
    </script>
@endpush
