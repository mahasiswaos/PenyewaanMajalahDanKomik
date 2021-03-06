@extends('layout.bootstrap3.index')
@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Entry Majalah dan Komik </div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/entry/add/proses"); ?>" method="post">
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kode</label>
                    <div class="col-sm-4">
                        <input type="text" name="kode" class="form-control" placeholder="kode">
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                <label class="col-sm-2 control-label">Jenis</label>
                <div class="col-sm-4">
                <select class="form-control" name="jenis">
                <option value="" disabled="" selected="">Pilih Jenis</option>
                    <option>Komik</option> 
                    <option>Majalah</option> 
                </select>
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Judul</label>
                    <div class="col-sm-4">
                        <input type="text" name="judul" class="form-control" placeholder="judul">
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Terbit</label>
                    <div class="col-sm-4">
                        <input type="date" name="tanggal_terbit" class="form-control" placeholder="tanggal_terbit">
                        <p style="color: red"> </p>
                </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Penerbit</label>
                    <div class="col-sm-4">
                        <input type="text" name="penerbit" class="form-control" placeholder="penerbit">
                        <p style="color: red"> </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Harga Sewa</label>
                    <div class="col-sm-4">
                        <input type="text" name="harga_sewa" class="form-control" placeholder="harga_sewa">
                        <p style="color: red"> </p>
                </div>
                </div>
                
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i>Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop