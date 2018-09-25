@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ADMINISTRATION : NOUVELLE VIDEO') }}</div>

                    <div class="card-body">
                        <form method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" required>Categorie éleves</label>
                                <select class="form-control {{ $errors->has('categorie') ? ' is-invalid' : '' }}" value="categorie"  id="exampleFormControlSelect1" required>
                                <option>Groupe 1</option>
                                <option>Groupe 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Categorie dance</label>
                                <select class="form-control {{ $errors->has('dance') ? ' is-invalid' : '' }}"value="dance"  id="exampleFormControlSelect1" required>
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
                                <label for="exampleFormControlFile1">Importer une video.</label>
                                <input type="file" class="form-control-file {{ $errors->has('video') ? ' is-invalid' : '' }}" value="video"id="exampleFormControlFile1" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Points clefs du cour.</label>
                                <textarea class="form-control {{ $errors->has('file') ? ' is-invalid' : '' }}" value="file"  id="exampleFormControlTextarea1" rows="3"></textarea>
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
