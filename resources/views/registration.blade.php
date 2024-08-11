@extends('layouts.main')

@section('main')
  <section id="registration" style="background-image: url('{{ asset('images/home/registration-bgimage.png') }}')">
    <div class="overlay"></div>
    <div
      class="min-vh-100 h-full d-flex flex-column  z-2 justify-content-center align-items-center position-relative px-4 px-lg-5 content text-white">
      <h1 class="fw-bold">Registrasi</h1>
      <p>Lengkapi data diri kamu dengan benar</p>
      <div class="mt-2  form-registration p-4  bg-white">
        <form class="d-flex flex-column ">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control py-3" id="name-input" aria-label="Nama Lengkap"
              aria-describedby="basic-addon1">
            <div class="placeholder-container">
              Nama Lengkap<span class="red-asterisk">*</span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control py-3" id="email-input" aria-label="Email"
              aria-describedby="basic-addon1">
            <div class="placeholder-container">
              Email<span class="red-asterisk">*</span>
            </div>
          </div>
          <div class="input-group mb-3 ">
            <input type="text" class="form-control py-3" id="handphone-input" aria-label="No Telepon"
              aria-describedby="basic-addon1">
            <div class="placeholder-container">
              Nomor Telepon<span class="red-asterisk">*</span>
            </div>

          </div>
          <p class="no-only ">Isi hanya angka</p>

          <div class="input-group mb-3">
            <input type="text" class="form-control py-3" id="handphone-input" aria-label="No Telepon"
              aria-describedby="basic-addon1">
            <div class="placeholder-container">
              Nomor Telepon<span class="red-asterisk">*</span>
            </div>
          </div>

          <div class="input-group mb-3">
            <textarea type="text" class="form-control py-3" id="handphone-input" aria-label="No Telepon"
              aria-describedby="basic-addon1" rows="7"></textarea>
            <div class="placeholder-container-textarea">
              Alasan mengikuti program “Explore Thailand by Detiktravel”<span class="red-asterisk">*</span>
            </div>
          </div>

          <div class="file-upload mb-3">
            <div class="upload-area ">
              <span class="upload-icon m-auto ">+</span>
              <input type="file" id="file-input" aria-label="Upload Foto Profil">
              <p class="mt-auto ">Upload foto profil<span class="red-asterisk">*</span></p>
            </div>
            <div class="upload-info">
              <p>1. Format file: .png, .jpg, .jpeg</p>
              <p>2. Maksimal ukuran file 1MB</p>
              <p>3. Disarankan foto mencakup 3:4 badan</p>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control py-3" id="handphone-input" aria-label="No Telepon"
              aria-describedby="basic-addon1">
            <div class="placeholder-container">
              Link Instagram<span class="red-asterisk">*</span>
            </div>
          </div>
          <p class="no-only ">Contoh: https://www.instagram.com/yourusername</p>
          <div class="form-check ">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
            <label class="form-check-label" for="flexCheckIndeterminate">
              Dengan menekan tombol "Daftar", Saya menyetujui <span> syarat dan ketentuan </span> yang berlaku
            </label>
          </div>
          <button type="submit" class=" button-registration text-white mx-auto py-3 mt-3">Daftar</button>
        </form>
      </div>
    </div>
  </section>
@endsection
