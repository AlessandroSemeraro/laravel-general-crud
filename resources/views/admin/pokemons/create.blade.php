
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemons Create </title>

    @vite('resources/js/app.js')

  
</head>
<body>


    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Create new Pokemon
                </h1>
                <form action="{{ route('admin.pokemons.store') }}" method="POST" >
                    @csrf

                    <div class="mb-3">
                        <label for="titolo"class="form-label">
                            Pokemon's Name
                        </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="img_url"class="form-label">Pokemon Picture</label>
                        <input type="text" name="img_url" id="img_url" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="species"class="form-label">Species:</label>
                        <input type="text" name="species" id="species" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="height"class="form-label">height:</label>
                        <input type="text" name="height" id="height" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="series"class="form-label">Weight</label>
                        <input type="weight" name="weight" id="weight" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="abilities"class="form-label">abilities</label>
                        <input type="abilities" name="abilities" id="abilities" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="hp"class="form-label">hp</label>
                        <input type="hp" name="hp" id="hp" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="attack"class="form-label">attack</label>
                        <input type="attack" name="attack" id="attack" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="defense"class="form-label">efense</label>
                        <input type="defense" name="defense" id="defense" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="speed_attack"class="form-label">speed_attack</label>
                        <input type="speed_attack" name="speed_attack" id="speed_attack" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="speed_defence"class="form-label">speed_attack</label>
                        <input type="speed_defence" name="speed_defence" id="speed_defence" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="speed"class="form-label">speed</label>
                        <input type="speed" name="speed" id="speed" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">Create a new pokemon</button>
                    <button type="reset"  class="btn btn-warning">Clear</button>
                </form>
            </div>
        </div>
    </section>


</body>
</html>