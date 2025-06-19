<x-app>

    
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Tasks</h1>
        {{ session()->get('user_name') }} - 
        {{ session()->get('user_email') }}

        <h3>{{print_r( Session::get('user')) }}</h3>
        <ul class="list-disc pl-5">
            @foreach ($tasks as $task)
            
                <li class="mb-2">{{ $task['title'] }} - {{ $task['completed'] }}</li>
            @endforeach
        </ul>
    </div>

    
</x-app>