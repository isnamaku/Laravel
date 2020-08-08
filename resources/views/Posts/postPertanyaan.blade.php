@extends('master')
@section('postPertanyaan')
<form role="form" method="GET" action="/pertanyaan">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi</label>
                    <input type="text" class="form-control" name="isi" id="isi" placeholder="">
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
@endsection