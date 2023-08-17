@can('user')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Boas vindas Repy</title>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  .header {
    background-color: #333;
    color: #fff;
    padding: 10px;
  }
  .welcome-container {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    margin: 20px auto;
    max-width: 800px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }
  h1 {
    color: #333;
  }
  .movie-images {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
  }
  .movie-image {
    max-width: 100px;
    margin: 0 10px;
  }
</style>
</head>
<body>
  <div class="header">
    <h1>Boas-Vindas ao Nosso Cinema!</h1>
    <p>Explore os melhores filmes em nossa coleção.</p>
  </div>
  <div class="welcome-container">
    <h1>Bem-Vindo Repy!!!</h1>
    <div class="movie-images">
      <img class="movie-image" src="link_para_imagem_do_filme1.jpg" alt="Filme 1">
      <img class="movie-image" src="link_para_imagem_do_filme2.jpg" alt="Filme 2">
      <img class="movie-image" src="link_para_imagem_do_filme3.jpg" alt="Filme 3">
    </div>
  </div>
</body>
</html>

@elsecan('admin')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Boas-Vindas ao Nosso Cinema</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
  .welcome-container {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    margin: 20px auto;
    max-width: 800px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }
  h1, h2 {
    color: #333;
  }
  p {
    color: #666;
  }
  .movie-images {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
  }
  .movie-image-container {
    position: relative;
    width: 300px;
    height: 200px;
    margin: 10px;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    transition: transform 0.3s;
  }
  .movie-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
  }
  .movie-description {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.7);
    color: #fff;
    font-size: 14px;
    opacity: 0;
    transform: translateY(100%);
    transition: opacity 0.3s, transform 0.3s;
  }
  .movie-image-container:hover .movie-description {
    opacity: 1;
    transform: translateY(0);
  }
  .movie-image-container:hover {
    z-index: 1;
    transform: scale(1.05);
  }
  .movie-image-container:not(:hover) {
    z-index: 0;
  }
  .edit-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #666;
    font-size: 16px;
    opacity: 0;
    transition: opacity 0.3s;
  }
  .movie-image-container:hover .edit-icon {
    opacity: 1;
  }
  .add-movie {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 300px;
    height: 200px;
    border: 2px dashed #ddd;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  .add-icon {
    font-size: 40px;
    color: #ddd;
    transition: transform 0.3s;
  }
  .add-movie:hover {
    background-color: #f7f7f7;
  }
  .add-movie:hover .add-icon {
    transform: scale(1.1);
  }
  .exit-button {
    display: block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #ff5555;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  .exit-button:hover {
    background-color: #ff3333;
  }
</style>
</head>
<body>
  <div class="header">
    <h1>Boas-Vindas ao Nosso Cinema!</h1>
    <p>Explore os melhores filmes em nossa coleção.</p>
  </div>
  <div class="welcome-container">
    <h2>Bem-Vindo!</h2>
    <p>Seja muito bem-vindo à nossa página. Esperamos que você tenha uma ótima experiência por aqui.</p>
    <p>Fique à vontade para explorar nosso conteúdo e aproveitar ao máximo.</p>
    <div class="movie-images">
      <div class="movie-image-container">
        <img class="movie-image" src="https://br.web.img3.acsta.net/medias/nmedia/18/87/28/03/19873867.jpg" alt="Filme 1">
        <div class="movie-description">Descrição do Filme 1</div>
        <a href="{{ url('register-movie') }}"><span class="edit-icon"><i class="fas fa-pencil-alt"></i></span></a>
      </div>
      <div class="movie-image-container">
        <img class="movie-image" src="https://images.tcdn.com.br/img/img_prod/1059640/noticia_650183010647cd0035c277.jpg" alt="Filme 2">
        <div class="movie-description">Descrição do Filme 2</div>
        <a href="{{ url('register-movie')}}"><span class="edit-icon"><i class="fas fa-pencil-alt"></i></span></a>
      </div>
      <div class="movie-image-container">
        <img class="movie-image" src="https://www.arte-factos.net/wp-content/uploads/2012/01/drive.jpg" alt="Filme 3">
        <div class="movie-description">Descrição do Filme 3</div>
        <a href="{{ url('register-movie') }}"><span class="edit-icon"><i class="fas fa-pencil-alt"></i></span></a>
      </div>
      <div class="add-movie">
   <a href="{{ url('register-movie') }}"> <span class="add-icon"><i class="fas fa-plus-circle" ></i></span></a>
      </div>
    </div>
    <button class="exit-button" onclick="'">Sair da Página</button>
  </div>
</body>
</html>

@endcan
