<body>
    <div class="container">
        <h2>To-Do List</h2>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <span>{{ $task->description }}</span>

                    <div class="actions">
                        <form action="/tasks/{{ $task->id }}" name="description" method="POST">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="description" value="Completed">
                            @if ($task->completed_at)
                                <span class="badge text-bg-success">complete</span>
                                @else
                                    <span class="badge text-bg-danger">notcomplete</span>
                            @endif
                            <button>✔</button>
                            <button>🗑</button>
                        </form>
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
