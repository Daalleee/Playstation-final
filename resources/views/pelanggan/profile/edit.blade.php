@extends('pelanggan.layout')

@section('pelanggan_content')
<div class="container-fluid">
    <!-- Header -->
    <div class="card mb-4">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h4 class="mb-1 fw-bold" style="color: #222222;"><i class="bi bi-pencil-square me-2" style="color: #1E40FF;"></i>Edit Profil</h4>
                <p class="mb-0 small" style="color: #6B7280;">Perbarui informasi akun dan data diri Anda</p>
            </div>
            <div>
                <a href="{{ route('pelanggan.profile.show') }}" class="btn btn-sm rounded-pill px-3" style="color: #0652DD; border: 1px solid #0652DD; background-color: transparent;" onmouseover="this.style.backgroundColor='#0652DD'; this.style.color='white';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#0652DD';">
                    <i class="bi bi-arrow-left me-2"></i>Kembali
                </a>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success border-0" style="background-color: rgba(34, 197, 94, 0.25); color: #6ee7b7; border: 1px solid rgba(34, 197, 94, 0.4);" class="mb-4 d-flex align-items-center">
            <i class="bi bi-check-circle-fill me-2 fs-5"></i>
            <div>{{ session('status') }}</div>
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert alert-danger border-0" style="background-color: rgba(239, 68, 68, 0.25); color: #fca5a5; border: 1px solid rgba(239, 68, 68, 0.4);" class="mb-4 d-flex align-items-center">
            <i class="bi bi-exclamation-circle-fill me-2 fs-5"></i>
            <div>{{ session('error') }}</div>
        </div>
    @endif

    @if(session('warning'))
        <div class="alert alert-warning border-0" style="background-color: rgba(234, 179, 8, 0.25); color: #fde047; border: 1px solid rgba(234, 179, 8, 0.4);" class="mb-4 d-flex align-items-start">
            <i class="bi bi-exclamation-triangle-fill me-3 fs-4 mt-1"></i>
            <div>
                <h6 class="fw-bold mb-1" style="color: #222222;">Profil Belum Lengkap!</h6>
                <p class="mb-0 small" style="color: #6B7280;">{{ session('warning') }}</p>
            </div>
        </div>
    @endif
    
    @if(empty($user->phone) || empty($user->address))
        <div class="alert alert-info border-0" style="background-color: rgba(6, 182, 212, 0.25); color: #67e8f9; border: 1px solid rgba(6, 182, 212, 0.4);" class="mb-4 d-flex align-items-start">
            <i class="bi bi-info-circle-fill me-3 fs-4 mt-1"></i>
            <div>
                <h6 class="fw-bold mb-1" style="color: #222222;">Informasi Penting</h6>
                <p class="mb-0 small" style="color: #6B7280;">Nomor HP dan Alamat <strong>WAJIB</strong> diisi untuk melakukan pemesanan rental. Lengkapi data Anda sekarang!</p>
            </div>
        </div>
    @endif

    <div class="card">
        <div class="card-body p-4">
            <form method="POST" action="{{ route('pelanggan.profile.update') }}">
                @csrf
                @method('PUT')

                <div class="row g-4 justify-content-center">
                    <div class="col-12 col-md-6">
                        <h5 class="fw-bold text-center" style="color: #222222; border-bottom: 1px solid #E5E7EB; padding-bottom: 0.5rem; margin-bottom: 1rem;">Informasi Dasar</h5>
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase d-block text-center" style="color: #6B7280;">Nama Lengkap</label>
                        <div class="input-group justify-content-center">
                            <span class="input-group-text" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #6B7280;"><i class="bi bi-person"></i></span>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                                   class="form-control" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #222222; width: auto; max-width: 100%;" @error('name') style="border-color: #ef4444;" @enderror>
                        </div>
                        @error('name')
                            <small class="text-danger mt-1 d-block text-center">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase d-block text-center" style="color: #6B7280;">Email</label>
                        <div class="input-group justify-content-center">
                            <span class="input-group-text" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #6B7280;"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                                   class="form-control" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #222222; width: auto; max-width: 100%;" @error('email') style="border-color: #ef4444;" @enderror>
                        </div>
                        @error('email')
                            <small class="text-danger mt-1 d-block text-center">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 mt-4">
                        <h5 class="fw-bold text-center" style="color: #222222; border-bottom: 1px solid #E5E7EB; padding-bottom: 0.5rem; margin-bottom: 1rem;">Kontak & Alamat</h5>
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase d-block text-center" style="color: #6B7280;">Nomor Telepon <span class="text-danger" style="color: #ef4444 !important;">*</span></label>
                        <div class="input-group justify-content-center">
                            <span class="input-group-text" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #6B7280;"><i class="bi bi-telephone"></i></span>
                            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" required
                                   class="form-control" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #222222; width: auto; max-width: 100%;" @error('phone') style="border-color: #ef4444;" @enderror
                                   placeholder="Contoh: 081234567890">
                        </div>
                        @error('phone')
                            <small class="text-danger mt-1 d-block text-center">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase d-block text-center" style="color: #6B7280;">Alamat Lengkap <span class="text-danger" style="color: #ef4444 !important;">*</span></label>
                        <div class="input-group justify-content-center">
                            <span class="input-group-text" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #6B7280;"><i class="bi bi-geo-alt"></i></span>
                            <input type="text" name="address" value="{{ old('address', $user->address) }}" required
                                   class="form-control" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #222222; width: auto; max-width: 100%;" @error('address') style="border-color: #ef4444;" @enderror
                                   placeholder="Jalan, Nomor Rumah, Kota">
                        </div>
                        @error('address')
                            <small class="text-danger mt-1 d-block text-center">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 mt-4">
                        <h5 class="fw-bold text-center" style="color: #222222; border-bottom: 1px solid #E5E7EB; padding-bottom: 0.5rem; margin-bottom: 1rem;">Keamanan</h5>
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase d-block text-center" style="color: #6B7280;">Password Baru</label>
                        <div class="input-group justify-content-center">
                            <span class="input-group-text" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #6B7280;"><i class="bi bi-lock"></i></span>
                            <input type="password" name="password"
                                   class="form-control" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #222222; width: auto; max-width: 100%;" @error('password') style="border-color: #ef4444;" @enderror
                                   placeholder="Kosongkan jika tidak ingin mengubah">
                        </div>
                        @error('password')
                            <small class="text-danger mt-1 d-block text-center">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase d-block text-center" style="color: #6B7280;">Konfirmasi Password</label>
                        <div class="input-group justify-content-center">
                            <span class="input-group-text" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #6B7280;"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" name="password_confirmation"
                                   class="form-control" style="background-color: #FFFFFF; border-color: #A3A3A3; color: #222222; width: auto; max-width: 100%;"
                                   placeholder="Ulangi password baru">
                        </div>
                    </div>

                    <div class="col-12 mt-5 d-flex flex-column flex-md-row gap-3 justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg px-5 fw-bold shadow-lg">
                            <i class="bi bi-save me-2"></i>Simpan Perubahan
                        </button>
                        <a href="{{ route('pelanggan.profile.show') }}" class="btn btn-outline-secondary btn-lg px-4">
                            Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection