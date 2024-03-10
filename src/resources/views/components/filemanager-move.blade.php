@if( isset( $root_folder['children'] ) )
@foreach($root_folder['children'] as $directory)
<li class="nav-item sub-item-{{ $count }}">
  <a class="nav-link" href="#" data-type="0" onclick="moveToNewFolder(`{{$directory->url}}`)">
    <i class="fa fa-folder fa-fw"></i> {{ $directory->name }}
    <input type="hidden" id="goToFolder" name="goToFolder" value="{{ $directory->url }}">
    <div id="items">
      @foreach($items as $i)
        <input type="hidden" id="{{ $i }}" name="items[]" value="{{ $i }}">
      @endforeach
    </div>
  </a>
</li>
<x-filemanager-move :url="$directory->url" :count="$count"></x-filemanager-move>
@endforeach
@endif
