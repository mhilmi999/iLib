<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cetak Invoice</title>
    <link href="<?= base_url();?>/asset/NewBiz/img/favicon.png" rel="icon">
    <link href="<?= base_url();?>/asset/NewBiz/img/apple-touch-icon.png" rel="apple-touch-icon">
    <style>
        @media print {
            #printPageButton {
                display: none;}
        }

            .invoice-box {
                max-width: 800px;
                margin: auto;
                padding: 30px;
                border: 1px solid #eee;
                box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                font-size: 16px;
                line-height: 24px;
                font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color: #555;
            }

            .invoice-box table {
                width: 100%;
                line-height: inherit;
                text-align: left;
            }

            .invoice-box table td {
                padding: 5px;
                vertical-align: top;
            }

            .invoice-box table tr td:nth-child(2) {
                text-align: right;
            }

            .invoice-box table tr.top table td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.top table td.title {
                font-size: 45px;
                line-height: 45px;
                color: #333;
            }

            .invoice-box table tr.information table td {
                padding-bottom: 40px;
            }

            .invoice-box table tr.heading td {
                background: #eee;
                border-bottom: 1px solid #ddd;
                font-weight: bold;
            }

            .invoice-box table tr.details td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.item td {
                border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item.last td {
                border-bottom: none;
            }

            .invoice-box table tr.total td:nth-child(2) {
                border-top: 2px solid #eee;
                font-weight: bold;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }

                .invoice-box table tr.information table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
            }

            /** RTL **/
            .rtl {
                direction: rtl;
                font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            }

            .rtl table {
                text-align: right;
            }

            .rtl table tr td:nth-child(2) {
                text-align: left;
            }
    </style>
</head>

<body>
    <main id="main">


        <section>
            <br>
            <div class="invoice-box">
                <table cellpadding="0" cellspacing="0">
                    <tr class="top">
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td class="title">
                                        <img src="<?= base_url(); ?>/asset/NewBiz/img/logo.png" alt="" class="img-fluid" style="width:100%; max-width:300px;">
                                    </td>

                                    <td>
                                        Invoice Untuk : <?= $nama; ?><br>
                                        Dicetak Pada : <?= date('d-m-Y', strtotime("now")); ?><br>
                                        Tanggal Kembali : 15/12/2020 <br>
                                        Status : Lewat Deadline
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="information">
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td>
                                        Gedung Perpustakaan ITS<br>
                                        Kampus ITS, Keputih, <br>
                                        Sukolilo-Surabaya 60111.<br>
                                        Jawa Timur, Indonesia.<br>
                                    </td>

                                    <td>
                                        <strong>Phone:</strong> +62 5589 55488 55<br>
                                        <strong>Email:</strong> ilib.perpus@gmail.com<br>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="heading">
                        <td>
                            Tunggakan Peminjaman
                        </td>

                        <td>
                            Total
                        </td>
                    </tr>

                    <tr class="details">
                        <td>
                            Denda
                        </td>

                        <td>
                            Rp6.000
                        </td>
                    </tr>

                    <tr class="heading">
                        <td>
                            Buku Yang Dipinjam
                        </td>

                        <td>
                            Jumlah
                        </td>
                    </tr>

                    <tr class="item">
                        <td>
                            Shopping with Dad
                        </td>

                        <td>
                            3
                        </td>
                    </tr>

                    <tr class="total">
                        <td></td>

                        <td>
                            Total: Rp6.000
                        </td>
                    </tr>
                </table>
            </div>
            <br>
        </section>
    </main>
    <div class="col-md-12 text-center">
        <button class="btn btn-info" onclick="window.print();" id="printPageButton" style="margin:auto;"> Cetak</button>
    </div>
    <br>
    <br>

</body>

</html>