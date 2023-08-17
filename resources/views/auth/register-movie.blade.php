<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Adicionar Filme</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }
  .header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
  }
  .form-container {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    margin: 20px auto;
    max-width: 400px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  input[type="text"], textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 15px;
  }
  button {
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
  }
  button:hover {
    background-color: #555;
  }
</style>
</head>
<body>
  <div class="header">
    <h1>Adicionar Novo Filme</h1>
  </div>
  <div class="form-container">
    <form action="process_form.php" method="post">
      <label for="movieName">Nome do Filme:</label>
      <input type="text" id="movieName" name="movieName" required>
      
      <label for="movieImage">URL da Imagem:</label>
      <input type="text" id="movieImage" name="movieImage" required>
      
      <label for="movieDescription">Descrição do Filme:</label>
      <textarea id="movieDescription" name="movieDescription" rows="4" required></textarea>
      
      <button type="submit">Adicionar Filme</button>
    </form>
  </div>
</body>
</html>
