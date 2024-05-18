<div class="col-sm-6 col-lg-3 mb-4">
    <div class="widget widget-card-four">
        <div class="widget-content">
            <div class="w-content">
                <div class="w-{{ $color ?? 'primary' }}">
                    <h4 class="value">{{ number_format($count ?? 0) }}</h4>
                    <h6 class="text-{{ $color ?? 'primary' }}">{{ $title ?? 'Title' }}</h6>
                    <p class="text-muted">{{ $subtitle ?? 'Subtitle' }}</p>
                </div>
                <div class="">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
