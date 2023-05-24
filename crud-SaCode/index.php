<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD PHP MYSQLI + BOOSTRAP V.5</title>
  </head>
  <body>

    <div class="container">
        <h3 class="text-center">Data Inventaris</h3>
        <h3 class="text-center">Kantor Konsultan PT. NokenSoft Teknologi Informasi</h3>
       <!-- awal row --> 
        <div class="row">
             <!-- awal col --> 
            <div class="col-md-8 mx-auto">
             <!-- awal card -->     
            <div class="card">
                <h5 class="card-header bg-info text-light">Form Input Data Barang</h5>
                    <div class="card-body">
                        <!-- awal form -->
                            <form action="POST">
                            <div class="mb-3">
                                <label class="form-label">Kode Barang</label>
                                <input type="text" name="tkode" class="form-control" placeholder="masukan kode barang">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" name="tname" class="form-control" placeholder="masukan nama barang">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Asal Barang</label>
                                <select class="form-select" name="tasal">
                                <option>-pilih-</option>
                                <option value="Pembelian">Pembelian</option>
                                <option value="Hibah">Hibah</option>
                                <option value="Sumbangan">Sumbangan</option>
                                <option value="Bantuan">Bantuan</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Jumlah</label>
                                        <input type="number" name="tjumlah" class="form-control" placeholder="masukan jumlah barang">
                                    </div>                 
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Satuan</label>
                                        <select class="form-select" name="tsatuan">
                                        <option>-pilih-</option>
                                        <option value="Unit">Unit</option>
                                        <option value="Kotak">Kotak</option>
                                        <option value="Pcs">Pcs</option>
                                        <option value="Pak">Pak</option>
                                        </select>
                                    </div>                 
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Diterima</label>
                                        <input type="date" name="ttanggal_diterima" class="form-control" placeholder="masukan jumlah barang">
                                    </div>                 
                                </div>

                                <div class="text-center">
                                    <hr>
                                    <button class="btn btn-outline-primary" name="bsimpan" type="submit">Simpan</button>
                                    <button class="btn btn-outline-danger" name="bkosongkan" type="reset">Kosoongkan</button>
                                </div>
                            </div>
                            </form>
                        <!-- akhir form -->
                    </div>
                    <div class="card-footer bg-info">

                    </div>
            </div>
            <!-- akhir row --> 
            </div>
            <!-- akhir row --> 
        </div>
        <!-- akhir row --> 

        <!-- awal card -->     
        <div class="card mt-4">
            <h5 class="card-header bg-info text-light">Data Barang</h5>
                <div class="card-body">     
                  </div>
                    <div class="card-footer bg-info">
                </div>
            </div>
            <!-- akhir row --> 

    </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>