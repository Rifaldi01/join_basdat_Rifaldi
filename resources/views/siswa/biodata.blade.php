@extends('master')
@section('conten')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <a href="{{URL::to('/tambah-siswa')}}"  class="container">Home</a>
            <div class="card-header"><i class="fa fa-table"> 
                Detail Siswa
                </i>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                 <table id="example" class="table table-bordered">
                   <thead>
                 <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>JK</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
              <tbody>
                @foreach($tampill as $data)
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->jk }}</td>
                <td>{{ $data->kelas }} {{ $data->jurusan }}</td>
            </tbody>
            @endforeach
        </table>
        </div>
        </div>
      </div>
    </div>

    @endsection