<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('annonce') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('get.Annonce')}}">
                @csrf
                    <div class="form-group">
                        <label for="title">Titre de l'annonce</label>
                        <input name="title" type="text" class="form-control" id="title" aria-describedby="title" placeholder="Titre de l'annonce" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description" cols="20" rows="5" placeholder="Description" required></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="photo">Inserez une image</label>
                        <input name="photo" type="file" class="form-control" id="photo" aria-describedby="photo" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="price">Prix</label>
                        <input name="price" type="text" class="form-control" id="price" aria-describedby="price" placeholder="Prix ?" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="localisation">Localisation</label>
                        <input name="localisation" type="text" class="form-control" id="localisation" aria-describedby="localisation" placeholder="Ville" required>
                    </div> 
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>