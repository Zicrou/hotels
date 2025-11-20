{{-- <div class="card-group">
    <div @class(['card'])>
        @if ($hotel->main_image)
            <img src="{{ asset('storage/' . $hotel->main_image) }}" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
            <h5 class="card-title">
                <a href="/">{{ Str::limit($hotel->name, 40) }}</a>
                </h5>
            <p class="card-text">{{ $hotel->description }}</p>
            <div class="text-primary fw-bold" style="font-size: 1.4rem;">{!! $hotel->phone !!}</div>

        </div>
        <div class="card-footer">
            <small class="text-muted">{{ $hotel->city }} ({{ $hotel->address }}</small>
        </div>
    </div>
</div> --}}
{{-- 
<div class="card mb-3" style="width: 100%;">
  <div class="row g-0">
    <div class="col-md-12">
        @if ($hotel->main_image)
            <img src="{{ asset('storage/' . $hotel->main_image) }}" class="card-img-top" alt="...">
        @endif
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><a href="/">{{ Str::limit($hotel->name, 40) }}</a></h5>
        <p class="card-text">{{ $hotel->description }}</p>
        <div class="text-primary fw-bold" style="font-size: 1.4rem;">{!! $hotel->phone !!}</div>
        <p class="card-text"><small class="text-muted">{{ $hotel->city }} ({{ $hotel->address }}</small></p>
      </div>
    </div>
  </div>
</div> --}}

<div class="card mb-3 rounded-top" style="width: 100%;border-top:12px solid #0a1a2f;">
  <div class="row g-0">
    <div class="col-md-4">
        @if ($hotel->main_image)
            <img src="{{ asset('storage/' . $hotel->main_image) }}" class="card-img-top" alt="...">
        @endif
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><a href="/">{{ Str::limit($hotel->name, 40) }}</a></h5>
        <p class="card-text">{{ $hotel->description }}</p>
        <div class="text-primary fw-bold" style="font-size: 1.4rem;">{!! $hotel->phone !!}</div>
        <p class="card-text"><small class="text-muted">{{ $hotel->city }} ({{ $hotel->address }}</small></p>
      </div>
    </div>
  </div>
</div>