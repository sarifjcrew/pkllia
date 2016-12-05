@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
      <li><i class="fa fa-laptop"></i>bukuinduk</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        List PTK
      </header>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
            <div id="gridPtk">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<!--url store-->
<input type="hidden" id="urlPtkAll" value="{{route('apiptkall')}}">
<input type="hidden" id="urlBukuInduk" value="{{url('bukuinduk')}}">

@endsection
@section('script')
<!-- Core !-->
{!! HTML::script('js/core/bukuinduk.js') !!}
@endsection