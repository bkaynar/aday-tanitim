@extends('adminlayout.master')
@section('title', 'Slider Ekle')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Yönetim Paneli</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slider Ekle</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card m-auto">
            <div class="card">
                <div class="card-body">

                    <h6 class="card-title">Slider Ekle</h6>

                    <form class="forms-sample" id="sliderEkle" method="POST"
                          action="{{route('slider-ekle')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Slider Başlık</label>
                                    <input type="text" class="form-control" id="title" name="title" autocomplete="off"
                                           placeholder="Slider Başlık">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subtitle1" class="form-label">Alt Metin</label>
                                    <input type="text" class="form-control" id="subtitle1" name="subtitle1" autocomplete="off"
                                           placeholder="Alt Metin">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subtitle2" class="form-label">Alt Metin-2(Gerekli Değil)</label>
                                    <input type="text" class="form-control" id="subtitle2" name="subtitle2" autocomplete="off"
                                           placeholder="Alt Metin">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subtitle3" class="form-label">Alt Metin-3(Gerekli Değil)</label>
                                    <input type="text" class="form-control" id="subtitle3" name="subtitle3" autocomplete="off"
                                           placeholder="Alt Metin">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sirasi" class="form-label">Sıra</label>
                                    <input type="number" class="form-control" id="sirasi" name="sirasi" autocomplete="off"
                                           placeholder="Sıra">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="foto_yol" class="form-label">Ana Fotoğraf(Gerekli)</label>
                                <input type="file" class="form-control" id="foto_yol" name="foto_yol">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Slider Ekle</button>
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
            $('#sliderEkle').submit(function (e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('slider-ekle') }}",
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
                                    $('#sliderEkle').trigger('reset');
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
