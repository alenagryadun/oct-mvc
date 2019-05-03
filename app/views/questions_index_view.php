<link href="../css/main.css" rel="stylesheet" type="text/css"/>
<h2>Questions</h2>
<table id="questions" class="w3-table-all">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Question</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<br>
<div class="w3-container w3-flat-turquoise">
  <h3>Your question</h3>
</div>
<form class="w3-container w3-card">
  <p>
      <label>Your name</label>
      <input class="w3-input" type="text" name="author" required/></p>
  <p>
  <label>Your question</label>
  <textarea name="text" required class="w3-input"></textarea></p>
  <p>
      <input type="submit" value="send" class="w3-button w3-flat-turquoise"/></p>
</form>
<script src='js/questions.js'></script>

