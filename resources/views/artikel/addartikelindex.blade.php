@extends('templates.main')
@section('title', 'Intranet - Add Artikel')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Add Artikel')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-success pt-3">
                    <form action="{{ route('storeartikel') }}" method="post" enctype='multipart/form-data'>
                    @csrf
                   <div class="form-group">
                        <label for="judulartikel">Judul Artikel</label>
                        <input type="text" value="{{old('judul')}}" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judulartikel" placeholder="Judul">
                        @error('judul')
                            <div class="invalid-feedback">
                                *Kolom judul wajib diisi
                            </div>
                        @enderror
                    </div>
                   <div class="form-group">
                        <label for="foto">Upload thumbnail ukuran 358x250 pixel</label>
                        <input type="file" value="{{old('foto')}}" name="foto" class="form-control @error('foto') is-invalid @enderror" id="foto">
                        @error('foto')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                   <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" value="{{old('tanggal')}}" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal">
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Isi Artikel</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="tes" name="deskripsi" rows="15">{{old('judul')}}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                *Isi artikel wajib diisi
                            </div>
                        @enderror
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('artikel.index')}}" class="btn btn-warning mt-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    @endsection('konten')
</div>
@section('scriptExternal')
<script>
$(document).ready(function() {
    $('#tes').summernote({
    height : 300,
    popover: {
        
    }
    });
})
</script>
@endsection('scriptExternal')
<!-- end container fluid -->
