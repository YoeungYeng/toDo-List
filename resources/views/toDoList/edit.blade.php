<x-layout>
    <x-panel>
        <div class="flex flex-col w-full space-y-3">
            <x-page-heading>
                ToDo List App
            </x-page-heading>

            {{-- type input // button add --}}
            <div class="flex justify-center items-center  w-full mt-10 gap-4">
                <x-form.form action="/task/{{ $task->id }}" method="POST" class="flex  gap-4 ">
                    @csrf
                    @method('PUT')
                    <x-form.input type='text' name="name" value="{{ old('name', $task->name) }}"  placeholder="new task" required />
                    <x-form.button type="submit" add>
                        Edit
                    </x-form.button>
                </x-form.form>
            </div>
            <x-page-heading>
                Task List
            </x-page-heading>
            {{-- list of tasks --}}
            <div class="flex flex-col space-y-3 w-full">
                @foreach ($tasks as $task)
                    <div data-task class="flex justify-between items-center p-4 rounded">

                        <p class="task-text text-white font-bold"> {{ $task->name }} </p>

                        <div class="flex gap-2">
                            <x-form.button complete
                                onclick="this.closest('[data-task]').querySelector('.task-text').classList.toggle('line-through')">
                                Complete
                            </x-form.button>
                            <x-form.button edit>

                                Edit
                            </x-form.button>
                            <x-form.form action="/task/{{ $task->id }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <x-form.button delete type="submit">
                                    Delete
                                </x-form.button>
                            </x-form.form>
                        </div>

                    </div>
                @endforeach
            </div>
    </x-panel>
</x-layout>
