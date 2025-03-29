<x-layout>
    <x-slot:header>
        <h1>This is a header</h1>
    </x-slot:header>

    <h1>Welcome to Work Experience Page</h1>

    <?php
        echo "<h1> This is PHP </h1>";
    ?>

    <h1>{{ "This is PHP" }}</h1>

    {{-- {{ json_encode($data) }} --}}
    {{-- {!! $data !!} --}}

    <x-work-experience :data="$data"/>
</x-layout>
