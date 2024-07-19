@extends('adminlayout.master')
@section('title', 'Slider Ekle')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Yönetim Paneli</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sayfa Ekle</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card m-auto">
            <div class="card">
                <div class="card-body">

                    <h6 class="card-title">Sayfa Ekle</h6>

                    <form class="forms-sample" id="sayfaEkle" method="POST"
                          action="{{route('sayfa-ekle')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="baslik" class="form-label">Sayfa Başlık</label>
                                    <input type="text" class="form-control" id="baslik" name="baslik" autocomplete="off"
                                           placeholder="Sayfa Başlık">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="foto_yol" class="form-label">Fotoğraf</label>
                                    <input type="file" class="form-control" id="foto_yol" name="foto_yol"
                                           autocomplete="off"
                                           placeholder="Fotoğraf">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="icerik" class="form-label">İçerik</label>
                                        <textarea class="form-control" name="icerik" id="tinymceExample"
                                                  rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sirasi" class="form-label">Sırası</label>
                                        <input type="text" class="form-control" id="sirasi" name="sirasi"
                                               autocomplete="off"
                                               placeholder="Sırası">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check form-check-info">
                                        <input type="checkbox" class="form-check-input" id="anasayfa" name="anasayfa" value="1">
                                        <label class="form-check label" for="anasayfa">Aktif</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Slider Ekle</button>
                                </div>
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
<!-- Custom js for this page -->
@push('custom-scripts')
    <script src="{{ asset('adminassets/assets/js/tinymce.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $('#sayfaEkle').submit(function (e) {
                e.preventDefault();

                let formData = new FormData(this);

                if (!$('#anasayfa').is(':checked')) {
                    formData.append('anasayfa', '0');
                }//anasayfa checkbox'ı işaretli değilse 0 değerini ekle,işaretli ise 1 değerini ekle

                $.ajax({
                    url: "{{ route('sayfa-ekle') }}",
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
                                    $('#sayfaEkle').trigger('reset');
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
