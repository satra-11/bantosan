@if( isset( $root_folder['children'] ) )
@foreach($root_folder['children'] as $directory)
  <li class="nav-item sub-item-{{ $count }}">
    <a class="nav-link" href="#" data-type="0" data-path="{{ $directory->url }}">
      <span class="nav-link-inner">
        <i class="fa fa-folder fa-fw"></i> {{ $directory->name }}
      </span>
    </a>
  </li>
  <x-filemanager-tree :url="$directory->url" :count="$count"></x-filemanager-tree>
@endforeach
@endif
