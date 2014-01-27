{foreach from=$data item=data_i} 
{include file='view/_article.tpl'}
{/foreach}
<br><br>
{if $pagee neq 1}
    <a href='{$pagemoin}'> précedent</a> -
{/if}
{for $ii=1 to $nb_pagee}
    {if $pagee eq $i}
        <a class="active" href="index.php?p={$ii}"><b>{$ii}</b></a>
    {else}
        <a href="index.php?p={$ii}">{$ii}</a>
    {/if}
                        

    {/for}
    
{if $pagee neq $nb_pagee}
- <a href='{$pageplus}'> suivant</a>
{/if}



