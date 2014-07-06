      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" language="javascript"></script>
      <script type="text/javascript" src="scripts/jquery.scrollTo-1.4.2-min.js" language="javascript"></script>
      <script type="text/javascript" src="scripts/autoresize.jquery.min.js" language="javascript"></script>
      <script type="text/javascript" language="javascript">
          <?php
            for ($i=1;$i<=$qs;$i++) {
          ?>
          $("#sa_<?php echo $i; ?>").autoResize();
          $("#multi_<?php echo $i; ?>").autoResize();
          $("#match_<?php echo $i; ?>").autoResize();
          <?php }?>
          <?php if (isset($addRow)) { ?>
			$.scrollTo("100%",400);
          <?php } ?>
                </script>