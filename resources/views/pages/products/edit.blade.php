@extends('layouts.default')

@section('content')
<div class="card">
	<div class="card-header">
		<strong>Tambah Barang</strong><br>
		<small>{{ $item->name }}</small>
	</div>
	<div class="card-body card-block">
		<form action="{{ route('products.update', $item->id) }}" method="post">
			@method('PUT')
			@csrf
			<div class="form-group">
				<label for="name" class="form-control-label">Nama Barang</label>
				<input type="text" 
							 name="name" 
							 value="{{ old('name') ? old('name') : $item->name }}" 
							 class="form-control col-4 @error('name') is-invalid @enderror" />
				@error('name') <div class="text-muted">{{ $message }} </div> @enderror
			</div>

			<div class="form-group">
				<label for="type" class="form-control-label">Tipe Barang</label>
				<input type="text" 
							 name="type" 
							 value="{{ old('type') ? old('type') : $item->type }}" 
							 class="form-control col-8 @error('type') is-invalid @enderror" />
				@error('type') <div class="text-muted">{{ $message }} </div> @enderror
			</div>

			<div class="form-group">
				<label for="description" class="form-control-label">Deskripsi Barang</label>
				<textarea name="description" 
									class="ckeditor col-8 form-control @error('description') is-invalid @enderror">
									{{ old('description') ? old('description') : $item->description }}
				</textarea>
				@error('description') <div class="text-muted">{{ $message }}</div> @enderror
			</div>

			<div class="form-group">
				<label for="price" class="form-control-label">Harga Barang</label>
				<input type="number" 
							 name="price" 
							 value="{{ old('price') ? old('price') : $item->price }}" 
							 class="form-control col-4 @error('price') is-invalid @enderror" />
				@error('price') <div class="text-muted">{{ $message }} </div> @enderror
			</div>

			<div class="form-group">
				<label for="quantity" class="form-control-label">Kuantitas Barang</label>
				<input type="number" 
							 name="quantity" 
							 value="{{ old('quantity') ? old('quantity') : $item->quantity }}" 
							 class="form-control col-4 @error('quantity') is-invalid @enderror" />
				@error('quantity') <div class="text-muted">{{ $message }} </div> @enderror
			</div>

			<div class="form-group">
				<button class="btn btn-primary btn-block col-2" type="submit">
					Edit Barang
				</button>
				<button class="btn btn-danger col-2" type="reset">
					Cancel
				</button>
			</div>

		</form>
	</div>
</div>
@endsection