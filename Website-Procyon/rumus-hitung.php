<?php 
include 'includes/header.php'; 
?>

<div class="main-content" style="margin-top: 100px; padding: 20px; font-family: 'Inter', sans-serif;">
    <div style="max-width: 800px; margin: 0 auto; background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 30px; border: 1px solid #eee;">
        
        <h2 style="text-align: center; color: #333; margin-bottom: 30px; font-weight: 700;">Kalkulator Biaya Jasa Print</h2>
        
        <div style="margin-bottom: 25px;">
            <label style="display: block; font-weight: 600; margin-bottom: 8px; color: #555;">Status Keanggotaan:</label>
            <select id="status" style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid #ddd; font-size: 16px; background-color: #f9f9f9;">
                <option value="0.5">Leading Group (Diskon 50%)</option>
                <option value="0.3">Member (Diskon 30%)</option>
                <option value="0" selected>Non Member (Tanpa Diskon)</option>
            </select>
        </div>

        <hr style="border: 0; border-top: 1px solid #eee; margin: 25px 0;">

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="text-align: left; color: #777; font-size: 14px;">
                    <th style="padding: 10px 0;">Jenis Layanan</th>
                    <th style="padding: 10px 0; width: 120px;">Jumlah Lembar</th>
                    <th style="padding: 10px 0; text-align: right;">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom: 1px solid #f5f5f5;">
                    <td style="padding: 15px 0;">
                        <span style="font-weight: 600; color: #333;">Print Gelap (Hitam Putih)</span><br>
                        <small style="color: #888;">Rp 1.000 / Lembar</small>
                    </td>
                    <td>
                        <input type="number" id="jmlGelap" value="0" min="0" oninput="hitung()" style="width: 100px; padding: 8px; border-radius: 5px; border: 1px solid #ddd;">
                    </td>
                    <td style="text-align: right; font-weight: 600;" id="txtGelap">Rp 0</td>
                </tr>

                <tr style="border-bottom: 1px solid #f5f5f5;">
                    <td style="padding: 15px 0;">
                        <span style="font-weight: 600; color: #333;">Print Warna</span><br>
                        <small style="color: #888;">Rp 1.500 / Lembar</small>
                    </td>
                    <td>
                        <input type="number" id="jmlWarna" value="0" min="0" oninput="hitung()" style="width: 100px; padding: 8px; border-radius: 5px; border: 1px solid #ddd;">
                    </td>
                    <td style="text-align: right; font-weight: 600;" id="txtWarna">Rp 0</td>
                </tr>

                <tr style="border-bottom: 1px solid #f5f5f5;">
                    <td style="padding: 15px 0;">
                        <span style="font-weight: 600; color: #333;">Print Warna 50%</span><br>
                        <small style="color: #888;">Rp 2.000 / Lembar</small>
                    </td>
                    <td>
                        <input type="number" id="jmlWarna50" value="0" min="0" oninput="hitung()" style="width: 100px; padding: 8px; border-radius: 5px; border: 1px solid #ddd;">
                    </td>
                    <td style="text-align: right; font-weight: 600;" id="txtWarna50">Rp 0</td>
                </tr>
            </tbody>
        </table>

        <div style="background: #f8fbff; padding: 20px; border-radius: 10px; margin-top: 30px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <span style="color: #555;">Total Lembar di Print:</span>
                <span id="totalLembar" style="font-weight: bold;">0</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <span style="color: #555;">Subtotal Harga:</span>
                <span id="subtotal" style="font-weight: bold;">Rp 0</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px; color: #d9534f;">
                <span>Diskon Member:</span>
                <span id="txtDiskon">- Rp 0</span>
            </div>
            <hr style="border-top: 1px dashed #ccc;">
            <div style="display: flex; justify-content: space-between; font-size: 20px; font-weight: 800; color: #007bff; margin-top: 10px;">
                <span>TOTAL BAYAR:</span>
                <span id="totalBayar">Rp 0</span>
            </div>
        </div>

    </div>
</div>

<script>
function hitung() {
    // 1. Ambil Value dari Input
    const status = parseFloat(document.getElementById('status').value);
    const gelap = parseInt(document.getElementById('jmlGelap').value) || 0;
    const warna = parseInt(document.getElementById('jmlWarna').value) || 0;
    const warna50 = parseInt(document.getElementById('jmlWarna50').value) || 0;

    // 2. Harga Satuan
    const hrgGelap = gelap * 1000;
    const hrgWarna = warna * 1500;
    const hrgWarna50 = warna50 * 2000;

    // 3. Hitung Total Lembar & Subtotal
    const totalLembar = gelap + warna + warna50;
    const subtotal = hrgGelap + hrgWarna + hrgWarna50;

    // 4. Hitung Diskon & Final
    const nilaiDiskon = subtotal * status;
    const totalBayar = subtotal - nilaiDiskon;

    // 5. Tampilkan ke Layar
    document.getElementById('txtGelap').innerText = "Rp " + hrgGelap.toLocaleString('id-ID');
    document.getElementById('txtWarna').innerText = "Rp " + hrgWarna.toLocaleString('id-ID');
    document.getElementById('txtWarna50').innerText = "Rp " + hrgWarna50.toLocaleString('id-ID');
    
    document.getElementById('totalLembar').innerText = totalLembar;
    document.getElementById('subtotal').innerText = "Rp " + subtotal.toLocaleString('id-ID');
    document.getElementById('txtDiskon').innerText = "- Rp " + nilaiDiskon.toLocaleString('id-ID');
    document.getElementById('totalBayar').innerText = "Rp " + totalBayar.toLocaleString('id-ID');
}

// Jalankan fungsi hitung saat status keanggotaan diganti
document.getElementById('status').addEventListener('change', hitung);
</script>

<?php include 'includes/footer.php'; ?>