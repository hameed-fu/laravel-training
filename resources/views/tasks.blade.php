<x-app>

    
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Tasks</h1>
        <ul class="list-disc pl-5">
            @foreach ($tasks as $task)
            
                <li class="mb-2">{{ $task['title'] }} - {{ $task['completed'] }}</li>
            @endforeach
        </ul>
    </div>

    
</x-app>