      <form action="?done=yes" method="post" name="csooz" id="csooz">
      <input type="hidden" name="count" id="count" value="<?php echo $qs; ?>" />
      <table border="1" cellspacing="0" id="questions">
      <tr>
          <td colspan="4" align="center">Answer Sheet for Chapter Questions</td>
      </tr>
          <tr>
              <td colspan="4" align="center">Chapter # <input type="text" size="10" name="chapter_nb" value="<?php echo prefill('chapter_nb'); ?>" style="text-decoration: underline;" /></td>
          </tr>
          <tr>
              <td colspan="4" align="center">Name <input type="text" size="50" name="fl_name" style="text-decoration: underline;" value="<?php echo prefill('fl_name'); ?>"/></td>
          </tr>
          <tr align="center">
              <td>Q #</td>
              <td>Multiple</td>
              <td>Matching</td>
              <td>Short answer</td>
          </tr>
          <?php
            for ($i=1; $i<=$qs; $i++) {
          ?>
          <tr valign="top">
              <td><?php echo $i; if ($i == $qs) { ?><a name="question<?php echo $i; ?>"></a><?php } ?></td>
              <td><textarea <?php if ($i == $qs) {?>onfocus="document.getElementById('addRow').style.display='inline';" onblur="if (this.value == ''){document.getElementById('addRow').style.display='none';}"<?php } ?> name="multi_<?php echo $i; ?>" id="multi_<?php echo $i; ?>" rows="1" cols="10"><?php echo prefill('multi_'.$i); ?></textarea></td>
              <td><textarea <?php if ($i == $qs) {?>onfocus="document.getElementById('addRow').style.display='inline';" onblur="if (this.value == ''){document.getElementById('addRow').style.display='none';}"<?php } ?> name="match_<?php echo $i; ?>" id="match_<?php echo $i; ?>" rows="1" cols="10"><?php echo prefill('match_'.$i); ?></textarea></td>
              <td align="left"><textarea <?php if ($i == $qs) {?>onfocus="document.getElementById('addRow').style.display='inline';" onblur="if (this.value == ''){document.getElementById('addRow').style.display='none';}"<?php } ?> id="sa_<?php echo $i; ?>" name="sa_<?php echo $i; ?>" cols="100" rows="1"><?php echo prefill('sa_'.$i); ?></textarea></td>
          </tr>
          <?php
            }
          ?>
          <tr><td colspan="4">It is not necessary to fill in all of the questions and all of the columns, use what you need to complete assignment</td></tr>
      </table>
          <input type="submit" value="Sumbit" id="result" name="result" />
          <input type="submit" id="addRow" name="addRow" style="display:none" value="Add a new row" />
      </form>
 