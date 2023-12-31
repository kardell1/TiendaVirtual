<x-page>
<section class="screem ">
        <div class="widthFull heightFull justifyCenter cardPrincipal bg_image">
            <div class="cardPrincipal_Titulo textAzure bold">Pizza planeta</div>
            <div class="cardRuta pIcon  ">
                <a class="textAzure bold underline font05em linkHover " href="{{route('ruta_prueba')}}">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
            <div class="cardPrincipal_Descripcion textAzure bold" >Disfruta con tu <span class ="textOrange">familia</span></div>
            <!-- esto tendria que ser un componente reutilizable  -->
            <x-button>
               <p class="semiBold">Revisa la carta</p>
            </x-button>
        </div>
    </section>
    <section class ="padding">
        <div class=" flex colum alignCenter ">
            <div class="font" >
                Acerca de nosotros
            </div>
            <div class=" w80 py lineHeight ">
                <p class="wrap">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab corrupti amet quae, ratione fuga totam est dolore possimus non quidem eius optio assumenda, quas iusto nesciunt consequuntur ut eligendi adipisci.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem cum consequuntur, magni debitis natus assumenda suscipit sed omnis distinctio, dolore, nulla recusandae. Sequi consequuntur vero aliquid minus perferendis nobis voluptatum?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, aperiam consectetur. In rerum officia magnam? Soluta dolore aspernatur temporibus, veritatis cupiditate illum culpa at veniam natus cumque esse odit omnis!    
                </p>
            </div>
        </div>
    </section>
    <!-- en aca se pone la descripcion del plato para que sea dinamico y jale los datos de la base de datos  -->
    <section class="widthFull heightMax flex colum bg_image textAzure py_40 gap">
        <!-- aca poner un maximo de 3 platos que serian los favoritos -->
        <h2 class="textCenter font semiBold textOrange" >Platos del dia </h2>
        <div class="flex justifyCenter" >
            
            <x-card >
                <x-image-plato>
                    <img src="./Images/pizaas.jpeg" alt="" class="prueba radius scale" >
                </x-image-plato>
                <x-description-plato>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, voluptatum saepe vitae fuga corrupti mollitia suscipit, deserunt et unde quidem autem nesciunt distinctio ex ipsa possimus quam molestias culpa ratione?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis quae pariatur asperiores eos? Aut ut consequuntur iure, voluptatum sit tempore error placeat minus voluptatibus, numquam consectetur eum inventore quasi deserunt.
                </x-description-plato>
            </x-card>
        </div>
        <div class="flex justifyCenter" >
            <x-card>
                <x-image-plato>
                    imagen del plato
                </x-image-plato>
                <x-description-plato>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, voluptatum saepe vitae fuga corrupti mollitia suscipit, deserunt et unde quidem autem nesciunt distinctio ex ipsa possimus quam molestias culpa ratione?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis quae pariatur asperiores eos? Aut ut consequuntur iure, voluptatum sit tempore error placeat minus voluptatibus, numquam consectetur eum inventore quasi deserunt.
                </x-description-plato>
            </x-card>
        </div>
        <div class="flex justifyCenter" >
            <x-card>
                <x-image-plato>
                    imagen del plato
                </x-image-plato>
                <x-description-plato>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, voluptatum saepe vitae fuga corrupti mollitia suscipit, deserunt et unde quidem autem nesciunt distinctio ex ipsa possimus quam molestias culpa ratione?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis quae pariatur asperiores eos? Aut ut consequuntur iure, voluptatum sit tempore error placeat minus voluptatibus, numquam consectetur eum inventore quasi deserunt.
                </x-description-plato>
            </x-card>
        </div>
    </section>
    <!-- aca van los cocineros principales -->
    <section class="widthFull heightMax flex colum py_40 gap">
        <!-- aca poner un maximo de 3 platos que serian los favoritos -->
        <h2 class="textCenter font semiBold textOrange" >Nuestros cocineros</h2>
        <div class="flex justifyCenter" >
            <x-card >
                <x-image-plato>
                    <img src="./Images/pizaas.jpeg" alt="" class="prueba radius scale" >
                </x-image-plato>
                <x-description-plato>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, voluptatum saepe vitae fuga corrupti mollitia suscipit, deserunt et unde quidem autem nesciunt distinctio ex ipsa possimus quam molestias culpa ratione?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis quae pariatur asperiores eos? Aut ut consequuntur iure, voluptatum sit tempore error placeat minus voluptatibus, numquam consectetur eum inventore quasi deserunt.
                </x-description-plato>
            </x-card>
        </div>
        <div class="flex justifyCenter" >
            <x-card>
                <x-image-plato>
                    imagen del chef
                </x-image-plato>
                <x-description-plato>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, voluptatum saepe vitae fuga corrupti mollitia suscipit, deserunt et unde quidem autem nesciunt distinctio ex ipsa possimus quam molestias culpa ratione?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis quae pariatur asperiores eos? Aut ut consequuntur iure, voluptatum sit tempore error placeat minus voluptatibus, numquam consectetur eum inventore quasi deserunt.
                </x-description-plato>
            </x-card>
        </div>
        <div class="flex justifyCenter" >
            <x-card>
                <x-image-plato>
                    imagen del chef
                </x-image-plato>
                <x-description-plato>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, voluptatum saepe vitae fuga corrupti mollitia suscipit, deserunt et unde quidem autem nesciunt distinctio ex ipsa possimus quam molestias culpa ratione?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis quae pariatur asperiores eos? Aut ut consequuntur iure, voluptatum sit tempore error placeat minus voluptatibus, numquam consectetur eum inventore quasi deserunt.
                </x-description-plato>
            </x-card>
        </div>
    </section>
    <footer>
        <div class=" bg_image semiBold textAzure padding flex colum gap10">
            <div class="linkHover flex items alignCenter gap10 widthMax"> 
                <i class="fa-solid fa-map-location-dot"></i>
                <p>ubicacion : Cañada strongest #3456</p>
            </div>
            <div class="linkHover flex items alignCenter gap10 widthMax">
                <i class="fa-solid fa-envelope"></i> 
                <p>gmail : PizzaPlaneta@gmail.com</p>
            </div>
            <div class="linkHover flex items alignCenter gap10 widthMax"> 
                <i class="fa-solid fa-phone-volume"></i> 
                <p>celular : +591 665 432 65</p>
            </div>
            <div class="linkHover flex items alignCenter gap10 widthMax"> 
                <i class="fa-brands fa-square-facebook"></i>
                <p>facebook : PizzaPlanetaBo</p>
            </div>
            
        </div>
    </footer>
</x-page>