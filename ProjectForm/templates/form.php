<form class="row g-3" action="index.php" method="POST">
      <div class="col-md-6">
        <label for="last_name" class="form-label">Nom</label>
        <input type="text" 
               class="form-control" 
               name="last_name" 
               value="<?= isset($_POST['last_name']) ? $_POST['last_name'] : '' ?>"
               placeholder="Saisir votre nom"
               id="last_name" 
               required>
      </div>
      <div class="col-md-6">
        <label for="first_name" class="form-label">Prénom</label>
        <input type="text" 
              class="form-control" 
              name="first_name"
              value="<?= isset($_POST['first_name']) ? $_POST['first_name'] : '' ?>" 
              placeholder="Saisir votre prénom"
              id="first_name" 
              required>
      </div>
      <div class="col-md-6">
        <label for="tel_number" class="form-label">Numéro de téléphone</label>
        <input type="tel" 
               class="form-control" 
               name="tel_number"
               value="<?= isset($_POST['tel_number']) ? $_POST['tel_number'] : '' ?>"
               placeholder="Saisir votre numéro de téléphone"
               id="tel_number" 
               pattern="0[0-7]{1}[0-9]{8}"
               required>
      </div>
      <div class="col-md-6">
        <label for="start" class="form-label">Date de l'achat</label>
        <input type="date" 
               class="form-control"
               id="start" 
               name="date_achat"
               value="<?= date("Y-m-d") ?>"
               min="" 
               max="2021-05-28" >
      </div>  
      <div class="col-md-6">
        <p>L'agent a-t-il été agréable ?</p>
        <input class="form-check-input" 
               type="radio" 
               value="2" 
               name="question1"
               id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Oui
        </label>
        <input class="form-check-input" 
               type="radio" 
               value="0" 
               name="question1" 
               id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
          Non
        </label>
        <input class="form-check-input" 
               type="radio" 
               value="1" 
               name="question1" 
               id="flexRadioDefault3" 
               checked>
        <label class="form-check-label" for="flexRadioDefault3">
          Sans avis
        </label>
      </div>  
      <div class="col-md-6">
        <p>L'agent a-t-il compris votre problème ?</p>
        <input class="form-check-input" 
               type="radio" 
               value="2" 
               name="question2" 
               id="flexRadioDefault4">
        <label class="form-check-label" for="flexRadioDefault4">
          Oui
        </label>
        <input class="form-check-input" 
               type="radio" 
               value="0" 
               name="question2" 
               id="flexRadioDefault5">
        <label class="form-check-label" for="flexRadioDefault5">
          Non
        </label>
        <input class="form-check-input" 
               type="radio" 
               value="1" 
               name="question2" 
               id="flexRadioDefault6" 
               checked>
        <label class="form-check-label" for="flexRadioDefault6">
          Sans avis
        </label>
      </div>  
      <div class="col-md-6">
        <p>L'agent a-t-il résolu votre problème ?</p>
        <input class="form-check-input" 
               type="radio" 
               value="1" 
               name="question3" 
               id="flexRadioDefault7" 
               required>
        <label class="form-check-label" for="flexRadioDefault7">
          Oui
        </label>
        <input class="form-check-input" 
               type="radio" 
               value="-1" 
               name="question3" 
               id="flexRadioDefault8" 
               required>
        <label class="form-check-label" for="flexRadioDefault8">
          Non
        </label>
      </div>
      <div class="col-md-12">
        <label for="story">Dites-nous en plus :</label>
        <textarea class="form-control" 
                  placeholder="Laisser un commentaire" 
                  id="story" 
                  name="more_story"
                  rows="5" 
                  cols="33">
        </textarea>
      </div>
      <div class="col-md-12">
        <input class="form-check-input" 
               type="checkbox" 
               name="call_now"
               value="yes" 
               id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">Acceptez vous d'être rappelé</label>
      </div>
      <div class="col-12 d-flex justify-content-end">
        <input type="submit" class="btn btn-primary" value="Envoyer"/>
      </div>
    </form>