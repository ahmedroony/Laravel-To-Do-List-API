@extends('components.nav')
@extends('components.header')

<style>
    body {
        background: #f4f7fb;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 480px;
        margin: 60px auto;
        background: #fff;
        padding: 30px;
        border-radius: 14px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .title {
        font-size: 26px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        text-align: center;
    }

    input[type="text"] {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border: 2px solid #dcdcdc;
        border-radius: 10px;
        outline: none;
        transition: .2s;
    }

    input[type="text"]:focus {
        border-color: #4e9cff;
        box-shadow: 0 0 4px rgba(78,156,255,0.4);
    }

    button:hover {
        background: #2f84f7;
    }

    .error {
        color: #e63946;
        font-size: 14px;
        margin-top: 6px;
    }

    /* Navbar تعديل بسيط */
    nav {
        display: flex;
        justify-content: center;
        padding: 12px;
    }

    nav a {
        margin: 0 10px;
        padding: 10px 18px;
        background: #fff;
        border-radius: 10px;
        text-decoration: none;
        color: #333;
        border: 1px solid #ddd;
        transition: .2s;
    }

    nav a:hover {
        background: #4e9cff;
        color: white;
        border-color: transparent;
    }
</style>


<div class="container">
    <div class="title">Add a New Task</div>

    <form method="POST" action="{{ route('store') }}">
        @csrf
        @method('post')

        <input type="text" name="description" placeholder="Write your task..."style="width: 100%; max-width: 400px; margin: auto">

        @if ($errors->has('description'))
            <p class="error">{{ $errors->first('description') }}</p>
        @endif

        <button type="submit">Add</button>
    </form>
</div>
