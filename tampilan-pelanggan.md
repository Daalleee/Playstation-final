// File yang perlu diubah (Fokus Utama pada folder 'pelanggan' dan file layout):
// 1. resources/views/pelanggan/layout.blade.php (Layout utama pelanggan)
// 2. resources/views/pelanggan/accessories/... (Semua file di dalamnya)
// 3. resources/views/pelanggan/cart/... (Semua file di dalamnya)
// 4. resources/views/pelanggan/games/... (Semua file di dalamnya)
// 5. resources/views/pelanggan/partials/... (Semua file di dalamnya, untuk Navbar/Sidebar)
// 6. resources/views/pelanggan/payment/... (Semua file di dalamnya)
// 7. resources/views/pelanggan/profile/... (Semua file di dalamnya)
// 8. resources/views/pelanggan/rentals/... (Semua file di dalamnya)
// 9. resources/views/pelanggan/unitps/... (Semua file di dalamnya)
// 10. resources/views/dashboards/pelanggan.blade.php (Dashboard utama)
// 11. resources/views/layouts/app.blade.php (Asumsi file layout utama)
// 12. Semua file CSS/SCSS yang digunakan (e.g., public/css/app.css, public/css/styles.css)

// Tujuan: Mengubah skema warna tema gelap ke tema terang (Light Mode) dengan konsistensi yang ketat, sesuai spesifikasi pengguna.

// Aturan Kunci:
// 1. **Hanya fokus pada perubahan properti warna (background-color, color, border-color, box-shadow) dan penyesuaian class CSS/Tailwind yang berhubungan dengan warna/background.**
// 2. **JANGAN ubah struktur HTML atau logika Blade (if/else, foreach) sedikit pun.**
// 3. Jaga agar tampilan tetap bersih, responsif, dan mempertahankan tata letak yang ada (sidebar, navbar, konten).

// Spesifikasi Warna (Gunakan kode HEX ini):
// - Biru Utama (Navbar/Sidebar/Focus): `#1E40FF`
// - Biru Gelap (Hover Sidebar): `#1E3AFA`
// - Putih Utama (Konten/Card Background): `#FFFFFF`
// - Abu Gelap (Judul Teks): `#222222`
// - Abu Border Tipis: `#E5E7EB`
// - Abu Placeholder: `#6B7280`
// - Abu Sangat Terang (Global Container): `#F5F6FA`
// - Biru Focus Ring: `#2563EB`
// - Abu Border Input: `#A3A3A3`

// Detail Perubahan Berdasarkan Elemen UI:

// 1. 🔵 NAVBAR & SIDEBAR (Background Gelap -> Biru)
//    - Ubah `background-color` Navbar dan Sidebar menjadi **Biru Utama (`#1E40FF`)**.
//    - Ubah `color` teks dan ikon di Navbar dan Sidebar menjadi **Putih Utama (`#FFFFFF`)**.
//    - Ubah `background-color` pada status `hover` menu Sidebar menjadi **Biru Gelap (`#1E3AFA`)**.
//    - Pastikan warna logo (jika berupa teks/ikon) diubah menjadi putih agar terlihat jelas.

// 2. ⚪ KONTEN UTAMA & 🎨 GLOBAL (Hapus Gelap, Ganti Putih/Abu Terang)
//    - Hapus semua `background-color` gelap yang ada (seperti `#0D0C1D` atau `#10111F`) dari elemen utama seperti body, container, dan background halaman.
//    - Ubah `background-color` body/container utama menjadi **Putih Utama (`#FFFFFF`)**.
//    - Jika ada container *full width* besar, ubah `background-color` menjadi **Putih Utama (`#FFFFFF`)** atau **Abu Sangat Terang (`#F5F6FA`)**.
//    - Hilangkan properti CSS/Tailwind yang menciptakan efek "grid dark background" atau nuansa gelap.

// 3. 🟦 CARD PRODUK & GAME (PS, Game, Aksesoris)
//    - Ubah `background-color` semua card produk menjadi **Putih Utama (`#FFFFFF`)**.
//    - Tambahkan/Ubah *class* untuk memberikan `border` tipis dengan warna **Abu Border Tipis (`#E5E7EB`)** dan `box-shadow` ringan/halus.
//    - Pastikan `border-radius` card tetap dipertahankan.
//    - Judul/Teks Judul Section (misal 'Unit PlayStation Tersedia') diubah menjadi **Abu Gelap (`#222222`)**.
//    - Jaga agar teks harga (`Price text`) tetap dengan warna hijau yang sudah ada.

// 4. 🔲 INPUT & FORM (Riwayat Sewa, Profil)
//    - Ubah `background-color` elemen `<input>`, `<select>`, dan `<textarea>` menjadi **Putih Utama (`#FFFFFF`)**.
//    - Ubah `border-color` input menjadi **Abu Border Input (`#A3A3A3`)** dengan `border-width: 2px` (atau *class* Tailwind yang setara).
//    - Ubah `color` *placeholder* menjadi **Abu Placeholder (`#6B7280`)**.
//    - Ubah `box-shadow` atau `ring-color` pada status `:focus` menjadi **Biru Focus Ring (`#2563EB`)**.

// 5. 🔘 BUTTON
//    - Pertahankan *background* tombol utama (`Button utama`) dengan *gradient* ungu -> biru yang sudah ada.
//    - Ubah `color` teks di tombol utama menjadi **Putih Utama (`#FFFFFF`)** dan tambahkan *class* untuk membuatnya **bold** (misal: `font-bold`) untuk kontras maksimal.


perbaikan:
Baik, saya akan merangkum semua perbaikan yang diminta ke dalam *prompt* yang jelas dan terstruktur untuk Qwen Code CLI. Saya akan pastikan Qwen memahami bahwa ini adalah **perintah perbaikan** untuk menyempurnakan konversi tema gelap ke terang, dengan fokus pada:

1.  **Teks Global Hitam**
2.  **Latar Belakang Card Sepenuhnya Putih** (menghilangkan abu-abu)
3.  **Detail Input dan Elemen Status yang Jelas**

Berikut adalah *prompt* final yang sudah disempurnakan:

---

## 🛠️ FINAL PROMPT QWEN CODE CLI: PERBAIKAN & PENAJAMAN TEMA TERANG

**Kepada Qwen Code CLI:**

Tolong lakukan **perbaikan dan penajaman** pada hasil konversi tema gelap ke terang sebelumnya di seluruh *file* Laravel Blade dan CSS yang tercantum di bawah. Fokus utama adalah menghilangkan sisa-sisa elemen gelap dan memastikan konsistensi tema terang dengan warna teks yang tajam.

**File Target:**
* Semua file di `resources/views/pelanggan/`
* `resources/views/pelanggan/layout.blade.php`
* `resources/views/dashboards/pelanggan.blade.php`
* Semua file CSS/SCSS yang digunakan untuk *styling*.

**Aturan Perubahan:**
1.  **Hanya ubah properti warna** (`background-color`, `color`, `border-color`, `box-shadow`) dan *class* Tailwind yang berhubungan dengan warna.
2.  **JANGAN ubah struktur HTML, tata letak, atau logika Blade.**

---

### A. Perubahan Warna Spesifikasi (Konsolidasi)

| Elemen UI | Warna HEX | Keterangan |
| :--- | :--- | :--- |
| **Teks Global** | `#000000` | **HITAM MURNI** (Terapkan di seluruh konten, judul, teks tabel, durasi) |
| **Latar Belakang Utama/Card** | `#FFFFFF` | **PUTIH MURNI** (Terapkan di semua Card, latar belakang konten utama) |
| Navbar/Sidebar | `#1E40FF` | Biru Utama (Tetap) |
| Teks/Ikon Navbar/Sidebar | `#FFFFFF` | Putih (Tetap) |
| Border Input | `#A3A3A3` | Abu Border 2px (Tetap) |

### B. Perbaikan Detail Elemen

#### 1. Teks dan Garis (GLOBAL FIX)
* Ubah `color` teks default global (body, h1-h6, p, label, teks tabel, teks durasi) menjadi **Hitam Murni (`#000000`)**.
* Pastikan teks di dalam semua elemen input/form juga berwarna **Hitam Murni (`#000000`)**.
* Pastikan garis (`border`) di sekitar input/select/textarea (seperti di halaman Profil atau Riwayat Sewa) memiliki warna **Abu Border Input (`#A3A3A3`)** atau **Hitam Murni (`#000000`)** dengan ketebalan 1-2px.

#### 2. Card dan Latar Belakang
* **Hapus semua latar belakang abu-abu/gelap yang tersisa** pada Card (terutama Card di halaman `Sewa Unit PlayStation`, `Detail Penyewaan`, dan `Ringkasan Pesanan`).
* Setel `background-color` semua Card di area konten menjadi **Putih Murni (`#FFFFFF`)**.
* Pastikan `border` Card menggunakan **Abu Border Tipis (`#E5E7EB`)** dan memiliki *shadow* ringan.

#### 3. Status dan Badge
* Di halaman **Riwayat Penyewaan Saya**, pastikan *badge* **STATUS** (`Sedang Disewa`, `Selesai`, `Menunggu Pembayaran`):
    * Memiliki warna *background* yang cerah/berani (sesuai warna konteksnya).
    * Menggunakan warna `color` teks **Hitam Murni (`#000000`)** atau **Putih Murni (`#FFFFFF`)** yang paling kontras di atas *background badge* tersebut.

**Tolong terapkan perbaikan ini pada semua file target untuk mencapai tampilan Tema Terang yang bersih dan konsisten.**