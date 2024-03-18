@extends('adminlte::page') 
@section('title', 'Tambah obat') 
@section('content_header') 
 <h1 class="m-0 text-dark">Tambah obat</h1> @stop
@section('content') 
 <form action="{{route('obat.store')}}" method="post">
 @csrf
 <div class="row">
 <div class="col-12">
 <div class="card">
 <div class="card-body">
    <div class="form-group">
    <label for="obat">Kode Obat</label>
    <input type="text" class="form-control 
    @error('kode_obat') is-invalid @enderror" id="kode_obat"
    placeholder="Kode Obat" name="kode_obat"
    value="{{old('obat')}}">
    @error('kode_obat') <span class="text-danger">{{$message}}</span> @enderror
    </div> 

    <div class="form-group">
    <label for="obat">Nama Obat</label>
    <input type="text" class="form-control 
    @error('nama_obat') is-invalid @enderror" id="nama_obat"
    placeholder="Nama Obat" name="nama_obat"
    value="{{old('obat')}}">
    @error('nama_obat') <span class="text-danger">{{$message}}</span> @enderror
    </div> 

    <div class="form-group">
    <label for="obat">Merk</label>
    <input type="text" class="form-control 
    @error('kode_obat') is-invalid @enderror" id="merk"
    placeholder="merk" name="merk"
    value="{{old('obat')}}">
    @error('merk') <span class="text-danger">{{$message}}</span> @enderror
    </div> 

    <div class="form-group">
    <label for="obat">Jenis</label>
    <input type="text" class="form-control 
    @error('jenis') is-invalid @enderror" id="jenis"
    placeholder="Jenis" name="jenis"
    value="{{old('obat')}}">
    @error('jenis') <span class="text-danger">{{$message}}</span> @enderror
    </div> 

    <div class="form-group">
    <label for="obat">Satuan</label>
    <input type="text" class="form-control 
    @error('satuan') is-invalid @enderror" id="satuan"
    placeholder="Satuan" name="satuan"
    value="{{old('obat')}}">
    @error('satuan') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    
    <div class="form-group">
    <label for="obat">Golongan</label>
    <input type="text" class="form-control 
    @error('golongan') is-invalid @enderror" id="golongan"
    placeholder="Golongan" name="golongan"
    value="{{old('obat')}}">
    @error('golongan') <span class="text-danger">{{$message}}</span> @enderror
    </div> 
    
    <div class="form-group">
    <label for="obat">Kemasan</label>
    <input type="text" class="form-control 
    @error('kemasan') is-invalid @enderror" id="kemasan"
    placeholder="Kemasan" name="kemasan"
    value="{{old('obat')}}">
    @error('kemasan') <span class="text-danger">{{$message}}</span> @enderror
    </div> 

    <div class="form-group">
    <label for="obat">Harga Obat</label>
    <input type="text" class="form-control 
    @error('harga_obat') is-invalid @enderror" id="harga_obat"
    placeholder="Harga obat" name="harga_obat"
    value="{{old('obat')}}">
    @error('harga_obat') <span class="text-danger">{{$message}}</span> @enderror
    </div> 

    <div class="form-group">
    <label for="obat">Stok</label>
    <input type="text" class="form-control 
    @error('stok') is-invalid @enderror" id="stok"
    placeholder="Stok" name="stok"
    value="{{old('obat')}}">
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