@if(is_front_page())
<!-- Header -->
<header id="header" class="header pt-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-0">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
        <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12 text-gray">
            <h1 class="h1-large mb-5 text-gray">Prepare-se para dar um start na sua <span>vida saudável</span></h1>
            <p class="p-large mb-4">Está cansada(o) de fazer dientes e não ver resultados?</p>
            <p class="p-large mb-4">De seguir dietas muito restritivas e desistir no meio do caminho?</p>
            <p class="p-large mb-4">Venha comigo que eu posso te ajudar!</p>
        </div>
        <div class="xl:text-right">
            <img class="inline" src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/bruna-home-inicial.png" alt="alternative" />
        </div>
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->
@else
<div class="page-header">
  <h1>{!! $title !!}</h1>
</div>
@endif