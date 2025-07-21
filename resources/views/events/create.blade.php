@extends('layout.main')

@section('title', 'Criar Evento')

@section('content')

<div id="create-event-container" class="col-md-6 offset-md-3">
    <h1>Criar Evento</h1>
    <form action="/event" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Título do Evento</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Título do Evento" required>
        </div>
        <div class="form-group">
            <label for="city">Cidade do Evento</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Cidade do Evento" required>
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-select" required>
                <option selected disabled>Selecione a visibilidade</option>
                <option value="0">Público</option>
                <option value="1">Privado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição do Evento</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do que vai acontecer no evento..." required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Imagem do Evento</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="item_qty" name="item_qty" placeholder="Quantidade de items" aria-label="Quantidade de items" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Add</button>
        </div>
       <!-- Seleção de Itens Dinamica - Checkbox -->
        <div class="form-check" style="display: none;">
            <input type="checkbox" name="items" id="items" class="form-check-input" value="" required>
            <label for="items" class="form-check-label">Text-section</label>
        </div>

        <div class="form-group">
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </div>
        

    </form>
</div>


@endsection