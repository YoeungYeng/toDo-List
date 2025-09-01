<x-layout>
    <x-panel>
        <div class="flex flex-col w-full space-y-3">
            <x-page-heading>
                ToDo List App
            </x-page-heading>

            {{-- type input // button add --}}
            <div class="flex justify-center items-center  w-full mt-10 gap-4">
                <x-form.form action="/task" method="POST" class="flex  gap-4 ">
                    <x-form.input type='text' name="name" placeholder="new task" required />
                    <x-form.button type="submit" edit>
                        Add
                    </x-form.button>
                </x-form.form>
            </div>
            <x-page-heading>
                Task List
            </x-page-heading>
            {{-- list of tasks --}}
            <div
                class="flex justify-between   flex-col space-y-3 w-full gap-4  p-2 rounded shadow">
                @foreach ($tasks as $task)
                    <div data-task class="flex justify-between items-center p-3 rounded gap-4 md:gap-0 shadow">

                        <div class="flex gap-4 items-center">
                            {{-- Task text --}}
                        <p
                            class="task-text text-white font-battambang sm:font-light sm:text-xs md:font-bold md:text-xl">
                            {{ $task->name }}
                        </p>
                        </div>

                        {{-- Buttons --}}
                        <div class="flex gap-2 justify-between items-center">
                            {{-- Complete --}}
                            <x-form.button complete
                                onclick="this.closest('[data-task]').querySelector('.task-text').classList.toggle('line-through')">
                                <span class="hidden sm:inline">Complete</span>
                                <span class="sm:hidden">✔️</span>
                            </x-form.button>

                            {{-- Edit --}}
                            <x-form.form edit action="/task/{{ $task->id }}/edit" method="GET" class="inline">
                                @csrf
                                <x-form.button edit type="submit">
                                    <span class="hidden sm:inline">Edit</span>
                                    <span class="sm:hidden">✏️</span>
                                </x-form.button>
                            </x-form.form>

                            {{-- Delete --}}
                            <x-form.form action="/task/{{ $task->id }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <x-form.button delete type="submit">
                                    <span class="hidden sm:inline">Delete</span>
                                    <span class="sm:hidden">🗑️</span>
                                </x-form.button>
                            </x-form.form>
                        </div>

                    </div>
                @endforeach
            </div>

    </x-panel>
</x-layout>
