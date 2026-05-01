
@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- HERO --}}
<section class="section-padding text-center">
    <h1 class="fw-bold">
        Halo, Saya <span class="text-primary-custom">Nur Syahrur Ramadani</span>
    </h1>
    <p class="text-muted">
        UTS Pemrograman Website II
    </p>

    <a href="#projects" class="btn btn-success mt-3">
        Lihat Project
    </a>
</section>

{{-- ABOUT --}}
<section id="about" class="section-padding border-top">
    <h2 class="text-center text-primary-custom mb-4">About</h2>

        <div class="row align-items-center">

        <div class="col-md-6">
            <p>
                Saya adalah Mahasiswa Teknik Informatika Semester 4 yang suka website
                Walaupun belum mahir, saya tetap tidak menyerah untuk belajar. 
            </p>
        </div>

        <div class="col-md-6 text-center">
            <img src="{{ asset('IMG/dani3.jpeg') }}" class="img-fluid rounded" width="20%">
        </div>

    </div>

</section>

{{-- EXPERIENCE --}}
<section id="experience" class="section-padding border-top">
    <h2 class="text-center text-primary-custom mb-4">Experience</h2>

    <div class="card p-4 shadow-sm">
        <h5>Riwayat Pendidikan</h5>
        <p class="text-muted">Saya tidak memiliki backgound IT sama sekali, baik dari keluarga maupun keluarga saya. Saya tumbuh dari keluarga sederhana. Saya menempuh pendidikan dasar di SDN. Asrikaton 01, Berlanjut ke pendidikan menengah di MTs Al-Ittihad PONPES Salafiyah Al-Ittihad dan pendidikan atas (kejuruhan) di SMK NH multimedia PONPES salafiyah NURUL HUDA Poncokusumo Sampai sekarang. Di PONPES saya mengikuti kegiatan hadrah Al-banjari, dan saya sering mengikuti lomba hadrah(Festival al-banjari). dan sering juga menjadi juara </p>
   <div class="row mt-4">
    <!-- Foto 1 -->
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <img src="IMG/festim2.jpeg" class="img-fluid rounded shadow-sm" alt="Project 1" style="height: 200px; width: 100%; object-fit: cover;">
    </div>
    
    <!-- Foto 2 -->
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <img src="IMG/festim1.jpeg" class="img-fluid rounded shadow-sm" alt="Project 2" style="height: 200px; width: 100%; object-fit: cover;">
    </div>
    
    <!-- Foto 3 -->
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <img src="IMG/fes1.jpeg" class="img-fluid rounded shadow-sm" alt="Project 3" style="height: 200px; width: 100%; object-fit: cover;">
    </div>
    
    <!-- Foto 4 -->
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <img src="IMG/fes4.jpeg" class="img-fluid rounded shadow-sm" alt="Project 4" style="height: 200px; width: 100%; object-fit: cover;">
    </div>
</div>
    </div>
</section>

{{-- PROJECTS --}}
<section id="projects" class="section-padding border-top">
    <h2 class="text-center text-primary-custom mb-4">Projects</h2>

    <div class="row g-4">

        <div class="col-md-4">

            <div class="card shadow-sm h-100">
                <img src="../IMG/PROJEK 1.PNG" class="card-img-top">

                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text text-muted">
                        
                         projek UAS semester 3 matkul pemrograman web I   
                    </p>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="../IMG/PROJEK2.PNG" class="card-img-top">

                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text text-muted">
                        
                        projek UTS semester 3 matkul pemrograman web I

                    </p>
                </div>
            </div>
        </div>
        
          <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="../IMG/PROJEK3.PNG" class="card-img-top">

                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text text-muted">
                        
                        projek pertama semester 3 matkul pemrograman web I

                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- SKILLS --}}
<section id="skills" class="section-padding border-top">
    <h2 class="text-center text-primary-custom mb-4">Skills</h2>

    <div class="mb-3">
        <label>HTML</label>
        <div class="progress">
            <div class="progress-bar bg-success" style="width: 17%"></div>
        </div>
    </div>

    <div class="mb-3">
        <label>CSS</label>
        <div class="progress">
            <div class="progress-bar bg-success" style="width: 15%"></div>
        </div>
    </div>

      <div class="mb-3">
        <label>JavaScript</label>
        <div class="progress">
            <div class="progress-bar bg-success" style="width: 2%"></div>
        </div>
    </div>

</section>

@endsection