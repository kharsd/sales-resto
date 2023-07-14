@extends('layout.kasir')

@section('title', 'Pesan Langsung')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold; 
            color:#000;
        }

        input[type="text"],
        textarea,
        select {
            width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #000;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

    {{-- <h2>Pesan Langsung</h2> --}}
    <form id="pesanForm" onsubmit="konfirmasiPesan(event)">
        <label>Nama Pelanggan:</label>
        <input type="text" id="namaPelanggan" required><br>
        <label>Nomor Meja:</label>
        <input type="text" id="nomorMeja" required><br>
        <label>Menu:</label>
        <select id="menu" required>
            <option value="">Pilih Menu</option>
            <option value="Nasi Goreng">Nasi Goreng</option>
            <option value="Mie Ayam">Mie Ayam</option>
            <option value="Soto Ayam">Soto Ayam</option>
            <!-- Tambahkan pilihan menu lainnya di sini -->
        </select><br>
        <label>Daftar Pesanan:</label>
        <table id="daftarPesanan">
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Jumlah Pesanan</th>
                <th>Jenis Menu</th>
                <th>Catatan</th>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="text" name="menuPesanan[]" required></td>
                <td><input type="number" name="jumlahPesanan[]" min="1" required></td>
                <td><input type="text" name="jenisMenu[]" required></td>
                <td><input type="text" name="catatan[]"></td>
            </tr>
        </table>
        <button type="button" onclick="tambahPesanan()">Tambah Pesanan</button><br>
        <label>Nomor Pesanan:</label>
        <input type="text" id="nomorPesanan" required><br>
        <input type="submit" value="Konfirmasi Pesanan">
    </form>

    <div id="pesananContainer">
        <!-- Pesanan yang Dipesan -->
    </div>

    <script>
        function tambahPesanan() {
            var table = document.getElementById("daftarPesanan");
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            var noCell = row.insertCell(0);
            var menuCell = row.insertCell(1);
            var jumlahCell = row.insertCell(2);
            var jenisCell = row.insertCell(3);
            var catatanCell = row.insertCell(4);
            noCell.innerHTML = rowCount;
            menuCell.innerHTML = '<input type="text" name="menuPesanan[]" required>';
            jumlahCell.innerHTML = '<input type="number" name="jumlahPesanan[]" min="1" required>';
            jenisCell.innerHTML = '<input type="text" name="jenisMenu[]" required>';
            catatanCell.innerHTML = '<input type="text" name="catatan[]">';
        }

        function konfirmasiPesan(event) {
            event.preventDefault();

            // Mengambil nilai input
            var namaPelanggan = document.getElementById("namaPelanggan").value;
            var nomorMeja = document.getElementById("nomorMeja").value;
            var nomorPesanan = document.getElementById("nomorPesanan").value;

            // Mengambil nilai pesanan dari tabel
            var daftarPesanan = [];
            var table = document.getElementById("daftarPesanan");
            for (var i = 1; i < table.rows.length; i++) {
                var menu = table.rows[i].cells[1].getElementsByTagName("input")[0].value;
                var jumlahPesanan = table.rows[i].cells[2].getElementsByTagName("input")[0].value;
                var jenisMenu = table.rows[i].cells[3].getElementsByTagName("input")[0].value;
                var catatan = table.rows[i].cells[4].getElementsByTagName("input")[0].value;
                daftarPesanan.push({
                    menu: menu,
                    jumlahPesanan: jumlahPesanan,
                    jenisMenu: jenisMenu,
                    catatan: catatan
                });
            }

            // Menampilkan pesanan yang dipesan
            var pesananContainer = document.getElementById("pesananContainer");
            pesananContainer.innerHTML = "<h3>Pesanan yang Dipesan:</h3><table><tr><th>No</th><th>Menu</th><th>Jumlah Pesanan</th><th>Jenis Menu</th><th>Catatan</th></tr>";
            for (var j = 0; j < daftarPesanan.length; j++) {
                var pesanan = daftarPesanan[j];
                pesananContainer.innerHTML += "<tr><td>" + (j + 1) + "</td><td>" + pesanan.menu + "</td><td>" + pesanan.jumlahPesanan + "</td><td>" + pesanan.jenisMenu + "</td><td>" + pesanan.catatan + "</td></tr>";
            }
            pesananContainer.innerHTML += "</table>";

            // Reset form
            document.getElementById("pesanForm").reset();
        }
    </script>
@endsection
