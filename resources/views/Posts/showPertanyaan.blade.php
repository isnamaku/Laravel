@extends('master')
@section('showPertanyaan')
<div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Pertanyaan</th>
                      <th>Judul</th>
                    </tr>
                  </thead>
                  <tbody>
                
                    <tr>
                      <td><?php $query = DB::table('pertanyaan')->select('id'); ?></td>
                      <td><?php $query = DB::table('pertanyaan')->select('judul'); ?></td>
                      <td><?php $query = DB::table('pertanyaan')->select('isi'); ?></td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
@endsection