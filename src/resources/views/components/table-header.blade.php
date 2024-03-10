<thead class="bg-gray-50">
  <tr>
    @if( isset( $list['name'] ) )
    @foreach( $list['name'] as $key => $val )
      <th scope="col" class="px-6 py-3 text-left">
        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
          {{ $val }}
        </span>
      </th>
    @endforeach
    @endif
  </tr>
  {{ $slot }}
</thead>
