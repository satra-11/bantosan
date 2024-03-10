@props([
'data' => NULL,
'route' => 'dashboard',
'sortable' => false,
'list' => NULL
])

<tbody id="sortable-items" class="divide-y divide-gray-200">
  @if ( isset( $data ) )
  @foreach ( $data as $key => $val )
    <tr class="odd:bg-white even:bg-slate-50 hover:bg-slate-100 " data-id="{{ $val->id }}" @if( $sortable ) x-on:dragend="$wire.save(localStorage.getItem('{{$route}}'))" @endif>
      @if( isset( $list ) )
      @foreach( $list as $key2 => $val2 )
        @if( $val2['type'] == 'edit' )
          <td class="h-px w-px min-w-[10rem] whitespace-nowrap">
            <a class="block relative z-10" href="{{ route($route, [ 'method' => 'edit', 'id' => $val->id ]) }}">
              <div class="px-6 py-2">
                @if( is_array( $val2['attr'] ) )
                <div class="block text-sm text-blue-600 decoration-2 hover:underline">{{ $val2['attr']['array'][$val[$val2['attr']['name']]] ?? '' }}</div>
                @else
                <div class="block text-sm text-blue-600 decoration-2 hover:underline">{{ $val[$val2['attr']] ?? '' }}</div>
                @endif
              </div>
            </a>
          </td>
        @elseif( $val2['type'] == 'echo' )
          <td class="h-px w-px min-w-[10rem] whitespace-nowrap">
            <div class="px-6 py-2">
              <p class="text-sm text-gray-500">{{ $val[$val2['attr']] ?? '' }}</p>
            </div>
          </td>
        @elseif( $val2['type'] == 'image' )
          <td class="h-px w-px min-w-[10rem]">
            <div class="px-6 py-2">
              @if( isset( $val[$val2['attr']] ) )
              <p class="text-sm text-gray-500"><img src="{{ url('/storage') }}/{{ $route ?? '' }}/{{ $val2['attr'] ?? '' }}/{{ $val[$val2['attr']] ?? '' }}" width="150px"></p>
              @endif
            </div>
          </td>
        @elseif( $val2['type'] == 'source' )
          <td class="h-px w-px min-w-[10rem]">
            <div class="px-6 py-2">
              <p class="text-sm text-gray-500">{!! $val[$val2['attr']] ?? '' !!}</p>
            </div>
          </td>
        @elseif( $val2['type'] == 'array' )
          <td class="h-px w-px min-w-[10rem] max-w-[30rem]">
            <div class="px-6 py-2">
              <p class="text-sm text-gray-500">
                @foreach( $val2['attr']['array'] as $key3 => $val3 )
                  @if( !empty( $val[$val2['attr']['name']] ) )
                    @if( in_array( $key3, $val[$val2['attr']['name']] ) )
                    [{{ $val3 }}]
                    @endif
                  @endif
                @endforeach
              </p>
            </div>
          </td>
        @elseif( $val2['type'] == 'const' )
          <td class="h-px w-px min-w-[10rem] whitespace-nowrap">
            <div class="px-6 py-2">
              <p class="text-sm text-gray-500">{{  $val2['attr']['array'][$val[$val2['attr']['name']]] ?? '' }}</p>
            </div>
          </td>
        @elseif( $val2['type'] == 'action' )
          <td class="h-px w-12 whitespace-nowrap">
            <div class="px-6 py-2">
              <div class="hs-dropdown relative inline-block [--placement:bottom-right]">
                <button id="hs-table-dropdown-1" type="button" class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-md text-gray-700 align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm">
                  <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                  </svg>
                </button>
                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mt-2 divide-y divide-gray-200 min-w-[10rem] z-20 bg-white shadow-2xl rounded-lg p-2 mt-2" aria-labelledby="hs-table-dropdown-1">
                  <div class="py-2 first:pt-0 last:pb-0">
                    <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400">
                      Actions
                    </span>
                    @if( in_array( 'edit', $val2['attr'] ) )
                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="{{ route($route, [ 'method' => 'edit', 'id' => $val->id ]) }}">
                      編集
                    </a>
                    @endif
                  </div>
                  <div class="py-2 first:pt-0 last:pb-0">
                    @if( in_array( 'delete', $val2['attr'] ) )
                    <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-red-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="{{ route($route, [ 'method' => 'destroy', 'id' => $val->id ]) }}">
                      削除
                    </a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </td>
        @endif
      @endforeach
      @endif
    </tr>
  @endforeach
  @endif
</tbody>
