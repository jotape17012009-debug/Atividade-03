<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Padaria Aroma & Afeto</title>
    <meta name="description" content="Pães artesanais, café coado e doces frescos em um ambiente acolhedor.">
    <style>
      :root {
        --dourado: #F6C453;  /* apetite, calor */
        --laranja: #F7A072;  /* energia, artesanal */
        --marrom:  #7B4B3A;  /* tradição, confiabilidade */
        --salvia:  #8FB996;  /* frescor */
        --creme:   #FFF7EC;  /* fundo claro e quente */
        --preto:   #1b1b1b;  /* alto contraste no texto */
      }
      * { box-sizing: border-box; }
      body { margin: 0; background: var(--creme); color: var(--preto); font-family: system-ui, Arial, sans-serif; line-height: 1.6; }
      header { background: var(--dourado); padding: 24px 16px; }
      header .wrap, main .wrap, footer .wrap { max-width: 960px; margin: 0 auto; }
      nav a { margin-right: 16px; text-decoration: none; color: #222; font-weight: 600; }
      nav a:hover { color: var(--marrom); }
      .hero { padding: 40px 16px; text-align: center; }
      .cta { background: var(--laranja); padding: 12px 18px; border-radius: 999px; color: #fff; display: inline-block; font-weight: 700; }
      .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; }
      .card { background: #fff; border: 1px solid #eee; padding: 16px; border-radius: 16px }
      img { max-width: 100%; height: auto; border-radius: 12px; }
      footer { background: #f2efe9; padding: 24px 16px; color: #333; }
      form { display: grid; gap: 12px; max-width: 420px; }
      label { font-weight: 600; }
      input, button { padding: 10px 12px; border: 1px solid #ccc; border-radius: 10px; font: inherit; }
      button { background: var(--marrom); color: #fff; border: none; cursor: pointer; }
      button:hover { background: #5f3a2d; }
    </style>
  </head>
  <body>
    <header>
      <div class="wrap">
        <h1 id="titulo">Padaria Aroma & Afeto</h1>
        <p>Desde 1998 trazendo pães quentinhos e café passado na hora</p>
        <nav aria-label="Principal">
          <a href="#menu">Menu</a>
          <a href="#sobre">Sobre</a>
          <a id="cta" class="cta" href="#encomendas">Encomendas</a>
        </nav>
      </div>
    </header>

    <main id="conteudo" tabindex="-1">
      <section class="hero" id="menu" aria-labelledby="titulo-menu">
        <h2 id="titulo-menu">Menu</h2>
        <p>Promo do dia: Pão francês saindo do forno às <time datetime="2025-09-02T16:00-03:00">16h</time>!</p>

        <div class="grid">
          <article class="card">
            <img src="pao-frances.jpg" alt="Cesta com pães franceses dourados">
            <h3>Pão francês</h3>
            <p>Crosta dourada, miolo leve — sai do forno ao longo do dia.</p>
          </article>
          <article class="card">
            <img src="croissant.jpg" alt="Croissant de manteiga com camadas folhadas">
            <h3>Croissant de manteiga</h3>
            <p>Massa folhada artesanal, manteiga de qualidade.</p>
          </article>
          <article class="card">
            <img src="cafe-coado.jpg" alt="Xícara de café coado ao lado de grãos">
            <h3>Café coado</h3>
            <p>Grãos selecionados, torra média. Peça com pão na chapa.</p>
          </article>
        </div>

        <p>
          <a class="cta" href="#encomendas" aria-describedby="ajuda-encomenda">Quero encomendar</a>
        </p>
        <p id="ajuda-encomenda" hidden>Use o formulário abaixo para solicitar sua encomenda.</p>
      </section>

      <section id="sobre" aria-labelledby="titulo-sobre">
        <h2 id="titulo-sobre">Sobre nós</h2>
        <p>Combinamos tradição e ingredientes naturais para oferecer sabor e frescor todos os dias.</p>
        <p><strong>Horário:</strong> Seg–Sáb, 6h–19h.</p>
      </section>

      <section id="encomendas" aria-labelledby="titulo-encomendas">
        <h2 id="titulo-encomendas">Encomendas</h2>
        <form action="#" method="post">
          <label for="nome">Seu nome</label>
          <input type="text" id="nome" name="nome" autocomplete="name" required>

          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" autocomplete="email" required>

          <button type="submit">Enviar</button>
        </form>
      </section>
    </main>

    <footer>
      <div class="wrap">
        <p>© 2025 Aroma &amp; Afeto — feito com carinho e pão.</p>
        <small>Endereço: Rua do Trigo, 123 — Centro</small>
      </div>
    </footer>
  </body>
</html>

