{include file="header.tpl"}
{foreach from=$generos_s item=genero}
    <h2>{$genero->nombre}</h2>
{/foreach}
{include file="footer.tpl"}