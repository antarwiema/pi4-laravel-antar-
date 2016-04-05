@extends('layout.layout')
@section('main')
<h1>Input Barang</h1>
{{ Form::open(array('route' => 'barang.simpan')) }}
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
{{ Form::submit('Submit', array('class' => 'btn')) }}
</li>
</ul>
{{ Form::close() }}
@stop