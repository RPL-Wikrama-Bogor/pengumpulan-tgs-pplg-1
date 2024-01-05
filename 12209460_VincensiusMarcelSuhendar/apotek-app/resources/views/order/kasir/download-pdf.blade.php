<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Be+Vietnam+Pro">
    <title>Bukti Pembelian</title>
    <style>
        *{
            font-family: 'Be Vietnam Pro';
        }
        #back-wrap {
            margin: 30px auto 0 auto;
            width: 500px;
            display: flex;
            justify-content: flex-end;
        }

        .btn-back {

            width: fit-content;
            padding: 8px 15px;
            color: #fff;
            background: #666;
            border-radius: 5px;
            text-decoration: none;
        }

        #receipt {
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.5);
            padding: 20px;
            margin: 30px auto 0 auto;
            width: 500px;
            background: #FFF;
        }

        h2 {
            font-size: .9rem;
            text-align: left;
        }

        p {

            font-size: 1rem;
            color: #666;
            line-height: 1.2rem;
        }

        #top {

            margin-top: 25px;
        }

        #top .info {

            text-align: left;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 5px 0 5px 15px;
            border: 1px solid #EEE
        }

        .tabletitle {
            font-size: .5rem;
            background: #EEE;
        }

        .service {
            border-bottom: 1px solid #EEE;
        }

        .itemtext {
            font-size: .7rem;
        }


        #legalcopy {

            margin-top: 15px;
        }

        .btn-print {
            float: right;
            color: #333;
        }
    </style>

<body>
    <div id="receipt">
        <center id="top">
            <div class="info">
                <h2>Apotek Jaya Abadi</h2>
            </div>
        </center>
        <div id="mid">
            <div class="info">
                <p>
                    @if(Auth::check())
                        id: {{ Auth::user()->id }}<br>
                        Penanggung Jawab: {{ Auth::user()->name }}<br>
                     @endif
                    Alamat: sepanjang jalan kenangan</br>
                    Email: apotekjayaabadi@gmail.com</br>
                    Phone: 000-111-22 2</br>
                </p>
            </div>
        </div>


        <div id="bot">
            <div id="table">
                <table>
                    <tr class="tabletitle">
                        <td class="item">
                            <h2>Obat</h2>
                        </td>
                        <td class="item">
                            <h2>Total</h2>
                        </td>
                        <td class="Rate">
                            <h2>Harga</h2>
                        </td>
                    </tr>
                    @foreach ($order['medicines'] as $medicine)
                        <tr class="service">
                            <td class="tableitem">
                                <p class="itemtext">{{ $medicine['name_medicine'] }}</p>
                            </td>
                            <td class="tableitem">
                                <p class="itemtext">{{ $medicine['qty'] }}</p>
                            </td>
                            <td class="tableitem">
                                <p class="itemtext">Rp. {{ number_format($medicine['price'], 0, ',') }}</p>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate">
                            <h2>PPN (10%)</h2>
                        </td>
                        @php
                            $ppn = $order['total_price'] * 0.01;
                        @endphp
                        <td class="payment">
                        </td>
                    </tr>
                    <h2>Rp. {{ number_format($ppn, 0, ',', '.') }}</h2>
                    <tr class="tabletitle">
                        <td></td>
                        <td class="Rate">
                            <h2>Total Harga</h2>
                        </td>
                        <td class="payment">
                            <h2>Rp. {{ number_format($order['total_price'], 0, ',', '.') }}</h2>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="legalcopy">
                <p class="legal"><strong>Terima kasih atas pembelian Anda!</strong>|| Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit. Maiores natus et numquam ducimus dolorum tenetur.
                </p>
            </div>
        </div>
    </div>
</body>
<script>
    function printPdf(){
        window.print();
    }
</script>

{{-- Done NIh ya Vingsent heheheheheh --}}

</html>
