@extends('analayout.master2')
@section('title', 'Rektörün Mesajı')
@section('description', 'Rektörümüz Prof. Dr. Mustafa Kasım KARAHOCAGİL\'in mesajı.')
@section('content')
    <!-- Hero Section Start -->
   <x-section-background>
        <x-slot name="title">
            Rektörün Mesajı
        </x-slot>
        <x-slot name="breadcrumb">
            <li class="breadcrumb-item active">Rektörün Mesajı</li>
        </x-slot>
    </x-section-background>

    <!-- Servicev section -->
    <section class="servicevm-details-section overflow-hidden section-padding white-bg">
        <div class="container">
            <div class="row g-xl-4 g-3 justify-content-center">
                
                <div class="col-lg-8">
                    <div class="service-wrapper-right ps-xl-2">
                        <div class="thumb mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <img src="images/rektor.jpg" alt="img" style="width: 100%; height: 100%">
                        </div>
                        <div class="cont-box wow fadeInUp" data-wow-delay=".4">

                            <span style="color: red">
                                Sevgili Öğrenciler;
                            </span>
                            <p>
                                Hayatınızdaki dönüm noktalarından birini oluşturan ve zorlu bir eğitim sürecinin
                                ardından düzenlenen Yüksek Öğretim Kurumları Sınavında gösterdiğiniz başarıdan dolayı
                                sizleri yürekten kutluyorum. Kayıt aşamasına gelen tüm öğrencilerimizin bu önemli
                                adımlarında Kırşehir Ahi Evran Üniversitesi olarak yanındayız.
                            </p>
                            <p class="mt-2">
                                Yeni bir hayatın kapıları aralanırken köklü tarihi geçmişiyle, 20 binin üzerinde
                                öğrenciye sahip olan Kırşehir Ahi Evran Üniversitesi ailesi içerisinde sizleri görecek
                                olmaktan çok mutluyuz. Mezun ettiğimiz öğrencilerimizin yerlerine yenilerinin eklenecek
                                olması ve Kırşehir Ahi Evran Üniversitesi bünyesinde sizlerinde yer alacak olmasından
                                dolayı bizlerde heyecanlıyız. Sizlerle birlikte biz de geleceğe dair yeni umutlar
                                besliyoruz. Üniversitemizi tercih eden her öğrenci, Kırşehir Ahi Evran Üniversitesi’nde
                                alacağı kaliteli eğitimle birlikte farkındalığı yüksek bireyler olarak geleceğimizi
                                şekillendirecektir.
                            </p>
                            <p class="mt-2">
                                Tarihine bağlı, kültürel miraslarına sahip çıkan, sürekli gelişen akademik kalitesi,
                                bilimsel, sanatsal, sportif ve kültürel faaliyetleri önemseyen bir üniversite olarak
                                sizlerin vatanına ve milletine faydalı bireyler olarak hizmet edeceğinize olan güvenimiz
                                tamdır.
                            </p>
                            <p class="mt-2">
                                Eğitim öğretim süreciniz boyunca alanında uzman, akademik donanımı yüksek akademik ve
                                idari kadromuz ile yanınızda olmaktan mutluluk duyacağız. En büyük yatırımın insana
                                yapılması gerektiğine inanıyor ve gönlümüzü ortaya koyarak sizleri yetiştirmeyi
                                hedefliyoruz. Her fırsatta vurguladığımız üzere üniversitemizin parolası gençlerin
                                önemsendiği bir üniversite olmaktır. Geleceğinizle ilgili vermiş olduğunuz bu karardan
                                dolayı sizleri kutluyor, eğitim hayatınız boyunca hepinize başarılar diliyorum.
                            </p>
                            <p class="mt-2" style="text-align: center;font-weight: bold">
                                Prof. Dr. Mustafa Kasım KARAHOCAGİL<br>
                                Rektör
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
