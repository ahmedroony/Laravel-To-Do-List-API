   @extends('components.nav')
   @extends('components.header')
    <form method="POST" action="{{ route('store') }}">
        @csrf
        @method('post')
      <input type="text" placeholder="Add new task..." name="description">
      <button type="submit">Add</button>
    </form>
