@extends('layouts.master')

@section('content')
         <section class="row new-post">
             <div class="col-md-6 col-md-offset-3">
               <h3>What do you have to say?</h3>
               <form action="{{route('posts.store')}}" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group">
                     <textarea class="form-control" name="body" rows="5" placeholder="Your Post..."></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Create Post</button>
               </form>
             </div>
         </section>
         <section class="row posts">
            <div class="col-md-6 col-md-offset-3">
              <h3>What other people say..</h3>
              @foreach($posts as $post)
                <article class="post" data-postId={{$post->id}}>
                  <input type="hidden" id="route" value="{{route('posts.update')}}">
                  <p>{{$post->body}}</p>
                  <div class="info">
                    posted by {{$post->user->name}} on {{$post->created_at}}
                  </div>
                  <div class="interaction">
                     <a href="#">Like</a> |
                     <a href="#">Dislike</a>
                     @if ($post->user->id == Auth::user()->id)
                      | <a type="button" data-toggle="modal" data-target="#EditPost" class="edit">Edit</a>
                       <form method="POST" action="{{route('posts.destroy', $post->id)}}">
                          {{csrf_field()}}
                          {{method_field('delete')}}
                         <input type="submit" class="btn btn-link" value="Delete">
                       </form>
                     @endif
                  </div>
                </article>
              @endforeach
            </div>
         </section>
         <!-- Modal -->
<div class="modal fade" id="EditPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <form>
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Edit Post</h4>
	      </div>
	      <div class="modal-body">
		       <div class="form-group">
		       	<label>Edit Post</label>
		       <textarea name="body" id="body" class="form-control" rows="5"></textarea>
		     </div>
        </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" id="modal-save">Save changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<script>
  var token = '{{Session::token()}}';
  var url = '{{route('posts.update')}}';
</script>

@endsection
