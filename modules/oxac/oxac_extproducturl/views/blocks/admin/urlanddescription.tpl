[{$smarty.block.parent}]

                    <tr>
                      <td class="edittext">
                        [{ oxmultilang ident="OXAC_EXTPRODUCTURL_LABEL" }]&nbsp;
                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="13" maxlength="[{$edit->oxarticles__oxac_extproducturllabel->fldmax_length}]" name="editval[oxarticles__oxac_extproducturllabel]" value="[{$edit->oxarticles__oxac_extproducturllabel->value}]">
                        [{ oxinputhelp ident="OXAC_EXTPRODUCTURL_HELP_LABEL" }]
                      </td>
                    </tr>
                    <tr>
                      <td class="edittext">
                        [{ oxmultilang ident="OXAC_EXTPRODUCTURL_URL" }]&nbsp;
                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="13" maxlength="[{$edit->oxarticles__oxac_extproducturl->fldmax_length}]" name="editval[oxarticles__oxac_extproducturl]" value="[{$edit->oxarticles__oxac_extproducturl->value}]">
                        [{ oxinputhelp ident="OXAC_EXTPRODUCTURL_HELP_URL" }]
                      </td>
                    </tr>