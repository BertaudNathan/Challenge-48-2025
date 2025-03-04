<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire Activité</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .form-control:focus {
      border-color: red ;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      transition: box-shadow 0.3s ease;
    }
    .btn-primary {
      background-color: red;
      border: none;
      transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
      background-color: red ;
    }
   
    #dangerLevel {
      -webkit-appearance: none;
      width: 100%;
      height: 12px;
      background: white;
      border-radius: 5px;
      outline: none;
      transition: background 0.3s ease;
    }
    #dangerLevel::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 20px;
      height: 20px;
      background: red;
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      transition: background 0.3s ease;
    }
    #dangerLevel::-moz-range-thumb {
      width: 20px;
      height: 20px;
      background: red;
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      transition: background 0.3s ease;
    }
    #dangerValue {
      font-weight: bold;
      color: #ff5722;
    }
    small {
      font-size: 0.9rem;
      color: #6c757d;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="text-center mb-4">Formulaire Activité</h2>
    <form action="/activite" method="POST">

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-card-text"></i></span>
        <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom de l'activité">
      </div>


      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
        <input type="text" name="description" class="form-control" id="description" placeholder="Description de l'activité">
      </div>


      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
        <select name="zone" class="form-select" id="role">
          <option selected>Choisir une zone</option>
          <option value="1">Zone 1</option>
          <option value="2">Zone 2</option>
          <option value="3">Zone 3</option>
          <option value="4">Zone 4</option>
          <option value="5">Zone 5</option>
        </select>
      </div>

      <div class="mb-4">
        <label for="dangerLevel"  name="danger" class="form-label"><i class="bi bi-exclamation-circle"></i> Niveau de danger</label>
        <input 
          type="range" 
          class="form-range" 
          id="dangerLevel" 
          name="dangerLevel" 
          min="1" 
          max="10" 
          step="1" 
          oninput="document.getElementById('dangerValue').innerText = this.value;">
        <div class="text-center mt-2">
          <small>Niveau sélectionné : <span id="dangerValue">5</span></small>
        </div>
      </div>

      <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
