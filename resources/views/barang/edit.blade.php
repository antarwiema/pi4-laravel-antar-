@extends('layout.layout')
@section('main')
<h1>Edit Detail Barang</h1>
{{ Form::model($barang, array('method' => 'PATCH', 'route' => array('barang.update', $barang->id))) }}
<ul>
<li>
{{ Form::label('nama', 'Nama Barang:') }}
{{ Form::text('nama') }}
</li>
<li>
{{ Form::label('lokasi', 'Lokasi') }}
{{ Form::radio('lokasi', 'Greenland') }} Greenland<br>
{{ Form::radio('lokasi', 'Iceland') }} Iceland<br>
{{ Form::radio('lokasi', 'Dubai') }} Dubai<br>
</li>
<li>
{{ Form::submit('Update', array('class' => 'btn btninfo')) }}
{{ link_to_route('barang.index', 'Cancel', array('class' => 'btn')) }}
</li>
</ul>
{{ Form::close() }}
@stop