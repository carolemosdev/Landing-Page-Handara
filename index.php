<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <?php wp_head(); ?> 

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17743878872"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-17743878872');
    </script>
    </head>
<body <?php body_class(); ?>>

<header class="header">
    <div class="container navbar">
        <a href="<?php echo home_url(); ?>" class="logo">HANDARA</a>
        <nav class="nav-menu">
            <a href="#vantagens">Vantagens</a>
            <a href="#produtos">Coleções</a>
            <a href="#quem-somos">Para Você</a>
            <a href="#depoimentos">Depoimentos</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero-novo-design">
        <div class="container hero-container-grid">
            <div class="hero-content-novo">
                <span class="tagline-principal" style="color:#c95d3c; font-weight:bold; letter-spacing:2px;">SEJA UMA REVENDEDORA</span>
                
                <h1 class="titulo-principal-hero">Comece a revender Handara e transforme seu faturamento ainda este mês.</h1>
                
                <p class="descricao-hero">
                    Jeans de alta qualidade, marca consolidada e satisfação garantida.
                    Revenda uma marca que já tem demanda pronta. Seu único trabalho é mostrar as peças.
                </p>
                
                <a href="https://wa.me/5585991066150?text=Ol%C3%A1%2C%20vi%20o%20site%20e%20quero%20ser%20revendedora!" 
   target="_blank" 
   class="btn-novo" 
   style="background: #fff; color: #333; padding: 20px 50px; font-size: 1.1rem;">
   QUERO MINHA VAGA AGORA
</a>
            </div>
            <div class="hero-imagem-fundo">
                <img src="<?php echo get_template_directory_uri(); ?>/imagens/_Z3A0728.jpg" 
                     alt="Modelo Handara Jeans" 
                     fetchpriority="high" 
                     decoding="sync">
            </div>
        </div>
    </section>

    <section id="vantagens">
        <div class="container">
            <h2 class="section-title">Sua Vantagem Competitiva</h2>
            <div class="diferenciais-grid">
                <div class="card-diferencial">
                    <h3>Vendas Rápidas</h3>
                    <p>Cansou de produto que encalha? Tenha peças que vendem rápido e um catálogo sempre atualizado.</p>
                </div>
                <div class="card-diferencial">
                    <h3>Margem Real</h3>
                    <p>Preços que não espantam o cliente e garantem uma margem de lucro que faz diferença no fim do mês.</p>
                </div>
                <div class="card-diferencial">
                    <h3>Suporte Total</h3>
                    <p>Apoio, comunicação fácil e material de marketing pronto pra você divulgar e vender.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="produtos">
        <div class="container">
            <h2 class="section-title">O Produto que Fideliza</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/MAGIC SIZE FLARE (3).jpg" alt="Calça Flare" loading="lazy" decoding="async">
                    <h3>Calça Magic Size® Flare</h3>
                    <span style="color:#666; font-size:0.9rem;">Modelagem Perfeita</span>
                </div>
                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/MAGIC SIZE SKINNY GLAMUROSA (3).jpg" alt="Skinny Glamurosa" loading="lazy" decoding="async">
                    <h3>Skinny Glamurosa</h3>
                    <span style="color:#666; font-size:0.9rem;">Venda Garantida</span>
                </div>
                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/MAGIC SIZE WIDE LEG (6).jpg" alt="Jeans Wide Leg" loading="lazy" decoding="async">
                    <h3>Wide Leg Tendência</h3>
                    <span style="color:#666; font-size:0.9rem;">Alta Procura</span>
                </div>
            </div>
            <div class="text-center" style="margin-top: 30px;">
                <a href="https://wa.me/5585991066150" class="btn-novo">Ver Catálogo Completo</a>
            </div>
        </div>
    </section>

    <section id="depoimentos">
        <div class="container text-center">
            <h2 class="section-title">Quem revende, recomenda</h2>
            <p style="margin-bottom: 30px; font-size: 1.2rem;">Trabalhe com uma marca que o público já conhece e confia.</p>
            <div class="depoimentos-grid">
                <div class="depoimento-card">
                    <img src="https://atacado.handara.com.br/wp-content/uploads/2026/01/depoimento.jpeg" alt="Depoimento 1" loading="lazy" decoding="async">
                </div>
                <div class="depoimento-card">
                    <img src="https://atacado.handara.com.br/wp-content/uploads/2026/01/depoimento2.jpeg" alt="Depoimento 2" loading="lazy" decoding="async">
                </div>
                <div class="depoimento-card">
                    <img src="https://atacado.handara.com.br/wp-content/uploads/2026/01/depoimento3.jpeg" alt="Depoimento 3" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </section>

    <section id="quem-somos">
        <div class="container">
            <div class="fabrica-info">
                <div class="fabrica-imagem">
                    <img src="https://atacado.handara.com.br/wp-content/uploads/2026/01/HANDARA-1-scaled.webp" alt="Fábrica Handara" loading="lazy" decoding="async">
                </div>
                <div class="fabrica-texto">
                    <h3 style="font-size: 1.8rem; margin-bottom: 15px;">Autoridade de Mercado</h3>
                    <p style="margin-bottom: 15px;">A Handara não é uma marca "nova tentando aparecer". São décadas de mercado, coleções constantes e clientes fiéis.</p>
                    
                    <h4 style="color: var(--cor-destaque); font-family: var(--fonte-titulo); margin-top: 20px;">Para quem é a Handara?</h4>
                    <ul style="list-style: none; margin: 15px 0;">
                        <li style="margin-bottom: 8px;"><strong>✓</strong> Quer aumentar a renda sem investir alto</li>
                        <li style="margin-bottom: 8px;"><strong>✓</strong> Já revende moda e quer uma marca forte</li>
                        <li style="margin-bottom: 8px;"><strong>✓</strong> Cansou de produtos sem qualidade</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-final">
        <div class="container">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Pronta para revender e crescer?</h2>
            <p style="color: #ddd; margin-bottom: 40px; font-size: 1.1rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                As vagas para novas revendedoras são limitadas por região. Garanta a sua agora falando direto no WhatsApp.
            </p>
            <a href="https://wa.me/5585991066150" class="btn-novo" style="background: #fff; color: #333; padding: 20px 50px; font-size: 1.1rem;">QUERO MINHA VAGA AGORA</a>
        </div>
    </section>
</main>

<div id="popup-handara" class="popup-overlay">
    <div class="popup-content">
        <span class="fechar-popup" onclick="fecharPopup()">&times;</span>
        
        <h3 style="color: #c95d3c; font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 10px; line-height: 1.2;">
            Espere! Comece agora mesmo.
        </h3>
        
        <p style="font-size: 1.1rem; color: #555; margin-bottom: 5px;">
            Não quer perder tempo?
        </p>
        
        <p style="font-size: 1.1rem; color: #333; font-weight: bold; margin-bottom: 25px;">
            Entre em contato via Whatsapp.
        </p>
        
        <a href="https://wa.me/5585991066150" class="btn-novo" style="width: 100%; display: block; padding: 15px;">
            QUERO REVENDER HANDARA
        </a>
    </div>
</div>

<footer id="footer" class="footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Handara Jeans. Todos os direitos reservados.</p>
    </div>
</footer>

<?php wp_footer(); ?> 

<script>
    // Função para abrir o popup
    function abrirPopup() {
        if (!sessionStorage.getItem('popupFechado')) {
            document.getElementById('popup-handara').style.display = 'flex';
        }
    }

    // Função para fechar o popup
    function fecharPopup() {
        document.getElementById('popup-handara').style.display = 'none';
        sessionStorage.setItem('popupFechado', 'true');
    }

    setTimeout(abrirPopup, 6000);

    window.onclick = function(event) {
        var modal = document.getElementById('popup-handara');
        if (event.target == modal) {
            fecharPopup();
        }
    }
</script>

</body>
</html>
