<x-layout>
    <x-panel>
        <div class="flex flex-col w-full space-y-3">
            <x-page-heading>
                ToDo List App
            </x-page-heading>

            {{-- type input // button add --}}
            <div class="flex justify-center items-center  w-full mt-10 gap-4">
                <form action="" class="flex  gap-4 " method="POST">
                    <x-form.input name="toDo" placeholder="new task" />
                    <x-form.button>
                        Add
                    </x-form.button>
                </form>
            </div>
            <x-page-heading>
                Task List
            </x-page-heading>
            {{-- list of tasks --}}
            <div class="flex flex-col space-y-3 w-full">
                <div data-task class="flex justify-between items-center p-4 rounded">
                    <p class="task-text text-white font-bold">Sample Task 1</p>

                    <div class="flex gap-2">
                        <x-form.button complete
                            onclick="this.closest('[data-task]').querySelector('.task-text').classList.toggle('line-through')">
                            Complete
                        </x-form.button>

                        <x-form.button delete onclick="this.closest('[data-task]').remove()">
                            Delete
                        </x-form.button>
                    </div>
                </div>


    </x-panel>
</x-layout>
