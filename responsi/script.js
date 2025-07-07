// pemberitahu
document.getElementById('pollForm').addEventListener('submit', function(e) {
    if (!document.querySelector('input[name="pilihan"]:checked')) {
        e.preventDefault();
        document.getElementById('error').textContent = 'Pilih dulu baru kirim!';
    }
});

// Hasil
window.onload = function() {
    fetch('dhasil.php')
        .then(response => response.json())
        .then(data => {
            let html = '';
            for (const pilihan in data) {
                html += `<div class="result-item">${pilihan}: ${data[pilihan]} suara</div>`;
            }
            document.getElementById('hasil_pilih').innerHTML = html;
        });
};