<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    
</head>

<body>
    <div class="mt-4">
        <h4><b>{{ $data }}</b></h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Dosen</th>
                    <th>NIP</th>
                    <th>Nama Dosen</th>
                    <th>Mata Kuliah</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>
                @foreach ($dosen as $row)
                <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $row->id_dosen ?></td>
                    <td><?= $row->nip ?></td>
                    <td><?= $row->nama_dosen ?></td>
                    <td><?= $row->mata_kuliah ?></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
