@extends ('layout.main')
@section('title', 'Criar evento')
@section('content')



    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Criar eventos</h1>

        <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento</label>
           <input type="file" id="image" name="image"class="form from-controle-file">
        </div>
        <div class="form-group">
            <label for="title">Cidade</label>
            <input text="text" class="form-control" id="city" name="city" placeholder="Local do evento"></input>
        </div>
        <div class="form-group">
            <label for="title">O evento é privado? </label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>


            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <input text="text" class="form-control" id="description" name="description"
                placeholder="Descrição do evento"></input>
        </div>
        <input type="submit" class="btn- btn-primary" value="Criar Evento">
</form>
    </div>

@endsection
