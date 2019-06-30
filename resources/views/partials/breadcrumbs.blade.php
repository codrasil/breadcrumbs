<nav aria-label="breadcrumb">
  <ul class="breadcrumb small">
    @foreach (breadcrumbs()->all() as $breadcrumb)
      <li class="breadcrumb-item" aria-current="page">
        @if ($loop->last)
          <span class="text-muted">@lang($breadcrumb->text())</span>
        @else
          <a href="{{ url($breadcrumb->url()) }}">@lang($breadcrumb->text())</a>
        @endif
      </li>
    @endforeach
  </ul>
</nav>
