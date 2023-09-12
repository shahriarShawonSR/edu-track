 @if (!empty(session('success')))
     <div class="alert alert-success" role="alert">
         {{ session('success') }}
     </div>
 @endif
 @if (!empty(session('error')))
     <div class="alert alert-danger" role="alert">
         {{ session('error') }}
     </div>
 @endif

 {{-- <!-- Warning Alert -->
 <div class="alert alert-warning alert-dismissible d-flex align-items-center fade show">
     <i class="bi-exclamation-triangle-fill"></i>
     <strong class="mx-2">Warning!</strong> There was a problem with your network connection.
     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
 </div>

 <!-- Info Alert -->
 <div class="alert alert-info alert-dismissible d-flex align-items-center fade show">
     <i class="bi-info-circle-fill"></i>
     <strong class="mx-2">Info!</strong> Please read the comments carefully.
     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
 </div> --}}
