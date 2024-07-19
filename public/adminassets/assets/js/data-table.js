// npm package: datatables.net-bs5
// github link: https://github.com/DataTables/Dist-DataTables-Bootstrap5

$(function () {
    'use strict';

    $(function () {
        $('#dataTableExample').DataTable({
            "aLengthMenu": [
                [5, 30, 50, -1],
                [5, 30, 50, "All"]
            ],
            "iDisplayLength": 5,
            "language": {
                "info": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                "infoEmpty": "Kayıt yok",
                "infoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
                "infoThousands": ".",
                "lengthMenu": "Sayfada _MENU_ kayıt göster",
                "loadingRecords": "Yükleniyor...",
                "processing": "İşleniyor...",
                "search": "Ara:",
                "zeroRecords": "Eşleşen kayıt bulunamadı",
                "paginate": {
                    "first": "İlk",
                    "last": "Son",
                    "next": "Sonraki",
                    "previous": "Önceki"
                },
                "aria": {
                    "sortAscending": ": artan sütun sıralamasını aktifleştir",
                    "sortDescending": ": azalan sütun sıralamasını aktifleştir"
                },
                "select": {
                    "rows": {
                        "1": "1 kayıt seçildi",
                        "_": "%d kayıt seçildi"
                    },
                    "cells": {
                        "1": "1 hücre seçildi",
                        "_": "%d hücre seçildi"
                    },
                    "columns": {
                        "1": "1 sütun seçildi",
                        "_": "%d sütun seçildi"
                    }
                },
                "autoFill": {
                    "cancel": "İptal",
                    "fillHorizontal": "Hücreleri yatay olarak doldur",
                    "fillVertical": "Hücreleri dikey olarak doldur",
                    "fill": "Bütün hücreleri <i>%d</i> ile doldur",
                    "info": "Detayı"
                },
                "buttons": {
                    "collection": "Koleksiyon <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"></span>",
                    "colvis": "Sütun görünürlüğü",
                    "colvisRestore": "Görünürlüğü eski haline getir",
                    "copySuccess": {
                        "1": "1 satır panoya kopyalandı",
                        "_": "%ds satır panoya kopyalandı"
                    },
                    "copyTitle": "Panoya kopyala",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "1": "1 Satır Göster",
                        "-1": "Bütün satırları göster",
                        "_": "%d satır göster"
                    },
                    "pdf": "PDF",
                    "print": "Yazdır",
                    "copy": "Kopyala",
                    "copyKeys": "Tablodaki veriyi kopyalamak için CTRL veya u2318 + C tuşlarına basınız. İptal etmek için bu mesaja tıklayın veya escape tuşuna basın.",
                    "createState": "Şuanki Görünümü Kaydet",
                    "removeAllStates": "Tüm Görünümleri Sil",
                    "removeState": "Aktif Görünümü Sil",
                    "renameState": "Aktif Görünümün Adını Değiştir",
                    "savedStates": "Kaydedilmiş Görünümler",
                    "stateRestore": "Görünüm -&gt; %d",
                    "updateState": "Aktif Görünümün Güncelle"
                },
                "searchBuilder": {
                    "add": "Koşul Ekle",
                    "button": {
                        "0": "Arama Oluşturucu",
                        "_": "Arama Oluşturucu (%d)"
                    },
                    "condition": "Koşul",
                    "conditions": {
                        "date": {
                            "after": "Sonra",
                            "before": "Önce",
                            "between": "Arasında",
                            "empty": "Boş",
                            "equals": "Eşittir",
                            "not": "Değildir",
                            "notBetween": "Dışında",
                            "notEmpty": "Dolu"
                        },
                        "number": {
                            "between": "Arasında",
                            "empty": "Boş",
                            "equals": "Eşittir",
                            "gt": "Büyüktür",
                            "gte": "Büyük eşittir",
                            "lt": "Küçüktür",
                            "lte": "Küçük eşittir",
                            "not": "Değildir",
                            "notBetween": "Dışında",
                            "notEmpty": "Dolu"
                        },
                        "string": {
                            "contains": "İçerir",
                            "empty": "Boş",
                            "endsWith": "İle biter",
                            "equals": "Eşittir",
                            "not": "Değildir",
                            "notEmpty": "Dolu",
                            "startsWith": "İle başlar",
                            "notContains": "İçermeyen",
                            "notStartsWith": "Başlamayan",
                            "notEndsWith": "Bitmeyen"
                        },
                        "array": {
                            "contains": "İçerir",
                            "empty": "Boş",
                            "equals": "Eşittir",
                            "not": "Değildir",
                            "notEmpty": "Dolu",
                            "without": "Hariç"
                        }
                    },
                    "data": "Veri",
                    "deleteTitle": "Filtreleme kuralını silin",
                    "leftTitle": "Kriteri dışarı çıkart",
                    "logicAnd": "ve",
                    "logicOr": "veya",
                    "rightTitle": "Kriteri içeri al",
                    "title": {
                        "0": "Arama Oluşturucu",
                        "_": "Arama Oluşturucu (%d)"
                    },
                    "value": "Değer",
                    "clearAll": "Filtreleri Temizle"
                },
                "searchPanes": {
                    "clearMessage": "Hepsini Temizle",
                    "collapse": {
                        "0": "Arama Bölmesi",
                        "_": "Arama Bölmesi (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown}/{total}",
                    "emptyPanes": "Arama Bölmesi yok",
                    "loadMessage": "Arama Bölmeleri yükleniyor ...",
                    "title": "Etkin filtreler - %d",
                    "showMessage": "Tümünü Göster",
                    "collapseMessage": "Tümünü Gizle"
                },
                "thousands": ".",
                "datetime": {
                    "amPm": [
                        "öö",
                        "ös"
                    ],
                    "hours": "Saat",
                    "minutes": "Dakika",
                    "next": "Sonraki",
                    "previous": "Önceki",
                    "seconds": "Saniye",
                    "unknown": "Bilinmeyen",
                    "weekdays": {
                        "0": "Pzt",
                        "1": "Sal",
                        "2": "Çar",
                        "3": "Per",
                        "4": "Cum",
                        "5": "Cmt",
                        "6": "Paz"
                    },
                    "months": {
                        "0": "Ocak",
                        "1": "Şubat",
                        "2": "Mart",
                        "3": "Nisan",
                        "4": "Mayıs",
                        "5": "Haziran",
                        "6": "Temmuz",
                        "7": "Ağustos",
                        "8": "Eylül",
                        "9": "Ekim",
                        "10": "Kasım",
                        "11": "Aralık"
                    }
                },
                "decimal": ",",
                "editor": {
                    "close": "Kapat",
                    "create": {
                        "button": "Yeni",
                        "submit": "Kaydet",
                        "title": "Yeni kayıt oluştur"
                    },
                    "edit": {
                        "button": "Düzenle",
                        "submit": "Güncelle",
                        "title": "Kaydı düzenle"
                    },
                    "error": {
                        "system": "Bir sistem hatası oluştu (Ayrıntılı bilgi)"
                    },
                    "multi": {
                        "info": "Seçili kayıtlar bu alanda farklı değerler içeriyor. Seçili kayıtların hepsinde bu alana aynı değeri atamak için buraya tıklayın; aksi halde her kayıt bu alanda kendi değerini koruyacak.",
                        "noMulti": "Bu alan bir grup olarak değil ancak tekil olarak düzenlenebilir.",
                        "restore": "Değişiklikleri geri al",
                        "title": "Çoklu değer"
                    },
                    "remove": {
                        "button": "Sil",
                        "confirm": {
                            "1": "Bu kaydı silmek istediğinizden emin misiniz?",
                            "_": "%d adet kaydı silmek istediğinize emin misiniz?"
                        },
                        "submit": "Sil",
                        "title": "Kayıtları sil"
                    }
                },
                "stateRestore": {
                    "creationModal": {
                        "button": "Kaydet",
                        "columns": {
                            "search": "Kolon Araması",
                            "visible": "Kolon Görünümü"
                        },
                        "name": "Görünüm İsmi",
                        "order": "Sıralama",
                        "paging": "Sayfalama",
                        "scroller": "Kaydırma (Scrool)",
                        "search": "Arama",
                        "searchBuilder": "Arama Oluşturucu",
                        "select": "Seçimler",
                        "title": "Yeni Görünüm Oluştur",
                        "toggleLabel": "Kaydedilecek Olanlar"
                    },
                    "duplicateError": "Bu Görünüm Daha Önce Tanımlanmış",
                    "emptyError": "Görünüm Boş Olamaz",
                    "emptyStates": "Herhangi Bir Görünüm Yok",
                    "removeJoiner": "ve",
                    "removeSubmit": "Sil",
                    "removeTitle": "Görünüm Sil",
                    "renameButton": "Değiştir",
                    "renameLabel": "Görünüme Yeni İsim Ver -&gt; %s:",
                    "renameTitle": "Görünüm İsmini Değiştir",
                    "removeConfirm": "Görünümü silmek istediğinize emin misiniz?",
                    "removeError": "Görünüm silinemedi"
                },
                "emptyTable": "Tabloda veri bulunmuyor",
                "searchPlaceholder": "Arayın...",
                "infoPostFix": " "
            }},
        );
        $('#dataTableExample').each(function () {
            var datatable = $(this);
            // SEARCH - Add the placeholder for Search and Turn this into in-line form control
            var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
            search_input.attr('placeholder', 'Search');
            search_input.removeClass('form-control-sm');
            // LENGTH - Inline-Form control
            var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
            length_sel.removeClass('form-control-sm');
        });
    });

});
