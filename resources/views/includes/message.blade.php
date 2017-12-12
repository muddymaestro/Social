@if (Session::has('success'))
     <div class="alert alert-success" role="alert">
        <p><strong>Success:</strong> {{Session::get('success')}}</p>
     </div>
@endif

@if ($errors->count() > 0)
     <div class="alert alert-danger" role="alert">
       <ul>
         @foreach ($errors->all() as $error)
           <li>{{$error}}</li>
         @endforeach
       </ul>
     </div>
@endif
