<x-guest-layout>
    <div class="container">
        <div class="mt-3 mb-3">
            @foreach($problem_one_data[2] as $data)
                @if(is_numeric($data) && $data > 60)
                    <p>{{ $data }}</p>
                @endif
            @endforeach
        </div>
    </div>
</x-guest-layout>
