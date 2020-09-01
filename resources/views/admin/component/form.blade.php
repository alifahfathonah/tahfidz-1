	  @extends('admin.dashboard')
	  @section('content')
		<div class="col col-xl-6">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0 text-center">Form Santri Baru</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form class="form-horizontal" action="/manage/santri/create" method="post">
                {{ csrf_field() }}
                <div class="form-group mb-1">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input placeholder="Nama" id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input placeholder="Kelas" id="kelas" type="text" class="form-control" name="kelas" value="{{ old('kelas') }}" required>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-quran"></i></span>
                    </div>
                    <input placeholder="Jenis Kelamin" id="jk" type="text" class="form-control" name="jk" value="{{ old('jk') }}" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-success mt-4">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      @endsection