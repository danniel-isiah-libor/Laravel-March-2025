@props(['data'])

<div>
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden mb-8">
        <thead class="bg-gray-100 uppercase">
            <tr>
                <th class="px-6 py-3 text-left text-gray-600 font-semibold ">Company</th>
                <th class="px-6 py-3 text-left text-gray-600 font-semibold">Role</th>
                <th class="px-6 py-3 text-left text-gray-600 font-semibold">Date</th>
                {{-- <th class="px-6 py-3 text-left text-gray-600 font-semibold">Years</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr class="border-t">
                <td class="px-6 py-4">{{ $item['company_name'] }}</td>
                <td class="px-6 py-4">{{ $item['role'] }}</td>
                <td class="px-6 py-4">{{ $item['start_date'] }} to {{ $item['end_date'] }}</td>
            </tr>
              
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}

</div>
