@extends('layout.bootstrap3.index')
@section('content')

<div class="alert alert-danger alert-success">
    <header>
        <h1>
            FORM ENTRY MAJALAH DAN KOMIK
        </h1>
    </header>
    <div class="panel panel-collapse">
    </div>
    <table class="table table-bordered"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Jenis</th>
                <th>Judul</th>
                <th>Tanggal Terbit</th>
                <th>Penerbit</th>
                <th>Harga Sewa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entry as $val) { ?>
                <tr>
                    <td><?php echo $val->id ?></td>
                    <td><?php echo $val->kode ?></td>
                    <td><?php echo $val->jenis ?></td>
                    <td><?php echo $val->judul ?></td>
                    <td><?php echo $val->tanggal_terbit ?></td>
                    <td><?php echo $val->penerbit ?></td>
                    <td><?php echo $val->harga_sewa ?></td>
                    <td>
                        <a class="btn btn-info"
                           href="<?php echo URL::to('/entry/edit') . '/' . $val->id; ?>">
                            <i class="glyphicon glyphicon-edit"></i>
                            Edit
                        </a>

                        <a class="btn btn-danger"
                           href="<?php echo URL::to('/entry/delete') . '/' . $val->id; ?>">
                            <i class="glyphicon glyphicon-cog"></i>
                            Delete</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-info"
       href="<?php echo URL::to('/entry/add'); ?>">
        <i class="glyphicon glyphicon-import"></i>
        Tambah
    </a>
</div>
<?php echo $entry->links(); ?>
@stop
