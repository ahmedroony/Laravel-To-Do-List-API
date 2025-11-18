<body>
    <div class="container">
        <h2>To-Do List</h2>
        <ul>
            <li>
                <span>Learn PHP OOP</span>
                <div class="actions">
                    <button>✔</button>
                    <button>🗑</button>
                </div>
            </li>

            @foreach ($tasks as $task)
                <li>
                    <span>{{ $task->description }}</span>

                    <div class="actions">
                        <button>✔</button>
                        <button>🗑</button>
                    </div>
                </li>
            @endforeach
            </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>
</html>
