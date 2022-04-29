@extends('layouts.app')
@section('content')
  <div class="container">
   <div class="row">
     @foreach($resumes as $resume)
       <div class="col-md-4 mb-3">
         <div class="card text-center">
           <div class="card-body">
             <h3 class="card-title text-capitalize">
               {{ $resume->title }}
             </h3>
             <p style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;" class="m-2">
               {{ $resume->content['basics']['summary'] ?? 'No summary' }}
             </p>
             <p>{{$resume->created_at}}</p>
             <div class="d-lg-inline-flex">
               <div>
                <a href="{{route('resumes.edit', $resume->id)}}" class="btn btn-primary mb-2">
                  <i class="fas fa-pencil"></i>
                  Edit resume
                </a>
               </div>
               <div>
                 delete
               </div>
             </div>
           </div>
         </div>
       </div>
     @endforeach
   </div>
  </div>
@endsection