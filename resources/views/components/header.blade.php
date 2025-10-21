<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>To-Do List UI</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      padding: 30px;
    }
    .container {
      background: #fff;
      padding: 20px 25px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 350px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    form {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
    }
    input[type="text"] {
      flex: 1;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 8px;
      outline: none;
    }
    button {
      background: #007bff;
      color: #fff;
      border: none;
      padding: 10px 15px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background: #0056b3;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      background: #f9f9f9;
      padding: 12px;
      margin-bottom: 10px;
      border-radius: 8px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border: 1px solid #eee;
    }
    .done {
      text-decoration: line-through;
      color: gray;
    }
    .actions {
      display: flex;
      gap: 8px;
    }
    .actions button {
      padding: 5px 8px;
      font-size: 12px;
    }
  </style>
</head>
