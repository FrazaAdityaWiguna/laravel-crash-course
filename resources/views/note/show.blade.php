<x-app-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1 class="text-3xl py-4">Note: {{ $note->created_at }}</h1>
            <div class="note-buttons">
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf @method('DELETE')
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-app-layout>
