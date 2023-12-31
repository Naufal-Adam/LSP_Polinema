<x-app>
    @slot('content')
    @slot('page')
        About
    @endslot
    <section>
            <div class="container">
                <x-alert />
                <div class="row">
                    <div class="col card px-3 py-3">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="mb-3 ms-5">
                                    <img src="https://akademik.polinema.ac.id/upload_dir/foto_ktm_valid/2021/2131730062-cLGXC.jpeg" alt="" style="width: 120px;">
                                </div>
                            </div>
            
                            <div class="col-sm-6 col-md-6 col-lg-9">
                                <label class="form-label">Aplikasi ini dibuat oleh : </label><br>
                                <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3">                 
                                    <label class="form-label">Nama </label><br>
                                    <label class="form-label">Prodi </label><br>
                                    <label class="form-label">Nim </label><br>
                                    <label class="form-label">Tanggal</label>                        
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <label class="form-label">: Muhamad Naufal Adam Firdaus</label><br>
                                    <label class="form-label">: D3 Manajemen Informatika</label><br>
                                    <label class="form-label">: 2131730062</label><br>
                                    <label class="form-label">: 15 November 2023</label>                        
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endslot
    @slot('script')
    <script>
    </script>
    @endslot
</x-app>