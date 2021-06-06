<form id="question_form">
   <div class="form-group">
   <input type='hidden' name='action' value='' id='form_action'>
      <label for="keyword">Keyword</label>
      <input name="keyword" type="text" class="form-control" id="keyword" aria-describedby="emailHelp" placeholder="Enter Keyword" required>
      <small id="emailHelp" class="form-text text-muted">use only one word here</small>
   </div>
   <div class="form-group">
      <label for="answer">Answer</label>
      <textarea  name="answer" class="form-control" id="answer" placeholder="Automated response" required></textarea>
   </div>
   <button type="submit" class="btn btn-primary" id="submit_question">Submit</button>
</form>