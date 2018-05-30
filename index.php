<!DOCTYPE html>
<html>
  <head>
    <title>Kalkulation</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>

    <script src="//code.jquery.com/jquery-2.1.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  </head>

  <body>
    <?php
      /*session_start();

      @$session = $_SESSION['session'];
      @$bezeichnung = $_POST['bezeichnung'];
      @$zeichnnr = $_POST['zeichnnr'];
      @$zeichnnr = $_POST['losgroesse'];
      @$datum = $_POST['datum'];
      @$visum = $_POST['visum'];

      $servername = "localhost";
      $username = "root";
      $password = "toor";
      $dbname = "kalkulation";


      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      else {

      }*/
    ?>
    <div class="container row">
      <nav class="nav-wrapper grey darken-2">
        <a href="#" class="brand-logo grey darken-2">Kalkulation</a>
      </nav>

      <div id="app">

      <table class="centered">
        <thead>
          <tr>
              <th>Beschreibung</th>
              <th>Zeichn. Nr.</th>
              <th>Losgroesse</th>
              <th>Datum</th>
              <th>Visum</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" name="beschreibung" class="input-field" /></td>
            <td><input type="text" name="zeichnnr" class="input-field" /></td>
            <td><input type="text" name="losgroesse" class="input-field" /></td>
            <td><input type="text" name="datum" class="input-field" /></td>
            <td>
              <select>
                  <option disable selected value></option>
                  <option>Scheidegger</option>
                  <option>Schlatter</option>
                  <option>Gutzwiller</option>
                  <option>Jäggi</option>
                  <option>Hofstetter</option>
                  <option>Blaser</option>
                  <option>Nink</option>
                  <option>Kyburz</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
      <p>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
      </p>


      <h4>Fertigung</h2>

      <table class="centered">
        <thead>
          <tr>
              <th>OP. Nr.</th>
              <th>Kostenstelle</th>
              <th>Operation</th>
              <th>Std ta</th>
              <th>Std tr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" name="opnr" class="input-field" /></td>
            <td><input type="text" name="kostenstelle" class="input-field" /></td>
            <td><input type="text" name="operation" class="input-field" /></td>
            <td><input type="text" name="std ta" class="input-field" /></td>
            <td><input type="text" name="std tr" class="input-field" /></td>
          </tr>
        </tbody>
      </table>

      <table class="centered">
        <thead>
          <tr>
              <th>Material / Bezeichnung</th>
              <th>Bestellen bei</th>
              <th>Menge</th>
              <th>Einheit</th>
              <th>Kosten / Einheit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <select>
                  <option disable selected value></option>
                  <optgroup label="Rund / Stahl">
                  <option>Automatenstahl blank, rund 9SMn28/36k, h9</option>
                  <option>Automatenstahl blank, rund 11SMnPb30+C, 1.0718</option>
                  <option>Automatenstahl blank, rund 11SMnPb37, 1.0737</option>
                  <option>Rundstahl blank, St.37-2K, 1.0037, h9</option>
                  <option>Rundstahl blank St52-3k</option>
                  <option>Rundstahl blank, St.60-2K, 1.0543, h9</option>
                  <option>Vergütungsstahl blank, C45Pb+C, 1.054, h9</option>
                  <option>Vergütungsstahl blank, C45E+C+SL, 1.1191, h6</option>
                  <option>Vergütungsstahl blank, C35Pb+C, 1.0502, h9</option>
              </select>
            </td>
            <td>
              <select>
                  <option disable selected value></option>
                  <option>Kiener & W</option>
                  <option>Schmolz & B</option>
                  <option>Angst & P</option>
                  <option>Liechti AG</option>
                  <option>Schlierholz</option>
                  <option>Aloxyd</option>
              </select>
            </td>
            <td><input type="text" name="menge" class="input-field" /></td>
            <td>
              <select>
                  <option disable selected value></option>
                  <option>stk</option>
                  <option>kg</option>
                  <option>los</option>
                  <option>m</option>
              </select>
            </td>
            <td><input type="text" name="kosten_einheit" class="input-field" /></td>
          </tr>
        </tbody>
      </table>

      <table class="centered">
        <thead>
          <tr>
              <th>Oberfläche / Art</th>
              <th>Lieferant</th>
              <th>Menge</th>
              <th>Einheit</th>
              <th>Kosten / Einheit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <select>
                  <option disable selected value></option>
                  <option>vernickeln</option>
                  <option>trowalisieren</option>
                  <option>verchromen</option>
                  <option>waschen</option>
                  <option>eloxieren</option>
                  <option>sandstrahlen</option>
                  <option>vergüten</option>
                  <option>pulverbeschichten</option>
              </select>
            </td>
            <td>
                <select>
                    <option disable selected value></option>
                    <option>Kiener & W</option>
                    <option>Schmolz & B</option>
                    <option>Angst & P</option>
                    <option>Liechti AG</option>
                    <option>Schlierholz</option>
                    <option>Aloxyd</option>
                </select>
              </td>
            <td><input type="text" name="menge" class="input-field" /></td>
            <td>
             <select>
                 <option disable selected value></option>
                 <option>stk</option>
                 <option>kg</option>
                 <option>los</option>
                 <option>m</option>
              </select>
            </td>
            <td><input type="text" name="kosten_einheit" class="input-field" /></td>
          </tr>
        </tbody>
      </table>

      <table class="centered">
        <thead>
          <tr>
              <th>Werkzeuge / Vorrichtung</th>
              <th>Kosten / Gesamt</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <select>
                  <option disable selected value></option>
                  <option>Allgemeine Werkzeugkosten</option>
                  <option>Wendeplatten</option>
                  <option>VHM-Bohrer</option>
                  <option>VHM-Fräser</option>
                  <option>HSS-Bohrer</option>
                  <option>HSS-Fräser</option>
              </select>
            </td>
            <td><input type="text" name="kosten_gesamt" class="input-field" /></td>
          </tr>
        </tbody>
      </table>

      <p>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
      </p>

      </div>
    </div>
    <script>
         $(document).ready(function() {
            $('select').material_select();
         });
    </script>
  </body>
</html>
