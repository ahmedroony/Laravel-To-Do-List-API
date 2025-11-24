<style>
    li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
        padding: 12px;
        background: #f9f9f9;
        border-radius: 8px;
        border: 1px solid #eee;
    }
</style>
<ul style="width: 100%; max-width: 400px; margin: auto;">
    @foreach ($tasks as $task)
        <li>
            <span>{{ $task->description }}</span>
            <div class="actions">
                {{-- زرار الصح - update --}}
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="description" value="Completed">

                    @if ($task->completed_at)
                        <span class="badge text-bg-success">complete</span>
                    @else
                        <span class="badge text-bg-danger">notcomplete</span>
                    @endif

                    <button type="submit">✔</button>
                </form>
                {{-- زرار الحذف - delete --}}
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑</button>
                </form>
            </div>
        </li>
        <form action="{{ route('edit',$task->id) }}">
            <button type="submit" style="width: 100%; max-width: 400px; margin: auto">edit</button>
        </form>
    @endforeach
</ul>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>
</body>

</html>
