@if( $type == 'editor' )
<x-label for="{{ $name ?? '' }}" value="{{ $label ?? '' }}" />
<x-textarea id="{{ $name ?? '' }}" name="{{ $name ?? '' }}" class="summernote">{!! old( $name, $posts[$name] ?? '' ) !!}</x-textarea>
<x-input-error for="{{ $name ?? '' }}" message="{{ $errors->first($name) }}" />
@elseif( $type == 'radio' )
<x-label for="{{ $name ?? '' }}" value="{{ $label ?? '' }}" />
@foreach( $arr as $key => $val )
<input type="radio"
       id="{{ $name ?? '' }}_{{ $key }}"
       name="{{ $name ?? '' }}"
       class="{{ $class ?? '' }}"
       value="{{ $key }}"
       @if( ( !empty( old( $name, $posts[$name] ?? '' ) ) && $key == old( $name, $posts[$name] ?? '' ) ) ||
            ( empty( old( $name, $posts[$name] ?? '' ) ) && $loop->first ) ) checked @endif><label for="{{ $name ?? '' }}_{{ $key }}"> {{ $val }}</label>
@endforeach
<x-input-error for="{{ $name ?? '' }}" message="{{ $errors->first($name) }}" />
@elseif( $type == 'checkbox' )
<x-label for="{{ $name ?? '' }}" value="{{ $label ?? '' }}" />
@foreach( $arr as $key => $val )
<input type="checkbox"
       id="{{ $name ?? '' }}_{{ $key }}"
       name="{{ $name ?? '' }}[]"
       class="{{ $class ?? '' }}"
       value="{{ $key }}"
       @if( !empty( old( $name, $posts[$name] ?? '' ) ) && in_array( $key, old( $name, $posts[$name] ?? '' ) ) ) checked @endif><label for="{{ $name ?? '' }}_{{ $key }}"> {{ $val }}</label>
@endforeach
<x-input-error for="{{ $name ?? '' }}" message="{{ $errors->first($name) }}" />
@elseif( $type == 'select' )
<x-label for="{{ $name ?? '' }}" value="{{ $label ?? '' }}" />
<select id="{{ $name ?? '' }}" name="{{ $name ?? '' }}" class="{{ $class ?? '' }}">
    @if( isset( $empty ) )
        <option value="">選択してください。</option>
    @endif
    @foreach( $arr as $key => $val )
        <option value="{{ $key }}"@if( NULL !== old( $name, $posts[$name] ?? '' ) && old( $name, $posts[$name] ?? '' ) == $key ) selected @endif>{{ $val }}</option>
    @endforeach
</select>
<x-input-error for="{{ $name ?? '' }}" message="{{ $errors->first($name) }}" />
@elseif( $type == 'textarea' )
<x-label for="{{ $name ?? '' }}" value="{{ $label ?? '' }}" />
<x-textarea id="{{ $name ?? '' }}" name="{{ $name ?? '' }}" class="{{ $class ?? '' }}">{!! old( $name, $posts[$name] ?? '' ) !!}</x-textarea>
<x-input-error for="{{ $name ?? '' }}" message="{{ $errors->first($name) }}" />
@elseif( $type == 'image' )
<x-label for="{{ $name ?? '' }}" value="{{ $label ?? '' }}" />
  <div>
    @if( !empty( $posts[$name] ) && !empty( $preview ) )
    <img src="{{ url('/storage') }}/{{ $route ?? '' }}/{{ $name ?? '' }}/{{ $posts[$name] }}" width="300px">
    <label><x-input name="file_delete[$name]" type="checkbox" value="true" />ファイルを削除する</label>
    @endif
  </div>
<x-input id="{{ $name ?? '' }}" name="{{ $name ?? '' }}" type="file" class="{{ $class ?? '' }}" value="{{ old( $name, $posts[$name] ?? '' ) }}" />
<input name="file_now[$name]" type="hidden" value="{{ $posts[$name] ?? '' }}" />
<x-input-error for="image" message="{{ $errors->first($name) }}" />
@elseif( $type == 'date' )
<label class="{{ $required ?? '' }}">{{ $label ?? '' }}</label>
<x-input id="{{ $name ?? '' }}" name="{{ $name ?? '' }}" type="{{ $type ?? 'text' }}" class="{{ $class ?? '' }}" placeholder="{{ $placeholder ?? '' }}" value="{{ old( $name, $posts[$name] ?? '' ) }}" />
<x-input-error for="{{ $name ?? '' }}" message="{{ $errors->first($name) }}" />
@else
<label class="{{ $required ?? '' }}">{{ $label ?? '' }}</label>
<x-input id="{{ $name ?? '' }}" name="{{ $name ?? '' }}" type="{{ $type ?? 'text' }}" class="{{ $class ?? '' }}" placeholder="{{ $placeholder ?? '' }}" value="{{ old( $name, $posts[$name] ?? '' ) }}" disabled="{{ $disabled ?? '' }}" />
<x-input-error for="{{ $name ?? '' }}" message="{{ $errors->first($name) }}" />
@endif
