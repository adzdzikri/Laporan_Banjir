<div class="card">
    <h3>{{ $item['nama'] }}</h3>
    <p><strong>Lokasi:</strong> {{ $item['lokasi'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $item['tinggi'] }} cm</p>
    <p>
        <strong>Status:</strong>
        @if ($item['tinggi'] < 30)
            <span class="badge badge-waspada">Waspada</span>
        @elseif ($item['tinggi'] <= 70)
            <span class="badge badge-siaga">Siaga</span>
        @else
            <span class="badge badge-awas">Awas</span>
        @endif
    </p>
</div>
