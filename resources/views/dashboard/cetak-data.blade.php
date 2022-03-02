<html>
    <head>
        <style>
            table, th, td {
              border:1px solid black;
            }
            </style>
        <title>Cetak Data Perjalananmu</title>
    </head>
    <body>
        <center><h3>Catatan Perjalananmu : {{Auth()->user()->name}}</h3></center>
        <table style="width:100%">
            <tr>
              <th>Tanggal Masuk</th>
              <th>Jam Masuk</th>
              <th>Jam Keluar</th>
              <th>Lokasi</th>
              <th>Suhu Tubuh</th>
            </tr>
            @foreach($data as $item)
            <tr>
              <td>{{$item->tanggal_masuk}}</td>
              <td>{{$item->jam_masuk}}</td>
              <td>{{$item->jam_keluar}}</td>
              <td>{{$item->lokasi}}</td>
              <td>{{$item->suhu_tubuh}}</td>
            </tr>
            @endforeach
          </table>
          <script type="text/javascript">
           
            window.print();
         
            </script>
    </body>
</html>