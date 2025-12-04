<ul style="width: 100%; max-width: 400px; margin: auto;">
    @foreach ($tasks as $task)
        <li>
            <span>{{ $task->description }}</span>

            <div class="actions">

                {{-- زرار complete --}}
                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PATCH')

                    {{-- هنستخدمه علشان نعرف المستخدم ضغط complete --}}
                    <input type="hidden" name="toggle_complete" value="1">

                    @if ($task->completed_at)
                        <span class="badge text-bg-success">complete</span>
                    @else
                        <span class="badge text-bg-danger">not complete</span>
                    @endif

                    <button type="submit">✔</button>
                </form>

                {{-- زرار delete --}}
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑</button>
                </form>

                {{-- زرار edit --}}
                <a href="{{ route('edit', $task->id) }}">
                    <button type="button">edit</button>
                </a>

            </div>
        </li>
    @endforeach
</ul>
