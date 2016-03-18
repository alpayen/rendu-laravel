@if($errors)


        @foreach($errors->all() as $error)
            <div class="col-md-6">
                <li style="list-style-type: none; color: red;"> Erreur : {{$error}} </li>
            </div>
        @endforeach



@endif
