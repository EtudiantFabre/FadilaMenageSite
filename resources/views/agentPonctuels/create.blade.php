@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="agentsPonctuels/code.js" async></script>
    <title>CRÉATION D'UN PONCTUEL ASSOCIÉS AUX AGENTS</title>
</head>
<body onload= "actualiser_forms()">
    <div class="container">
        <h1>CRÉATION D'UN AGENT PONCTUEL</h1>
        <form action="{{route('agentPonctuels.store')}}" method="POST">
            @csrf
            @method('POST')
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="d-flex justify-content-between">
                <label for="id_agent">Sélectionner l'agent(s) qui participe(rons) <span class="text-danger required" aria-hidden="true">* // Pour sélectionner plusieurs, maintenez sur la touche CTRL avant de sélectionner</span> :
                    <select name="id_agent[]" id="id_agent" class="form-control" size="5" style="height: 100px" aria-label="size 3 select example" multiple="multiple">
                        <!--option selected>-- Personnel --</option-->
                        @foreach ($agents as $unAgent)
                            <option value={{$unAgent['id_agent']}}>{{$unAgent['id_agent']}} 👉️ {{$unAgent['nom'].' '.$unAgent['prenom']}}</option>
                        @endforeach
                    </select>
                </label>
                <!--input class="btn btn-secondary align-self-center" type="button" id="migrer" onclick="selectAjent()" value="👉️ MIGRER 👉️"-->
                <!--div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="agents" style="height: 100px"></textarea>
                    <label for="agents">Agents sélectionnés</label>
                </div-->
            </div>
            <br>
            <div>
                <label for="id_ponctuel">Sélectionner le ponctuel <span class="text-danger required" aria-hidden="true">*</span> :
                    <select name="id_ponctuel" id="id_ponctuel" class="form-control" size="3" aria-label="size 3 select example">>
                        <!--option selected>-- Personnel --</option-->
                        @foreach ($ponctuels as $unPonctuel)
                            <option value={{$unPonctuel['id_ponctuel']}}>{{$unPonctuel['id_ponctuel']}} 👉️ {{$unPonctuel['nom']}} 📅️ {{$unPonctuel['date']}}</option>
                        @endforeach
                    </select>
                    <!--svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg-->
                </label>
            </div>
            
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn btn-primary" value="ENREGISTRER L'AGENT PONCTUEL"/>
            </div>
        </form>
    </div>
</body>
</html>

<script>
    let agents_selectionner = [];
    let bt_migrer = document.getElementById("migrer");
    let select_agent = document.getElementById("id_agent");
    //alert(select_agent.value);
    let text_area = document.getElementById("agents");

    function selectAjent(){
        if (select_agent.value != "") {
            text_area.disabled = true;
            let text_option_select = select_agent.options[select_agent.selectedIndex].text;
            //select_agent.options[select_agent.selectedIndex].disabled = true
            agents_selectionner.push(select_agent.options[select_agent.selectedIndex].value);
            alert(agents_selectionner);  
            for (let i = 0; i < agents_selectionner.length; i++) {
                text_area.innerHTML += select_agent.options[i].text + "\n";                
            }      
            //text_area.innerHTML += text_option_select + "\n";
            //select_agent.options[select_agent.selectedIndex].value += text_option_select;
            //select_agent.innerText = agents_selectionner;
            //alert(select_agent.value);
            //return agents_selectionner;
        } else {
            alert('Veillez sélectionner un agent');
        }
        
    }

    function actualiser_forms() {
        var x=0;
        for (x = 0; document.forms[x] != null; x ++) {
            document.forms[x].reset();
        }
    }
</script>
@endsection