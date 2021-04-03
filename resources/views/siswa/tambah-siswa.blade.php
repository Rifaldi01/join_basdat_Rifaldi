@extends('master')
@section('conten')
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header"><i class="fa fa-table"></i> Data Siswa</div>
          <div class="card-body">
            <div class="table-responsive">
            <table id="example" class="table table-bordered">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Jenis Kelamin</th>
                      <th class="text-center">Nilai</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($tampil as $data)
                <tbody>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->jk }}</td>
                    <td class="text-center">
                      <a href="{{ URL::to('/detail/'.$data->id)}}" >Tambah Detail</a>
                     </td>
                  </tbody>
                  @endforeach
          </table>
          </div>
          </div>
        </div>
      </div>
    
    <!-- Default Size Modal -->
    <button class="btn btn-primary m-1" data-toggle="modal" data-target="#defaultsizemodal">Tambah Data Siswa</button>
    <!-- Modal -->
      <div class="modal fade" id="defaultsizemodal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><i class="fa fa-star"></i>Tambah Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="POST">
                @csrf
              <div class="card">
                <div class="card-body">
                <div class="card-title">Masukan Data Siswa</div>
                <hr>
                 <form>
                <div class="form-group">
                 <label for="input-13">Nama Lengkap</label>
                 <input type="text" class="form-control" name="nama" placeholder="masukan nama" id="input-13">
              </div>
                <div class="form-group">
                 <label for="input-13">Alamat</label>
                 <input type="text" class="form-control" name="alamat" placeholder="masukan nama" id="input-13">
                <div class="form-group">
                  <label>Jenis Kelamin</label><br>
                  <select name="jk" id="" class="form-control" >
                  <option name="Pilih Jenis Kelamin" >Pilih Jenis kelamin</option>
                  <option value="laki-laki" required>laki-laki</option>
                  <option value="Perempuan"required>Perempuan</option>
                  </select>
               </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              <button type="submite" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    </div>

@endsection

