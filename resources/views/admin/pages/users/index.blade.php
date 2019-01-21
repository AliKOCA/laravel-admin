@extends('admin.layouts.master')

@section('content')
<h1>Kullanıcılar</h1>
<div class="btn-group">
    <a href="{{ url('admin/users/create') }}" class="btn btn-primary active">
        <i class="fa fa-plus" aria-hidden="true"></i> Yeni Kullanıcı
    </a>   
</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kullanıcı İsmi</th>
      <th scope="col">e-Posta</th>
      <th scope="col">İşlemler</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td><button type="button" class="btn btn-primary">Düzenle</button>
            <button type="button" class="btn btn-secondary">Sil</button></td>
      </tr>
    @endforeach
</table>
    @stop

