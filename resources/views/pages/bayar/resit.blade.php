<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <style>
            /**
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
            **/
                @page {
                margin: 50px 0px 40px 0px;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                font-family: 'Roboto', sans-serif;
                font-weight: 400; font-size: 12px;
                line-height: 1.4;
                margin-left: 1.5cm;
                margin-right: 1.5cm;
            }
            main{
                    page-break-inside: auto;
            }
            .final{
                page-break-inside: avoid;
            }
            .contentSection {
                font-size: 12px;
                line-height: 1.4;
            }
            th, .cellGrey {
                background-color: #f1f1f1;
                padding: 6px;
            }
            td {
                padding: 6px;
            }
            h1 {
                font-size: 25px;
                text-align: center;
            }
            .textCenter {
                text-align: center;
            }
            .whiteBg {
                background-color: #fff;
                margin-top: 20px;
                padding: 20px;
            }
            .column {
                display: inline-block;
                width: 100%;
                vertical-align: text-top;
            }
            .textLeft {
                text-align: left;
            }
            .textRight {
                text-align: right;
            }
            .divider {
                border-bottom: 1px solid #e4e4e4; height: 30px;
            }
            .gap {
                margin-top: 25px;
            }
            .Table {
                display: table; width: 100%;
            }
            .Row {
                display: table-row;
                line-height: 1px;
            }
            .Cell {
                width:70%;
                display: table-cell;
            }
            .Cell2 {
                width:29%;
                display: table-cell;
            }
                .cellGrey {
                    background-color: #f1f1f1; padding: 6px;
                }
                .signature {
                    border-bottom: 1px dotted #ccc; height: 60px; width: 200px; float: right;
                }
                ol li {
                    margin-left: -20px;
                }
            .maklumat {
                font-size: 10px;
            }
            </style>
    </head>
    <body>
        <main>
            <div class="text-center ">
                <img src="{{ public_path('img/logo/logo_zakat_selangor.png') }}" width="30%">
                <h3 class="font-bold underline ">SLIP PENGESAHAN BAYARAN ZAKAT</h3>
            </div>

            <div class="mt-4">
                <div>
                    <p class="inline-block "><b>TARIKH DAN MASA</b></p>
                    <p class="inline-block" style="margin-left: 44px">: 26 OCT 2020 : 1:19:04 PM</p>
                </div>
                <div>
                    <p class="inline-block "><b>NO. TRANSAKSI</b></p>
                    <p class="inline-block" style="margin-left: 63px">: PKHA181-0</p>
                </div>
                <div>
                    <p class="inline-block "><b>KOD EJEN</b></p>
                    <p class="inline-block" style="margin-left: 96px">: 523</p>
                </div>
                <div>
                    <p class="inline-block "><b>NAMA EJEN</b></p>
                    <p class="inline-block" style="margin-left: 87px">: QIYAS SOLUTION SDN BHD</p>
                </div>
                <div>
                    <p class="inline-block "><b>NAMA PEMBAYAR</b></p>
                    <p class="inline-block" style="margin-left: 50px">: ALI BIN ABU</p>
                </div>
                <div>
                    <p class="inline-block "><b>NO. KAD PENGENALAN /</b></p>
                    <p class="inline-block " style="margin-left: 14px">: 851206-04-5065</p>
                </div>
                <div>
                    <p class="inline-block "><b>NO. KAD PENDAFTARAN</b></p>
                </div>
                <div>
                    <p class="inline-block "><b>ALAMAT</b></p>
                    <p class="inline-block" style="margin-left: 109px">: LOT 11, JALAN 9/6,</p>
                </div>
                <div>
                    <p class="inline-block" style="margin-left: 165px">  TAMAN IKS, SEKSYEN 9,</p>
                </div>
                <div>
                    <p class="inline-block" style="margin-left: 165px">  43650 BANDAR BARU BANGI, SELANGOR</p>
                </div>
            </div>

            <div class="relative w-full mt-10">
                <div class="absolute left-0 right-0 mx-auto mt-10 text-center " style="opacity: 0.15">
                    <img src="{{ public_path('img/logo/bg_zakat_selangor.png') }}" alt="" width="50%">
                </div>

                <div class="w-full">
                    <table style="width: 100%">
                        <thead class="border-b border-separate ">
                            <tr>
                                <td class="font-bold">JENIS BAYARAN</td>
                                <td class="font-bold text-center">TAHUN/HAUL</td>
                                <td class="font-bold text-right">JUMLAH (RM)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PENDAPATAN</td>
                                <td class="text-center">2020</td>
                                <td class="text-right">2,500.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td class="text-right"><b>JUMLAH</b></td>
                                <td class="text-right border-t border-b border-separate"><b>2,500.00</b></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="w-full">
                    <table style="width: 100%">
                        <thead class="border-b border-separate ">
                            <tr>
                                <td class="font-bold">CARA BAYARAN</td>
                                <td class="font-bold text-center">KETERANGAN</td>
                                <td class="font-bold text-right">JUMLAH (RM)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SISTEM</td>
                                <td class="text-center">1102012019-A5</td>
                                <td class="text-right">2,500.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td class="text-right"><b>JUMLAH</b></td>
                                <td class="text-right border-t border-b border-separate"><b>2,500.00</b></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class="mt-16 maklumat">
                <p class="font-bold underline mb-2">MAKLUMAT</p>
                    <div class="text-justify">Terima kasih di atas pembayaran zakat yang telah dilakukan. Semoga perlaksanaan rukun Islam ketiga ini akan membawa barakah kepada harta dan &nbsp;&nbsp;diri kita.</div>
                    <div class="mt-5 text-justify">
                        Bagi pembayar zakat individu, Slip Pengesahan Bayaran ini boleh dikemukakan kepada LHDN bagi tujuan rebat cukai di bawah Seksyen 6A (3), Akta &nbsp;&nbsp;Cukai Pendapatan 1967. Bagi pembayar zakat bukan individu pula, slip ini boleh dikemukakan kepada LHDN bagi tujuan tuntutan tolakan cukai &nbsp;&nbsp;dibawah Seksyen 44 (11 A), Akta Cukai Pendapatan 1967.
                    </div>
                    <div class="mt-5 text-justify">
                        Untuk mengemaskini maklumat peribadi serta melihat atau mencetak cendiri rekod pembayaran zakat dan selain selain zakat secara terperinci melalui &nbsp;&nbsp;kaedah (Kaunter, perbankan internet, Penolong Amil IPT dan lain-lain), anda diminta mendaftar untuk E-Penyata pembayaran zakat di alamat &nbsp;&nbsp;http://www.payzakat.com.my.
                    </div>
            </div>

            <div class="float-right mt-4">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('svg')->size(50)->style('round')->errorCorrection('H')->generate('Demo purpose only!')) !!} ">
            </div>
        </main>
    </body>
</html>
