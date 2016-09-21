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
            <p class="label">&nbsp;</p>
            <input type="button" value="Volgende" class="openNext">
         </div>
      </div>
   </div>
   <div class="popup-section">
      <div class="popup-section-head">
         <img src="elements/components/img/indicator-image-right.png" alt="" />
         <h2>Verenigingsgerelateerd</h2>
      </div>
      <div class="popup-section-content">
         <input type="text" value="">
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
<script src="elements/components/popups.js"></script>
