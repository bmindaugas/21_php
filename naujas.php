<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<h2>Antraštė</h2>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">      
        
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>          
  </form>
  <?php auto_copyright("2018");?>
  <?php echo . date("Y.m.d") . ;?> 

</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
</script>

</body>
</html>