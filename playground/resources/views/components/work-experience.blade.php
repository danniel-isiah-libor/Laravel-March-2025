{{-- @props(['data']) --}}

<div>
  <ul>
      @foreach($data as $item)
          <li style="border-bottom: 1px solid red; margin-bottom: 10px">
              <h2>{{ $item->company_name }}</h2>
              <p>{{ $item->role }}</p>
              <p>{{ $item->start_date }} - {{ $item->end_date }}</p>
          </li>
      @endforeach
  </ul>
</div>