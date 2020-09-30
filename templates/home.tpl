{include file="header.tpl"}


{foreach from=$peliculas_s item=pelicula}
    <div class="pelicula">
                <ul>
                    <li>Nombre: {$pelicula->titulo}</li>
                    <li>Genero: {$pelicula->genero}</li>
                </ul>
            </div>
{/foreach}            
{include file="footer.tpl"}
