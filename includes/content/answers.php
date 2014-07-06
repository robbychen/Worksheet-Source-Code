	  <?php
        	if (empty($_POST['multi_'.$qs]) && empty($_POST['match_'.$qs]) && empty($_POST['sa_'.$qs])) {
        		if ($qs > 20) {
        		$qs--;
        		}
        	}
      ?>
      <?php include "includes/content/buttons.php" ?>
<table id="finished" border="1" align="center" cellspacing="0">
      <tr>
          <td colspan="4" align="center">Answer Sheet for Chapter Questions</td>
      </tr>
          <tr>
              <td colspan="4" align="center">Chapter #<span style="text-decoration:underline;"><?php echo $_POST['chapter_nb']; ?></span></td>
          </tr>
          <tr>
              <td colspan="4" align="center">Name <span style="text-decoration: underline;"><?php echo $_POST['fl_name']; ?></span></td>
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
          <tr align="center" valign="middle">
              <td><?php echo $i; ?></td>
              <td><?php echo notempty('multi_'.$i); ?></td>
              <td><?php echo notempty('match_'.$i); ?></td>
             <td align="left"><?php echo notempty('sa_'.$i); ?></td>
          </tr>
          <?php
            }
          ?>
      </table>
      <?php include "includes/content/buttons.php" ?>
