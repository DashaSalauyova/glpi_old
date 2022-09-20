{* 
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: ORAPI Darya SALAUYOVA - ©2022     ==//
//==            http://orapi.com             ==//
//============================================================================//
*}

<FORM METHOD=POST ACTION={$target}>
    <table class='tab_cadre_fixe'>
        <tr>
            <th colspan="2">Gestion des droits pour le plugin ticketcounter:</th>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <SELECT name="droit" size="1">
                    {if $droit eq 'r'}
                        <OPTION selected>Lecture
                        <OPTION>Modification
                        <OPTION>Aucun
                    {elseif $droit eq 'w'}
                        <OPTION>Lecture
                        <OPTION selected>Modification
                        <OPTION>Aucun
                    {else}
                        <OPTION>Lecture
                        <OPTION>Modification
                        <OPTION selected>Aucun
                    {/if}
                </SELECT>
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type='hidden' name='id' value={$id}>
                <input type='submit' name='Modifier' class='submit' value="Modifier">
            </td> 
        </tr>
    </table>
{$endform}