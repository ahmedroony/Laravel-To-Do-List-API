   @extends('components.nav')
   @extends('components.header')
   <style>
       .btn-2 {
           color: white;
           background-color: red;
       }
   </style>
   <form action="{{ route('update', $task->id) }}" method="POST">
       @csrf
       @method('PATCH')
       <input type="text" value="{{ $task->description }}" name="description">
       <button type="submit" style="width: 100%; max-width: 400px; margin: auto">save</button>
       <button class="btn-2" type="submit"href="/">cancel</button>
   </form>
   @if ($errors->has('description'))
       <div class="alert alert-danger">
           {{ $errors->first('description') }}
       </div>
   @endif
