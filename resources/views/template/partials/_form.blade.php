{{--
./resources/views/template/partials/_form.blade.php
--}}

</br>
<div>
  <h4>Votre commentaire</h4>
  <form id="form_comments" class="row g-3" data-route="{{ route('api.commentaires.store')}}">
    @csrf
      <div class="col-md-6"><label for="pseudo" class="form-label">Votre pseudo</label>
           <input type="text" id="pseudo" name="pseudo" class="form-control" required="required" />

      </div>
      <div class="col-12">
          <label for="commentaire" class="form-label">Votre commentaire</label>
           <textarea id="commentaire" name="texte" class="form-control" required="required"></textarea>

      </div>
      <div class="col-12"><button id="button" class="btn waves-effect waves-light" type="submit">Envoyer

           </button>
      </div>
  </form>
</div>
