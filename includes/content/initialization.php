<?php
	if (isset($_POST['result'])) {
            $result = $_POST['result'];
        }
        if (isset($_POST['addRow'])) {
            $addRow = $_POST['addRow'];
        }
        if (isset($_POST['count'])) {
            $count = $_POST['count'];
        }
        if (isset($_REQUEST['done'])) {
            $done = $_REQUEST['done'];
        }
        if (isset($_POST['edit'])) {
            $edit = $_POST['edit'];
        }
?>

<?php
	if (isset($addRow)) {
		$count++;
		$qs = $count;
	}
	elseif (isset($result)) {
		$qs = $count;
	}
	else {
	$qs = 20;
	}
?>

      <?php
      	if (isset ($done)) {
      		if ($done == 'yes' || $done == 'y') {
      			if (isset($result))
      			require_once 'includes/content/answers.php';
      			elseif (isset($addRow)) {
      			require_once 'includes/content/questions.php';
      			}
      			else {
      				require_once 'includes/content/error.php';
      				require_once 'includes/content/questions.php';
      			}
      		}
      		elseif ($done == 'edit' || $done =='e') {
      			if (isset($edit)) {
      			require_once 'includes/content/questions.php';
      			}
      			else {
      				require_once 'includes/content/error.php';
      			require_once 'includes/content/questions.php';
      			}
      		}
      		else {
      			require_once 'includes/content/error.php';
      			require_once 'includes/content/questions.php';
      		}
      	}
      	else {
      		require_once 'includes/content/questions.php';
      	}
?>