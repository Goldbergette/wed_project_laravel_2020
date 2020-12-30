
<div>
  <h4>Votre commentaire</h4>
  <form id="form_comments" class="card-panel">
    @csrf
      <div class="input-field"><label for="pseudo">Votre pseudo</label>
           <input type="text" id="pseudo" name="pseudo" class="validate" required="required" />

      </div>
      <div class="input-field">
          <label for="commentaire">Votre commentaire</label>
           <textarea id="commentaire" name="texte" class="materialize-textarea validate" required="required"></textarea>

      </div>
      <div><button id="button" class="btn waves-effect waves-light" type="submit">Envoyer

           </button>
      </div>
  </form>
</div>
