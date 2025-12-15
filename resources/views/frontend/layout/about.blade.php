@foreach ($abouts as $about)
    <p class="w-95 xl-w-100" style="color: #717580">
        {{ $about->history }}
    </p>
@endforeach
