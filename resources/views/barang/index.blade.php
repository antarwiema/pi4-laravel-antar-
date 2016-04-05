@extends('layout.layout')
@section('main')
<h1>Daftar Barang</h1>
<p>{{ link_to_route('barang.buat', 'Tambahkan Barang', '',array('class'=> 'btn btn-primary')) }}</p>
@if ($barangs->count())
<table class="table table-striped table-condensed">
<thead>
<tr>
<th>No.</th>
<th>Nama Barang</th>
<th>Lokasi</th>
<th colspan="2">Aksi</th>
</tr>
</thead>
<tbody>
<?php $no = 1; ?>
@foreach ($barangs as $barang)
<tr>
<td>{{ $no++ }}</td>
<td>{{ $barang->nama }}</td>
<td>{{ $barang->lokasi }}</td>
<td align="center">{{ link_to_route('barang.edit', 'Edit', array($barang->id), array('class' => 'btn btn-primary')) }}</td>
<td align="center">
{{ Form::open(array('method' => 'DELETE', 'route' => array('barang.hapus', $barang->id))) }}
{{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}
</td>
</tr>
@endforeach
</tbody>
</table>
@else
Barang tidak ditemukan
@endif
@stop