@extends('layouts.bar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Vous voulez nous proposer un nouveau Bar ?</h1>
                    </div>

                    @if (count($errors)>0)
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="panel-body">
                        <form method="POST" action="{{route('bars.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input class="form-control" type="text" name="title" placeholder="Titre"
                                   style="width:100%;">
                            <br>
                            <textarea class="form-control" name="description" id="" cols="30" row="10" style="width:100%;"
                                      placeholder="description"></textarea>
                            <br>
                            <textarea class="form-control" name="adresse" id="" cols="30" row="10" style="width:100%;"
                                      placeholder="adresse"></textarea>
                            <br>



                             Avez vous :<br>

                            <input type="hidden" name="flechettes" value="0" />
                            <input type="checkbox" name="flechettes" value="1" />Des fléchettes <br>

                            <input type="hidden" name="billard" value="0" />
                            <input type="checkbox" name="billard" value="1" /> Un billard <br>


                            <input type="hidden" name="flipper" value="0" />
                            <input type="checkbox" name="flipper" value="1" /> Un flipper <br>


                            <input type="hidden" name="baby_foot" value="0" />
                            <input type="checkbox" name="baby_foot" value="1" /> Un baby foot <br><br>

                            Vos horaires :<br>
                            <textarea class="form-control" name="horaires" id="" rows="8" cols="20" style="width:100%;"
                                      placeholder="horaires">
                                Lundi : 00h à 12h
                                Mardi : 00h à 12h
                                Mercredi : 00h à 12h
                                Jeudi : 00h à 12h
                                Vendredi : 00h à 12h
                                Samedi : 00h à 12h
                                Dimanche : 00h à 12h
                            </textarea><br><br>

                            <input  type="file" name="picture" id="files" >

                            <br>
                            <div class="text-center">
                                <input class="btn btn-primary" type="submit" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection