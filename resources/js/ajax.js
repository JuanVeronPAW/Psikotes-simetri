// Menggunakan jQuery untuk mengirim permintaan Ajax
$('#form-jawab').submit(function(event) {
    event.preventDefault(); // Mencegah form dari pengiriman default

    var formData = $(this).serialize(); // Mengambil data form

    $.ajax({
        type: 'POST',
        url: '/simpan-radio', // Ganti dengan URL endpoint controller Anda
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
