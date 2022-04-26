@extends('layouts.app')
@section('content')
  <div class="container">
    <div>
      <resume-form
      :resume="{{ $resume }}"
      :update="true"
      />
    </div>
  </div>
@endsection