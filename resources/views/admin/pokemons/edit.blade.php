@extends('layouts.app')

@section('main-content')
<section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Create new Pokemon
                </h1>
                <form action="{{ route('admin.pokemons.update') }}" method="POST" >
                    @csrf

                    <div class="mb-3">
                        <label for="titolo"class="form-label">
                            Edit pokemon's name
                        </label>
                        <input type="text" value="{{$pokemon->name}}" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="img_url"class="form-label">Edit pokemon picture</label>
                        <input type="text" value="{{$pokemon->img_url}}" name="img_url" id="img_url" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="species"class="form-label">Edit pokemon species:</label>
                        <input type="text" value="{{$pokemon->species}}" name="species" id="species" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="height"class="form-label">edit height:</label>
                        <input type="text" value="{{$pokemon->height}}" name="height" id="height" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="series"class="form-label">edit weight</label>
                        <input type="weight" value="{{$pokemon->weight}}" name="weight" id="weight" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="abilities"class="form-label">edit abilities</label>
                        <input type="abilities" value="{{$pokemon->abilities}}" name="abilities" id="abilities" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="hp"class="form-label">edit hp</label>
                        <input type="hp"  value="{{$pokemon->hp}}" name="hp" id="hp" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="attack"class="form-label">edit attack</label>
                        <input type="attack"  value="{{$pokemon->attack}}" name="attack" id="attack" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="defense"class="form-label">edit defense</label>
                        <input type="defense" value="{{$pokemon->defense}}" name="defense" id="defense" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="speed_attack"class="form-label">edit speed_attack</label>
                        <input type="speed_attack" value="{{$pokemon->speed_attack}}" name="speed_attack" id="speed_attack" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="speed_defence"class="form-label">edit speed_defence</label>
                        <input type="speed_defence" value="{{$pokemon->speed_defence}}" name="speed_defence" id="speed_defence" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="speed"class="form-label">edit speed</label>
                        <input type="speed" value="{{$pokemon->speed}}" name="speed" id="speed" class="form-control">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Create a new pokemon</button>
                    <button type="submit" class="btn btn-info">Edit pokemon</button>
                    <button type="reset"  class="btn btn-warning">Clear</button>
                </form>
            </div>
        </div>
    </section>
@endsection