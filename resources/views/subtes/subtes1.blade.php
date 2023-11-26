<x-app-layout>
    <div class="py-12" id="countdown">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-l" id="data-container">
                <div class="p-6 text-gray-900 d-flex justify-content-center">
                    {{ __("Kerjakan soal berikut") }}
                    <div class="d-flex row mt-4">
                        @foreach ($data_subtes1 as $item)
                        <a href="" class="mt-4">{{ $item->id }}</a>
                        <img src={{ $item->url }} alt="">
                        <ul>
                            <li><a href="">Jawabanya adalah:</a>{{ $item->kunci }}</li>
                        </ul>
                        <h1>Jawabanmu?</h1>
                        
                        <form method="POST" action="/simpan-radio" id="jawab">
                            @csrf
                            <input type="radio" id="A" name="choice" name="subtes1_id" value="A">
                            <label for="option1">A</label><br>
                          
                            <input type="radio" id="B" name="choice" value="B">
                            <label for="option1">B</label><br>
    
                            <input type="radio" id="C" name="choice" value="C">
                            <label for="option1">C</label><br>
            
                            <button type="submit">Simpan</button>
                        </form>

                        @endforeach  
                        <div class="mb-6">
                            
                        </div>
                        {{ $data_subtes1->links() }}
                    </div>
                    
                    
                </div>    
            </div>
        </div>
    </div>
</x-app-layout>

{{-- <script>
    $(document).on('click', '.pagination a', function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    fetch_data(page);
});

function fetch_data(page) {
    $.ajax({
        url: '/subtes1?page=' + page,
        success: function(data) {
            // Ganti konten dengan data baru
            $('#data-container').html(data);
        }
    });
}

// Tanggal target untuk countdown
var targetDate = new Date('2023-12-31T00:00:00').getTime();

// Update countdown setiap detik
var countdown = setInterval(function() {
    var now = new Date().getTime();
    var distance = targetDate - now;

    // Perhitungan waktu
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Tampilkan hasil countdown di dalam elemen dengan ID 'countdown'
    document.getElementById('countdown').innerHTML = days + 'd ' + hours + 'h '
    + minutes + 'm ' + seconds + 's ';

    // Jika waktu sudah habis, tampilkan pesan
    if (distance < 0) {
        clearInterval(countdown);
        document.getElementById('countdown').innerHTML = 'Waktu sudah habis';
    }
}, 1000);

</script> --}}


<script>
    console.log('sebelum')
    // Menggunakan jQuery untuk mengirim permintaan Ajax
$('#jawab').submit(function(event) {
    event.preventDefault(); // Mencegah form dari pengiriman default

    var formData = $(this).serialize(); // Mengambil data form
    console.log(formData);

    $.ajax({
        type: 'POST',
        url: 'subtes1', // Ganti dengan URL endpoint controller Anda
        data: formData,
        success: function(response) {
            // Menangani respons dari server setelah pengiriman data
            if (response.success) {
                // Lakukan tindakan sesuai dengan keberhasilan penyimpanan data
                alert(response.message); // Contoh: Tampilkan pesan sukses
                // Lakukan operasi lainnya setelah berhasil disimpan
            } else {
                // Menangani jika ada kesalahan saat menyimpan
                alert('Gagal menyimpan data');
            }
        },
        error: function(xhr, status, error) {
            // Menangani kesalahan Ajax
            alert('Terjadi kesalahan: ' + error);
        }
    });
});
console.log('sesudah')

</script>
{{-- <x-subtes-layout>

</x-subtes-layout> --}}
