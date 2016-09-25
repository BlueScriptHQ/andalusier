<!-- standard overlay -->
<div id="page-overlay"></div>

<div id="infoPopup">
   <div class="popup-head">
      <h2>Klant toevoegen</h2>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Algemene gegevens</h2>
      </div>
      <div class="popup-section-content">
         <div class="row">
            <p class="label">Aanhef</p>
            <select class="title" id="add-title" required="true" name="">
              <option value="dhr">De heer</option>
              <option value="mevr">Mevrouw</option>
            </select>
         </div>
         <div class="row">
            <p class="label">Voornaam</p>
            <input type="text">
         </div>
         <div class="row">
            <p class="label">Tussenvoegsel</p>
            <input type="text" optional="true">
         </div>
         <div class="row">
            <p class="label">Achternaam</p>
            <input type="text">
         </div>
         <div class="row">
            <p class="label">Geboortedatum</p>
            <input type="text" value="DATEPICKER HIER ;')">
         </div>
         <div class="row">
            <p class="label">&nbsp;</p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Contactgegevens</h2>
      </div>
      <div class="popup-section-content">
        <div class="row">
           <p class="label">Straatnaam + Nummer</p>
           <input type="text" name="accounts_street">
           <input type="text" name="accounts_street_nr">
        </div>
        <div class="row">
          <p class="label">Woonplaats + Postcode</p>
          <input type="text" name="accounts_place">
          <input type="text" name="accounts_zip">
        </div>
        <div class="row">
          <p class="label">Telefoon(s)</p>
          <input type="text" name="accounts_phone">
          <input type="text" name="accounts_phone">
        </div>
        <div class="row">
          <p class="label">Woonplaats + Postcode</p>
          <input type="text" name="accounts_place">
          <input type="text" name="accounts_zip">
        </div>
        <div class="row">
          <p class="label">Woonplaats + Postcode</p>
          <input type="text" name="accounts_place">
          <input type="text" name="accounts_zip">
        </div>
        <div class="row">
          <p class="label">Land van herkomst</p>
          <select>
            <option value="nederland">Nederland</option>
            <option value="belgie">België</option>
          </select>
        </div>
         <div class="row">
            <p class="label">&nbsp;</p>
            <input type="button" value="Volgende stap" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Verenigingsgerelateerd</h2>
      </div>
      <div class="popup-section-content">
        <div class="row">
          <p class="label">Lid type</p>
          <select>
            <option value="1">Lid</option>
            <option value="2">Jeugdlid</option>
            <option value="3">Gezinslid</option>
            <option value="4">Lid Buitenland</option>
          </select>
        </div>
        <div class="row">
          <p class="label">Nieuwsbrief</p>
          <div class="cop_check_wrapper">
            <div class="cop_container cop_con_check">
              <div class="cop_inner cop_in_check"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <p class="label">Stalnaam</p>
          <input type="text">
        </div>
        <div class="row">
          <p class="label">Bankrekening</p>
          <input type="text">
        </div>
        <div class="row">
          <p class="label">Ontvangen via</p>
          <div class="op_option_wrapper">
            <div class="cop_container op_con_option">
              <div class="cop_inner op_in_option"></div>
            </div>
            <p class="tag">E-mail</p>
          </div>

          <div class="op_option_wrapper">
            <div class="cop_container op_con_option">
              <div class="cop_inner op_in_option"></div>
            </div>
            <p class="tag">Post</p>
          </div>
        </div>
        <div class="row">
           <p class="label">&nbsp;</p>
           <input type="button" value="Volgende stap" class="openNext">
        </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Aanmaken</h2>
      </div>
      <div class="popup-section-content">
         <input type="text" value="">
      </div>
   </div>
</div>


<!-- requirements -->
<link rel="stylesheet" href="elements/components/css/popups.css" media="screen">
<link rel="stylesheet" href="elements/components/css/check_radio.css" media="screen">
<script src="elements/components/popups.js"></script>
<script src="elements/components/check_radio.js" charset="utf-8"></script>
