@extends('layouts.app')

@section('main-content')
<section class="container">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $pokemon->img_url }}" alt="{{ $pokemon->name }}">
        <div class="card-body">
        <h5 class="card-title">
            N° {{ $pokemon->id }}
        </h5>
        <p class="card-text">
            Name: {{ $pokemon->name }}
        </p>
        <p class="card-text">
            Type: {{ $pokemon->species }}
        </p>
        <p class="card-text">
            Height: {{ $pokemon->height }}
        </p>
        <p class="card-text">
            Weight: {{ $pokemon->weight }}
        </p>
        <p class="card-text">
            Abilities: {{ $pokemon->abilities }}
        </p>
        <p class="card-text">
            Hp: {{ $pokemon->hp }}
        </p>
        <p class="card-text">
            Attack: {{ $pokemon->attack }}
        </p>
        <p class="card-text">
            Defense: {{ $pokemon->defense }}
        </p>
        <p class="card-text">
            Speed attack: {{ $pokemon->speed_attack }}
        </p>
        <p class="card-text">
            Speed defence: {{ $pokemon->speed_defence }}
        </p>
        <p class="card-text">
            Speed: {{ $pokemon->speed }}
        </p>
        <button type="button">Edit
            <a href="{{route('admin.pokemons.edit', $pokemon->id)}}"></a>
        </button>
        </div>
      </div>
</section>

@endsection