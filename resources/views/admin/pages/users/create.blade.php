@extends('admin.layouts.master')

@section('content')
<h1>Kullanıcı Ekleme</h1>
<div class="btn-group">
    <a href="{{ url('admin/users/create') }}" class="btn btn-primary active">
        <i class="fa fa-cancel" aria-hidden="true"></i> Vazgeç
    </a>   
</div>

<form action="{{ url('admin/users') }}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="">İsim Soyisim</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="">eMail</label>
    <input type="text" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="">Parola</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary" > Kaydet </button>
  </div>

</form>

</table>
    @stop

