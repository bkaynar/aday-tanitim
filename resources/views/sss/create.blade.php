@extends('adminlayout.master')
@section('title', 'Slider Ekle')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Yönetim Paneli</a></li>
            <li class="breadcrumb-item active" aria-current="page">Soru Ekle</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card m-auto">
            <div class="card">
                <div class="card-body">

                    <h6 class="card-title">Soru Ekle</h6>

                    <form class="forms-sample" id="sliderEkle" method="POST"
                          action="{{route('soru-ekle')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="soru" class="form-label">Soru</label>
                                    <input type="text" class="form-control" id="soru" name="soru" autocomplete="off"
                                           placeholder="Soru">
                                </div>
                            </div> <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="cevap" class="form-label">Cevap</label>
                                    <input type="text" class="form-control" id="cevap" name="cevap" autocomplete="off"
                                           placeholder="Cevap">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="sirasi" class="form-label">Sırası</label>
                                <input type="text" class="form-control" id="sirasi" name="sirasi" placeholder="Sırası">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Soru Ekle</button>
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
                    url: "{{ route('soru-ekle') }}",
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
