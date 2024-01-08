<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cetak Dokumen</title>
    <style>
      body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
      }

      * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
      }

      .page {
        width: 210mm;
        min-height: 297mm;
        padding: 15mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        position: relative;
      }

      .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
      }

      td {
        padding-top: 5px;
      }

      @page {
        size: A4;
        margin: 0;
      }

      @media print {

        html,
        body {
          width: 100mm;
          height: 500mm;
        }

        .page {
          margin: 0;
          border: initial;
          border-radius: initial;
          width: initial;
          min-height: initial;
          box-shadow: initial;
          background: initial;
          page-break-after: always;
        }
      }
    </style>
  </head>

  <body>
    <div class="book">
      <div class="page" id="result">
        <div style="text-align: center;">
          <h4>SURAT PERNYATAAN</h4>
          <h4>TIDAK AKAN DATANG TERLAMBAT KESEKOLAH</h4>
        </div>
        <p style="margin-top: 50px; margin-bottom: 30px;">
          Yang bertanda tangan dibawah ini:
        </p>
        <table>
          <tr>
            <td style="width: 100px;">NIS</td>
            <td>:</td>
            <td>{{ $data['nis'] }}</td>
          </tr>
          <tr>
            <td style="width: 100px;">Nama</td>
            <td>:</td>
            <td>{{ $data['name'] }}</td>
          </tr>
          <tr>
            <td style="width: 100px;">Rombel</td>
            <td>:</td>
            <td>{{ $data['rombel']['rombel'] }}</td>
          </tr>
          <tr>
            <td style="width: 100px;">Rayon</td>
            <td>:</td>
            <td>{{ $data['rayon']['rayon'] }}</td>
          </tr>
        </table>
        <p style="margin-top: 30px;line-height:1.5;">
          Dengan ini menyatakan bahwa saya telah melakukan pelanggaran tata
          tertib sekolah, yaitu terlambat datang ke sekolah sebanyak
          <span style="font-weight: bold;">3 Kali</span> yang mana hal tersebut
          termasuk kedalam pelanggaran kedisiplinan. Saya berjanji tidak akan
          terlambat datang ke sekolah lagi. Apabila saya terlambat datang ke
          sekolah lagi saya siap diberikan sanksi yang sesuai dengan peraturan
          sekolah.
        </p>
        <p>
          Demikian surat pernyataan terlambat ini saya buat dengan penuh
          penyesalan.
        </p>
        <div style="margin-top: 80px;float:right; ">
          <div style="width: 250px;text-align: center;">
            <p style="font-style: italic;">
              Bogor, {{ date("j F Y", time()) }}
            </p>
            <p>Orang Tua/Wali Murid,</p>
            <p style="margin-top: 100px;">(......................)</p>
          </div>
        </div>
        <div style="margin-top: 110px;float:left; "> 
          <div style="width: 250px;text-align: center;">
            <p>Peserta Didik,</p>
            <p style="margin-top: 100px;">{{ $data['name'] }}</p>
          </div>
        </div>
        <div style="margin-top: 50px;float:left; ">
          <div style="width: 250px;text-align: center;">
            <p>Pembimbing Siswa,</p>
            <p style="margin-top: 100px;">
              @foreach($data['rayon'] as $rayon)
                    @if(is_array($rayon) && isset($rayon['user']))
                      {{ $rayon['user']['name'] }}
                    @endif
            @endforeach
            </p>
          </div>
        </div>
        <div style="margin-top: 50px;float:right; ">
          <div style="width: 250px;text-align: center;">
            <p>Kesiswaan,</p>
            <p style="margin-top: 100px;">(......................)</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
