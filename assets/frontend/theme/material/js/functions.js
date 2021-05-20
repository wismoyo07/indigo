function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function currentDate() {
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
        thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;
    return day + ' ' + months[month] + ' ' + year;
}

function round(value, decimals) {
    decimals = typeof decimals !== 'undefined' ? decimals : 2;
    return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
}

function getParams(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function formatMoney(a, c, d, t) {
    var n = a,
        c = isNaN(c = Math.abs(c)) ? 0 : c,
        d = d == undefined ? "," : d,
        t = t == undefined ? "." : t,
        s = n < 0 ? "-" : "",
        i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}

function numberWithDot(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function setBreadcrumb(judul, url, data) {

    if (pathArray[1] == 'sekolah') {
        $('.breadcrumb').html(
            '<li><a href="/"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>' +
            '<li><a href="/' + url + '">' + judul + '</a></li>' +
            '<li><a href="/' + url + '/1/' + data.kode_wilayah_provinsi + '">' + data.provinsi + '</a></li>' +
            '<li><a href="/' + url + '/2/' + data.kode_wilayah_kabupaten + '">' + data.kabupaten + '</a></li>' +
            '<li><a href="/' + url + '/3/' + data.kode_wilayah_kecamatan + '">' + data.kecamatan + '</a></li>' +
            '<li class="active">' + data.nama + '</li>'
        );
    } else if (pathArray[2] == 3) {
        $('.breadcrumb').html(
            '<li><a href="/"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>' +
            '<li><a href="/' + url + '">' + judul + '</a></li>' +
            '<li><a href="/' + url + '/1/' + data.kode_wilayah_induk_provinsi + '">' + data.induk_provinsi + '</a></li>' +
            '<li><a href="/' + url + '/2/' + data.kode_wilayah_induk_kabupaten + '">' + data.induk_kabupaten + '</a></li>' +
            '<li class="active">' + data.induk_kecamatan + '</li>'
        );
        document.title = judul + " " + data.induk_kecamatan + " - Dapodikdasmen";
    } else if (pathArray[2] == 2) {
        $('.breadcrumb').html(
            '<li><a href="/"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>' +
            '<li><a href="/' + url + '">' + judul + '</a></li>' +
            '<li><a href="/' + url + '/1/' + data.kode_wilayah_induk_provinsi + '">' + data.induk_provinsi + '</a></li>' +
            '<li class="active">' + data.induk_kabupaten + '</li>'
        );
        document.title = judul + " " + data.induk_kabupaten + " - Dapodikdasmen";
    } else if (pathArray[2] == 1) {
        $('.breadcrumb').html(
            '<li><a href="/"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>' +
            '<li><a href="/' + url + '">' + judul + '</a></li>' +
            '<li class="active">' + data.induk_provinsi + '</li>'
        );
        document.title = judul + " " + data.induk_provinsi + " - Dapodikdasmen";
    } else {
        $('.breadcrumb').html(
            '<li><a href="/"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>' +
            '<li class="active">' + judul + '</li>'
        );
        document.title = judul + " Nasional - Dapodikdasmen";
    }
}

$(function() {
    $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});

/*function setPieChart(selector, colorRGB) {
    $(selector).easyPieChart({
        trackColor: '#eeeeee',
        barColor: colorRGB,
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 15,
        animate: 500,
        size: 130
    });
}

function setPieChartKecil(selector, colorRGB) {
    $(selector).easyPieChart({
        trackColor: '#eeeeee',
        barColor: colorRGB,
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 10,
        animate: 80,
        size: 85
    });
}*/

function dataTableInit(selector) {
    // Table setup
    // ------------------------------

    // Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        /*columnDefs: [{
         orderable: false,
         width: '100px',
         targets: [ 5 ]
         }],*/
        dom: '<"datatable-header"fT><"datatable-scroll"t>',
        language: {
            search: '<span>Pencarian:</span> _INPUT_',
            lengthMenu: '_MENU_ data/halaman untuk data ke&nbsp;',
            paginate: { 'first': 'Pertama', 'last': 'Terakhir', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });

    // Define default path for DataTables SWF file
    // $.fn.dataTable.TableTools.defaults.sSwfPath = "/assets/libs/datatables/copy_csv_xls_pdf.swf";

    // Tabletools defaults
    $.extend(true, $.fn.DataTable.TableTools.classes, {
        "container" : "btn-group DTTT_container", // buttons container
        "buttons" : {
            "normal" : "btn btn-default btn-raised", // default button classes
            "disabled" : "disabled" // disabled button classes
        },
        "collection" : {
            "container" : "dropdown-menu" // collection container to take dropdown menu styling
        },
        "select" : {
            "row" : "success" // selected row class
        }
    });

    // Collection dropdown defaults
    $.extend(true, $.fn.DataTable.TableTools.DEFAULTS.oTags, {
        collection: {
            container: "ul",
            button: "li",
            liner: "a"
        }
    });

    // Init Table
    // ------------------------------
    $(selector).DataTable({
        tableTools: {
            sSwfPath: "/assets/libs/datatables/copy_csv_xls_pdf.swf",
            sRowSelect: "os",
            "aButtons": [
                {
                    "sExtends": "copy",
                    "sButtonText": "<i class='icon icon-copy3'></i>&nbsp; Copy"
                },
                {
                    "sExtends": "xls",
                    "sButtonText": "<i class='icon icon-file-excel'></i>&nbsp; Excel",
                    "oSelectorOpts": {
                        page: 'current'
                    }
                }
            ]
        },
        language: {
            "decimal": ",",
            "thousands": ".",
            "emptyTable": "<strong>Belum ada data untuk semester ini</strong>"
        },
        paging: false,
        aaSorting: []
    });

    // External table additions
    // ------------------------------

    // Add placeholder to the datatable filter option
    $('.dataTables_filter input[type=search]').attr('placeholder','Masukkan kata kunci...');

    // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: "-1"
    });
}