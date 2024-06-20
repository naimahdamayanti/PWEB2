<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Guru</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH GURU
                    </div>
                    <div class="card-body">
                        <form action="simpan-guru.php" method="POST">

                            <div class="form-group">
                                <label>NUPTK</label>
                                <input type="text" name="nuptk" placeholder="Masukkan NUPTK Guru" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" name="nama" placeholder="Masukkan Nama Guru"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Golongan </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="golongan">
                                    <option selected>Menu Golongan</option>
                                    <option value="III/a">III/a</option>
                                    <option value="III/b">III/b</option>
                                    <option value="III/c">III/c</option>
                                    <option value="III/d">III/d</option>
                                    <option value="IV/a">IV/a</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Jenis Kelamin </label>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_kategori1" value="P">
                                <label class="form-check-label" for="jk_kategori1">
                                    Perempuan
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_kategori2" value="L">
                                <label class="form-check-label" for="jk_kategori2">
                                    Laki - laki
                                </label>
                                </div></div>
                                <br><br>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>