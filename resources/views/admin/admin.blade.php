@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ADMINISTRATION : NOUVELLE VIDEO') }}</div>

                    <div class="card-body">
                        <form method="POST" enctype='multipart/form-data'>
                        @csrf
                            <div class="form-group">
                                <label for="groupes" required>groupe</label>
                                <select class="form-control {{ $errors->has('groupes') ? ' is-invalid' : '' }}"  name="groupes" id="exampleFormControlSelect1" required>
                                <option>Groupe 1</option>
                                <option>Groupe 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="categories">Categorie dance</label>
                                <select class="form-control {{ $errors->has('categories') ? ' is-invalid' : '' }}" name="categories"  id="exampleFormControlSelect1" required>
                                <option>rock 4 tps.</option>
                                <option>rock 6 tps.</option>
                                <option>rock swing.</option>
                                <option>Chacha.</option>
                                <option>Tango.</option>
                                <option>Pasodoble.</option>
                                <option>foxtrot.</option>
                                <option>Rumba.</option>
                                <option>valse.</option>
                                <option>valse lente.</option>
                                <option>salsa.</option>
                                <option>samba.</option>

                            </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Importer une video.</label>
                                <input type="file" class="form-control-file {{ $errors->has('videos') ? ' is-invalid' : '' }}" name="videos"id="exampleFormControlFile1" required>
                            </div>
                            <div class="form-group">
                                <label for="points_clef">Points clefs du cour.</label>
                                <textarea class="form-control {{ $errors->has('points_clef') ? ' is-invalid' : '' }}" name="points_clef"  id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
