<!DOCTYPE html>
<html>
<head>
  <title>Site Informativo</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

  <header>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#servicos">Serviços</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h1>Bem-Vindo ao Nosso Site!</h1>
      <p>Um lugar para aprender e descobrir.</p>
    </section>

    <section id="sobre">
      <h2>Sobre Nós</h2>
      <p>Algumas informações sobre a empresa ou projeto.</p>
    </section>

    <section id="servicos">
      <h2>Nossos Serviços</h2>
      <ul>
        <li>Serviço 1</li>
        <li>Serviço 2</li>
        <li>Serviço 3</li>
      </ul>
    </section>

    <section id="contato">
      <h2>Entre em Contato</h2>
      <form>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>
        <input type="submit" value="Enviar">
      </form>
    </section>
  </main>

  <script src="script.js"></script>

</body>
</html>
