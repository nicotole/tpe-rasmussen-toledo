{include file="header.tpl"}
<ul>
{foreach from=$peliculas_s item=pelicula}
    <li>{$pelicula->titulo}</li>
    <li>{$pelicula->sinopsis}</li>
{/foreach}
</ul>
{include file="footer.tpl"}