

@extends('templates.app')

@section('document')

<div class="row">
    <h3 style="text-align:center"> <u>Formulaire de signalement</u> </h3>
    </div>
        <div style="border: 1px solid black; padding: 20px; margin: auto; width: 50%; margin-top: 10px;" >
          
            <form action="#" method="POST" style="text-align: center;">
             
              <label for="name">Nom et Prénom:</label><br>
              <input type="text" id="name" name="name" required minlength="2" maxlength="50" style="width: 80%;"><br><br>
                
              <label for="email">Adresse mail:</label><br>
              <input type="email" id="email" name="email" required maxlength="100" style="width: 80%;"><br><br>
                
             
              <label for="phone">Numéro de téléphone :</label><br>
              <input type="tel" id="phone" name="phone" required minlength="8" maxlength="15" style="width: 80%;"><br><br>
                 
              <label for="message">Motif du signalement:</label><br>
              <textarea id="message" name="message" required minlength="10" maxlength="500" style="width: 80%;"></textarea><br><br>
                
             <input type="submit"  class="btn btn-block btn-primary btn-md">
            </form>
          </div>
          <div style="height:60px"> </div>
          @endsection