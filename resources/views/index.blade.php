@extends('master')

@section('opening')
<h1>SanberBook</h1>
<h2>Social Media Developer Santai Berkualitas</h2>
<p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
<h3>Benefit Join di SanberBook</h3>

<ul>
	<li>Mendapatkan motivasi dari sesama developer</li>
	<li>Sharing knowledge dari para mastah Sanber</li>
	<li>Dibuat oleh calon web developer terbaik</li>
</ul>
<h3>Cara Bergabung ke SanberBook</h3>
<ul>
	<li>1. Mengunjungi Website ini</li>
	<li>2. Mendaftar di <a href="/register">Form Sign Up</a></li>
	<li>3. Selesai</li>
</ul>
@endsection

@section('table')
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">#</th>
      <th>Task</th>
      <th>Progress</th>
      <th style="width: 40px">Label</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1.</td>
      <td>Update software</td>
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
        </div>
      </td>
      <td><span class="badge bg-danger">55%</span></td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Clean database</td>
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar bg-warning" style="width: 70%"></div>
        </div>
      </td>
      <td><span class="badge bg-warning">70%</span></td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Cron job running</td>
      <td>
        <div class="progress progress-xs progress-striped active">
          <div class="progress-bar bg-primary" style="width: 30%"></div>
        </div>
      </td>
      <td><span class="badge bg-primary">30%</span></td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Fix and squish bugs</td>
      <td>
        <div class="progress progress-xs progress-striped active">
          <div class="progress-bar bg-success" style="width: 90%"></div>
        </div>
      </td>
      <td><span class="badge bg-success">90%</span></td>
    </tr>
  </tbody>
</table>
<a href="/data-tables">Data Tables</a>
@endsection

