@props(['data'])

<div>
    <ul>
        @foreach($data as $item)
        <li>
<p>
    {{$item['company_name']}}
</p>
<li>
<p>
{{$item['role']}}
</p>
<li>
<p>
{{$item['start_date']}} - {{$item['end_date']}}

</p>
@endforeach

    </li>
    </ul>
    <!-- {{ json_encode($data) }} -->
</div>
