@extends('adminlte::page') 
@section('title', 'Edit obat') 
@section('content_header') 
 <h1 class="m-0 text-dark">Edit obat</h1> @stop
@section('content') 
 <form action="{{route('obat.update', $obat)}}" method="post">
 @method('PUT') 
 @csrf
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">
 
 <div class="form-group">
 <label for="kode_obat">kode_obat</label>
 <input type="text" class="form-control 
@error('kode_obat') is-invalid @enderror" id="kode_obat"
placeholder="kode_obat" name="kode_obat" value="{{$obat->kode_obat ?? old('kode_obat')}}">
 @error('kode_obat') <span class="text-danger">{{$message}}</span> @enderror
 </div>

 <div class="form-group">
 <label for="nama_obat">nama_obat</label>
 <input type="text" class="form-control 
@error('nama_obat') is-invalid @enderror" id="nama_obat"
placeholder="nama_obat" name="nama_obat" value="{{$obat->nama_obat ?? old('nama_obat')}}">
 @error('nama_obat') <span class="text-danger">{{$message}}</span> @enderror
 </div>

 <div class="form-group">
 <label for="merk">merk</label>
 <input type="text" class="form-control 
@error('merk') is-invalid @enderror" id="merk"
placeholder="merk" name="merk" value="{{$obat->merk ?? old('merk')}}">
 @error('merk') <span class="text-danger">{{$message}}</span> @enderror
 </div>

 <div class="form-group">
 <label for="jenis">jenis</label>
 <input type="text" class="form-control 
@error('jenis') is-invalid @enderror" id="jenis"
placeholder="jenis" name="jenis" value="{{$obat->jenis ?? old('jenis')}}">
 @error('jenis') <span class="text-danger">{{$message}}</span> @enderror
 </div>

 <div class="form-group">
 <label for="satuan">satuan</label>
 <input type="text" class="form-control 
@error('satuan') is-invalid @enderror" id="satuan"
placeholder="satuan" name="satuan" value="{{$obat->satuan ?? old('satuan')}}">
 @error('satuan') <span class="text-danger">{{$message}}</span> @enderror
 </div>

 <div class="form-group">
 <label for="golongan">golongan</label>
 <input type="text" class="form-control 
@error('golongan') is-invalid @enderror" id="golongan"
placeholder="golongan" name="golongan" value="{{$obat->golongan ?? old('golongan')}}">
 @error('golongan') <span class="text-danger">{{$message}}</span> @enderror
 </div>

 <div class="form-group">
 <label for="kemasan">kemasan</label>
 <input type="text" class="form-control 
@error('kemasan') is-invalid @enderror" id="kemasan"
placeholder="kemasan" name="kemasan" value="{{$obat->kemasan ?? old('kemasan')}}">
 @error('kemasan') <span class="text-danger">{{$message}}</span> @enderror
 </div>

 <div class="form-group">
 <label for="harga_jual">harga_jual</label>
 <input type="text" class="form-control 
@error('harga_jual') is-invalid @enderror" id="harga_jual"
placeholder="harga_jual" name="harga_jual" value="{{$obat->harga_jual ?? old('harga_jual')}}">
 @error('harga_jual') <span class="text-danger">{{$message}}</span> @enderror
 </div>
 
 <div class="form-group">
 <label for="stok">stok</label>
 <input type="text" class="form-control 
@error('stok') is-invalid @enderror" id="stok"
placeholder="stok" name="stok" value="{{$obat->stok ?? old('stok')}}">
 @error('stok') <span class="text-danger">{{$message}}</span> @enderror
 </div>
 
 </div>
 <div class="card-footer">
 <button type="submit" class="btn btn-primary">Simpan</button>
 <a href="{{route('obat.index')}}" class="btn 
btn-default">
 Batal
 </a>
 </div>
 </div>
 </div>
 </div> @stop