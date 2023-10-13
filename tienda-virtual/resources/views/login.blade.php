<x-page>
    <div class="screem flex justifyCenter alignCenter bg_image">
        <div class="flex colum alignCenter radius padding2 gap20 bg_Transparent">
            <div class="font3em bold" >Inicio Sesion</div>
            <div > 
                <input class="py05Em px05Em" type="text" placeholder=" Usuario"> 
            </div>
            <div> 
                <input type="text" class="py05Em px05Em" placeholder=" Contraseña" >
             </div>
            <div >
                <x-buton-normal>
                    <a class=" textAzure bold underline " href="{{route('Dash')}}">Aceptar</a>
                </x-buton-normal> 
            </div>
        </div>
    </div>
</x-page>